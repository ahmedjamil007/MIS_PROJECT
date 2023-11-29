<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/registerlog.css') }}">
    <title>login</title>
    
</head>
<body>
    <div class="container">
        <div class="card">
          <h2>Login Form</h2>
          <form action="{{route('login')}}" method="POST"><!----------------------------fromstart-------------------------->

            @csrf
            
            <label for="username">Email</label>
            <input type="text" id="username"value="{{ old('name') }}"name="email" placeholder="Enter your email">
            <span style="color: red">
                @error('email')
                  {{ $message }}
                @enderror
              </span><br>

            <label for="password">Password</label>
            <input type="password" id="password"name="password" placeholder="Enter your password">
      
            <button type="submit" value="submit">Login</button>
          </form> <!----------------------------formend-------------------------------------------------------------------------->

          <div class="switch">Don't have an account? <a href="/signin" >Register here</a></div>

        </div>
      
        
      </div>
</body>
<script>
    function switchCard() {
  const loginCard = document.querySelector('.container .card:nth-child(1)');
  const registerCard = document.querySelector('.container .card:nth-child(2)');

  if (loginCard.style.display === 'none') {
    loginCard.style.display = 'block';
    registerCard.style.display = 'none';
  } else {
    loginCard.style.display = 'none';
    registerCard.style.display = 'block';
  }
}

</script>
</html>