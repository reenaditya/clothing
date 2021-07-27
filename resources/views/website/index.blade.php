@extends('layouts.web')
@section('content')
<main class="main-content" id="fullpage">
                <div class="sections-wrapper">
                     <!-- BEGIN content_for_index -->
                     <div class="section shopify-section index-section--hero" id="section0">
                        <div id="shopify-section-header" class="">
                  <div data-section-id="header" data-section-type="header-section">
                     <div data-header-style="button" class="header-wrapper header-wrapper--overlay is-light">
                        <div class="announcement">
                           <div class="announcement__wrapper">
                              <div class="announcement__text" data-text="save-an-extra-15-on-orders-over-100">
                                 <button type="button" class="btn site-nav__thumb-button js-toggle-slide-nav mobile-menu">
                                  <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-hamburger" viewBox="0 0 64 64"><path d="M7 15h51M7 32h43M7 49h51"></path></svg>
                                 </button>
                                 <img class="small-logo" src="images/logo-top.png" alt="" style="    max-width: 180px;float: left;">
                                 <a href="#" class="site-nav__link site-nav__link--icon">
                                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-bag" viewBox="0 0 64 64">
                                                <g fill="none" stroke="#000" stroke-width="2">
                                                   <path d="M25 26c0-15.79 3.57-20 8-20s8 4.21 8 20"></path>
                                                   <path d="M14.74 18h36.51l3.59 36.73h-43.7z"></path>
                                                </g>
                                             </svg>
                                            
                                          </a>
                                 <span>Save an extra 15% on orders over $100</span>
                              </div>
                           </div>
                        </div>
                        <header class="site-header" data-overlay="true">
                           <div class="page-width">
                              <div class="header-layout header-layout--right header-layout--mobile-logo-only" data-logo-align="left-right">
                                 <div class="header-item header-item--logo">
                                    
                                    <div class="h1 site-header__logo">
                                      <a href="/" class="site-header__logo-link logo--inverted">
                                       <img class="small--hide" src="images/logo.png" alt="">
                                       <img class="medium-up--hide" src="images/logo.png" alt="">
                                       </a>
                                    </div>
                                 </div>
                                
                                 <div role="navigation" aria-label="Primary" class="header-item header-item--navigation text-right small--hide">
                                    <ul class="site-nav site-navigation small--hide">
                                      <li class="site-nav__item site-nav__expanded-item">
                                          <a href="#" class="site-nav__link ">Home</a>
                                       </li>
                                      <li class="site-nav__item site-nav__expanded-item site-nav--has-dropdown">
                                          <a href="#" class="site-nav__link site-nav__link--has-dropdown">
                                          About
                                          </a>
                                          <ul class="site-nav__dropdown text-left">
                                             <li class="">
                                                <a href="#" class="site-nav__dropdown-link site-nav__dropdown-link--second-level">
                                                About Our Company
                                                </a>
                                             </li>
                                             <li class="">
                                                <a href="#" class="site-nav__dropdown-link site-nav__dropdown-link--second-level">
                                                Rules and Policies
                                                </a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li class="site-nav__item">
                                          <a href="#" class="site-nav__link">
                                            Blog
                                          </a>
                                       </li>
                                       <li class="site-nav__item">
                                          <a href="#" class="site-nav__link">
                                           Contact Us
                                          </a>
                                       </li>
                                       <li class="site-nav__item">
                                          <a href="#" class="site-nav__link">
                                           Login
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="header-item header-item--icons small--hide">
                                    <div class="site-nav site-nav--icons">
                                       <div class="site-nav__icons">
                                         <!--  <a class="site-nav__link site-nav__link--icon small--hide" href="#">
                                             <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-user" viewBox="0 0 64 64">
                                                <path d="M35 39.84v-2.53c3.3-1.91 6-6.66 6-11.41 0-7.63 0-13.82-9-13.82s-9 6.19-9 13.82c0 4.75 2.7 9.51 6 11.41v2.53c-10.18.85-18 6-18 12.16h42c0-6.19-7.82-11.31-18-12.16z"></path>
                                             </svg>
                                             <span class="icon__fallback-text">Log in
                                             </span>
                                          </a> -->
                                          <a href="#" class="site-nav__link site-nav__link--icon">
                                            <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-bag" viewBox="0 0 64 64">
                                                <g fill="none" stroke="#000" stroke-width="2">
                                                   <path d="M25 26c0-15.79 3.57-20 8-20s8 4.21 8 20"></path>
                                                   <path d="M14.74 18h36.51l3.59 36.73h-43.7z"></path>
                                                </g>
                                             </svg>
                                            
                                          </a>
                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </header>
                     </div>
                     <div class="site-nav__thumb-menu">
                        <button type="button" class="btn site-nav__thumb-button js-toggle-slide-nav">
                           <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-hamburger" viewBox="0 0 64 64">
                              <path d="M7 15h51M7 32h43M7 49h51"></path>
                           </svg>
                           <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-close" viewBox="0 0 64 64">
                              <path d="M19 17.61l27.12 27.13m0-27.12L19 44.74"></path>
                           </svg>
                           <span class="icon-menu-label">Menu</span>
                        </button>
                        <a href="/cart" class="site-nav__thumb-cart js-drawer-open-cart js-no-transition" aria-controls="CartDrawer" data-icon="bag">
                           <span class="cart-link">
                              <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-bag" viewBox="0 0 64 64">
                                 <g fill="none" stroke="#000" stroke-width="2">
                                    <path d="M25 26c0-15.79 3.57-20 8-20s8 4.21 8 20"></path>
                                    <path d="M14.74 18h36.51l3.59 36.73h-43.7z"></path>
                                 </g>
                              </svg>
                              <span class="icon__fallback-text">Cart</span>
                              <span class="cart-link__bubble">
                              <span class="cart-link__count" aria-hidden="true">
                              0
                              </span>
                              </span>
                           </span>
                        </a>
                     </div>
                  </div>
                 
               </div>
                        <div data-section-id="1559321610782" data-section-type="video-section" class="video-parent-section hero hero--1559321610782 hero--750px hero--mobile--auto loaded aos-init" data-aos="hero__animation">
                           <div class="hero__media hero__media--1559321610782 hero__media--overlay">
                              <video id="Mp4Video-1559321610782" src="video/videoplayback_recut.mp4" loop="true" muted="" playsinline="true" autoplay="autoplay"></video>
                           </div>
                           <div class="hero__text-wrap">
                              <div class="page-width">
                                 <div class="hero__text-content vertical-bottom horizontal-center">
                                    <div class="hero__text-shadow aos-init" data-aos="">
                                       <h2 class="h1 hero__title appear-delay animate__animated animate__fadeInUp">
                                          Compression Shapewear With Muscle Growth Tech Exclusively Made For Men
                                       </h2>
                                       <div class="hero__link appear-delay-2">
                                          <a href="#size-customizer" class="btn btn--inverse animate__animated animate__fadeInUp">Size It Up Free! 
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="section shopify-section" style="background-color: var(--colorAlt);"  id="section1">
                        <div class="index-section" style="margin: 0;">
                           <div class="page-width feature-row-wrapper">
                              <div class="feature-row">
                                 <div class="feature-row__item text-center feature-row__text feature-row__text--right aos-init animate__animated animate__fadeInUp" data-aos="">
                                    <div class="h1 appear-delay">Support local business</div>
                                    <div class="rte appear-delay-1">
                                       <p>We believe that local businesses are an integral part of a neighbourhood's character. Help us through difficult times and support us by buying a gift card.</p>
                                    </div>
                                    <div class="appear-delay-2">
                                       <a href="#" class="btn btn--tertiary">
                                       Shop gift cards
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-row__item feature-row__item--overlap-images aos-init" style="max-width: 700px" data-aos="">
                                    <div>
                                       <a href="#">
                                          <div class="image-wrap loaded">
                                            <img src="images/gift-card_360x.jpg" alt="" class="feature-row__image lazyautosizes lazyloaded animate__animated animate__fadeInLeft">
                                          </div>
                                       </a>
                                    </div>
                                    <div>
                                       <a href="#">
                                          <div class="image-wrap loaded">

                                            <img src="images/scott-webb.jpg" alt="" class="feature-row__image lazyautosizes lazyloaded animate__animated animate__fadeInRight">
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="size-customizer" class="section shopify-section">
                        <div class="section1">
                           <div>
                              <div class="page-width">
                                 <header class="section-header aos-init animate__animated animate__fadeInUp" data-aos="">
                                    <h2 class="section-header__title appear-delay">
                                       Size Customizer
                                    </h2>
                                    <div class="rte section-header__description section-header__description--large appear-delay-1">
                                       Sculpted fit with 4-way stretch
                                    </div>
                                 </header>

                                 
                                 <!-- Section  -->
<div class="bgwhite mb-5" id="screen2" style="display: block;">
<div class="container">
            <div class="row">
              <!-- <div class="col-md-12 text-center mb-5">
               <img src="images/man1.png" alt="" class="animate__animated animate__fadeInUp">
              </div> -->
                <div class="col-md-12 text-center">
                  <h5 class="text-capitalize fwt900 mb-3 animate__animated animate__fadeInUp">What is your current body style?</h5>
                  <ul class="sz-customise animate__animated animate__fadeInUp">
                    <li><a href="javascript:void(0);" data-weight="fat"><img src="images/thumb-man1.png" alt=""></a></li>
                    <li><a href="javascript:void(0);" data-weight="medium"><img src="images/thumb-man2.png" alt=""></a></li>
                    <li><a href="javascript:void(0);" data-weight="low"><img src="images/thumb-man3.png" alt=""></a></li>
                  </ul>
                  
                </div>
            </div>
            
        </div>
</div>

<!-- Section  -->
<div class="bgwhite mb-5" id="screen3" style="display: none;">
<div class="container">
            <div class="row">
              <!-- <div class="col-md-12 text-center mb-5">
               <img src="images/man2.png" alt="">
              </div> -->
                <div class="col-md-12 text-center">
                  <h5 class="text-capitalize fwt900 mb-3 animate__animated animate__fadeInUp">What is your current height?</h5>
                  <select name="height" class="select animate__animated animate__fadeInUp" id="height">
                  	<option value="">Please select height</option>
                  	@foreach ($heights as $height)
                    	<option value="{{$height->id}}">{{$height->name}}</option>
                  	@endforeach
                  </select>
               </div>
            </div>
            
        </div>
</div>


<!-- Section  -->
<div class="bgwhite mb-5" id="screen4" style="display: none;">
<div class="container">
            <div class="row">
              <!-- <div class="col-md-12 text-center mb-5">
               <img src="images/man2.png" alt="">
              </div> -->
                <div class="col-md-12 text-center">
                  <h5 class="text-capitalize fwt900 mb-3 animate__animated animate__fadeInUp">What is your current Age?</h5>
                  <select name="height" class="select animate__animated animate__fadeInUp" id="age">
                  	<option value="">Please select age</option>
                    @foreach ($ages as $age)
                    	<option value="{{$age->id}}">{{$age->name}}</option>
                  	@endforeach
                  </select>
               </div>
            </div>
            
        </div>
</div>


<!-- Section  -->
<div class="bgwhite mb-5" id="screen5" style="display: none;">
<div class="container">
            <div class="row">
              <!-- <div class="col-md-12 text-center mb-5">
               <img src="images/man2.png" alt="">
              </div> -->
                <div class="col-md-12 text-center">
                  <h5 class="text-capitalize fwt900 mb-3 animate__animated animate__fadeInUp">What is your current weight?</h5>
                  <select name="height" class="select animate__animated animate__fadeInUp" id="weight">
                  	<option value="">Please select weight</option>
                   @foreach ($weights as $weight)
                    	<option value="{{$weight->id}}">{{$weight->name}}</option>
                  	@endforeach
                  </select>
               </div>
            </div>
            
        </div>
</div>


<!-- Section  -->
<div class="bgwhite mb-5" id="screen6" style="display: none;">
<div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 text-center">
                  <div class="row">
                     <div style="width:50%;display: inline-block; margin-top: -40px;">
                       <div id="carousel1" class="carousel carousel-fade" data-ride="carousel"  data-interval="false"></div>

                       
                     </div>
                     <div style="width:50%;display: inline-block; margin-top: -40px;">
                       <div id="carousel2" class="carousel carousel-fade" data-ride="carousel"  data-interval="false"></div>

                        
                     </div>
                      <div class="view-btn" style="display: none;">
                        <a href="javascript:void(0);" class="btn btn--tertiary" id="view-product-detail">View Product Detail</a>
                       </div>


                  </div> 
                </div>
                <div class="col-md-4 text-left discrpt" id="discrpt">
                 <h2 class="h2 product-single__title text-uppercase">Product Title Name</h2>
                 <a href="javascript:void(0);" id="view-close"><img src="images/close.png" alt=""></a>
                 <div class="mrg11 product-single__prices">
                   <span class="product__price" data-product-price="">$170</span>
                 </div>
                 <button type="submit" name="add" class="btn btn--tertiary btn--full add-to-cart">Add to cart </button> 
                <button type="button" class="btn btn--full shopify-payment-button">Buy Now</button>

                <h4 class="dispt">Description</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip. </p>
                </div>  
            </div>
            
        </div>
    </div>
</div>


                              </div>



                              
                           </div>
                        </div>
                     </div>


                     <div class="section shopify-section index-section--hero" id="section2">
                       
                        <div>
                           <div class="hero-wrapper hero-animated">
                              <div class="hero-natural--1559096311192">
                                 <div class="hero loaded" data-natural="true">
                                    <div class="animated__slide animated__slide--1559096311192-0" data-id="1559096311192-0">
                                       <div class="hero__image-wrapper hero__image-wrapper--overlay loaded">
                                          <style data-shopify="">.hero__image--1559096311192-0 {
                                             object-position: center center;
                                             }
                                          </style>
                                          <img class="hero__image hero__image--1559096311192-0 small--hide lazyautosizes lazyloaded" src="images/1_fcd82d9d.jpg">
                                         
                                      </div>
                                    </div>
                                    <div class="animated__slide animated__slide--1559097202495" data-id="1559097202495">
                                       <div class="hero__image-wrapper hero__image-wrapper--overlay loaded">
                                          <style data-shopify="">.hero__image--1559097202495 {
                                             object-position: center center;
                                             }
                                          </style>
                                          <img class="hero__image hero__image--1559096311192-2 small--hide lazyautosizes lazyloaded" src="images/1_fcd82d9d.jpg">
                                          
                                       </div>
                                    </div>
                                    <div class="animated__slide animated__slide--1559096311192-2" data-id="1559096311192-2">
                                       <div class="hero__image-wrapper hero__image-wrapper--overlay loaded">
                                          <style data-shopify="">.hero__image--1559096311192-2 {
                                             object-position: center center;
                                             }
                                          </style>
                                          <img class="hero__image hero__image--1559096311192-2 small--hide lazyautosizes lazyloaded" src="images/3_ad87c34c.jpg">
                                          
                                          
                                       </div>
                                    </div>
                                    <div class="hero__text-wrap">
                                       <div class="page-width">
                                          <div class="hero__text-content vertical-center horizontal-center">
                                             <div class="hero__text-shadow aos-init" data-aos="">
                                                <div class="h1 hero__title appear-delay animate__animated animate__fadeInUp">
                                                   Designed to <br>
                                                   perform.
                                                </div>
                                                <div class="hero__link appear-delay-2 animate__animated animate__fadeInUp">
                                                   <a href="/collections/all" class="btn btn--inverse">
                                                   Shop Training
                                                   </a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                   
                     
                    
                        <div class="section index-section index-section--alt newsletter-section" id="section3">
                           <div class="page-width text-center">
                              <div class="h2 appear-delay animate__animated animate__fadeInUp">Join today and get 10% off your first purchase.</div>
                              <div class="appear-delay-2">
                                 <form method="post" action="" id="newsletter" class="contact-form animate__animated animate__fadeInUp">
                                   
                                    <label for="Email-1559586187853" class="hidden-label">
                                    Enter your email
                                    </label>
                                   
                                    <div class="newsletter-form-group">
                                       <input type="email" value="" placeholder="Enter your email" name="contact[email]" id="Email-1559586187853" class="newsletter-form-group__input" autocapitalize="off">
                                       <button type="submit" class="newsletter-form-group__submit" name="commit" title="Subscribe">
                                          <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-email" viewBox="0 0 64 64">
                                             <path d="M63 52H1V12h62zM1 12l25.68 24h9.72L63 12M21.82 31.68L1.56 51.16m60.78.78L41.27 31.68"></path>
                                          </svg>
                                       </button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                    
                     <div class="section shopify-section" id="section4">
                        <div class="index-section">
                           <div class="page-width feature-row-wrapper">
                              <div class="feature-row">
                                 <div class="feature-row__item feature-row__item--overlap-images aos-init" style="max-width: 700px" data-aos="">
                                    <div>
                                       <a href="#">
                                          <div class="image-wrap" style="height: 0; padding-bottom: 66.64743219849971%;"> 
                                            <img src="images/Stocksy.jpg" alt="" class="feature-row__image lazyautosizes lazyloaded animate__animated animate__fadeInLeft" sizes="348px">
                                          </div>
                                       </a>
                                    </div>
                                    <div>
                                       <a href="/blogs/training-ideas">
                                          <div class="image-wrap" style="height: 0; padding-bottom: 150.0%;">
                                               <img src="images/test2_360x.jpg" alt="" class="feature-row__image lazyautosizes lazyloaded animate__animated animate__fadeInRight" sizes="348px">

                                          </div>
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-row__item text-center feature-row__text feature-row__text--left aos-init animate__animated animate__fadeInUp" data-aos="">
                                    <div class="h1 appear-delay">Online classes</div>
                                    <div class="rte appear-delay-1">
                                       <p>Looking for ways to workout from home? We've got plenty of training programs available in our blog. Updated weekly with new programs.</p>
                                    </div>
                                    <div class="appear-delay-2">
                                       <a href="#" class="btn">
                                       View blog
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="section shopify-section mobile-blog" id="section5">
                        <div class="index-section index-section--alt">
                           <div class="page-width">
                              <div class="grid grid--uniform grid--articles">
                                 <div class="grid__item medium-up--one-third">
                                    <article class="article-listing aos-init animate__animated animate__fadeInLeft" data-aos="">
                                       <div class="article__image-wrap">
                                          <a href="#" class="article__grid-image">
                                             <div class="image-wrap">
                                                <div class="grid__image-ratio grid__image-ratio--cover grid__image-ratio--wide lazyload">
                                                  <img src="images/Screen_Shot.png" alt="" class="feature-row__image lazyautosizes lazyloaded">
                                                </div>
                                                
                                             </div>
                                          </a>
                                       </div>
                                       <div class="article__content text-center">
                                          <div class="article__content-meta">
                                             <div class="h3">
                                                <a href="#">30-minute back blast</a>
                                             </div>
                                             <div class="article__date"></div>
                                             <div class="article__author">by Paul Pritchard</div>
                                          </div>
                                          <div class="rte rte--block">
                                             Get the back you always wanted with this patented French Contrast circuit.
                                          </div>
                                       </div>
                                    </article>
                                 </div>
                                 <div class="grid__item medium-up--one-third">
                                      <article class="article-listing aos-init animate__animated animate__fadeInUp" data-aos="">
                                         <div class="article__image-wrap">
                                            <a href="#" class="article__grid-image">
                                               <div class="image-wrap">
                                                  <div class="grid__image-ratio grid__image-ratio--cover grid__image-ratio--wide lazyload">
                                                    <img src="images/Screen_Shot_2.png" alt="" class="feature-row__image lazyautosizes lazyloaded">
                                                  </div>
                                                  
                                               </div>
                                            </a>
                                         </div>
                                         <div class="article__content text-center">
                                            <div class="article__content-meta">
                                               <div class="h3">
                                                  <a href="#">Training shoes for 2020</a>
                                               </div>
                                               <div class="article__date"></div>
                                               <div class="article__author">by Paul Pritchard</div>
                                            </div>
                                            <div class="rte rte--block">
                                               We're seeing some promising&nbsp;features in the latest training shoes to hit the market.
                                            </div>
                                         </div>
                                      </article>
                                   </div>
                                   <div class="grid__item medium-up--one-third">
                                      <article class="article-listing aos-init animate__animated animate__fadeInRight" data-aos="">
                                         <div class="article__image-wrap">
                                            <a href="#" class="article__grid-image">
                                               <div class="image-wrap">
                                                 <div class="grid__image-ratio grid__image-ratio--cover grid__image-ratio--wide lazyload">
                                                    <img src="images/Screen_Shot_3.png" alt="" class="feature-row__image lazyautosizes lazyloaded">
                                                  </div>
                                                 
                                               </div>
                                            </a>
                                         </div>
                                         <div class="article__content text-center">
                                            <div class="article__content-meta">
                                               <div class="h3">
                                                  <a href="#">10 outdoor cardio ideas</a>
                                               </div>
                                               <div class="article__date"></div>
                                               <div class="article__author">by Paul Pritchard</div>
                                            </div>
                                            <div class="rte rte--block">
                                               Rain or shine, we've got a new exercise&nbsp;that will spice up your outdoor cardio routine.
                                            </div>
                                         </div>
                                      </article>
                                   </div>
                                  <div class="blog-btn appear-delay-2">
                                    <a href="#" class="btn">View blog</a>
                                  </div>
                              </div>
                           </div>
                        </div>
                     </div>
                    
                     <div class="section shopify-section" id="section6">
                        <div class="index-section">
                           <div class="page-width feature-row-wrapper">
                              <div class="feature-row">
                                 <div class="feature-row__item text-center feature-row__text feature-row__text--right aos-init animate__animated animate__fadeInUp" data-aos="">
                                    <div class="h1 appear-delay">Our story</div>
                                    <div class="rte appear-delay-1">
                                       <p>We started with humble beginnings — selling out of our basement and frantically shipping orders as soon as we woke up.</p>
                                    </div>
                                    <div class="appear-delay-2">
                                       <a href="#" class="btn">
                                       About us
                                       </a>
                                    </div>
                                 </div>
                                 <div class="feature-row__item feature-row__item--overlap-images aos-init" style="max-width: 700px" data-aos="">
                                    <div>
                                       <a href="#">
                                          <div class="image-wrap" ><img src="images/test_360x.jpg" alt="" class="feature-row__image lazyautosizes lazyloaded animate__animated animate__fadeInLeft" sizes="348px">
                                          </div>
                                       </a>
                                    </div>
                                    <div>
                                       <a href="#">
                                          <div class="image-wrap"><img src="images/scott-webb.jpg" alt="" class="feature-row__image lazyautosizes lazyloaded animate__animated animate__fadeInRight" sizes="348px">
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                    
                     <div class="section shopify-section index-section--flush" id="section7">
                       
                        
                     
                     
                    

               <div id="shopify-section-footer">
                  <footer class="site-footer text-center">
                    <div class="marquee marquee--1575491589529">
                           <a href="#">
                              <div class="marquee__container">
                                 <div class="marquee__text marquee__text--left">
                                    <span>Follow us for monthly apparel giveaways</span>
                                    <span aria-hidden="true">Follow us for monthly apparel giveaways</span>
                                    <span aria-hidden="true">Follow us for monthly apparel giveaways</span>
                                    <span aria-hidden="true">Follow us for monthly apparel giveaways</span>
                                 </div>
                              </div>
                           </a>
                        </div>
                    <div id="map">
                       <div class="map-section">
                           <div class="map-section__overlay-wrapper">
                              <div class="map-section__overlay">
                                 <div class="h2 appear-delay">Local pickup available</div>
                                 <div class="rte rte-setting appear-delay-1">
                                    <p>8500 Beverly Blvd<br>Los Angeles, CA</p>
                                    <p></p>
                                    <p>Mon - Fri, 8:30am - 10:30pm<br>Sat - Sun, 9:30am - 9:30pm</p>
                                 </div>
                              </div>
                           </div>
                          
                           <div class="map-section__container">
                             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3304.75714659991!2d-118.33043968529995!3d34.075739223939905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2b8c199b270b7%3A0xae653e28fc364c28!2sBeverly%20Blvd%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sin!4v1625908906716!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                           </div>
                        </div>
                     </div>
                     <div class="site-footer__section site-footer__section--newsletter aos-init animate__animated animate__fadeInUp" data-aos="">
                        <div class="page-width">
                           <div class="h2 appear-delay">Join the core club</div>
                           <div class="appear-delay-2">
                              <form method="post" action="" id="newsletter-footer" class="contact-form">
                                <label for="Email-footer" class="hidden-label">
                                 Enter your email
                                 </label>
                                 
                                 <div class="newsletter-form-group">
                                    <input type="email" value="" placeholder="Enter your email" name="contact[email]" id="Email-footer" class="newsletter-form-group__input" autocapitalize="off">
                                    <button type="submit" class="newsletter-form-group__submit" name="commit" title="Subscribe">
                                       <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-email" viewBox="0 0 64 64">
                                          <path d="M63 52H1V12h62zM1 12l25.68 24h9.72L63 12M21.82 31.68L1.56 51.16m60.78.78L41.27 31.68"></path>
                                       </svg>
                                    </button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="page-width copyright">
                       
                        <div class="site-footer__section">
                           <ul class="no-bullets inline-list footer__social animate__animated animate__fadeInUp">
                              <li>
                                 <a target="_blank" href="#">
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-instagram" viewBox="0 0 32 32">
                                       <path fill="#444" d="M16 3.094c4.206 0 4.7.019 6.363.094 1.538.069 2.369.325 2.925.544.738.287 1.262.625 1.813 1.175s.894 1.075 1.175 1.813c.212.556.475 1.387.544 2.925.075 1.662.094 2.156.094 6.363s-.019 4.7-.094 6.363c-.069 1.538-.325 2.369-.544 2.925-.288.738-.625 1.262-1.175 1.813s-1.075.894-1.813 1.175c-.556.212-1.387.475-2.925.544-1.663.075-2.156.094-6.363.094s-4.7-.019-6.363-.094c-1.537-.069-2.369-.325-2.925-.544-.737-.288-1.263-.625-1.813-1.175s-.894-1.075-1.175-1.813c-.212-.556-.475-1.387-.544-2.925-.075-1.663-.094-2.156-.094-6.363s.019-4.7.094-6.363c.069-1.537.325-2.369.544-2.925.287-.737.625-1.263 1.175-1.813s1.075-.894 1.813-1.175c.556-.212 1.388-.475 2.925-.544 1.662-.081 2.156-.094 6.363-.094zm0-2.838c-4.275 0-4.813.019-6.494.094-1.675.075-2.819.344-3.819.731-1.037.4-1.913.944-2.788 1.819S1.486 4.656 1.08 5.688c-.387 1-.656 2.144-.731 3.825-.075 1.675-.094 2.213-.094 6.488s.019 4.813.094 6.494c.075 1.675.344 2.819.731 3.825.4 1.038.944 1.913 1.819 2.788s1.756 1.413 2.788 1.819c1 .387 2.144.656 3.825.731s2.213.094 6.494.094 4.813-.019 6.494-.094c1.675-.075 2.819-.344 3.825-.731 1.038-.4 1.913-.944 2.788-1.819s1.413-1.756 1.819-2.788c.387-1 .656-2.144.731-3.825s.094-2.212.094-6.494-.019-4.813-.094-6.494c-.075-1.675-.344-2.819-.731-3.825-.4-1.038-.944-1.913-1.819-2.788s-1.756-1.413-2.788-1.819c-1-.387-2.144-.656-3.825-.731C20.812.275 20.275.256 16 .256z"></path>
                                       <path fill="#444" d="M16 7.912a8.088 8.088 0 0 0 0 16.175c4.463 0 8.087-3.625 8.087-8.088s-3.625-8.088-8.088-8.088zm0 13.338a5.25 5.25 0 1 1 0-10.5 5.25 5.25 0 1 1 0 10.5zM26.294 7.594a1.887 1.887 0 1 1-3.774.002 1.887 1.887 0 0 1 3.774-.003z"></path>
                                    </svg>
                                  
                                 </a>
                              </li>
                              <li>
                                 <a target="_blank" rel="noopener" href="#">
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-twitter" viewBox="0 0 32 32">
                                       <path fill="#444" d="M31.281 6.733q-1.304 1.924-3.13 3.26 0 .13.033.408t.033.408q0 2.543-.75 5.086t-2.282 4.858-3.635 4.108-5.053 2.869-6.341 1.076q-5.282 0-9.65-2.836.913.065 1.5.065 4.401 0 7.857-2.673-2.054-.033-3.668-1.255t-2.266-3.146q.554.13 1.206.13.88 0 1.663-.261-2.184-.456-3.619-2.184t-1.435-3.977v-.065q1.239.652 2.836.717-1.271-.848-2.021-2.233t-.75-2.983q0-1.63.815-3.195 2.38 2.967 5.754 4.678t7.319 1.907q-.228-.815-.228-1.434 0-2.608 1.858-4.45t4.532-1.842q1.304 0 2.51.522t2.054 1.467q2.152-.424 4.01-1.532-.685 2.217-2.771 3.488 1.989-.261 3.619-.978z"></path>
                                    </svg>
                                   
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div class="site-footer__section">
                           <ul class="no-bullets inline-list site-footer__linklist">
                              <li><a>Copyright © 2021 Slihims, All rights reserved. </a></li>
                           </ul>
                        </div>
                   
                     </div>
                  </footer>
               </div>
                </div>
                  </div>
               </main>
@endsection