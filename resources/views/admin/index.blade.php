<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{ mix('/js/app.js') }}"></script>

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" >
</head>
<body>
    <h1 class="text-center">Welcome Admin Page</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <table class="table-light text-dark text-center w-100" >
                <thead>
                <th>
                    #ID
                </th>
                <th>
                    #Name
                </th>
                <th>
                    #Email
                </th>
                <th>
                    #Password
                </th>
                <th>
                    #Operator
                </th>
                </thead>
                <tbody>
                {{--        @foreach($homes as $home)--}}
                <td>
                    {{--                {{ $user-> id }}--}}
                    1
                </td>
                <td>
                    {{--                {{ $user-> name }}--}}
                    1
                </td>
                <td>
                    {{--                {{ $user-> email }}--}}
                    1
                </td>
                <td>
                    {{--                {{ $user-> password }}--}}
                    1
                </td>
                <td>
                    <i class="fas fa-trash"></i>
                    <i class="fas fa-edit ml-3"></i>
                </td>
                {{--        @endforeach--}}
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
