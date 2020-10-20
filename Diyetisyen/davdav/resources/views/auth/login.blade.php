<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <title>{{config('app.name','Davdav|Diyetisyenlik')}}</title> 
    <head>
<meta name="viewport" content="width=device-width, initial-scale=1">

  <meta charset="utf-8">
<style>
body {
	font-family: Arial, Helvetica, sans-serif;
}
form {
	border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
  width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-top-right-radius: 30px;
  border-bottom-right-radius: 30px;

}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width:20%;
  border-radius: 20px;
  font-size:20px;
 
}

button:hover {
  opacity: 0.8;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 20%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  margin-left: 200px;
  margin-right: 200px;
}

@media (max-width: 425.99px) { 
		.container {
		  padding: 16px;
		  margin-left: 0px;
		  margin-right: 0px;
		}
		img.avatar {
			width: 60%;
			border-radius: 50%;
		}

    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width:20%;
        border-radius: 20px;
        font-size:14px;
 
    }
	}
	
	@media (min-width: 426px) and (max-width: 768.99px) {
		.container {
		  padding: 16px;
		  margin-left: 100px;
		  margin-right: 100px;
		}
		img.avatar {
			width: 35%;
			border-radius: 50%;
		}

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width:20%;
            border-radius: 20px;
            font-size:16px;
 
        }
	}
	
	@media (min-width: 769px) and (max-width: 1024.99px) {
		.container {
		  padding: 16px;
		  margin-left: 200px;
		  margin-right: 200px;
		}
		img.avatar {
			width: 30%;
			border-radius: 50%;
		}
	}
    span.psw {
    float: right;
    padding-top: 16px;
    }

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
 </head>
 <body>
   
<form method="POST" action="{{ route('login') }}">
    @csrf
    @include('inc.message')
  <div class="imgcontainer">
    <img src="images/ayse.jpg" class="avatar">
  </div>

  <div style="text-align:center;" class="container">
 
        <label for="uname"><b>{{ __('Kullanıcı Adı') }}</b></label>
        <div class="col-md-6">
            <input id="text" type="text" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
      
        <label for="psw"><b>{{ __('Şifre') }}</b></label>
        <div class="col-md-6">
            <input id="password" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

    <div style="text-align:center;">
        <button  type="submit" class="btn btn-success">
            {{ __('Giris') }}
        </button>
    </div>

  </div>
</form>

</body>
</html>