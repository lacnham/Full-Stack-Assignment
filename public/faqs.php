<php>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FAQS</title>
        <link rel='stylesheet' href='css_uniqlo/test.css'>
        <link rel='stylesheet' href='css_uniqlo/css.css'>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link href="homepage_2.css" type="text/css" rel="stylesheet">
        <link href="homepage_2_2.css" type="text/css" rel="stylesheet">
        <link href="css.css" type="text/css" rel="stylesheet">
        <link href="css2.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
        <script src="https://kit.fontawesome.com/e1571d95d8.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header">
            <div class="header-container">
                <div class="navbar">
                    <div class="logo">
                        <img src="assets/tom's file extrawork-1.svg " alt="Black Lotus logo" width="70px">
                    </div>
                    <div class="taohu">
                        <svg width="168" height="28" viewBox="0 0 168 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.087 4.824L14.223 27.18L10.803 27.072L11.739 4.716L0.146953 4.32L0.290953 0.899999L27.003 1.872L26.931 5.22L15.087 4.824ZM51.1497 15.948L51.7617 19.332L41.4657 21.06L38.3697 27.864L35.2737 26.496L47.2617 0.287998L50.3577 0.251999L61.3017 23.256L58.2417 24.732L48.8097 5.004L43.1937 17.316L51.1497 15.948ZM75.3765 26.604L73.7205 24.768L75.3405 4.464L76.8885 2.952L92.8005 1.332L94.7085 2.988L95.4645 25.092L93.7365 26.82L75.3765 26.604ZM92.0445 23.4L91.3605 4.86L78.5805 6.192L77.2845 23.22L92.0445 23.4ZM128.139 10.08L128.211 1.656L131.595 1.728L131.379 26.46L127.995 26.424L128.103 13.5L112.911 14.796L112.335 26.496L108.951 26.316L110.175 1.584L113.559 1.764L113.055 11.412L128.139 10.08ZM147.248 25.452L145.664 23.76L145.268 2.232L148.652 2.124L149.048 22.14L162.368 23.148L164.276 1.512L167.624 1.8L165.608 25.092L163.772 26.64L147.248 25.452Z" fill="black"/>
                        </svg>
                            
                    </div>
                    <div class="search-box">
                        <input class="search-txt" type="text" name="search-text" placeholder="Type to search">
                        <a class="search-btn" href="#"></a> 
                        <i class="fas fa-search"></i>
                    </div> 
                    <div>
                        <a href="Login_box.php" id="logoutBtn" onclick="logout()"><i class="fas fa-sign-in-alt"></i></a>  
                        <span id="cicrle_logoutbtn"></span>
                    </div>
                    
                    <nav>
                        <div class="menu">
                            <button><i class="fa fa-bars"></i></button>
                            <ul>
                            <li>
                                <a href="index.php">
                                    <div class="icon">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                    </div>
                                    <div class="name"><span data-text="Home">Home</span></div>
                                </a>
                            </li>
                            <li>
                                <a href="purchase.php" id="cartLink">
                                    <div class="icon">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </div>
                                    <div class="name"><span data-text="Cart">Cart</span></div>
                                </a>
                            </li>
                            <li>
                                <a href="copyright.php">
                                    <div class="icon">
                                        <i class="fa fa-file-text" aria-hidden="true"></i>
                                        <i class="fa fa-file-text" aria-hidden="true"></i>
                                    </div>
                                    <div class="name"><span data-text="Policy">Policy</span></div>
                                </a>
                            </li>
                            <li>
                                <a href="faqs.php">
                                    <div class="icon">
                                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                                    </div>
                                    <div class="name"><span data-text="FAQs">FAQs</span></div>
                                </a>
                            </li>
                            <li>
                                <a href="about_us.php">
                                    <div class="icon">
                                        <i class="fa fa-address-card" aria-hidden="true"></i>
                                        <i class="fa fa-address-card" aria-hidden="true"></i>
                                    </div>
                                    <div class="name"><span data-text="Team">Team</span></div>
                                </a>
                            </li>
                            <li>
                                <a href="contactform.php">
                                    <div class="icon">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                    <div class="name"><span data-text="Contact">Contact</span></div>
                                </a>
                            </li>
                            <li>
                                <a href="my-account.php">
                                    <div class="icon">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                    <div class="name"><span data-text="Sign In" id="Account_Signin">Sign In</span></div>
                                </a>
                            </li>
                            </ul>
                        </div>         
                    </nav>        
                </div>
            </div>
        </div>
        <div class='smallcontainer'>
            <div class='rowwf'>
                <div class="col2">
                    <h1 class='hfaq'>Frequently Asked Questions</h1>
                </div>
                <div class="col2">
                    <img src='pics_nham/faqs.png' alt="Goods picture">
                </div>
            </div>
            <div class = 'smallcontainer'>
                <h1 class='hfaq'>What is TaoHu?</h1>
                <p class='hf1'> 
                    Not Tofu. TaoHu is a leading online retailer and shopping mall of products that inform, educate, and inspire. The TaoHu group also has stores
                     in Viet Nam. Because we exist "virtually" on the Web, we have unlimited shelf space and can offer a selection of over 17 million titles including over
                      13 billion Book titles and over 1 billion music titles. Compare that to a typical physical-world book superstore, which carries around 170,000 books, or
                       a typical physical-world music superstore, which carries around 34,000 CDs.
                </p>
                <h1 class='hfaq'>What are the opening hours at TaoHu Shopping Centre?</h1>
                <p>
                    <dl class='hf1'>
                        <li>Shopping Mall: Everyday from 00:00 am - 24:00 pm.</li>
                        <li>Online shopping mall: Everyday from 00:00 am - 24:00 pm except Sunday.</li>
                    </dl>
                </p>
                <p>
                    <h1 class='hfaq'>When are the car parks open? </h1>
                        <dl class='hf1'>
                            <li>The Wjbu and Weeb car parks are open.</li>
                            <li>The Car Parks are open everyday 24 hours. </li>
                        </dl>
                <h1 class='hfaq'>Are dogs allowed in TaoHu?</h1>
                        <p class ='hf1'>YESSSSSSSSSSSSSSSSSSSSS WELCOME ALL DOGE AND CATE.</p>
                </p>
                <h1 class='hfaq'>COVID-19 Health and Safety in stores</h1>
                <h3 class ='hfaq1'>Distance, respect and protect</h3>
                <p class='hf1'>
                    At TaoHu, the health and well-being of our clients, teams and communities
                     are our top priorities and our guiding principles are distance, respect 
                     and protect.
                    <br>
                    All stores that are reopened will be following these strict safety protocols based
                     on current guidance from public health officials and local governance to ensure we 
                     continue to help fight the spread of the virus.
                </p>
                <h3 class ='hfaq1'>Personal protective equipment</h3>
                <p class='hf1'>
                    Clients are required to wear face coverings to enter a store as well as follow any local government mandates, and a disposable 
                    face covering will be provided upon request should you not have one.
                    <br>
                    TaoHu is not requiring clients to wear gloves while shopping, however we encourage you to use the provided hand sanitizer upon entering our stores.
                    To help maintain a safe environment, our employees will be wearing face coverings at all times.
                </p>
                <h3 class ='hfaq1'>Social distancing</h3>
                <p class='hf1'>
                    TaoHu is limiting the number of people in our store to ensure social distancing is practiced, therefore we appreciate your patience as you
                     may be required to wait in line to enter the store.
                     <br>
                    Please practice social distancing and remain at least six feet (two arms lengths) from other persons both inside the store and while waiting 
                    in line to enter.
                    <br>
                    Kindly refrain from shaking hands or other physical contact.
                    TaoHu stores will continue to accept contact-less mobile payment including Apple Pay, Samsung Pay and Android Pay.
                </p>
                <h1 class='hfaq'>Return Products</h1>
                <h3 class ='hfaq1'>In-store Purchases:</h3>
                <p class='hf1'>
                    TaoHu will accept exchanges or returns of eligible merchandise within 14 days of purchase.Refunds and exchanges will not
                     be accepted for personalized products, made to measure or made to order products, or fragrance and beauty products. Refunds will be issued in the same form as original payment.
                </p>
                <h3 class ='hfaq1'>Online Purchases:</h3>
                <p class='hf1'>
                    The return window for online purchases is 30 days from the date you received your purchase. You may return products by mail following the return instructions provided in your digital invoice.
                     You can also return your purchase to your local TaoHu store and it must be within 30 days from the date you received your purchase.  
                </p>
                <h1 class='hfaq'>Fees</h1>
                <p class = 'hf1'>Please go to this page for more information.<a href='fees.php' class='ahfaq'>Fees</a></p>
                <h1 class='hfaq'>Copyright, ToS, and Privacy Policy</h1>
                <p class = 'hf1'>Please go to this page for more information.<a href='copyright.php' class='ahfaq'>Copyright, ToS, and Privacy Policy</a></p>
                <h1 class='hfaq'>More Questions?</h1>
                <p class='hf1'>Fill the form for further questions: <a href='contactform.php' class='ahfaq'>Contact form</a>
                <br>
                or
                <br>
                Contact us through:
                <br>
                Tel:(+84)2222222222.
                <br>
                Email: taohu.service@rmit.edu.vn
            </p>
            </div>
            </div>
        </div>
        <button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
        <script type="text/javascript" src="shared.js"></script>
    </body>
    <footer class="simple-footer">
        <div class="container">
            <div class="content">
                <ul class="footer-nav">
                    <li><a href="index.php#search-box">Search</a></li>
                    <li><a href="about_us.php">About Us</a></li>
                    <li><a href="contactform.php">Contact</a></li>
                    <li><a href="fees.php">Fees</a></li>
                    <li><a href="copyright.php">Term of Service</a></li>
                    <li><a href="faqs.php">FAQs</a></li>
                </ul>
                
            
                <ul class="socials">
                    <li><a href="https://github.com/lacnham/php-CSS-Assignment"><i class="fab fa-github"></i></a></li>
                    <li><a href="mailto:s3864120@rmit.edu.vn"><i class="fa fa-envelope"></i></a></li>
                    <li><a href="https://www.facebook.com/linh.vu.790/"><i class="fab fa-facebook"></i></a></li>
                </ul>
        </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2021 <span>taohu</span>. All Rights Reserved | s3878533@rmit.edu.vn </p>
        </div>
        
    </footer>
</php>