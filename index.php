<?php
    include ('settings.php');
?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">My<span>Profile.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Study</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Friends</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2"><?php echo $name; ?></div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="<?php echo $profile; ?>" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm <?php echo $sName; ?> and I'm a <span class="typing-2"></span></div>
                    <p><?php echo $descAbout; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My Study</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-graduation-cap"></i>
                        <div class="text">SD</div>
                        <?php foreach($studySD as $x => $val){ ?>
                            <p><?php echo $x; ?> : <?php echo $val; ?></p>
                        <?php }?>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-graduation-cap"></i>
                        <div class="text">SMP</div>
                        <?php foreach($studySMP as $x => $val){ ?>
                            <p><?php echo $x; ?> : <?php echo $val; ?></p>
                        <?php }?>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-graduation-cap"></i>
                        <div class="text">SMK</div>
                        <?php foreach($studySMK as $x => $val){ ?>
                            <p><?php echo $x; ?> : <?php echo $val; ?></p>
                        <?php }?>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My Creative Skills</div>
                    <p><?php echo $descSkill; ?></p>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML & CSS</span>
                            <span>75%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>65%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>50%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySql</span>
                            <span>80%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Golang</span>
                            <span>30%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My Friends</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="<?php echo $dz['foto']; ?>" alt="">
                        <div class="text"><?php echo $dz['name']; ?></div>
                        <p><?php echo $dz['univ']; ?></p>
                        <p><?php echo $dz['asal']; ?></p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="<?php echo $aan['foto']; ?>" alt="">
                        <div class="text"><?php echo $aan['name']; ?></div>
                        <p><?php echo $aan['univ']; ?></p>
                        <p><?php echo $aan['asal']; ?></p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="<?php echo $alwin['foto']; ?>" alt="">
                        <div class="text"><?php echo $alwin['name']; ?></div>
                        <p><?php echo $alwin['univ']; ?></p>
                        <p><?php echo $alwin['asal']; ?></p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="<?php echo $nando['foto']; ?>" alt="">
                        <div class="text"><?php echo $nando['name']; ?></div>
                        <p><?php echo $nando['univ']; ?></p>
                        <p><?php echo $nando['asal']; ?></p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="<?php echo $indra['foto']; ?>" alt="">
                        <div class="text"><?php echo $indra['name']; ?></div>
                        <p><?php echo $indra['univ']; ?></p>
                        <p><?php echo $indra['asal']; ?></p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="<?php echo $diva['foto']; ?>" alt="">
                        <div class="text"><?php echo $diva['name']; ?></div>
                        <p><?php echo $diva['univ']; ?></p>
                        <p><?php echo $diva['asal']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title"><?php echo $name; ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title"><?php echo $alamat; ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fab fa-instagram"></i>
                            <div class="info">
                                <div class="head">Instagram</div>
                                <div class="sub-title"><a href="<?php echo $instagram; ?>" style="color: black;">@raviy_bayu</a></div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title"><?php echo $email; ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="#"><?php echo $name; ?></a> | <span class="far fa-copyright"></span> 2021 </span>
    </footer>

    <script src="script.js"></script>
</body>
</html>
