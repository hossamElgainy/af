<?php
        
    include 'includes/header.php';
    include 'includes/navbar.php';

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <!-- add question to the people -->
                <div class="add-question">
                    <div class="profile-img">
                    <img src="1.jpg" alt="hoso" class="pull-left"/>
                    </div>
                    <div class="quest-content">
                        <div class="input-group">
                            <textarea name="add-quest" id="" cols="60" rows="2" class="form-control"></textarea>                             
                            <input type="submit" value="Send" class="btn btn-primary"><i class="fa fa-send"></i>                 
                        </div>  
                    </div>
                </div>
                <!-- questions added by other people -->
                <div class="showed-question">
                    <!-- information of the used who added the question -->
                    <div class="user-info">
                        <img src="10.jpg" alt="hoso" class="pull-left"/>
                        <h3><a href="#">hoso</a></h3>
                        <p>15/6/2020</p>
                    </div>
                    <h3 class="user-question">
                        hello this is my question hello this is my question hello this is my question hello this is my question hello this is my question
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
                    <hr>
                    <!-- comments on this question -->
                    <div class="comments">
                        <!-- add a comment to the post -->
                        <div class="add-comment">
                            <div class="user-info">
                                <img src="10.jpg" alt="hoso" class="pull-left"/>
                                <h4><a href="#">hoso</a></h4>
                            </div>
                            <div class="comment-content">
                                <div class="input-group">
                                    <textarea name="comment" id="" cols="60" rows="2" class="form-control"></textarea>                             
                                    <input type="submit" value="Add" class="btn btn-primary">               
                                </div> 
                            </div>
                        </div>
                        <!-- comments added by other users -->
                      
                        <div class="parent-users-comments">
                            <img src="1.jpg" />
                            <p>hello this is the comment hello this is the comment hello this is the commenthello this is the comment hello this is the comment</p>
                            <span class="parent-c-option">
                                <a href=""><span>Like</span></a>
                                <a href=""><span>reply</span></a>  
                            </span>

                            <div class="child-users-comments">
                                <img src="1.jpg" />
                                <p>hello this is the comment hello this is the comment hello this is the commenthello this is the comment hello this is the comment</p>
                                <span class="child-c-option">
                                    <a href=""><span>Like</span></a>
                                    <a href=""><span>reply</span></a>  
                                </span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3 ">
                <div class="user-information">
                    <img src="1.jpg" alt="hoso" class="img-circle" />
                    <h3 class="text-center"><?php echo $user_name; ?></h3>
                    <ul class="unstyled-list">
                        <a href="#"><h3><li><i class="fa fa-user"></i> Profile</li></h3></a>
                        <a href="#"><h3><li><i class="fa fa-bell"></i> notifications</li></h3></a>
                        <a href="#"><h3><li><i class="fa fa-envelope"></i> Messages</li></h3></a>
                        <a href="#"><h3><li><i class="fa fa-cog"></i> Setting</li></h3></a>
                        <a href="#"><h3><li><i class="fa fa-sign-out"></i> Logout</li></h3></a>
                    </ul>
                </div>
                <p>copy rights reserved <br> Ask Friend 2020</p>
            </div>
        </div>
    </div>

    <?php
	echo "Welcome <h1>" . $user_name . "</h1> A7la mysaa 3alek ya staaaaa" ;
    echo '<a href="logout.php"> logout </a>';
    include 'includes/footer.php';


?>