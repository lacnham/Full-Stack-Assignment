<?php require_once("../private/initialize.php"); ?>

<?php include(SHARED_PATH . "/mall_header.php"); ?>

<style>
    .background-img{
        background-image: url(tofu-wallpaper.webp);
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
</style>
</head>

<body>
    <section>
    <div class="aboutus-image">
    <img src="../../image/about-us-2.png" alt="About Us">
    </div>

    <div class="simple-intro-container">
        <div class="simple-intro">
        <p>Hello to You, We are Tao Hu group. Our group includes 3 people with different ages and somehow we get along incredibly well. We are newbies in IT major but we suppose thanks to that fact, we are hooked to conquer every new knowledge in IT. Despite many challenges in constructing this website, we have had a lot of fun building it together even if it still has loads of flaws :)
        </p>
        </div>
    </div>
    </section>

    <!-- Modal content -->
    <div id="nham-modal-box" class="modal">
        <div class="modal-content">
        <span class="close1">&times;</span>
        <img class="modal-image" src="image/nham2.jpg" alt="Nguyen Hoang To Nhu">
        <h4><b>Nguyen Hoang To Nhu</b></h4>
        <p class="modal-info">Hello, I am To Nhu or you can just call me Nham for short. I'm 18 years old and still new to the IT world. Besides coding, I often spend my time playing games, reading books ( especially manga and adventure books), watching anime. I am planning to learn Japanese with Linh and guitar but still lazy =))))). My goal after graduation is to earn over 30 millions a month. I will try my best to achieve my dream.</p>
        </div>
    </div>

    <div id="linh-modal-box" class="modal">
        <div class="modal-content">
        <span class="close2">&times;</span>
        <img class="modal-image" src="image/linh.jpg" alt="Vu Bui Khanh Linh">
        
        <h4><b>Vu Bui Khanh Linh</b></h4>
        <p class="modal-info">I'm a 19-year-old childish adult who love doing loads of different things and currently is trying to learn web programming. <br>My favorite sources of entertainment can be watching people eating food :) ; playing adventuring game; listening to mostly any types of music except rock; playing sports (performing tricks in jumping rope); watching film, anime; having a good friend or meeting new good people, the list goes on. And recently, I found it extremely fun building a website with my friends despite facing quite a few obstacles. Nice to meet you!</p>   
        </div>
    </div>

    <div id="nguyen-modal-box" class="modal">
        <div class="modal-content">
        <span class="close3">&times;</span>
        <img class="modal-image" src="image/nguyen.jpg" alt="Vu Le Hoang Nguyen">  
        <h4><b>Vu Le Hoang Nguyen</b></h4>
        <p class="modal-info">Greetings to all! My name is Nguyen. I turn 25 this July and am a proud member of the Taohu  team. I am a dog person, gym rat, and science enthusiast. I majored in engineering back in Canada. I am pursuing my second bachelor degree in Machine Learning at School of Science of Technology at RMIT Saigon South. That being the case, website development has been growing on me recently. I'm one of the key developer behind Particeps and Academy websites. I hope I have the chance to continue collaborating with other Taohu-neers in the future.</p>
        </div>
    </div>

    <section class="background-img">
    <div class="member_info">
        <h1>Our Team</h1>
        <br><br>
    <div class="member_left_bigcontainer">
    <div class="member_left_container">
        <img id="openModal1" class="image1" style="cursor: pointer; font-weight: bold;" src="image/nham2.jpg" alt="Nguyen Hoang To Nhu" >
        <h4 ><b>Nguyen Hoang To Nhu</b></h4><br>
        <p class="member_left">Hello, I am To Nhu or you can just call me Nham for short. I'm 18 years old and still new to the IT world. Besides coding, I often spend my time playing games, reading books ( especially manga and adventure books), watching anime. I am planning to  . . .<a id="openModal1_2" style="cursor: pointer; font-weight: bold;"> More</a>
        </p>   
        <div class="social-member-container">
        <ul class="social-member">
            <li><a href="https://github.com/lacnham"><i class="fab fa-github"></i></a></li>
            <li><a href="mailto:s3878533@rmit.edu.vn"><i class="fa fa-envelope"></i></a></li>
            <li><a href="https://www.facebook.com/lacnhamdeptrai/"><i class="fab fa-facebook"></i></a></li>
        </ul>
        </div> 
    </div>
    
    <div class="member_left_container">
        <img id="openModal2" style="cursor: pointer; font-weight: bold;" class="image1" src="image/linh.jpg" alt="Vu Bui Khanh Linh">
        
        <h4><b>Vu Bui Khanh Linh</b></h4><br>
        <p class="member_left">I'm a 19-year-old childish adult who love doing loads of different things and currently is trying to learn web programming. <br>My favorite sources of entertainment can be watching people eating food :) ,playing . . .<a id="openModal2_2" style="cursor: pointer; font-weight: bold;"> More</a>
        </p>   
        <div class="social-member-container">
        <ul class="social-member">
            <li><a href="https://github.com/Linh-0v0"><i class="fab fa-github"></i></a></li>
            <li><a href="mailto:s3864120@rmit.edu.vn"><i class="fa fa-envelope"></i></a></li>
            <li><a href="https://www.facebook.com/linh.vu.790/"><i class="fab fa-facebook"></i></a></li>
        </ul>
        </div> 
    </div>

    <div class="member_right_container">
        <img class="image2" id="openModal3" style="cursor: pointer; font-weight: bold;" src="image/nguyen.jpg" alt="Vu Le Hoang Nguyen">  
        <h4><b>Vu Le Hoang Nguyen</b></h4><br>
        <p class="member_right">Greetings to all! My name is Nguyen. I turn 25 this July and am a proud member of the Taohu  team. I am a dog person, gym rat, and science enthusiast. I majored in engineering back in Canada. I am pursuing my second bachelor degree in Machine Learning at School of Science of Technology at RMIT Saigon  . . .<a id="openModal3_2" style="cursor: pointer; font-weight: bold;"> More</a>
        </p>
        <div class="social-member-container">
            <ul class="social-member">
                <li><a href="#"><i class="fab fa-github"></i></a></li>
                <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            </ul>
            </div>
        </div>
    
    <div class="member_right_container">
        <img class="image2" src="image/quang_anh.jpg" alt="Pham Quang Anh">
        <h4><b>Pham Quang Anh</b></h4>
    <p class="member_right">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
    </p>
    <div class="social-member-container">
        <ul class="social-member">
            <li><a href="#"><i class="fab fa-github"></i></a></li>
            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
        </ul>
        </div>     
    </div>
    </div>
    </div>
    
    
    <div class="team-detail-container">
        <div class="detail-small-container">
            <h2>Our Goal</h2>
            <p>We, Tao Hu, always stive to build the most enjoyable and intuitive website with stunning design. We build it not only for you but also for ourselves. Why? Showing you our website, your seal of approval, joy and satisfaction will be our source of happiness and motivation to continue creating more fantastic works.</p>
            </div>
        <div class="detail-small-container">
            <h2>What do we offer?</h2>
            <p>Tao Hu mall will offer you a diverse range of products and shops that suits your tastes and needs. There will certainly be loads of technical functions in guiding and aiding you in your shopping process. Moreover, a clean-designing and pleasing-looking website will also help your e-shopping journey become more enjoyable.  
            </p>           
        </div>
        <div class="detail-small-container">
            <h2>Our challenges</h2>
            <p>We are a team of three members. Due to the lack of manpower, it has been quite challenging in completing the website on time. Even though we have managed to finish designing a website, we still want to further improve it. But of course, in the future, we will constantly enhance and perfect our online mall.
            </p>         
        </div>
    </div>
    </section>
</body>

<?php include(SHARED_PATH . "/mall_footer.php"); ?>

<button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>

<script type="text/javascript" src="shared.js"></script>
<script type="text/javascript" src="about_us.js" ></script>
