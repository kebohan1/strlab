  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <!-- <h1 class="logo mr-auto"><a href="index.html">半導體量測實驗室</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo mr-auto"><img src="assets/img/Object 351.svg" alt="" class="img-fluid logo-image"> <span class="logo-content">半導體量測實驗室</span> </a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="@yield('navbar.active.index')"><a href="{{ route('index') }}">首頁</a></li>
          <li class="@yield('navbar.active.teacher')"><a href="{{ route('index.teacher') }}">老師介紹</a></li>
          <li class="@yield('navbar.active.research_area')"><a href="research_area.html">研究方向</a></li>
          <li class="@yield('navbar.active.equipment')"><a href="trainers.html">儀器介紹</a></li>
          <li class="drop-down"><a href="">組織成員</a>
            <ul>
              <li class="@yield('navbar.active.now_member')"><a href="#">目前成員</a></li>
              <li class="@yield('navbar.active.graduated_member')"><a href="#">畢業學長姐</a></li>
            </ul>
          </li>

        </ul>
      </nav><!-- .nav-menu -->


    </div>
  </header><!-- End Header -->