<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>ZipCode</title>

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                width: 500px;
            }

            .table {
                margin-top: 20px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .content {
                margin-top: -200px;
            }
            #label {
                font-size: 25px;
            }
            .gif {
                display:none;
                position:absolute;
                top:100px;
                right:50px;
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

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="alert alert-danger"></div>
                <button class="btn btn-info" onclick="myFunction()">Video Guide</button>
                    
                <form method="post" class="places_form" action="/">
                    @csrf
                    <div class="form-group">
                        <label for="select_country" id="label">Select Countries Supported  </label>
                        <select class="form-control"  style="border-bottom-color: red" name='country' id="select_country">
                            @foreach($countries as $country)
                                <option value="{{ $country->code }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="select_zip_code" id="label">Type Your Zip Code</label>
                        <input type="text" style="border-bottom-color: red" class="form-control" name="zip_code" id="select_zip_code" placeholder="zip code">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                @include('table')
            </div>
            <div id="gif" class="gif">
                <img src="svg/gif.gif" alt="not found" style="width:400px;">
            </div>
        </div>

        <script src="{{ asset('js/index.js') }}"></script>
    </body>
</html>
