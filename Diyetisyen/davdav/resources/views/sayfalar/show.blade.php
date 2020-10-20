
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
				<li><a href="https://www.facebook.com/Diyetisyen-Ay%C5%9Fe-Davdav-727095737654678/" target="_blank"><i style="color:black;font-size:20px;" class="fab fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="https://www.instagram.com/dyt_aysedavdav/" target="_blank"><i style="color:black;font-size:20px;" class="fab fa-instagram" aria-hidden="true"></i></a></li>	
				<li><a href="https://mail.google.com/mail/" target="_blank"><i style="color:black;font-size:20px;" class="fa fa-envelope" aria-hidden="true"></i></a></li>					
			</ul>
		</div>
	</div>	
	<!-- Home -->
    <div class="home">
            <!-- <div class="background_image" style="background-image:url(images/about.jpg)"></div> -->
            <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="../images/hakkinda.jpg" data-speed="0.8"></div>
    
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
    </div>
    
    <div style="margin-top:30px;" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                                          
             <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="card">
						@php($zaman=$sayfalar->created_at)
						@php($zaman->setLocale('tr'))       
                        <div class="card-header text-center"> <strong> {{$sayfalar->sayfa_adi}} </strong></div>
                        <div  class="card-body"> {!!htmlspecialchars_decode($sayfalar->sayfa_icerik)!!} </div>
					 <div class="card-footer"> 

                        <i class="fa fa-user" aria-hidden="true"></i>
                        <a href="#"><?php echo "Ayşe Davdav";?></a>
						&nbsp;&nbsp;&nbsp;&nbsp;	
								
                        <i class="fa fa-clock" aria-hidden="true"></i> <?php echo($zaman->diffForHumans())?>                  
						&nbsp;&nbsp;&nbsp;&nbsp; 

						<i class="fa fa-eye" aria-hidden="true">{{ Counter::showAndCount('forum', $sayfalar->sayfa_id) }} </i>
						&nbsp;&nbsp;&nbsp;&nbsp; 
						
                        <i class="fa fa-comments" aria-hidden="true"> {{$sayfalar->yorumlar->count()}}</i>
							&nbsp;
							&nbsp;&nbsp;
                    
							<div style="display:inline-block;vertical-align:top; margin-top:-3px;" class="fb-share-button" data-layout="button_count"></div> 
			  
						   <script>(function(d, s, id) {
						   var js, fjs = d.getElementsByTagName(s)[0];
						   if (d.getElementById(id)) return;
						   js = d.createElement(s); js.id = id;
						   js.src = "//connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v2.5";
						   fjs.parentNode.insertBefore(js, fjs);
						   }(document, 'script', 'facebook-jssdk'));</script>  &nbsp
						  
					   <div style="display:inline-block;vertical-align:top; margin-top:-3px;">
					   <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
					   <script type="IN/Share" data-counter="right"></script>
					   </div> 	&nbsp;	
						  
						<div style="display:inline-block;vertical-align:top; margin-top:5px;">
					   <a href="https://twitter.com/share" class="twitter-share-button" data-url="https://www.aysedavdav.com/tarif.php" data-text="Diyetisyen Ayşe Davdav"> Tweetle</a> 	&nbsp;	
					   
					   <script>!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + '://platform.twitter.com/widgets.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'twitter-wjs');
						   </script>
						  </div> 		
						
                        <button type="button" style="float:right;" class="btn btn-info" 
                            data-toggle="modal" data-target="#myModal">Yorum Gönder
                        </button>
                        </div>
					</div>
					
				
						<!-- yorumlar liste -->
					@foreach ($sayfalar->yorumlar as $yorum)
					@php($zaman=$yorum->created_at)
					@php($zaman->setLocale('tr'))
						<div style="margin-top:20px;" class="media mb-4 alert alert-info">									  
							<div  class="media-body">
							<span style="font-size:18px; margin-top:-5px; float:right; color:orangered;" class="date pull-right"> <?php echo($zaman->diffForHumans())?> </span>	
							<h5 style="font-size:20px; color:orangered;" class="mt-0"> <?php echo($yorum->name)?> </h5>
							<span style="font-size:18px; margin-top:-5px; float:left; color:black;  " class="pull-left"> <?php echo nl2br($yorum->comment); ?> </span>									  							
						</div>
						</div>
					@endforeach
			
				</div>
				     
				<!-- Modal baslangıc -->
				  
                <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <h4 class="modal-title">Yorum Gönder</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>	
                    <div class="modal-body">
						{{ Form::open(['route' => ['yorumlar.store', $sayfalar->sayfa_id], 'method' => 'POST']) }}			
					
						<div class="form-group">
						{{ form::label('name',"Adınız :") }}
						{{ form::text('name',NULL,['class' => 'form-control']) }}
                    </div>					
					
					<div class="form-group">
						{{ form::label('comment',"Mesajınız :") }}
						{{ form::textarea('comment',NULL,['class' => 'form-control','row' =>'5']) }}
					</div>

					<div class="form-group">
						{{ form::hidden('yorum_sayfa_id',$sayfalar->sayfa_id,['class' => 'form-control']) }}
					</div>
					
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>	
						{{Form::submit('Gönder',['class' =>'btn btn-primary'])}}
                    </div>
                  {!! Form::close() !!}
                </div>
                </div>
			</div>
			
            <!-- Modal bitiş -->
			<div style="margin-bottom:20px;" class="col-xs-12 col-sm-12 col-md-4 col-lg-4"> 
					
					<div class="card">
							<h5 class="card-header">Popüler Yorumlar </h5>
							<div class="card-body">		
								<ul class="list-group list-group-flush">
									<?php echo $popüleryorum_menu;  ?>  
								</ul> <br>
							</div>        
					</div> <br>
						  
					<div class="card">
							<h5 class="card-header">En Son Yorumlar</h5>
								<div class="card-body">       																  
										<ul class="list-group list-group-flush">										      
											<?php echo $yorum_menu; ?>  				  
										</ul>    
								</div>
					</div>  
			
			</div>	
		</div>		
    </div>		
</div>
	
		<!-- Footer -->
<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="../images/footer.jpg" data-speed="0.8"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div style="color:white" class="footer_contact_title">Sosyal Medya</div>
							<div class="footer_about_text">Sosyal Medyada İletişim Adreslerimiz Bizleri Takip Edebilirsiniz.</div>
							<div class="footer_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
									
								</ul>
							</div>
							<div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tüm Haklar Ayşe Davdav Diyetisyenlik Aittir. Site Tasarım <i style="color:#28a745;" class="fas fa-desktop"></i> <a style="color:#28a745" href="https://www.instagram.com/ikizlerweb/" target="_blank">İkizler Web</a>

</div>
						</div>
					</div>
					
					<!-- Footer Contact -->
					<div class="col-lg-5 footer_col">
						<div class="footer_contact">
							<div class="footer_contact_title"></div>
							<div class="footer_contact_form_container">
							
							</div>
						</div>
					</div>

					<!-- Footer Hours -->
					<div class="col-lg-4 footer_col">
						<div class="footer_hours">
							<div class="footer_hours_title">Çalısma Saatlerimiz</div>
							<ul class="hours_list">
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Pazartesi – Cuma</div>
									<div class="ml-auto">9.30 – 17.00</div>
								</li>
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Cumartesi</div>
									<div class="ml-auto">11.00 - 17.00</div>
								</li>
								
								<li class="d-flex flex-row align-items-center justify-content-start">
									<div>Pazar</div>
									<div class="ml-auto">Kapalı</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-sm-row flex-column align-items-lg-center align-items-start justify-content-start">
							<nav class="footer_nav">
								<ul class="d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
									<li><a href="/davdav/public/index">Anasayfa</a></li>
									<li><a href="/davdav/public/about">Hakkinda</a></li>
									<li><a href="/davdav/public/services">Hizmetler</a></li>
									<li><a href="/davdav/public/tarif">Diyet Tarifleri</a></li>
									<li><a href="/davdav/public/blog">Ayşe'nin Köşesi</a></li>
									<li><a href="/davdav/public/contact">İletişim</a></li>
								</ul>
							</nav>							
							<div class="footer_phone ml-lg-auto">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<span>0544 713 68 50</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>  
	
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
<script src="{{asset('js/about.js')}}"></script>
</body>
</html>
