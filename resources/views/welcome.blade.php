<!doctype html>

<body style=" background-image: url('img/ASG.jpg');" >

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title style="color:white;">Los Cerritos</title>
		

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">home</a>
                    @else
                        <a href="{{ url('/login') }}" style="color:white;">INICIAR SESION</a>
                        <a href="{{ url('/register') }}" style="color:white;">REGISTRARSE</a>
                    @endif
					

                </div>
				
            @endif
			

            <div class="content">
                <div class="title m-b-md w3-center" style="color:white;">
                    <img src="img/11.png" alt="Avatar" style="width:200px" class=" w3-margin-top" > <b> Los cerritos </b>
			   </div>

                <div class="links w3-center">
                    <a href="https://laravel.com/docs" style="color:white;">Empresa
                    <a href="https://laracasts.com" style="color:white;">Productos
                    <a href="{{ url('/contactanos') }}" style="color:white;">Contactanos
                  
                </div><br><br>
				
				<div class="w3-row w3-animate-left">
				  <div class="w3-container w3-quarter">
					<img src="img/122.jpg" class="w3-round" alt="Norway" style="width:100%">
					<h5 style="color:white;"> Sistema de riego para jardin</h5>
				  </div>
				  
				  <div class="w3-container w3-quarter">
					<img src="img/123.jpg" class="w3-round" alt="Norway" style="width:100%">
					<h5 style="color:white;"> Aspersores para cultivos</h5>
				  </div>
				  
				  <div class="w3-container w3-quarter">
					<img src="img/124.jpg" class="w3-round" alt="Norway" style="width:100%">
					<h5> Manguera de riego</h5>
				  </div style="color:white;">
				  
				  <div class="w3-container w3-quarter">
					<img src="img/125.jpg" class="w3-round" alt="Norway" style="width:100%">
					<h5 style="color:white;"> Cuidado de tus plantas</h5>
				  </div>
				</div>
            </div>
			
			
        </div>
    </body>
</html>
