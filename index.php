<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" href="./images/logo.png">
    <link rel="stylesheet" href="./css/animate.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"> -->

    <title>myLife</title>
</head>
<body>
    <header>
        <nav>
            <div class="navbar-nav">
            <div class="navbar-brand">
                <a href="" class="nav-1" ><img src="./images/Group 1122.png" class="img-responsive wow rollIn" alt=""></a>
                <div class="nav nav-togglerbutton ml-auto">
                    <div class="close"  id="close">
                        +
                    </div>
                    <a href="#notifym" id="btn-toggle" class="wow rollIn" data-wow-delay=".5s">
                    <button class="btn btn-toggle" id="btn-togglea">
                        NOTIFY ME
                    </button>
                </a>
                </div>
           
                    <div class="navbar-toggle d-none mt-5 py-5" id="collapse">
                        <ul class="navbar-nav-item mx-auto mx-sm-auto mx-md-auto" id="nav-item">
                            <li class="nav-item wow heartBeat" data-wow-delay=".2s"><a href="#home">Home</a></li>
                            <li class="nav-item wow heartBeat" data-wow-delay=".3s"><a href="#share">Share</a></li>
                            <li class="nav-item wow heartBeat" data-wow-delay=".4s"><a href="#ser">Our Services</a></li>
                            <!-- <li class="nav-item"><a href="">About US</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
        <main>
            <section class=" sec1"> 
                <div class="carousel-inner1" id="home">
                    <div class="carousel-item1">
                     <div class="carousel-text">
                        <h1 class="t-h1"> Looking for someone or a platform to 
                            <span class="typing" data-wait="3000" data-words='["share your deepest thoughts?", "express your feelings", "share your experiences", "speak up"]'></span>
                            
                        </h1>
                        <span class="text-s wow fadeIn" data-wow-delay="1s">MyLife gives you that platform to openly share particular life experiences and and connects 
                            you with people that have similar experiences. 
                            It is a community filled with empathy and awesomeness</span>
                            <!-- <p>Be the first to know when it gets launched</p> -->
                    </div>
                        <div class="img-container float-right wow bounceIn" data-wow-delay="1.5s">
                            <img src="./images/1.png" class="img-responsive c-img " alt="">
                        </div>
                <form action="email.php" method="POST" class="form">
                    
                        <div class="form-group form-a" id="notifym">
                                <label for="">Be the first to know when it gets launched</label><br>
                                <input type="email" id="email" placeholder="Enter your email.." name="email" class="form-control"
                                style="">
                                <input type="submit" value="NOTIFY ME" id="notify" class="form-control" name="submit" >
                    </div>
                </form>
                </div>
            </section>
            <section class="sec2">
                <div class="row row1" id="share">
                    <div class="col-md-12 col-lg-5 col-xl-5 col-sm-12">
                        <div class="img-container img-a wow fadeInRight" data-wow-delay=".6s">
                            <img src="./images/image 7.png" class="b-img" alt="">
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-7 col-xl-7 col-sm-12 container" id="carousel-row2">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style=""></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                              </ol>
                             
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <div class="content-message">
                                    <h5>Feel free to vent your frustrations or regrets about life issues and find listening ears</h5>
                                    <p>We all need a support system to help us get through difficult times. 
                                        Because life can be full of challenges, and there may be times when we feel like giving up. </p>
                                    </div>
                              </div>
                              <div class="carousel-item">
                                <div class="content-message">
                                    <h5>Help someone out, get support and advice from people like yourself</h5>
                                    <p >We all need a support system to help us get through difficult times. 
                                    Because life can be full of challenges, and there may be times when we feel like giving up.</p>
                                    </div>
                              </div>
                              <div class="carousel-item">
                                <div class="content-message">
                                    <h5>Let’s build a voice together to fight for the voiceless </h5>
                                    <p>We all need a support system to help us get through difficult times. 
                                        Because life can be full of challenges, and there may be times when we feel like giving up. </p>
                                    </div>
                              </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span> -->
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next" >
                              <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span> -->
                            </a>
                          </div> 
                          <div class="bb">
                            <span></span>
                        </div>
                    </div>
                   
                </div>

                <div class="row row2 text-center" id="ser">
                    <div class="col-md-12 col-lg-4 col-xl-4 col-sm-12">
                            <div class="container-content">
                                <img src="./images/grp3.png" alt="" class="img-responsive wow bounce">
                                <div class="text-box text-center">
                                    <h4 class="wow tada"> It's a Safe Community</h4>
                                    <p class="wow fadeInRight txt-p" data-wow-delay=".3s">We use the best data practices to keep myLife safe for you. 
                                        You can be as vulnerable and honest without worrying about trolls or being bullyed </p>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-12 col-lg-4 col-xl-4 col-sm-12">
                        <div class="container-content">
                            <img src="./images/grp2.png" alt="" class="img-responsive wow bounce ">
                            <div class="text-box text-center">
                                <h4 class="wow jello">We embrace our Humanity</h4>
                                <p class="wow fadeInRight txt-p" data-wow-delay=".4s">We don’t judge. We celebrate each other’s flaws, because honestly, 
                                    it’s what makes us human. We apply the principles of kindness and goodness</p>
                            </div>
                        </div>
                </div>
                <div class="col-md-12 col-lg-4 col-xl-4 col-sm-12">
                    <div class="container-content">
                        <img src="./images/grp1.png" alt="" class=" wow bounce">
                        <div class="text-box text-center">
                            <h4 class="wow jello ">We Provide Support </h4>
                            <p class="wow fadeInRight txt-p" data-wow-delay=".6s">We believe in the power of empathy and being t
                                here for each other through the bad times and the good times.</p>
                        </div>
                    </div>
            </div>
                </div>
            </section>
            <section class="text-center sec3">
                <div class="text-h3 wow flipInY "data-wow-delay=".1s">
                    <h3 class="" >No matter your daily life experiences, <br>this is a place your voice will be heard</h3>
                </div>
            </section>
            <section class="bk">
            <div class="content-sec4i wow flipInY" data-wow-delay="1s">
                <p class="py-5 sec4i-p">You can join the different categories or use respective hashtags 
                    to share your experience and connect </p>
                    <!-- <img src="/images/bk-2.png" class="img-responsive img-aa" alt=""> -->
            </div>
        </div>
            <section class="sec4">
                <div class="content-sec4 scroll"></div>
            </section>
        </section>
        
        
            <div class="bk-col"></div>
            <div class="l-text wow fadeOut" data-wow-delay=".8s"> 
                <h4 class="h4" >Join thousand in the waiting list and get ready for a revolution</h4>
            </div>
     <section class="sec5">
        <div class="row m-0">
            <div class="col-md-12 col-sm-12 col-lg-5 col-xl-5">
                <div class="wow tada div1 " data-wow-delay="1.3s">
                    <img src="./images/phone12.png" class="img-responsive img-b " alt="">
                </div>
            <!-- <div class="bk-col bk-col2 col3"></div> -->
            </div>
            <div class="col-md-12 col-sm-12 col-lg-7 col-xl-7 ">
                <form action="email.php" method="POST" class="form">
                    <div class="form-group form-a form-b " >
                            <label for="">Be the first to know when it gets launched</label><br>
                            <input type="email" id="email" placeholder="Enter your email.." name="email" class="form-control"
                            style="">
                            <input type="submit" value="NOTIFY ME" id="notify" class="form-control" name="submit" >
                </div>
            </form>
            <div class="message" id="message">
                
                <div class="card">

                    <div class="card-body text-center">
                        <p>Thank You!,<br>You'll be the first to know when mylife gets launched</p>
                        <button class="btn btn-close btn-dark" id="close">Close </button>
                    </div>
                </div>
               
            </div>
            </div>
        </div>
            
    </section>
    <div class="bk-col bk-col2"></div>
    <footer class="footer text-center">
        <span>Copyright 2020 &copy; myLife</span>
    </footer>
        </main>
        <script src="./js/index.js"></script>
    <script src="./js/jquery.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/wow.js"></script>
    <script>
    new WOW().init();
    </script>

    
</body>
</html>