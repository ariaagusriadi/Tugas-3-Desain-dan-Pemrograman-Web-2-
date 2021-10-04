@php
    function chektRouteActive ($route){
      if (Route::current()->uri == $route) {
        return 'active';
      }
    }
@endphp

<div class="sidebar" data-color="orange">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
  -->
  <div class="logo">
 
    <a href="{{ url( 'beranda') }}" class="simple-text logo-normal" style="text-align: center" >
      <i class="now-ui-icons  objects_planet"></i>&nbsp;
      Curry store
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="{{  chektRouteActive('beranda')}}">
        <a href="{{ url( 'beranda') }}">
          <i class="now-ui-icons design_app"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="{{  chektRouteActive('kategori')}}">
        <a href="{{ url( 'kategori') }}">
          <i class="now-ui-icons business_briefcase-24"></i>
          <p>kategori</p>
        </a> 
      </li>
      <li class="{{  chektRouteActive('produk')}}">
        <a href="{{ url( 'produk') }}">
          <i class="now-ui-icons shopping_box"></i>
          <p>produk</p>
        </a>
      </li>
      
      <li class="{{  chektRouteActive('profil')}}">
        <a href="{{ url( 'profil') }}">
          <i class="now-ui-icons users_single-02"></i>
          <p>User Profile</p>
        </a>
      </li>

    </ul>
  </div>
</div>