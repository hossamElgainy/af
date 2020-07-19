<?php
    

    include 'includes/config.php';

    if (empty($user_id)) {
        header("location: login.php");
        exit;
    }

    include 'includes/header.php';
    include 'includes/navbar.php';

    //questions 
    $sql = "SELECT * FROM  af_questions 
            LEFT JOIN af_users 
            ON af_questions.user_id = af_users.id 
            ORDER BY af_questions.id DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([ ]);
    $questions = $stmt->fetchall();



    ?>
    <div class="container-fluid py-2" style="background: #eee">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <!-- add question to the people -->
                <div class="add-question border border-primary bg-white">
                    <div class="profile-img">
                    <img src="<?= $user_avatar ?>" alt="hoso" class="pull-left" onerror="this.src='https://img.icons8.com/ultraviolet/80/000000/user.png';" />
                    </div>
                    <div class="quest-content">
                        
                        <form id="add-question-form" action="#" method="post">
                            
                            <div class="form-group">
                                <textarea name="question" id="" cols="60" rows="2" class="form-control" ></textarea>                             
                                <input type="submit" value="Send" class="btn btn-block btn-outline-primary " placeholder="Type your question here"><i class="fa fa-send"></i>                 
                            </div> 

                        </form>

                    </div>
                </div>
                <!-- questions added by other people -->

                <div class="showed-question">

                    <?php foreach ($questions as $question): ?>

                    <div class="p-2 my-2 rounded bg-white" style="box-shadow: 0 0 10px 3px #ddd">

                        <!-- information of the used who added the question -->
                        <div class="user-info">
                            <img src="<?= $question['avatar'] ?>" alt="hoso" onerror="this.src='https://img.icons8.com/ultraviolet/80/000000/user.png';" class=" d-block pull-left"/>
                            <h3><a href="#"><?= $question['name'] ?></a></h3>
                            <p><?= $question['time'] ?></p>
                        </div>
                        <h3 class="user-question">
                            <?= $question['question'] ?>
                        </h3>
                        <!-- statestics of this question -->
                        <div class="btn-group btn-group-justified" role="group" aria-label="...">
                            <span class="likes-num">100 Likes </span>
                            <span class="comment-numbers">200 comment </span>
                            <span class="shares-numbers">300 share </span>
                        </div>
                        <!-- options of the post such as like / comment / share -->
                        <div class="post-options">
                            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default"><i class="fa fa-thumbs-up"></i> Like</button>
                                </div>
                                <div class="btn-group comment-btn" role="group">
                                    <button type="button" class="btn btn-default"><i class="fa fa-comment"></i> Comment</button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Share</button>
                                </div>
                            </div>                        
                        </div>

                    </div>
                
                    <?php endforeach; ?>

                </div>

                

            </div>
            <div class="col-md-3 ">
                <div class="user-information">
                    <img src="<?= $user_avatar ?>" alt="hoso" class="img-circle" onerror="this.src='https://img.icons8.com/ultraviolet/80/000000/user.png';" />
                    <h3 class="text-center"><?= $user_name ?></h3>
                    <ul class="unstyled-list">

                        <a href="logout.php"><h3><li><i class="fa fa-sign-out"></i> Logout</li></h3></a>
                    </ul>
                </div>
                <p>copy rights reserved <br> Ask Friend 2020</p>
            </div>
        </div>
    </div>

    <?php

    include 'includes/footer.php';
?>