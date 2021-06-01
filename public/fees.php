<php>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Fees</title>
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
        <div class='smallcontainer detailproduct'>
            <div class='rowwf'>
                <div class="col2">
                    <h1 class='hf'>All about Fees!</h1>
                    <p class='hf1'> Everything you need to know about the pricing on our website.</p>
                </div>
                <div class="col2">
                    <img src='pics_nham/fee2.png' alt="Goods picture">
                </div>
            </div>
            <div class='rowwf'>
                <div class='col3'>
                    
                    <h2>Monthly renting fee</h2>
                    <p>Monthly renting fee is around 500 - 1000$ depends on
                        your goods and the position you want to place your store
                        in our shopping mall. The fee will be charged after the Contract is signed.
                        <span>
                            <a class='viewmore' href='#monthlyrent'>View more</a>
                        </span>
                    </p>
                    
    
                </div>
                <div class='col3'>
                    
                        <h2>Commission fee</h2>
                        <p>Commission fees will apply to local Marketplace
                            sellers with ≥ 50 completed orders since date
                            joined on TaoHu. The fee will only
                            be charged on orders placed.
                            <span>
                                <a class='viewmore' href='#commissionfee'>View more</a>
                            </span>
                        </p>

                    
                        
                </div>
                <div class='col3'>
                       
                        <h2>Premium member fee</h2>
                        <p>Preminum member fee will be available after you have signed
                            the contract and work with us around one years.
                            <span>
                                <a class='viewmore' href='#premiumfee'>View more</a>
                            </span>
                        </p>
                

                </div>
            </div>
            <div class='rowwf' id='monthlyrent'>
                <div class='col2'>
                    <h1 class='infofee'>Monthly renting fee</h1> 
                    <h2 class='hfee' >Information</h2>
                        <p class='detailfee'> Space Type:	Mall Shop </p>
                        <p class='detailfee'> Floor/Access:	Shopping mall </p>
                        <p class='detailfee'>  Rental Capacity:	Entire</p>
                        <p class='detailfee'>  Size:	800 sq ft</p>
                        <p class='detailfee'> Minimum Rental:	1 month </p>
                    <h2 class='hfee' >Address</h2>
                        <p class='detailfee'> We have two shopping mall: in Ho Chi Minh & Ha Noi. </p>
                        <p class='detailfee'> Ho Chi Minh address: 22 TaoHu Street, 22 District, Ho Chi Minh City.</p>
                        <p class='detailfee'> Ha Noi address: 22 TaoHu Street, 22 District, Hanoi. </p>
                    <h2 class='hfee' >Price</h2>
                        <p class='detailfee'>Around: <span>500$ - 1000$ / month</span></p>
                        <p class='detailfee'>Tel: (+84) 2222222. Please contact us for detail information and contract.</p>
                </div>
                <div class='col2'> <img class='rent' src='pics_nham/rent.png'>
            </div>  
            <div class='rowwf' id='commissionfee'>
                <div class='col2'>
                    <h1 class='infofee'>Commission fee</h1> 
                    <h2 class='hfee' >Information</h2>
                    <p class='detailfee'>Commission fee is an amount charged to Taohu Mall sellers based on 
                        the price of a product listing. We will use Commission fee when you only want to rent 
                        online shop</p>
                    <p class='detailfee'> The commision fee is calculated as a % of the product listing price,
                         before any vouchers or promotional discounts from Taohu are applied. Commission fee
                          varies according to the product category. </p>
                          <h2 class='hfee' >Price</h2>
                    <p class='detailfee'>Around: <span>3% - 5% / product</span></p>
                    <p class='detailfee'>Tel: (+84) 2222222. Please contact us for detail information and contract.</p>
                </div>
                <div class='col2'> <img class='rent' src='pics_nham/money.png'></div>
            <div class='rowwf' id='premiumfee'>
                <div class='col2'>
                    <h1 class='infofee'>Premium member fee</h1> 
                    <h2 class='hfee' >Information</h2>
                    <p class='detailfee'> Our premium fee will only be available when you have signed a contract and rent 
                        a shop for around 12 months.</p>
                    <p class='detailfee'>When unlocked premium membership, you will receive free voucher for Commision fee.</p>
                    <p class='detailfee'>The renting price will also discount around 10% - 20% for our premium customers.
                        You will have free advertisement on our large signboard outside the mall two days every month.
                    </p>
                    <h2 class='hfee' >Price</h2>
                        <p class='detailfee'>Around: <span>100$ - 500$/ month</span></p>
                        <p class='detailfee'>Tel: (+84) 2222222. Please contact us for detail information and contract.</p>
                </div>
                <div class='col2'>
                     <img class='premiumpic' src='pics_nham/premium.png'>
                </div>
            </div>
            </div>
        </div>

            
        </div>
        <br>
        <button id="up-arrow" onclick="topfunction()" title="Go to top"><i class="fa fa-arrow-circle-up"></i></button>
        <script type="text/javascript" src="shared.js"></script>
    </body>



    <footer class="simple-footer">
        <div class="containerf">
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