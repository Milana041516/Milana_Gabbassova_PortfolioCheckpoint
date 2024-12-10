<!DOCTYPE html>
<html lang="en">
    <?php
    require_once('includes/connect.php');

    $query1 = 'SELECT projects.id AS project, title, tools_used, project_url, url, alt_text, image_main, overview FROM projects, media WHERE media.projects_id = projects.id AND projects.categories_id = 1';

    $result1 = mysqli_query($connect,$query1);

    $query2 = 'SELECT projects.id AS project, title, tools_used, project_url, url, alt_text, image_main, overview FROM projects, media WHERE media.projects_id = projects.id AND projects.categories_id = 2';

    $result2 = mysqli_query($connect,$query2);

    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width">
    <title>Projects</title>
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

                    <li class="contact-mobile nav-item">
                        <a href="index.php" class="nav-link">CONTACT ME</a>
                    </li>

                   
                </ul>
                </div>

                <div class="contact-tablet">
                    <a href="index.php" class="nav-link">CONTACT ME</a>
                </div>
        </nav>

        
        <div class="logo-mobile col-start-2 col-end-4">
            <img src="images/logo-mobile.svg" alt="fanshawe-logo">
        </div>
    </header>

    <main>
        <section class="projects-section-intro">
            <h2 class="hidden">Landing Page</h2>
            <video class="player" controls preload="metadata" poster="images/placeholder.jpg">
                <source src="videos/video.mp4" type="video/mp4">
                <p>Ooops, something went wrong. You may be using an outdated browser or have javascript disabled.</p>
            </video>
        </div>
        </section>

        <section class="grid-con projects-section-projectcards">
            <h2 class="hidden">Project Cards</h2>
            <div class="filter-buttons col-span-full">
                <p class="filter-button">All</p>
                <p class="filter-button">Web Development</p>
                <p class="filter-button">3D Motion Design</p>
            </div>

            <?php 

            while($row1 = mysqli_fetch_array($result1)) {

            echo '<div class="projects-project col-span-full">
                <div class="project-image">
                    <img src="images/'.$row1['image_main'].'" alt="Zima-website">
                </div>
                <div class="project-info">
                    <p class="project-info-name">'.$row1['title'].'</p>
                    <div class="project-info-tools">
                        <p class="tool">HTML</p>
                        <p class="tool">SASS</p>
                        <p class="tool">JavaScript</p>
                    </div>
                    <p class="project-mini-description">'.$row1['overview'].'</p>
                    <div class="project-card-buttons">
                        <div class="white-button"><a href="cs-webdev.php?id='.$row1['project'].'">VIEW PROJECT</a></div>
                        <div class="black-button"><a href="cs-webdev.php?id='.$row1['project'].'">VIEW DETAILS</a></div>
                    </div>
                </div>
            </div>';
        }

            ?>

<?php
while($row2 = mysqli_fetch_array($result2)) {

    echo '
            <div class="projects-project col-span-full">
                <div class="project-image">
                    <img src="images/'.$row2['image_main'].'" alt="Lovebeats">
                </div>
                <div class="project-info">
                    <p class="project-info-name">'.$row2['title'].'</p>
                    <div class="project-info-tools">
                        <p class="tool">C4D</p>
                        <p class="tool">Blender</p>
                        <p class="tool">After Effects</p>
                    </div>
                    <p class="project-mini-description">'.$row2['overview'].'</p>
                    <div class="black-button"><a href="cs-motion.php?id='.$row2['project'].'">VIEW DETAILS</a></div>
                </div>
            </div>';
}
?>
        </section>

        <section class="grid-con section-testimonials">
            <h2 class="hidden">Testimonials</h2>
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

            <div class="button-footer black-button"><a href="index.php">CONTACT ME</a></div>

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