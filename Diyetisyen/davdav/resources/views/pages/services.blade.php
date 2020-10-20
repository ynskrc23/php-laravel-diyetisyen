<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>{{config('app.name','Davdav|Diyetisyenlik')}}</title> 
    <head>

        <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
        <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/services.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/services_responsive.css')}}">
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/hizmet.jpg" data-speed="0.8"></div>

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
							<div class="home_title">Hizmetler</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Tabs -->

	<div class="tabs_container">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">

					<!-- Tabs -->
					<div class="tabs d-flex flex-row align-items-center justify-content-start flex-wrap">
						<div class="tab active">
							<div class="tab_title">Uzmanlık Alanları</div>
							<div class="tab_text"></div>
						</div>
						<div class="tab">
							<div class="tab_title">Hastalıklarda Beslenme</div>
							<div class="tab_text"></div>
						</div>
						<div class="tab">
							<div class="tab_title">Vücut Analizi</div>
							<div class="tab_text"></div>
						</div>
						
					</div>
				</div>
				<div class="col-lg-7">

					<!-- Panels -->
					<div class="tab_panels">

						<!-- Panel -->
						<div class="tab_panel active">
							<div class="tab_panel_content">
								<div class="row">
									<div class="col-lg-5">
										<div class="tab_image"><img src="images/ayse.jpg" alt="elbistan diyetisyen ayse davdav"></div>
									</div>
									<div class="col-lg-7">
										<div class="tab_list">
											<ul>
												<li>
													<div class="tab_list_title">Zayıflama</div>
													<div class="tab_list_text"><p></p></div>
												</li>
												<li>
													<div class="tab_list_title">Kilo Alma</div>
													<div class="tab_list_text"><p></p></div>
												</li>
												<li>
													<div class="tab_list_title">Hamilelik Ve Emziklilik Döneminde Beslenme</div>
													<div class="tab_list_text"><p></p></div>
												</li>
												
												<li>
													<div class="tab_list_title">Çocukluk Ve Ergenlik Döneminde Beslenme</div>
													<div class="tab_list_text"><p></p></div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Panel -->
						<div class="tab_panel">
							<div class="tab_panel_content">
								<div class="tab_list">
									<ul>
										<li>
											<div class="tab_list_title">Diyabet</div>
											<div class="tab_list_text"><p></p></div>
										</li>
										
										<li>
											<div class="tab_list_title">Kalp Hastalıkları</div>
											<div class="tab_list_text"><p></p></div>
										</li>
										
										<li>
											<div class="tab_list_title">Sindirim Sistemi Hastalıkları</div>
											<div class="tab_list_text"><p></p></div>
										</li>
										
										
										<li>
											<div class="tab_list_title">Troid Hastalıkları</div>
											<div class="tab_list_text"><p></p></div>
										</li>
										
										<li>
											<div class="tab_list_title">Metabolik Hastalıklar</div>
											<div class="tab_list_text"><p></p></div>
										</li>
										
										
										<li>
											<div class="tab_list_title">Karaciğer Hastalıkları</div>
											<div class="tab_list_text"><p></p></div>
										</li>
										
										<li>
											<div class="tab_list_title">Pankreas Hastalıklar</div>
											<div class="tab_list_text"><p></p></div>
										</li>
										
										
										<li>
											<div class="tab_list_title">Böbrek Hastalıkları</div>
											<div class="tab_list_text"><p></p></div>
										</li>
										
										<li>
											<div class="tab_list_title">Kanser</div>
											<div class="tab_list_text"><p></p></div>
										</li>
										
										
										<li>
											<div class="tab_list_title">PCOS </div>
											<div class="tab_list_text"><p></p></div>
										</li>
										
										<li>
											<div class="tab_list_title">Yeme Davranışı Bozuklukları </div>
											<div class="tab_list_text"><p></p></div>
										</li>
										
									</ul>
								</div>
							</div>
						</div>

						<!-- Panel -->
						<div class="tab_panel">
							<div class="tab_panel_content">
								<div class="tab_list">
									<ul>
										<li>
											<div class="tab_list_title">Kilo</div>
											<div class="tab_list_text"><p></p></div>
										</li>
										<li>
											<div class="tab_list_title">Yağ Kütlesi</div>
											<div class="tab_list_text"><p></p></div>
										</li>
										<li>
											<div class="tab_list_title">Kas Kütlesi</div>
											<div class="tab_list_text"><p></p></div>
										</li>
										<li>
											<div class="tab_list_title">Kemik Kütlesi</div>
											<div class="tab_list_text"><p></p></div>
										</li>
										<li>
											<div class="tab_list_title">Metabolizma Yaşı</div>
											<div class="tab_list_text"><p></p></div>
										</li>
										<li>
											<div class="tab_list_title">İdeal Kilo</div>
											<div class="tab_list_text"><p></p></div>
										</li>
										<li>
											<div class="tab_list_title">Obezite Derecesi</div>
											<div class="tab_list_text"><p></p></div>
										</li>
										<li>
											<div class="tab_list_title">Bölgesel Yağ-Kas Dağılımı</div>
											<div class="tab_list_text"><p></p></div>
										</li>
										<li>
											<div class="tab_list_title">İç Yağlanma Yüzdesi</div>
											<div class="tab_list_text"><p></p></div>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- Panel -->
						<div class="tab_panel">
							<div class="tab_panel_content">
								<div class="tab_list">
									<ul>
										<li>
											<div class="tab_list_title">Cardiology</div>
											<div class="tab_list_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuad.</p></div>
										</li>
										<li>
											<div class="tab_list_title">Gastroenterology</div>
											<div class="tab_list_text"><p>Donec malesuada lorem maximus mauris scele risque, at rutrum nulla dictum.</p></div>
										</li>
										<li>
											<div class="tab_list_title">Medical Lab</div>
											<div class="tab_list_text"><p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p></div>
										</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Services -->
	<div class="services">
		<div class="container">
		
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Hizmetler</div>				
				</div>
			</div>
					
			<div class="row icon_boxes_row">			
				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<i style="font-size:20px; color:#eb613a" class="fas fa-apple-alt"></i>
							<div class="icon_box_title">Zayıflama</div>
						</div>
						<div class="icon_box_text">Zayıflamak için en doğru ve kesin çözüm,Sağlıklı beslenme kurallarını öğrenmek.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<i style="font-size:20px; color:#eb613a" class="fas fa-hamburger"></i>
							<div class="icon_box_title">Kilo Alma</div>
						</div>
						<div class="icon_box_text">Saglıklı ve düzenli şekilde kilo almak için uzmanlara başvurulmalıdır.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<i style="font-size:20px; color:#eb613a" class="far fa-heart"></i>
							<div class="icon_box_title">Hamilelik Döneminde Beslenme</div>
						</div>
						<div class="icon_box_text">Hamilelik döneminde iyi beslenmenin,Yolları hangi gıdaları yenilmeli hangi gıdalardan kaçınmalıyız.</div>
						</div>
					</div>
				

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<i style="font-size:20px; color:#eb613a" class="fas fa-pizza-slice"></i>
							<div class="icon_box_title">Ergenlik Döneminde Beslenme</div>
						</div>
						<div class="icon_box_text">Ergenlik döneminde gençlerin yeterli ve saglıklı beslenmeleri büyüme ve gelişme hızlandığı için önem arz ediyor.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<i style="font-size:20px; color:#eb613a" class="fas fa-stethoscope"></i>
							<div class="icon_box_title">Vücüt Analizi</div>
						</div>
						<div class="icon_box_text">Vücut analizi vücutdaki kas,yağ kütlesi,kas kütlesi,metabolizma yaşınız,obezite derecesi,ideal kilonuz ölçen cihazdır.</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-xl-4 col-lg-6">
					<div class="icon_box">
						<div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
							<i style="font-size:20px; color:#eb613a" class="fas fa-cheese"></i>
							<div class="icon_box_title">Diyabet</div>
						</div>
						<div class="icon_box_text">Diyabet bir metabolizma hastalığıdır. Kan şekerinin yükselmesine diyabet adı verilir.Nellere dikkat etmeliyiz nasıl beslenmeliyiz.  </div>
					</div>
				</div>
			</div>			
		</div>
	</div>

<!-- Footer -->
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
<script src="{{asset('js/services.js')}}"></script>
</body>
</html>