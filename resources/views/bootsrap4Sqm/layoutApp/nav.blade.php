<div class="sidebar" data-color="danger" data-background-color="white" data-image="{{asset('admin_Page')}}/assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
  
      Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo"><a href="#" class="simple-text logo-normal">
        Keterusan Bah
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{request()->is('/') ? ' active' : ''}} nav-primary">
          <a class="nav-link" href="{{route('keterusan')}}">
            <i class="material-icons">fact_check</i>
            <p>SQM DATA</p>
          </a>
        </li>
        <li class="nav-item {{request()->is('sqmnew') ? ' active' : ''}} nav-primary">
          <a class="nav-link" href="{{route('sq')}}">
            <i class="material-icons">data_thresholding</i>
            <p>SQM DATA NEW</p>
          </a>
        </li>
        <li class="nav-item nav-primary">
          <a class="nav-link" href="#">
            <i class="material-icons">mediation</i>
            <p>HD Tiket Monitor</p>
          </a>
        </li>
        <li class="nav-item nav-primary">
          <a class="nav-link" href="#">
            <i class="material-icons">analytics</i>
            <p>TTR Dashboard</p>
          </a>
        </li>
        <li class="nav-item nav-primary">
          <a class="nav-link" href="#">
            <i class="material-icons">display_settings</i>
            <p>SQM Dashboard</p>
          </a>
        </li>
      
        {{-- @role('superAdmin') --}}
      
        {{-- <li class="nav-item {{request()->is('keterusan') ? ' active' : ''}} ">
          <a class="nav-link" href="#">
            <i class="material-icons">content_paste</i>
            <p>Data Admin Sekolah</p>
          </a>
        </li> --}}
       
          {{-- @endrole --}}
      </ul>
    </div>
  </div>