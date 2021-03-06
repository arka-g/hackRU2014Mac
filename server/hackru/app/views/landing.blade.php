<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="IE=edge" http-equiv="X-UA-Compatible">
      <meta content="width=device-width, initial-scale=1" name="viewport">
      <meta content="" name="description">
      <meta content="" name="author">
      <title>Educalytics</title>
      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="css/landing-page.css" rel="stylesheet">
      <!-- Custom Fonts -->
      <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet"
         type="text/css">
      <link href=
         "http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic"
         rel="stylesheet" type="text/css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>
      <!-- Header -->
      <div class="intro-header">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="intro-message">
                     <h1>Student Hub</h1>
                     <h3>Analytical grade tracking system</h3>
                     <hr class="intro-divider">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="col-md-4">
                              <div class="col-md-12"></div>
                           </div>
                           <div class="col-md-4">
                              <div class="col-md-12">
                                 {{$errors->first('email')}}
                                 {{$errors->first('password')}}
                                 {{ Form::open(array('url' => 'login')) }}
                                 <p>
                                    Email: {{ Form::text('email') }}
                                 </p>
                                 <p>
                                    Password: {{ Form::text('password') }}
                                 </p>
                                 <p>{{ Form::submit('Submit!') }}</p>
                                 {{ Form::close() }}
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="col-md-12"></div>
                           </div>
                        </div>
                     </div>
                     <ul class="list-inline intro-social-buttons">
                        <li>
                           <a class="btn btn-default btn-lg" href='{{URL::to("/signup")}}'><i class=
                              "fa fa-plus-square fa-fw"></i> <span class=
                              "network-name">Sign-Up</span></a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.container -->
      </div>
      <!-- /.intro-header -->
      <!-- Page Content -->
      <!-- jQuery Version 1.11.0 -->
      <script src="js/jquery-1.11.0.js"></script> <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>
   </body>
</html>