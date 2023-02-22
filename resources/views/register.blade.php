@extends('layout.app')
@section('content')


@if(Session::has('fail'))
<div class="alert alert-danger" role="alert">
  {{Session::get('fail')}}
</div>

@endif


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800&display=swap');

*{
    font-family: 'Poppins', sans-serif;
}
.wrapper{
    background: #73ecc4;
    padding: 0 20px 0 20px;
}
.main{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}
.image{
    width: 900px;
    height: 550px;
    border-radius: 10px;
    background: #fff;
    box-shadow: 5px 5px 10px 1px rgba(0,0,0,0.2);
} 
.side-image{
    background-image: url("images/2.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    border-radius: 10px 0 0 10px;
}
img{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;
}
.text{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

i{
    font-weight: 400;
    font-size: 15px;
}
.right{
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}
.input-box{
    width: 330px;
    box-sizing: border-box;
}
.input-box header{
    font-weight: 700;
    text-align: center;
    margin-bottom: 45px;
}
.input-field{
    display: flex;
    flex-direction: column;
    position: relative;
    padding: 0 10px 0 10px;
}
.input{
    height: 45px;
    width: 100%;
    background: transparent;
    border: none;
    border-bottom: 1px solid rgba(0,0,0,0.2);
    outline: none;
    margin-bottom: 20px;
    color: #40414a;
}
.input-box .input-field label{
    position: absolute;
    top: 10px;
    left: 10px;
    pointer-events: none;
    transition: .5s;
}
.input-field .input:focus ~ label{
    top: -10px;
    font-size: 13px;
}
.input-field .input:valid ~ label{
    top: -10px;
    font-size: 13px;
    color: #5d5076;
}
.input-field .input:focus, .input-field .input:valid{
    border-bottom: 1px solid #743ae1;
}
.submit{
    border: none;
    outline: none;
    height: 45px;
    background: #ececec;
    border-radius: 5px;
    transition: .4s;
}
.submit:hover{
    background: rgba(37, 95, 156,0.9);
    color: #fff;
}
.login{
    text-align: center;
    font-size: small;
    margin-top: 25px;
}
span a{
    text-decoration: none;
    font-weight: 700;
    color: #000;
    transition: .5s;
}
span a:hover{
    text-decoration: underline;
    color: #000;
}
@media only screen and (max-width: 768px){
    .side-image{
        border-radius: 10px 10px 0 0;
    }
    img{
        width: 35px;
        position: absolute;
        top: 20px;
        left: 47%;
    }
    .text{
        position: absolute;
        top: 70%;
        text-align: center;
    }
    .text p,i{
        font-size: 17px;
    }
     .image{
        max-width: 420px;
        width: 100%;
    }
}
    </style>
</head>
<body>
    <form action="{{route('registerUser')}}" method="POST">
        @csrf
    <div class="wrapper">
        <div class="containers main">
            <div class="image row">
                <div class="col-md-6 side-image">
                    <!-------Image-------->
                    <img src="img/11.jpg" alt="">
                   
                </div>
                <div class="col-md-6 right">
                     <div class="input-box">
                        <header>Create account</header>

                        <div class="input-field">
                          <input type="text" class="input" id=" " name="name" required autocomplete="off">
                          <label for="email">Full Name</label>
                      </div>

                        <div class="input-field">
                            <input type="email" class="input" id=" " name="email" required autocomplete="off">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <input type="password" class="input" id=" " name="password" required>
                            <label for="password">Password</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" value="SignUp">
                            
                        </div>
                        <br>

                        {{-- <div class="input-field">
                            <input type="submit" class="submit" value="Login With Google">
                            
                        </div> --}}
                        
                        <div class="login">
                            <span>Already have an account? <a href= "{{url('login')}}"> Create here</a></span>
                        </div>

                        
                </div>
            </div>
        </div>
    </div>
    </form>

</body>
</html>

@endsection
