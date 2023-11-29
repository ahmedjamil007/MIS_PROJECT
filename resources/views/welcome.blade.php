<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Welcome</title>
</head>
<body>
    <div class="wrapper">
        
        @include('includes/sidebar')<!----------------------------sidebar-------------------------->

        <div class="main_content">

            @include('includes/header')<!----------------------------header-------------------------->

            <div class="info">
        
                @include('includes/prouduct')<!----------------------------product-table-------------------------->
               
          </div>
        </div>
    </div>
   
</body>
</html>