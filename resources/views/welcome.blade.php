<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
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
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
               
               <div class="container">
                   <div class="row">
                       <div class="col-md-6 col-md-offset-3">
                            <form action="{{ route('senMail') }}" method="POST" role="form" enctype="multipart/form-data"> 
                                 {{ csrf_field() }}
                                <legend>SEND EMAIL</legend>
                            
                                <div class="form-group">
                                    <label for="">Your Name</label>
                                    <input type="text" class="form-control" id="" placeholder="Your Name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="">Your Email</label>
                                    <input type="email" class="form-control" id="" placeholder="Your Email" name="email">
                                </div>

                                <div class="form-group">
                                    <label for="">Your Message</label>
                                    <textarea name="message" id="inputMessage" class="form-control" rows="3" required="required"></textarea>
                                </div>

                            <div class="form-group">
                                    <label for="">Choose a file</label>
                                    <input type="file" name="attach" class="form-control" id="" placeholder="">
                                </div>
                                
                            
                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                            </form>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </body>
</html>
