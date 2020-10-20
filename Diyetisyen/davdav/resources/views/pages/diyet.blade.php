
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>{{config('app.name','Davdav|Diyetisyenlik')}}</title> 
    <head>
            <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
            <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('styles/news.css')}}">
            <link rel="stylesheet" type="text/css" href="{{asset('styles/news_responsive.css')}}">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
            
    </head>
    <body>
    
    <div class="super_container">
        <!-- Menu -->
        <div class="menu trans_500">
            <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                <div class="menu_close_container"><div class="menu_close"></div></div>			
                <ul>
                    <li class="menu_item"><a href="/index">Anasayfa</a></li>
                    <li class="menu_item"><a href="/about">Hakkinda</a></li>
                    <li class="menu_item"><a href="/services">Hizmetler</a></li>
                    <li class="menu_item"><a href="/diyet">Online Diyet</a></li>
                    <li class="menu_item"><a href="/tarif">Diyet Tarifleri</a></li>
                    <li class="menu_item"><a href="/blog">Ayşe'nin Köşesi</a></li>
                    <li class="menu_item"><a href="/contact">İletişim</a></li>
                </ul>
            </div>
            <div class="menu_social">
                <ul>
                    <li><a href="https://www.facebook.com/Diyetisyen-Ay%C5%9Fe-Davdav-727095737654678/" target="_blank"><i style="font-size:26px;" class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="https://www.instagram.com/dyt_aysedavdav/" target="_blank"><i style="font-size:26px;" class="fab fa-instagram" aria-hidden="true"></i></a></li>	
                    <li><a href="https://mail.google.com/mail/" target="_blank"><i style="font-size:26px;" class="fa fa-envelope" aria-hidden="true"></i></a></li>					
                </ul>
            </div>
        </div>	
        <!-- Home -->
        <div class="home">
            <!-- <div class="background_image" style="background-image:url(images/about.jpg)"></div> -->
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/hakkinda.jpg" data-speed="0.8"></div>
            <!-- Header -->
    <header class="header" id="header">
                <div>
                    <div class="header_top">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="header_top_content d-flex flex-row align-items-center justify-content-start">									
                                        <div class="header_top_extra d-flex flex-row align-items-center justify-content-start ml-auto">
                                            <div class="header_top_whatsapp">
                                                <i class="fab fa-whatsapp"></i>
                                                <span>0544 713 68 50</span>							
                                    </div>
                                            
                                    <div class="header_top_instgram">
                                                <i class="fab fa-instagram"></i>
                                            <a href="https://www.instagram.com/dyt_aysedavdav/" target="_blank" alt="Elbistan diyetisyen ayşe davdav"> <span>dyt_aysedavdav</span> </a>
                                    </div>
                                            
                                    <div class="header_top_facebook">
                                                <i class="fab fa-facebook-square"></i>
                                                <a href="https://www.facebook.com/Diyetisyen-Ay%C5%9Fe-Davdav-727095737654678/"  target="_blank" alt="Elbistan diyetisyen ayşe davdav"> <span>Diyetisyen Ayşe Davdav</span> </a>
                                    </div>
                                            
                                    <div class="header_top_gmail">
                                                <i class="fa fa-envelope"></i>
                                                <a href="https://mail.google.com/mail/" target="_blank" alt="Elbistan diyetisyen ayşe davdav"> <span>dytaysedavdav@gmail.com</span> </a>
                                    </div>
                                                                    
                                        </div>
                                        <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header_nav" id="header_nav_pin">
                        <div class="header_nav_inner">
                            <div class="header_nav_container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                                                <nav class="main_nav">
                                                    <ul class="d-flex flex-row align-items-center justify-content-start">
                                                        <li><a href="/index">Anasayfa</a></li>
                                                        <li><a href="/about">Hakkinda</a></li>
                                                        <li><a href="/services">Hizmetler</a></li>
                                                        <li><a href="/diyet">Online Diyet</a></li>
                                                        <li><a href="/tarif">Diyet Tarifleri</a></li>
                                                        <li><a href="/blog">Ayşe'nin Köşesi</a></li>
                                                        <li><a href="/contact">İletişim</a></li>
                                                    </ul>
                                                </nav>											
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>	
                </div>
            </header>		
    
            <div class="home_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="home_title">Online Diyet</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           

        
	<!-- News -->
	
	<div class="news">
            <div class="container" >
                    <img src="images/ayse.jpg" alt="" />
                        <h1 style="color:black;font-size:38px;">ONLİNE DİYET</h1>
                        <p >
                            <strong>  Online diyet, yoğun iş temposu yüzünden kliniğe gelebilmek için vakti olmayan ya da başka şehirlerde ikamet eden danışanlarımız için hazırlanmış olan beslenme programıdır. </strong> Online diyet de yüz yüze görüşme kadar etkili, kilo verme ya da kilo alma hizmeti sunan başarılı bir yöntemdir. Bu yöntemle çevrimiçi olarak takip edilerek, haftalık randevu stresine girmeden mekandan bağımsız beslenme planınıza ve diyetisyeninize ulaşabileceksiniz. Böylelikle, motivasyon desteğiniz haftalık değil, iletişimde kaldığınız sürece hep yüksek olacaktır.
                        </p>
                        <h3 style="color:black;text-align: left; font-size:28px;">Online diyet programlarımız:</h3> <br>
                        <p style="font-size:16px; color:lightsalmon" > <i class="fas fa-angle-double-right"></i> Zayıflama Diyeti</p>
                        <p style="font-size:16px; color:lightsalmon">  <i class="fas fa-angle-double-right"></i> Kilo Alma Diyeti</p>
                        <p style="font-size:16px; color:lightsalmon" > <i class="fas fa-angle-double-right"></i> Emziklilik Dönemi Diyeti</p>
                        <p style="font-size:16px; color:lightsalmon" > <i class="fas fa-angle-double-right"></i> Çocukluk ve Ergenlik Diyeti</p>
                        <p style="font-size:16px; color:lightsalmon">  <i class="fas fa-angle-double-right"></i> Kilo Koruma Diyeti</p>
                        <p style="font-size:16px; color:lightsalmon" > <i class="fas fa-angle-double-right"></i> Hastalıklarda Diyet</p>
                        <p style="font-size:16px;">
                        Online diyet programında danışanları daha iyi tanımak için;<strong> en geç son 1 ay içerisinde yaptırmış oldukları kan tahlili sonuçlarını ve 2 günlük besin tüketim kayıtlarını istemekteyim. Aylık program 4 hafta sürmektedir ve her hafta yeni bir program hazırlamaktayım. Kilo değişimini doğru bir şekilde kontrol edebilmek için haftada 1 gün sabah aç karnına yerini hiç değiştirmeyeceğiniz tartınızda ölçüm yapmanızı istemekteyim. Diyet yaparken yemek istediğiniz herhangi bir yemek olduğu zaman bir telefon kadar uzağınızdayım. </strong>
                        </p>
                    </div>  
             
            </div>
            
        
            @include('inc/footer')
        </div>

        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
        <script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
        <script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
        <script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
        <script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
        <script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
        <script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
        <script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
        <script src="{{asset('plugins/easing/easing.js')}}"></script>
        <script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
        <script src="{{asset('js/news.js')}}"></script>
        </body>
        </html>