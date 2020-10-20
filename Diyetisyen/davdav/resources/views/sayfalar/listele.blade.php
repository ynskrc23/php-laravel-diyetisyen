<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>{{config('app.name','Davdav|Diyetisyenlik')}}</title> 
    <head>
            <link rel="stylesheet" href="{{asset('styles/css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{asset('styles/css/w3.css')}}">
            <link rel="stylesheet" href="{{asset('styles/admin/admin.css')}}">
            <script src="{{asset('js/jquery.min.js')}}"></script>
            <script src="{{asset('js/bootstrap.min.js')}}"></script>
    </head>
    <body>


            <div style="margin-top:15px; margin-left:10px;" class="container-fluid">
                    <div class="row content">
                      <div class="col-sm-3 sidenav text-center">
                        <h4>Ayşe Davdav</h4>
                       <img src="../images/ayse.jpg" class="w3-circle" style="width:50%"><br><br>
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
                          
                      
                      <div class="col-sm-9">
                         
                          <div class="well">SAYFA İŞLEMLERİ</div>
                          <div class="cizgi">
                              <p>Sitenizdeki sayfaları buradan yönetebilirsiniz.</p>
                          </div><br>
                          
                          <a href="/sayfalar/create" type="button" class="btn btn-success">Yazı Ekle</a><br><br>
                          <div class="well well-sm">Tüm kayıtlar</div> 
                          @include('inc.message')  
                          @if(count($sayfalar) > 0)    
                          @foreach($sayfalar as $sayfa)   
                          <div class="table-responsive">		  
                          <table class="table table-hover">
                                <thead>
                                  <tr>
                                    <th scope="col">Sayfa Resim</th>				 
                                    <th scope="col">Sayfa Adı</th>                                
                                    <th scope="col">Eklendiği Tarih</th>
                                    <th scope="col">Düzenleme</th>
                                    <th scope="col">Silme</th>                                  
                                  </tr>
                                </thead>
                                <tbody>
                                       					
                                      <tr>
                                          @php($zaman=$sayfa->created_at)
                                          @php($zaman->setLocale('tr'))  
                                          <td> <img  src="/storage/cover_image/{{$sayfa->cover_image}}" class="card-img-top" width="100px;" height="50px;" ></td>	
                                          	
                                          <td>{!! htmlspecialchars_decode($sayfa->sayfa_adi) !!}</td>                                        
                                          <td><?php echo($zaman->diffForHumans())?></td>
                                          <td><a href="/sayfalar/{{$sayfa->sayfa_id}}/edit"> <p class="btn btn-info">Düzenle</p></a> </td>
                                          <td>
                                          {!!Form::open(['action' => ['SayfalarController@destroy',$sayfa->sayfa_id], 'method' =>'POST'])!!}
                                          {{Form::hidden('_method','Delete')}}
                                          {{Form::submit('Sil',['class' =>'btn btn-danger'])}}
                                          
                                            {!!Form::close()!!}
                                            </td>                                        
                                      </tr>                             						
                                </tbody>			  	
                          </table>
                          </div>
                          @endforeach
                          @else
                          <p>Kayıt Yok </p>
                          @endif  
                          <div class="panel-heading text-center">  {{$sayfalar->links()}}  </div>  
                      </div>  
                         
                    </div>
                          
                  </div>

                  </body>
                  </html>