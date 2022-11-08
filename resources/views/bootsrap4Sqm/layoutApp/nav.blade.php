<div class="sidebar" data-color="" data-background-color="white" data-image="{{asset('admin_Page')}}/assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
  
      Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="#" class="simple-text logo-normal">
        SI PROFILE
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{request()->is('sqm') ? ' active' : ''}}">
          <a class="nav-link" href="{{route('sqm')}}">
            <i class="material-icons">person</i>
            <p>User Profile</p>
          </a>
        </li>
        {{-- @role('superAdmin') --}}
      
        <li class="nav-item {{request()->is('keterusan') ? ' active' : ''}} ">
          <a class="nav-link" href="#">
            <i class="material-icons">content_paste</i>
            <p>Data Admin Sekolah</p>
          </a>
        </li>
       
          {{-- @endrole --}}
      </ul>
    </div>
  </div>