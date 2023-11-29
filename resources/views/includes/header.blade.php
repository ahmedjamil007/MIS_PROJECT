<div class="header"> Welcome @guest to our site @endguest  @auth {{ Auth::user()->name }}.  @endauth
    
<div class="fab">


    @auth
    <form action="{{route('logout')}}" method="POST">
        @csrf
       <button class="sinlog" type="submit" style="color: whitesmoke">Logout</button>
    </form>
    @endauth



    @guest
     <button class="sinlog"><a href="/signup">SIGNUP</a></button> 
    <button class="sinlog"><a href="/log">LOGIN</a></button>
    @endguest




</div>
</div>