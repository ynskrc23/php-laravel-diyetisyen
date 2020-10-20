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
       <img src="../../images/ayse.jpg" class="w3-circle" style="width:50%"><br><br>
        <ul class="nav nav-pills nav-stacked">
          <li class="active"><a href="/sayfalar/">ANASAYFA</a></li><br>
          <li class="active"><a href="//sayfalar/listele">SAYFA İŞLEMLERİ</a></li><br>
          <li class="active"><a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('ÇIKIŞ') }}</a></li>

             <form id="logout-form" action="{{ route('logout') }}" method="POST"  style="display: none;">
                @csrf
            </form>
        </ul>
      </div>
          
      @include('inc.message')
      <div  class="col-sm-9">
      <div class="well">YAZI İÇERİĞİNİ OLUŞTURMA İŞLEMLERİ</div>
          <div class="cizgi">
              <p>Sitenizdeki sayfaları buradan yönetebilirsiniz.</p>
          </div><br>
        {!! Form::open(['action'=>['SayfalarController@update',$sayfalar->sayfa_id], 'method' =>'POST' ,'enctype' =>'multipart/form-data']) !!}
        <p>
            {{Form::label('sayfa_adi', 'Baslık')}}
            {{Form::text('sayfa_adi', $sayfalar->sayfa_adi,['class' =>'w3-input w3-border' ,'placeholder'=> 'Lütfen Sayfa Adını Giriniz'])}}          
        </p> <br>
              
        <p>
            {{Form::label('sayfa_icerik', 'İçerik')}}
            {{Form::textarea('sayfa_icerik', $sayfalar->sayfa_icerik,['id' => 'article-ckeditor', 'class' =>'form-control'  ,'placeholder'=> 'Lütfen İçerik Adını Giriniz'])}}  
                      
        </p><br>
        
        <p>
            <label>Kategori Adı</label><br>
            <select name="sayfa_kategori" class="form-control">
              <option value="Tarif">Tarif</option>
              <option value="Blog">Blog</option>
            </select>
          </p><br>

          <p>
            {{Form::file('cover_image')}}
           
      </p> <br>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Düzenle',['class' =>'btn btn-primary btn-md'])}}  
    </div>
      
        {!! Form::close() !!}
      

      </div>
    </div>
  </div>
  
  <script src="../../vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
  <script>
    CKEDITOR.replace( 'article-ckeditor' );
   </script>

</body>
</html>
