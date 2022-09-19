<nav class="main-header navbar navbar-expand navbar-white navbar-green text-light" style="background-color: #90B77D;">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button">
        <img src="{{asset('assets/dist/img/dropdown.png' )}}" width="20px" alt="">
      </a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="home"  class="nav-link" style="text-decorations:none; color:black;">
        <img src="{{asset('assets/dist/img/home.png' )}}" width="20px" alt="">
        Home
      </a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="profil" class="nav-link" style="text-decorations:none; color:black;">
        <img src="{{asset('assets/dist/img/logostfi.png' )}}" width="22px" alt="">
        Profil
      </a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
      
    <li class="nav-item">
     <a class="nav-link"  href="{{ route('logout') }}"
     onclick="event.preventDefault();
         document.getElementById('logout-form').submit();" role="button">
       <img src="{{asset('assets/dist/img/enter.png' )}}" width="20px" alt="">
     </a>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
         @csrf
     </form>
   </li>
 </ul>
</nav>