<!DOCTYPE html>
<html lang="en">

<?php

require_once('includes/connect.php');

$query = 'SELECT projects.id AS project, title, tools_used, project_url, details_url, url, alt_text, image_main FROM projects, media WHERE media.projects_id = projects.id LIMIT 3';

$results = mysqli_query($connect, $query);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Home</title>
    <link rel="icon" href="images/logo-icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.js"></script>
    <script defer src="https://cdn.plyr.io/3.7.8/plyr.js"></script>
    <script defer src="js/main.js"></script>
</head>

<body>
    <h1 class="hidden">Portfolio</h1>
    <header class="grid-con">
        <nav class="m-col-span-full navbar">
            <h2 class="hidden">Header</h2>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>

                <a href="index.html"><img class="logo-tablet" src="images/logo-mobile.svg" alt="logo"></a>
            

                <div class="nav-menu">
                <ul>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">ABOUT ME</a>
                    </li>
                    <li class="nav-item">
                        <a href="projects.php" class="nav-link">PROJECTS</a>
                    </li>

                    <li class="contact-scroll contact-mobile nav-item">
                        <a href="#contact" class="nav-link">CONTACT ME</a>
                    </li>

                </ul>
                </div>

                <div class="contact-tablet contact-scroll">
                    <a href="#contact" class="nav-link">CONTACT ME</a>
                </div>
        </nav>

        
        <div class="logo-mobile col-start-2 col-end-4">
            <img src="images/logo-mobile.svg" alt="fanshawe-logo">
        </div>
    </header>

    <main>
        <section class="grid-con section-intro">
            <h2 class="hidden">Landing Page</h2>
            <div class="col-span-full m-col-start-1 m-col-end-7 text-intro-main">
                <p>Hi, I am Milana, <span class="purple-text">&lt;Front-end Developer&gt;</span></p>
                <p class="basic-text t-intro">I'm a front-end developer focused on building clean, responsive websites that seamlessly integrate 3D elements for enhanced interaction and visual depth. Check out my work to see how I combine coding and creativity to create engaging digital experiences.</p>
            </div>

            <div class="col-span-full m-col-start-7 m-col-end-13 video-container">
            <div class="custom-cursor play"></div>
            <video class="player" controls preload="metadata" poster="images/placeholder.jpg">
                <source src="videos/video.mp4" type="video/mp4">
                <p>Ooops, something went wrong. You may be using an outdated browser or have javascript disabled.</p>
            </video>
        </div>
        </section>

        <section class="grid-con section-about">
            <h2 class="hidden">About Me</h2>
            <div class="h-background-about"><img src="images/tape2.svg" alt="background-about"></div>
            <div class="col-span-full heading"><p>ABOUT ME</p></div>

            <div class="facts-about col-span-full m-col-start-1 m-col-end-8 content-gsap-left">
                <p class="big-text-about">&lt;FACTS ABOUT ME&gt;</p>
                <p class="basic-text">I'm a <span class="purple-text">front-end enthusiast passionate</span> about building responsive, user-friendly websites with modern technologies, and I love incorporating <span class="purple-text">3D elements</span> into web projects to create visually dynamic experiences. As a recent graduate of the <span class="purple-text">Interactive Media Design program</span> at Fanshawe College, I honed my skills in web development and 3D design. When I'm not coding, I enjoy experimenting with digital art and exploring the latest design trends. I'm <span class="purple-text">always learning</span> and diving into new tools and technologies to keep my work <span class="purple-text">fresh and innovative.</span></p>
            </div>

            <div class="picture-about col-span-full m-col-start-8 m-col-end-13 content-gsap-right">
                <p class="big-text-about">&lt;MY PICTURE&gt;</p>
                <img src="images/my-picture.png" alt="my picture">
            </div>

        </section>

        <section class="grid-con section-projects">
            <h2 class="hidden">Projects</h2>
            <div class="h-background-projects"><img src="images/ball.svg" alt="background-projects"></div>
            <div class="col-span-full heading h-projects-background"><p>PROJECTS</p></div>

            <!--web dev-->

            <div class="col-span-full project-cards">
            <?php

            while($row = mysqli_fetch_array($results)) {
                
            
           echo '<div class="project-card card-gsap">
                <div class="project-card-image"><img src="images/'.$row['image_main'].'" alt="'.$row['alt_text'].'"></div>
                <div class="project-card-tools">
                    <p class="tool">HTML</p>
                    <p class="tool">CSS</p>
                    <p class="tool">JavaScript</p>
                </div>
                <div class="project-card-name">'.$row['title'].'</div>
                <div class="project-card-buttons">
                    <div class="white-button"><a href="'.$row['project_url'].'">VIEW PROJECT</a></div>
                    <div class="black-button"><a href="'.$row['details_url'].'">VIEW DETAILS</a></div>
                </div>
            </div>';
            }
            ?>
        </div>

            <div class="col-span-full all-projects-button"><a href="projects.html">ALL PROJECTS -> </a></div>

        </section>

        <section class="grid-con section-testimonials">
            <h2 class="hidden">Testimonials</h2>
            <div class="h-background-testimonials">
                <img src="images/tape1.svg" alt="background-testimonials"></div>
            <div class="col-span-full heading"><p>TESTIMONIALS</p></div>

            <div class="col-span-full testimonial-container">
                <div class="testimonial">
                    <p class="testimonial-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <p class="testimonial-name">NAME SURNAME </p>
                    <p class="testimonial-occupation">OCCUPATION</p>
                </div>

                <div class="testimonial">
                    <p class="testimonial-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <p class="testimonial-name">NAME SURNAME </p>
                    <p class="testimonial-occupation">OCCUPATION</p>
                </div>

                <div class="testimonial">
                    <p class="testimonial-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <p class="testimonial-name">NAME SURNAME </p>
                    <p class="testimonial-occupation">OCCUPATION</p>
                </div>
                
                <div class="testimonial">
                    <p class="testimonial-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <p class="testimonial-name">NAME SURNAME </p>
                    <p class="testimonial-occupation">OCCUPATION</p>
                </div>

                <div class="testimonial">
                    <p class="testimonial-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                    <p class="testimonial-name">NAME SURNAME </p>
                    <p class="testimonial-occupation">OCCUPATION</p>
                </div>
            </div>


        </section>


        <section id="contact" class="grid-con section-contact">
            <h2 class="hidden">Contact me</h2>
            <div class="h-background-contact"><img src="images/tape2.svg" alt="background-contact"></div>
            <div class="col-span-full heading"><p>CONTACT ME</p></div>

            <div class="text-contact col-span-full l-col-start-1 l-col-end-6">
                <p class="purple-text-contact">&lt;Let's Collaborate&gt;</p>
                <p class="basic-text-contact">As a <span class="highlighted-text">front-end developer</span> with a passion for integrating <span class="highlighted-text">3D design</span>, I'm always excited to take on new challenges. Whether you're looking to bring your ideas to life on the web or enhance your digital experience, <span class="highlighted-text">feel free to reach out</span>—let's create something <span class="highlighted-text">innovative</span> together.</p>
           </div>

            <div class="col-span-full phone-email-contact">
                <div class="phone">
                    <img src="images/phone-icon.svg" alt="phone-icon">
                    <p class="purple-text-pe">&lt;+1 (548) 881 4541&gt;</p>
                </div>

                <div class="email">
                    <img src="images/mail-icon.svg" alt="mail-icon">
                    <p class="purple-text-pe">&lt;milana15.10.05@gmail.com&gt;</p>
                </div>
            </div>

        <div class="form-contact col-span-full l-col-start-6 l-col-end-13">
            <form method="post" action="sendmail.php" class="col-span-full order-form-inputs">
                <input type="text" name="fname" placeholder="First name" id="fname">
                <input type="text" name="lname" placeholder="Last name" id="lname">
                <input type="text" name="email" placeholder="Email" id="email">
                <textarea name="message" placeholder="Message" id="message"></textarea>
                <button type="submit" class="submit-button" id="submit-action">SUBMIT</button>
            </form>

            <div class="col-span-full button-social">
                

                <div class="social-medias">
                    <img src="images/instagram.svg" alt="instagram">
                    <img src="images/github.svg" alt="github">
                    <img src="images/linkedin.svg" alt="linkedin">
                    <img src="images/behance.svg" alt="behance">
                </div>
            </div>
        </div>
           
        </section>

        <div class="ball-blur"></div>

    </main>

    
    
    <footer class="grid-con section-footer">
        <h2 class="hidden">Footer</h2>
        <div class="col-span-full logo-footer"><img src="images/logo-mobile.svg" alt="logo-footer"></div>
        <div class="col-span-full nav-menu-footer">
            <ul>
                <li class="nav-item-footer">
                    <a href="index.php" class="nav-link-footer">HOME</a>
                </li>
                <li class="nav-item-footer">
                    <a href="about.php" class="nav-link-footer">ABOUT ME</a>
                </li>
                <li class="nav-item-footer">
                    <a href="projects.php" class="nav-link-footer">PROJECTS</a>
                </li>
            </ul>
        </div>

        <div class="col-span-full contact-social-footer">

            <div class="contact-scroll button-footer black-button"><a href="#contact">CONTACT ME</a></div>

            <div class="social-medias-footer">
                <img src="images/instagram.svg" alt="instagram">
                <img src="images/github.svg" alt="github">
                <img src="images/linkedin.svg" alt="linkedin">
                <img src="images/behance.svg" alt="behance">
            </div>

        </div>

            <div class="col-span-full"><p class="copyright-text">© 2024 Milana Gabbassova</p></div>
     </footer>
     
   
</body>

</html>