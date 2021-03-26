<?php
session_start();
$id=$_SESSION['loginid'];
$mysql=new mysqli("localhost","root","","agriworld");
$query=$mysql->query("select * from tb_seller  where loginid=$id ");
foreach($query as $value=>$row)
    {
echo  $name=$row['fname'];
	}


?><!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 ltie8 ltie9" lang="en-US"><![endif]-->
<!--[if IE 8]><html class="ie ie8 ltie9" lang="en-US"><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->


<!--  12:30 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1.0" />

    <title>Agri-World</title>


    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin&amp;' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Noto+Sans%3Aregular%2Citalic%2C700%2C700italic&amp;subset=greek%2Ccyrillic-ext%2Ccyrillic%2Clatin%2Clatin-ext%2Cvietnamese%2Cgreek-ext&amp;' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Merriweather%3A300%2C300italic%2Cregular%2Citalic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin%2Clatin-ext&amp;' type='text/css' media='all' />
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Mystery+Quest%3Aregular&amp;subset=latin%2Clatin-ext&amp;' type='text/css' media='all' />


    <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/superfish/css/superfish.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/dl-menu/component.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/font-awesome-new/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/elegant-font/style.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/fancybox/jquery.fancybox.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/flexslider/flexslider.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/style-responsive.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/style-custom.css' type='text/css' media='all' />
    <link rel='stylesheet' href='plugins/masterslider/public/assets/css/masterslider.main.css' type='text/css' media='all' />
    <link rel='stylesheet' href='css/master-custom.css' type='text/css' media='all' />


</head>

<body data-rsssl=1 class="home page-template-default page page-id-5680 _masterslider _msp_version_3.2.7 woocommerce-no-js">
    <div class="body-wrapper  float-menu" data-home="https://demo.goodlayers.com/greennature/">
        <header class="greennature-header-wrapper header-style-5-wrapper greennature-header-with-top-bar">
            <!-- top navigation -->
            <div class="top-navigation-wrapper">
                <div class="top-navigation-container container">
                    <div class="top-navigation-left">
                        <div class="top-navigation-left-text">
                            Phone : +918845566      Email :agriworld@gmail.com </div>
                            <a href="buy.php"></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <div id="greennature-header-substitute"></div>
            <div class="greennature-header-inner header-inner-header-style-5">
                <div class="greennature-header-container container">
                    <div class="greennature-header-inner-overlay"></div>
                    <!-- logo -->
                    <div class="greennature-logo">
                        <div class="greennature-logo-inner">
                            <a href="index-2.html"><h3 style="color:green">Agri-World</h3>		
							<h4 style="color:white">SELLER NAME:<?php echo $name; ?></h4>
                               <!-- <img src="images/logo.png" alt="" /> </a>-->
                        </div>
                        <div class="greennature-responsive-navigation dl-menuwrapper" id="greennature-responsive-navigation">
                            <button class="dl-trigger">Open Menu</button>
                            <ul id="menu-main-menu" class="dl-menu greennature-main-mobile-menu">
                                <li class="menu-item menu-item-home current-menu-item page_item page-item-5680 current_page_item"><a href="index-2.html" aria-current="page">Home</a></li>
                                <li class="menu-item menu-item-has-children menu-item-15"><a href="#">Registration</a>
                                    <ul class="dl-submenu">
                                        <li class="menu-item"><a href="act-now.html">Farmer</a></li>
                                        <li class="menu-item"><a href="about-1.html">seller</a></li>
                                        <li class="menu-item"><a href="about-2.html">About Us 2</a></li>
                                        <li class="menu-item"><a href="service.html">Service</a></li>
                                        <li class="menu-item"><a href="personnel-2.html">Personnel</a></li>
                                        <li class="menu-item"><a href="qa.html">Q&#038;A</a></li>
                                        <li class="menu-item"><a href="contact-page.html">Contact Page 1</a></li>
                                        <li class="menu-item"><a href="contact-page-2.html">Contact Page 2</a></li>
                                        <li class="menu-item menu-item-12"><a href="404error.html">404 Page</a></li>
                                        <li class="menu-item"><a href="testimonial.html">Testimonial</a></li>
                                        <li class="menu-item menu-item-has-children"><a href="gallery-3-columns-without-caption.html">Gallery</a>
                                            <ul class="dl-submenu">
                                                <li class="menu-item"><a href="gallery-2-columns-without-caption.html">Gallery 2 Columns Without Caption</a></li>
                                                <li class="menu-item"><a href="gallery-2-columns-with-caption.html">Gallery 2 Columns With Caption</a></li>
                                                <li class="menu-item"><a href="gallery-3-columns-without-caption.html">Gallery 3 Columns Without Caption</a></li>
                                                <li class="menu-item"><a href="gallery-3-columns-with-caption.html">Gallery 3 Columns With Caption</a></li>
                                                <li class="menu-item"><a href="gallery-4-columns-without-caption.html">Gallery 4 Columns Without Caption</a></li>
                                                <li class="menu-item"><a href="gallery-4-columns-with-caption.html">Gallery 4 Columns With Caption</a></li>
                                                <li class="menu-item"><a href="gallery-5-columns-without-caption.html">Gallery 5 Columns Without Caption</a></li>
                                                <li class="menu-item"><a href="gallery-5-columns-with-caption.html">Gallery 5 Columns With Caption</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                               
                            </ul>
                        </div>
                    </div>

                    <!-- navigation -->
                    <div class="greennature-navigation-wrapper">
                        <nav class="greennature-navigation" id="greennature-main-navigation">
                            <ul id="menu-main-menu-1" class="sf-menu greennature-main-menu">
                                <li class=" current-menu-item greennature-normal-menu"><a href="seller_update.php">profile Updation</a></li>
								<li class="menu-item menu-item-home current-menu-item greennature-normal-menu"><a href="crop_view_table.php"><i class=""></i>Buy Crops</a></li>
								<li class=" current-menu-item greennature-normal-menu"><a href="seller_auction_table.php"><i class=""></i>Auction</a></li>
								<li class="menu-item menu-item-has-children greennature-normal-menu"><a href="product.php" class="sf-with-ul-pre"><i class="fa fa-file-text-o"></i>Add Product</a>
								
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children"><a href="gallery-3-columns-without-caption.html" class="sf-with-ul-pre">Gallery</a>
                                            
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-childrenmenu-item menu-item-has-children greennature-mega-menu"><a href="logout.php" class="sf-with-ul-pre"><i class="fa fa-globe"></i>Logout</a>
                                    </li>
                                <li class="menu-item menu-item-has-childrenmenu-item menu-item-has-children greennature-normal-menu"><a href="blog-full-with-right-sidebar.html" class="sf-with-ul-pre"></a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="blog-full-with-right-sidebar.html">Blog Full</a></li>
                                        <li class="menu-item menu-item-has-children menu-item-"><a href="#" class="sf-with-ul-pre">Blog Column</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-1-column.html">Blog 1 Column (Right Sidebar)</a></li>
                                                <li class="menu-item"><a href="blog-2-columns.html">Blog 2 Columns (Right Sidebar)</a></li>
                                                <li class="menu-item"><a href="blog-3-columns.html">Blog 3 Columns</a></li>
                                                <li class="menu-item"><a href="blog-4-columns.html">Blog 4 Columns</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children menu-item-7"><a href="#" class="sf-with-ul-pre">Blog Masonry</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="blog-2-columns-masonry.html">Blog 2 Columns &#8211; Masonry (Right Sidebar)</a></li>
                                                <li class="menu-item"><a href="blog-3-columns-masonry.html">Blog 3 Columns – Masonry</a></li>
                                                <li class="menu-item"><a href="blog-4-columns-masonry.html">Blog 4 Columns – Masonry</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <a class="greennature-donate-button greennature-lb-payment"><span class="greennature-button-overlay"></span><span class="greennature-button-donate-text">Donate</span></a>

                        </nav>
                        <div class="greennature-navigation-gimmick" id="greennature-navigation-gimmick"></div>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </header>
        <!-- is search -->
        <div class="content-wrapper">
            <div class="greennature-content">

                <!-- Above Sidebar Section-->

                <!-- Sidebar With Content Section-->
                <div class="with-sidebar-wrapper">
                    <section id="content-section-1">
                        <div class="greennature-full-size-wrapper gdlr-show-all no-skin" style="padding-bottom: 0px;  background-color: #ffffff; ">
                            <div class="greennature-master-slider-item greennature-slider-item greennature-item" style="margin-bottom: 0px;">
                                <!-- MasterSlider -->
                                <div id="P_slider_1" class="master-slider-parent ms-parent-id-1">

                                    <!-- MasterSlider Main -->
                                    <div id="slider_1" class="master-slider ms-skin-default">

                                        <div class="ms-slide" data-delay="7" data-fill-mode="fill">
                                            <img src="images/soil.jpg" alt="">

                                            <a href="#" target="_self" class="ms-layer ms-btn ms-btn-round ms-btn-n msp-preset-btn-159" data-effect="t(true,n,n,-500,n,n,n,n,n,n,n,n,n,n,n)" data-duration="400" data-delay="987" data-ease="easeOutQuint" data-type="button" data-offset-x="1" data-offset-y="208" data-origin="ml" data-position="normal">Learn More</a>

                                            <div class="ms-layer  msp-cn-1-3" style="" data-effect="t(true,150,n,n,n,n,n,n,n,n,n,n,n,n,n)" data-duration="437" data-delay="625" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="105" data-origin="ml" data-position="normal">
                                                    Seller</div>

                                            <div class="ms-layer  msp-cn-1-2" style="" data-effect="t(true,150,n,n,n,n,n,n,n,n,n,n,n,n,n)" data-duration="425" data-delay="325" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="-5" data-origin="ml" data-position="normal">
                                                Welcome</div>

                                            <div class="ms-layer  msp-cn-1-1" style="" data-effect="t(true,150,n,n,n,n,n,n,n,n,n,n,n,n,n)" data-duration="350" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="-100" data-origin="ml" data-position="normal">
                                                </div>

                                        </div>
                                   
                <!-- Below Sidebar Section-->

            </div>
            <!-- greennature-content -->
            <div class="clear"></div>
        </div>
        <!-- content wrapper -->

        <footer class="footer-wrapper">
            <div class="footer-container container">
                <div class="footer-column three columns" id="footer-widget-1">
                    <div id="text-5" class="widget widget_text greennature-item greennature-widget">
                        <div class="textwidget"><h1 style="color:green">Agri-World</h1>
                            <!--<p><img src="upload/logo-light.png" style="width: 170px;" alt="" /></p>-->
                            <p>"We Build a Healthy World ."</p>
                        </div>
                    </div>
                </div>
                <div class="footer-column three columns" id="footer-widget-2">
                    <div id="text-9" class="widget widget_text greennature-item greennature-widget">
                        <h3 class="greennature-widget-title">Contact Info</h3>
                        <div class="clear"></div>
                        <div class="textwidget"><span class="clear"></span><span class="greennature-space" style="margin-top: -6px; display: block;"></span> Address: TVM.Center Farmer Association

                            <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                            <i class="greennature-icon fa fa-phone" style="vertical-align: middle; color: #fff; font-size: 16px; "></i> +1800-222-3333

                            <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                            <i class="greennature-icon fa fa-mobile" style="vertical-align: middle; color: #fff; font-size: 20px; "></i> +1833-232-3443

                            <span class="clear"></span><span class="greennature-space" style="margin-top: 10px; display: block;"></span>

                            <i class="greennature-icon fa fa-envelope-o" style="vertical-align: middle; color: #fff; font-size: 16px; "></i> contact@yourdomain.com</div>
                    </div>
                </div>
                <!--<div class="footer-column three columns" id="footer-widget-3">
                    <div id="gdlr-recent-post-widget-5" class="widget widget_gdlr-recent-post-widget greennature-item greennature-widget">
                        <h3 class="greennature-widget-title">Recent Posts</h3>
                        <div class="clear"></div>
                        <div class="greennature-recent-post-widget">
                            <div class="recent-post-widget">
                                <div class="recent-post-widget-thumbnail">
                                    <a href="#"><img src="upload/shutterstock_294481373-150x150.jpg" alt="" width="150" height="150" /></a>
                                </div>
                                <div class="recent-post-widget-content">
                                    <div class="recent-post-widget-title"><a href="#">Sem Porta Mollis Parturi</a></div>
                                    <div class="recent-post-widget-info">
                                        <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-clock-o"></i><a href="#">21 Mar 2014</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="recent-post-widget">
                                <div class="recent-post-widget-thumbnail">
                                    <a href="#"><img src="upload/shutterstock_181393724-150x150.jpg" alt="" width="150" height="150" /></a>
                                </div>
                                <div class="recent-post-widget-content">
                                    <div class="recent-post-widget-title"><a href="#">Nullam Lorem Mattis Purus</a></div>
                                    <div class="recent-post-widget-info">
                                        <div class="blog-info blog-date greennature-skin-info"><i class="fa fa-clock-o"></i><a href="#">21 Mar 2014</a></div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
               <div class="footer-column three columns" id="footer-widget-4">
                    <div id="gdlr-recent-portfolio2-widget-6" class="widget widget_gdlr-recent-portfolio2-widget greennature-item greennature-widget">
                        <h3 class="greennature-widget-title">Recent Works</h3>
                        <div class="clear"></div>
                        <div class="greennature-recent-port2-widget">
                            <div class="recent-port-widget-thumbnail">
                                <a href="#"><img src="upload/shutterstock_161515241-150x150.jpg" alt="" width="150" height="150" /></a>
                            </div>
                            <div class="recent-port-widget-thumbnail">
                                <a href="#"><img src="upload/shutterstock_133689230-150x150.jpg" alt="" width="150" height="150" /></a>
                            </div>
                            <div class="recent-port-widget-thumbnail">
                                <a href="#"><img src="upload/shutterstock_53600221-150x150.jpg" alt="" width="150" height="150" /></a>
                            </div>
                            <div class="recent-port-widget-thumbnail">
                                <a href="#"><img src="upload/shutterstock_124871620-150x150.jpg" alt="" width="150" height="150" /></a>
                            </div>
                            <div class="recent-port-widget-thumbnail">
                                <a href="#"><img src="upload/shutterstock_281995004-150x150.jpg" alt="" width="150" height="150" /></a>
                            </div>
                            <div class="recent-port-widget-thumbnail">
                                <a href="#"><img src="upload/shutterstock_256181956-150x150.jpg" alt="" width="150" height="150" /></a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>-->

            <div class="copyright-wrapper">
                <div class="copyright-container container">
                    <div class="copyright-left">
                        <a href="#"><i class="greennature-icon fa fa-facebook" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-twitter" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-dribbble" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-pinterest" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-google-plus" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a> <a href="#"><i class="greennature-icon fa fa-instagram" style="vertical-align: middle;color: #bbbbbb;font-size: 20px"></i></a>
                    </div>
                    <div class="copyright-right">
                       <a target="_blank" href="https://www.templateshub.net"></a> </div>
                    <div class="clear"></div>
                </div>
            </div>
        </footer>

        <!--<div class="greennature-payment-lightbox-overlay" id="greennature-payment-lightbox-overlay"></div>
        <div class="greennature-payment-lightbox-container" id="greennature-payment-lightbox-container">
            <div class="greennature-payment-lightbox-inner">
                <form class="greennature-payment-form" id="greennature-payment-form" >
                    <h3 class="greennature-payment-lightbox-title">
				<span class="greennature-head">You are donating to :</span>
				<span class="greennature-tail">Greennature Foundation</span>
			</h3>

                    <div class="greennature-payment-amount">
                        <div class="greennature-payment-amount-head">How much would you like to donate?</div>
                        <a class="greennature-payment-price-preset greennature-active" data-val="10">$10</a>
                        <a class="greennature-payment-price-preset" data-val="20">$20</a>
                        <a class="greennature-payment-price-preset" data-val="30">$30</a>
                        <input class="greennature-payment-price-fill" type="text" placeholder="Or Your Amount(USD)" />
                        <input class="greennature-payment-price" type="hidden" name="amount" value="10" />

                        <input class="greennature-payment-price" type="hidden" name="a3" value="10">
                    </div>

                    <div class="greennature-paypal-attribute">
                        <span class="greennature-head">Would you like to make regular donations?</span>
                        <span class="greennature-subhead">I would like to make </span>
                        <select name="t3" class="greennature-recurring-option">
                            <option value="0">one time</option>
                            <option value="W">weekly</option>
                            <option value="M">monthly</option>
                            <option value="Y">yearly</option>
                        </select>
                        <span class="greennature-subhead">donation(s)</span>
                        <input type="hidden" name="p3" value="1" />
                        <div class="greennature-recurring-time-wrapper">
                            <span class="greennature-subhead">How many times would you like this to recur? (including this payment) *</span>
                            <select name="srt" class="greennature-recurring-option">
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <input type="hidden" name="cmd" value="_xclick">
                        <input type="hidden" name="bn" value="PP-BuyNowBF">
                        <input type="hidden" name="src" value="1">
                        <input type="hidden" name="sra" value="1">
                    </div>

                    <div class="greennature-form-fields">
                        <div class="six columns">
                            <div class="columns-wrap greennature-left">
                                <span class="greennature-head">Name *</span>
                                <input class="greennature-require" type="text" name="name">
                            </div>
                        </div>
                        <div class="six columns">
                            <div class="columns-wrap greennature-right">
                                <span class="greennature-head">Last Name *</span>
                                <input class="greennature-require" type="text" name="last-name">
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="six columns">
                            <div class="columns-wrap greennature-left">
                                <span class="greennature-head">Email *</span>
                                <input class="greennature-require greennature-email" type="text" name="email">
                            </div>
                        </div>
                        <div class="six columns">
                            <div class="columns-wrap greennature-right">
                                <span class="greennature-head">Phone</span>
                                <input type="text" name="phone">
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="six columns">
                            <div class="columns-wrap greennature-left">
                                <span class="greennature-head">Address</span>
                                <textarea name="address"></textarea>
                            </div>
                        </div>
                        <div class="six columns">
                            <div class="columns-wrap greennature-right">
                                <span class="greennature-head">Additional Note</span>
                                <textarea name="additional-note"></textarea>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>

                    <div class="greennature-payment-method">
                        <img class="greennature-active" src="images/paypal.png" alt="paypal" /><img src="images/stripe.png" alt="stripe" />
                        <input type="hidden" name="payment-method" value="paypal" /> </div>
                    <div class="greennature-message"></div>
                    <div class="greennature-loading">Loading...</div>
                    <input type="submit" value="Donate Now" />
                </form>
            </div>
        </div>
    </div>-->
    <!-- body-wrapper -->

    <script type='text/javascript' src='js/jquery/jquery.js'></script>
    <script type='text/javascript' src='js/jquery/jquery-migrate.min.js'></script>
    <script>
        var ms_grabbing_curosr = 'plugins/masterslider/public/assets/css/common/grabbing.html',
            ms_grab_curosr = 'plugins/masterslider/public/assets/css/common/grab.html';
    </script>
    <script type='text/javascript' src='plugins/superfish/js/superfish.js'></script>
    <script type='text/javascript' src='js/hoverIntent.min.js'></script>
    <script type='text/javascript' src='plugins/dl-menu/modernizr.custom.js'></script>
    <script type='text/javascript' src='plugins/dl-menu/jquery.dlmenu.js'></script>
    <script type='text/javascript' src='plugins/jquery.easing.js'></script>
    <script type='text/javascript' src='plugins/fancybox/jquery.fancybox.pack.js'></script>
    <script type='text/javascript' src='plugins/fancybox/helpers/jquery.fancybox-media.js'></script>
    <script type='text/javascript' src='plugins/fancybox/helpers/jquery.fancybox-thumbs.js'></script>
    <script type='text/javascript' src='plugins/flexslider/jquery.flexslider.js'></script>
    <script type='text/javascript' src='plugins/jquery.isotope.min.js'></script>
    <script type='text/javascript' src='js/plugins.js'></script>
    <script type='text/javascript' src='plugins/masterslider/public/assets/js/masterslider.min.js'></script>
    <script type='text/javascript' src='plugins/jquery.transit.min.js'></script>
    <script type='text/javascript' src='plugins/gdlr-portfolio/gdlr-portfolio-script.js'></script>




    <script>
    (function ( $ ) {
        "use strict";

        $(function () {
            var masterslider_d1da = new MasterSlider();

            // slider controls
			masterslider_d1da.control('arrows'     ,{ autohide:true, overVideo:true  });
			masterslider_d1da.control('bullets'    ,{ autohide:false, overVideo:true, dir:'h', align:'bottom', space:6 , margin:25  });
            // slider setup
            masterslider_d1da.setup("slider_1", {
				width           : 1140,
				height          : 800,
				minHeight       : 0,
				space           : 0,
				start           : 1,
				grabCursor      : false,
				swipe           : true,
				mouse           : false,
				keyboard        : true,
				layout          : "fullwidth",
				wheel           : false,
				autoplay        : false,
                instantStartLayers:false,
				mobileBGVideo:false,
				loop            : true,
				shuffle         : false,
				preload         : 0,
				heightLimit     : true,
				autoHeight      : false,
				smoothHeight    : true,
				endPause        : false,
				overPause       : true,
				fillMode        : "fill",
				centerControls  : true,
				startOnAppear   : false,
				layersMode      : "center",
				autofillTarget  : "",
				hideLayers      : false,
				fullscreenMargin: 0,
				speed           : 20,
				dir             : "h",
				parallaxMode    : 'swipe',
				view            : "basic"
            });
            

            
            $("head").append( "<link rel='stylesheet' id='ms-fonts'  href='http://fonts.googleapis.com/css?family=Montserrat:regular,700%7CCrimson+Text:regular' type='text/css' media='all' />" );

            window.masterslider_instances = window.masterslider_instances || {};
            window.masterslider_instances["5_d1da"] = masterslider_d1da;
         });
        
    })(jQuery);
    </script> 
</body>

<!--  16:08 GMT -->
</html>