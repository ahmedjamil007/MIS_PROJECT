<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/registerlog.css') }}">
    <title>signup</title>
   
</head>
<body>
    <div class="container">
        <div class="card">
          <h2>Register Form</h2>
          <form action="{{ route('register') }}" method="POST"><!----------------------------formstart-------------------------->

    @csrf
    <label for="name">Name</label>
    <input type="text"value="{{ old('name') }}" id="name" name="name" placeholder=" Name..">
    <span style="color: red">
      @error('name')
        {{ $message }}
      @enderror
    </span><br>

    <label for="email">Email</label>
    <input type="text"value="{{ old('email') }}" id="email" name="email" placeholder="Email..">
    <span style="color: red">
      @error('email')
        {{ $message }}
      @enderror
    </span><br>

    <label for="password">Password</label>
    <input type="text" id="password" name="password" placeholder="password..">
    <span style="color: red">
      @error('password')
        {{ $message }}
      @enderror
    </span><br>

     <label for="password">Confrirm password</label>
    <input type="text" id="password" name="password_confirmation" placeholder="password..">
    <span style="color: red">
      @error('password_confirmation')
        {{ $message }}
      @enderror
    </span><br>
      
            <button type="submit" value="Submit">Register</button>

          </form> <!----------------------------formend-------------------------->
          
          <div class="switch">Already have an account? <a href="/log">Login here</a></div>
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