<?php
$json = file_get_contents('https://picsum.photos/v2/list');
$objs = json_decode($json);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />
    <link rel="stylesheet" href="style.css">
    <title>Blog</title>
</head>
<body>
    <header>   
        <div class="container">            
            <i class="fa fa-bars" style="font-size:48px;"></i>
        </div>     
        <div class="breadcrumps container">
            <a href="">Blog</a> / <a href="">Yoga</a> / <a href="">Living Yoga</a>
        </div>
    </header>
    <section class="container feature-image-container">
        <img src="images/banner-img.jpg" alt="yoga" />
    </section>
    <section class="blog-content container">
        <div class="main-content">            
            <div class="text-content">
                <div class="social-share">
                    <div class="facebook">
                        <img src="images/facebook.jpg" alt="share on fb"/>
                    </div>
                    <div class="instagram">
                        <img src="images/instagram.jpg" alt="share on insta"/>
                    </div>
                    <div class="email">
                        <img src="images/email.jpg" alt="share on email"/>
                    </div>
                </div>
                <div class="article">
                    <div class="article-title">
                        <h1>Living Yoga</h1>                        
                    </div>
                    <div class="article-body">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta porro distinctio, nemo reiciendis possimus iusto laboriosam fugit ab nulla laudantium consectetur minima optio ad magni dignissimos numquam est at enim a veritatis molestiae vero ipsum eos! Explicabo atque dolores assumenda omnis ipsam aut incidunt vitae facilis. Enim labore a atque porro? Praesentium soluta quos rerum reiciendis? Nemo, alias? Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta porro distinctio, nemo reiciendis possimus iusto laboriosam fugit ab nulla laudantium consectetur minima optio ad magni dignissimos numquam est at enim a veritatis molestiae vero ipsum eos! Explicabo atque dolores assumenda omnis ipsam aut incidunt vitae facilis. Enim labore a atque porro? Praesentium soluta quos rerum reiciendis? Nemo, alias? Nulla fuga quisquam voluptatem dicta magni sequi eligendi consequuntur, vel corporis, recusandae, exercitationem labore provident est! Perferendis, sunt vel quod, laudantium minima odio quasi optio a enim animi itaque atque facilis, neque deleniti at repudiandae magni! Non soluta esse nemo aliquid est!</p>
                        <h2>How it is to live a stress free life</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus possimus ad impedit assumenda, a eveniet tempore. Officiis vitae aut tempore.</p>
                    </div>
                </div>
            </div>
            <div class="blog-footer">
                <img src="images/tree.jpg" alt="footer picture" />
            </div>
        </div>
        <div class="sidebar">
            <div class="side-content">
                <h3 class="title">Other Articles</h3>
                <div class="articles-box">
				<?php 
				   if($objs)
				   {
                    foreach($objs as $obj)
					{
						//echo $obj->width;echo "<br />";
						echo '<div class="articles">';
                        echo '<img src="'.$obj->download_url.'" alt="" width="100" />';
                        echo '<h4>'.$obj->author.'</h4>';
                        echo '</div>';
					}
				   }
				?>
                </div>
                <div class="articles-nav">
                    <div class="prev-btn disabled">< BACK</div>
                    <div class="next-btn">NEXT ></div>
                </div>
            </div>
        </div>
    </section>
    <section class="comments container">
        <div class="comment-title">
            <span class="comment-count">0 Comments</span>
            <span class="comment-website">www.yourwebsite.com</span>
        </div>
        <div class="comment-box">
            <img src="images/user-avatar.jpg" />
            <input type="text" placeholder="Begin the conversation..." />
        </div>
        <div class="empty-comments">Be the first to comment.</div>
    </section>
    <footer>
        <div class="container">
            <div class="footer-cols one">
                <h3>Carolina.com</h3>
                <p>FOLLOW US</p>
            </div>
            <div class="footer-cols two">
                <p><a href="#">About Us</a></p>
                <p><a href="#">About Us</a></p>
                <p><a href="#">About Us</a></p>
                <p><a href="#">About Us</a></p>
                <p><a href="#">About Us</a></p>
                <p><a href="#">About Us</a></p>
            </div>
            <div class="footer-cols three">
                <p><a href="#">Next Trainings</a></p>
                <p><a href="#">Next Trainings</a></p>
                <p><a href="#">Next Trainings</a></p>
                <p><a href="#">Next Trainings</a></p>
                <p><a href="#">Next Trainings</a></p>
                <p><a href="#">Next Trainings</a></p>
            </div>
            <div class="footer-cols four">
                <p>SIGN UP FOR THE NEWSLETTER</p>
                <form>
                    <input type="text" placeholder="your@e-mail.com" />
                    <button>SIGN UP</button>
                </form>
            </div>
        </div>
        <div class="copyright">
            <div class="container">We create for <strong>@agoodpurpose</strong></div>
        </div>
    </footer>
    <script src="main.js"></script>
</body>
</html>