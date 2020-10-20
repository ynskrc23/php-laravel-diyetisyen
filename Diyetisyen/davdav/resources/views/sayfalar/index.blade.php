<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>{{config('app.name','Davdav|Diyetisyenlik')}}</title> 
    <head>
            <link rel="stylesheet" href="{{asset('styles/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('styles/css/w3.css')}}">
            <link rel="stylesheet" href="{{asset('styles/admin/admin.css')}}">
            <script src="{{asset('js/jquery.min.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
            <script src="{{asset('js/ckeditor.js')}}"></script> 
    </head>
    <body>
           
            <div  style="margin-top:15px; margin-left:10px;" class="container-fluid">
                    <div class="row content">
                      <div  class="col-sm-3 sidenav text-center">
                        <h4>Ayşe Davdav</h4>
                        <img src="/images/ayse.jpg" class="w3-circle" style="width:50%"><br><br>
                        <ul class="nav nav-pills nav-stacked">
                          <li class="active"><a href="/sayfalar/">ANASAYFA</a></li><br>
                          <li class="active"><a href="/sayfalar/listele">SAYFA İŞLEMLERİ</a></li><br>
                          <li class="active"><a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('ÇIKIŞ') }}</a></li>
                
                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                      </div>
                          
                      <div style="margin-bottom:15px; " class="col-sm-9 col-md-9 col-lg-9">	
                        <div  class="well text-center"><strong>ADMİN YÖNETİM PANELİ</strong></div>
                        <div class="cizgi">
                              <p>  @include('inc.message') </p>
                            <p>Sitenizi buradan yönetebilirsiniz.</p>
                        </div><br>
                        <div class="row"> 
                              @if(count($sayfalar) > 0)    
                              @foreach($sayfalar as $sayfa)                     
                          <div class="col-sm-12 col-md-6 col-lg-4">   
                                <div class="panel panel-default">
                                  <div class="panel-heading text-center">  {{$sayfa->sayfa_adi}} </div>                                                                            
                                <div class="panel-body">  {!!htmlspecialchars_decode($sayfa->sayfa_icerik)!!} </div>                      
                                  <div class="panel-footer"><small> Tarih {{$sayfa->created_at}} </small>
                                  <a href="/sayfalar/{{$sayfa->sayfa_id}}"> <p class="btn btn-success">Devamını Oku »</p></a>
                              </div>
                          </div>
                      </div> 

                      @endforeach
                      @else
                      <p>Kayıt Yok </p>
                      @endif            
                  </div>
                
              </div>                    
            </div>
        </div> 
    </body>
 </html>