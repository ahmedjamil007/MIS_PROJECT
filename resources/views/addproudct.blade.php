<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/insetupdate.css') }}">
    <title>ADD PRODUCT</title>
</head>
<body>
    <h1 style="text-align: center">ADD NEW PRODUCT</h1>

    <div>
      <form action="{{ route('addproudct') }}" method="POST">
        @csrf
        <label for="name">Product Name</label>
        <input type="text" id="name" name="name" placeholder=" Name..">
    
        <label for="quantity">Quantity</label>
        <input type="number" id="quantity" name="quantity" placeholder="quantity..">
        
        <label for="Price">Price</label>
        <input type="text" id="price" name="price" placeholder="price..">
      
        <input type="submit" value="Submit">
      </form>
    </div>
    
</body>
</html>