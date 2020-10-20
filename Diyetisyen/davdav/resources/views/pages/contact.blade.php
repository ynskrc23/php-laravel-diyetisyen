<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>{{config('app.name','Davdav|Diyetisyenlik')}}</title> 
    <head>

        <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
        <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/contact.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('styles/contact_responsive.css')}}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
            
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
                                            <div class="home_title">İletisim</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Contact -->

	<div class="contact">
            <div class="container">
                <div class="row">
    
                    <!-- Contact form -->
                    <div class="col-lg-12 contact_col">
                        <div class="contact_form">
                            <div class="contact_title">İletisim</div>
                            <div class="contact_form_container">
                                <form action="phpmailer/index.php" id="contact_form" class="contact_form" method="post">
                                    <input type="text" name="isim" id="contact_input" class="contact_input" placeholder="Adınız Soyadınız" required="required">
                                    <input type="email" name="email" id="contact_email" class="contact_input" placeholder="E-mail" required="required">
                                    <input type="text" name="konu" id="contact_subject" class="contact_input" placeholder="Konu" required="required">
                                    <textarea class="contact_input contact_textarea" name="mesaj" id="contact_textarea" placeholder="Mesaj" required="required"></textarea>
                                    <button type="submit" name="mail_gonder" class="contact_button" id="contact_button">Gönder</button>
                                </form>
                            </div>
                        </div>
                    </div>
    
                    
    
                    <!-- contact info -->
                    <div class="contact_info">
                        <div class="row">
                            <div class="col-lg-3 offset-lg-1">
                                <div class="contact_info_list">
                                    <div class="contact_info_title"> İletisim Bilgilerimiz</div>
                                    <ul>
                                        <li><span style="color:#ff5722;">Address: </span>Ceyhan Mahallesi, Gürbüz İş Merkezi No:11/7, Dulkadiroğlu Cd., 46300 Elbistan/Kahramanmaraş</li>
                                        <li><span style="color:#ff5722;">Email: </span>dytaysedavdav@gmail.com</li>
                                        <li><span style="color:#ff5722;">Online Randevu: </span>0544 713 68 50</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="contact_info_list contact_info_list_2">
                                    <ul>
                                        <li><span style="color:#ff5722;">Facebook: </span>Diyetisyen Ayşe Davdav</li>
                                        <li><span style="color:#ff5722;">İnstagram: </span>dyt_aysedavdav</li>
                                        <li><span style="color:#ff5722;">WebSite: <a style="color:#28a745" href="https://www.aysedavdav.com/" target="_blank">www.aysedavdav.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="contact_info_list">
                                    <div class="contact_info_title">Çalışma Saatlerimiz</div>
                                    <ul>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <div style="color:#ff5722;">Pazartesi-Cuma</div>
                                            <div class="ml-auto">9.30 - 17.00</div>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <div style="color:#ff5722;">Cumartesi</div>
                                            <div class="ml-auto">11.00 - 17.00</div>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <div style="color:#ff5722;">Pazar</div>
                                            <div class="ml-auto">Kapalı</div>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Google Map -->
    
        <div class="contact_map">
            <!-- Google Map -->
            <div class="map">
                <div id="google_map" class="google_map">
                    <div class="map_container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d659.1625301080671!2d37.192803726719085!3d38.197750841917454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152d67cea087a513%3A0x74f72d8b9796eba1!2zQXlzZSBEYXZkYXYgQmVzbGVubWUgdmUgRGl5ZXQgRGFuxLHFn21hbmzEscSfxLE!5e0!3m2!1str!2str!4v1548200821963" width="100%" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>
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
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="{{asset('js/contact.js')}}"></script>
</body>
</html>