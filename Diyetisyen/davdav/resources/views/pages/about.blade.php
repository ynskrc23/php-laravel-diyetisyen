<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>{{config('app.name','Davdav|Diyetisyenlik')}}</title> 
    <head>
    <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/about.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/about_responsive.css')}}">   
    <link rel="stylesheet" type="text/css" href="{{asset('styles/timeline.css')}}">
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
							<div class="home_title">Hakkında</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    
    <!-- About -->

	<div class="about">
		<div class="container">			
			<ul class="timeline">
	<!-- Item 1 -->
	<li>
		<div class="direction-r">
			<div class="flag-wrapper">
				<span class="flag">İş Hayatım</span>
				<span class="time-wrapper"><span class="time">2018</span></span>
			</div>
			<div class="desc">
			<p> Aralık 2018’den beri Ayşe Davdav Beslenme ve Diyet Danışmanlığında kurucu diyetisyen (Elbistan/Kahramanmaraş) </p>
			</div>
		</div>
	</li>
	
	<!-- Item 2 -->
	<li>
		<div class="direction-l">
			<div class="flag-wrapper">
				<span class="flag">Deneyimler ve Stajlar</span>
				<span class="time-wrapper"><span class="time">2017-2018</span></span>
			</div>
			<div class="desc">
			<p>Mayıs-Haziran 2018 Ankara Zübeyde Hanım Kadın Hastalıkları Hastanesi ana-çocuk stajı</p>
			<p>Nisan-Mayıs 2018 Gazi Üniversitesi Hastanesi çocuk hastalıkları stajı</p>						
			<p>Temmuz-Ağustos 2017 Özel Ankara Umut Hastanesi’nde dış kurum stajı</p>						
			</div>
		</div>
	</li>
	
	<!-- Item 3 -->
	<li>
		<div class="direction-r">
			<div class="flag-wrapper">
				<span class="flag">Üyelikler</span>
				<span class="time-wrapper"><span class="time">2016-2018</span></span>
			</div>
			<div class="desc">
			<p>KEPAN (Klinik Enteral Parenteral Nütrisyon Derneği) üyesiyim.</p>			
			<p>İşaret dili sertifikam var(2017).</p>
			<p>1.BESVAK Prof. Dr. Ayşe BAYSAL Beslenme Günleri Vitamin Mineral kursunda gönüllü çalıştım (14-15 Ocak 2017).</p>			
			</div>
		</div>
	</li>
	
	<!-- Item 4 -->	
	
	<li>
		<div class="direction-l">
			<div class="flag-wrapper">
				<span class="flag">Eğitim Hayatım</span>
				<span class="time-wrapper"><span class="time">2010-2018</span></span>
			</div>			
			<div class="desc"> 	
				<p> ODTÜ’de hazırlık sınıfı öğrencisiyim. 2018-... </p>
				<p> Gazi Üniversitesi Beslenme ve Diyetetik Bölümü 2014-2018 </p>			
				<p> Kilis Nedim Ökmen Anadolu Öğretmen Lisesi 2010-2014 </p>				
			</div>			
		</div>
	</li>

	<!-- Item 5 -->
	<li>
		<div class="direction-r">
			<div class="flag-wrapper">
				<span class="flag">Ben Kimim</span>
				<span class="time-wrapper"><span class="time">1996</span></span>
			</div>
			<div class="desc"> <p> Ayşe Davdav 1996 yılında Kahramanmaraş/Elbistanda Doğudum </p>
			</div>
		</div>
	</li>
</ul>
	
		</div>
		
		
	<!-- FAQ & News -->

	<div class="stuff">
		<div class="container">
			<div class="row">
				<!-- FAQ -->
				<div class="col-lg-12">
					<div class="faq">
						<div class="faq_h3">SERTİFİKALAR & KALİTE BELGELERİ</div>						
	               <div class="why-choose-us">               
                  <div class="panel-group why-choose-group" id="accordion">
				  
                    <div class="panel panel-default ">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                           EĞİTİMLER<span class="fa fa-plus-square"></span>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                         <p>Kilis Nedim Ökmen Anadolu Öğretmen Lisesi 2014 mezunuyum.</p>
						 <p>Gazi Üniversitesi Beslenme ve Diyetetik Bölümünden Haziran 2018’de mezun oldum.</p>
						 <p>ODTÜ’de hazırlık sınıfı öğrencisiyim.</p>
                        </div>
                      </div>
                    </div>
					
                 
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                           SERTİFİKALAR-GÖNÜLLÜ PROJELER-ÜYELİKLER<span class="fa fa-plus-square"></span>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                         <p>KEPAN (Klinik Enteral Parenteral Nütrisyon Derneği) üyesiyim.</p>
						 <p>Hacettepe Gastronomi Topluluğu üyesiyim.</p>
						 <p>İşaret dili sertifikam var(2017).</p>
						 <p>Endokrinoloji/Metabolizma Hastalıkları, Kadın Sağlığı ve 5.Gebelik Sempozyumuna katıldım.</p>
						 <p>1.Gıda ve Tıp Öğrenci kongresine katıldım.</p>
					   </div>
                      </div>
                    </div>
					
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                           DENEYİMLER<span class="fa fa-plus-square"></span>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                         <p>Temmuz-Ağustos 2017 Özel Ankara Umut Hastanesi’nde dış kurum stajı</p>
						 <p>Eylül-Ekim 2017 Gazi MEDİKO’da toplu beslenme stajı</p>
						 <p>Ekim-Kasım 2017’de Özel Ankara Ihlamur Konağı Huzurevi’nde toplu beslenme stajı</p>
						 <p>Kasım 2017-Ocak 2018 Gazi Üniversitesi Hastanesi erişkin stajı</p>
						 <p>Mayıs-Haziran 2018 Ankara Zübeyde Hanım Kadın Hastalıkları Hastanesi ana-çocuk stajı</p>
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
    </div>
    
	<!-- Footer -->
    @include('inc/footer')


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
<script src="{{asset('js/about.js')}}"></script>
</body>
</html>