<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/insetupdate.css') }}">
    <title>Document</title>
</head>
<body>
  <h1 style="text-align: center">UPDATE PRODUCT</h1>

<div>
  <form action="{{ route('update.user',$data->id) }}" method="POST">
    @csrf
    <label for="name">Product Name</label>
    <input type="text" value="{{ $data->name }}" id="name" name="name" placeholder=" Name..">

    <label for="quantity">Quantity</label>
    <input type="number"value="{{ $data->quantity }}" id="quantity" name="quantity" placeholder="Quantity..">
    
    <label for="price">Price</label>
    <input type="text"value="{{ $data->price }}" id="price" name="price" placeholder="Price..">
  
    <input type="submit" value="Update Product">
  </form>
</body>
</html>