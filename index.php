<title>BLOG</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<div class="bg">
	<style media="screen">

.bg {
background-image: url('https://images.unsplash.com/photo-1518655048521-f130df041f66?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80');
background-repeat: no-repeat;
background-size: cover;
height: 100%;
width:100%;
}
</style>

<?php
$index_url='index.php';
$posts_url='posts/posts.php';
$top_posts_url='posts/topposts.php';
$post_url='posts/post.php';
$newpost_url='posts/newpost.php';
$login_url='users/login.php';
$logout_url='users/logout.php';
$register_url='users/register.php';
$search_url='posts/search.php';
$contact_us_url='users/contact_us.php';

session_start();
include("include/bootstrap_cdn.php");
include("include/navbar.php");
include("include/log.php");


if(isset($_SESSION['username'])) {
	header("location:posts/posts.php");
}

?>

</div>

  
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            
           
            <div class="social-list">
              <a href="mailto:shashank444tiptur@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
              <a href="https://twitter.com/shash8599" target="_blank"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/im.shashankts" target="_blank"><i class="fa fa-facebook"></i></a>
              <a href="https://www.linkedin.com/in/shashank-ts" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
            <p class="copyright clear-float">
             
         Copyrights <strong>shash</strong>. All Rights Reserved
      
              
            </p>
          </div>
        </div>
      </div>
    
  <!-- / footer -->



