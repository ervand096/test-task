@extends('layouts.app')
 @section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2 >Sign in</h2>
            <form action="" method="post">
                <label for="email">
                    Email
                    <input type="text" name="email" id="email" class="form-control" placeholder="Please your email">
                </label>
                <br><br>
                <label for="pass">
                    Password
                    <input type="password" name="password" id="pass" class="form-control" placeholder="Please your password">
                </label>
                <br>
                <br>
                <input type="submit" value="ADD" class="btn btn-dark">
            </form>
        </div>
    </div>
</div>

</body>
</html>
@endsection
