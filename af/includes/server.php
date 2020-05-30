<?php


if(!isset( $_SESSION )){
	
	@session_start();
}


//get user id
if ( isset ( $_SESSION[ 'user_id' ] ) ){
	
    $user_id = $_SESSION[ 'user_id' ];
	
}


//get user info
if(isset( $user_id )){
    
    $sql ="SELECT * FROM af_users WHERE id = ? ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([ $user_id ]);
    $user = $stmt->fetch();
    

    $user_name =$user['name'] ;

    if(isset($user['avatar'])){
      $user_avatar = $root .  "/uploads/avatars/"  . $user['avatar'] ;
    }else{
      $user_avatar = 'https://img.icons8.com/ultraviolet/80/000000/user.png' ;
    }
    
}


//------ log in script -----------
$myerrors =[];
$loginErrors = [];

//if the register button is clicked
if(isset($_POST['signup'])){
    $yourname = filter_var ( $_POST['yourname'] , FILTER_SANITIZE_STRING ) ;
    $username = filter_var ( $_POST['username'] , FILTER_SANITIZE_STRING );
    $email = filter_var ( $_POST['email'] , FILTER_SANITIZE_STRING ) ;
    $phone = filter_var ( $_POST['phone'] , FILTER_SANITIZE_STRING );
    $password_1 = filter_var ( $_POST['password_1'] , FILTER_SANITIZE_STRING )  ;
    $password_2 = filter_var ( $_POST['password_2'] , FILTER_SANITIZE_STRING ) ;
    
    //profile image 
    $avatarName = filter_var ( $_FILES['avatar']['name']  , FILTER_SANITIZE_STRING ) ; 
    $avatarSize = $_FILES['avatar']['size'];
    $avatarTmp = $_FILES['avatar']['tmp_name'];
    
    //ensure that form fields are filled properly
    if (empty($yourname)){
        array_push($myerrors, "Your name is required");
    }
    
    if (empty($email)){
        array_push($myerrors, "Email is required");
    }
    
    $stmt = $pdo->prepare('SELECT email  FROM af_users WHERE email = ?');
    $stmt->execute([$email]);
    $used_email = $stmt->fetch();
    if (isset($used_email['email'])){
        array_push($myerrors, "Email is used befor to sing up , please sing in");
    }
    
   if (empty($password_1)){
        array_push($myerrors, "Password is required");
    }
    if($password_1 !=$password_2){
        array_push($myerrors, "The tow passwords do not match");   
    }
    
    //lecExtension security
    $accepted_types = array("png" , "jpg" , "jpeg" , "");
    $avatarNameArray = explode("." , $avatarName );
    $avatarExtension = strtolower(end( $avatarNameArray ));
   
    if(!in_array($avatarExtension , $accepted_types)){
		array_push($myerrors , "file type( " . $avatarExtension . ") is not supported,see support files");
	}
  
    //if there are no errors,save user to db
      if (count($myerrors)==0){
        $password = password_hash ( $password_1 , PASSWORD_DEFAULT );
        
        //upload
       if(!is_dir('uploads')){
  	  mkdir('uploads');
   	 mkdir('uploads/avatars');
   	 chmod('uploads/avatars' , 0755);
  	}
  	  
        if($avatarName !== ""){
   	 $avatar = rand(0,10000) . '_' . $avatarName;
    	move_uploaded_file($avatarTmp ,   'uploads/avatars//' . $avatar);
        }else{
           //default profile photo
           $avatar= "user.jpeg" ;
        }  
        //encrypt password before storing in db(security)
        $sql = "INSERT INTO af_users (name,  username, avatar,email, phone, password) VALUES( :yourname, :username,:avatar, :email,:phone, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['yourname' => $yourname , 'username' => $username ,'avatar' =>$avatar, 'email' => $email ,'phone' => $phone, 'password' => $password]);
        
        $_SESSION[ 'user_id' ] = $pdo->lastInsertId();
        
  	     header('location: home.php');
  	     exit;
   	 }
    
   }
    
    //log user in form login page
    if(isset($_POST['login'])){
        
    $email = filter_var ( $_POST['email']  , FILTER_SANITIZE_STRING ) ;
    $password = filter_var ( $_POST['password']  , FILTER_SANITIZE_STRING ) ;
    //ensure that form fields are filled properly
    if (empty($email)){
        array_push($loginErrors , "email is required");
    }
    if (empty($password)){
    	array_push($loginErrors, "Password is required");
    }
    
     if (count($loginErrors) == 0) {
     	
   	 $sql ="SELECT * FROM af_users WHERE email = :email";
    	$stmt = $pdo->prepare($sql);
    	$result = $stmt->execute(['email' => $email ]);
    	$info = $stmt->fetch();
    	$password_status = password_verify( $password, $info['password'] );
    	$count = $stmt->rowCount();
    
    	if( $count == 1  &&  $password_status == true ){
        	//log user in
        	$stmt = $pdo->prepare('SELECT id  FROM af_users WHERE email = ?');
 		      $stmt->execute([$email]);
 	      	$id = $stmt->fetch();
 		
      	 $_SESSION['user_id'] = $id[0];
  	    header('location: home.php');
  	    exit;
  	
  	   }else{
     	   array_push($loginErrors, "Email or password is wrong ");
   	  }
 	 }
  
}



