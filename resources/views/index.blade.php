@extends('layout.app')
@section('navbar.active.index','active')
@section('title','首頁')
@section('content')
      <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>半導體量測實驗室</h1>
      <h2>本研究所研究積體電路在微縮下所面臨的問題與新穎元件、新材料引進的研究，在研究方向分為非揮發性記憶體元件、積體電路前後段製程與生醫元件。</h2>
      <a href="research_area.html" class="btn-get-started">了解更多</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Professor</h2>
          <p>老師簡介</p>
        </div>

        <div class="row">
          <div class="col-lg-3 order-1 order-lg-1" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/teacher.jpg" class="img-fluid" alt="" style="width: 80%;margin:0px auto;">
          </div>
          <div class="col-lg-9 pt-4 pt-lg-0 order-2 order-lg-2 content">
            <h3>楊文祿</h3>
            <p class="font-italic">
              逢甲大學電子工程學系 特聘教授
            </p>
            <ul>
              <li><i class="icofont-phone"></i> 校內分機: #4967</li>
              <li><i class="icofont-ui-email"></i> Email: wlyang@fcu.edu.tw</li>
              <li><i class="icofont-building-alt"></i> 辦公室: 電通118</li>
            </ul>
            <p>
              專長
            </p>
            <ul>
              <li>半導體物理及元件Semiconductor Device Physics</li>
              <li>超大型積體電路設計及技術Semiconductor Manufacturing Technology</li>
            </ul>
            <a href="teacher.html" class="learn-more-btn">了解更多</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-2 col-6 text-center">
            <span data-toggle="counter-up">89</span>
            <p>發表期刊論文</p>
          </div>

          <div class="col-lg-2 col-6 text-center">
            <span data-toggle="counter-up">108</span>
            <p>會議論文</p>
          </div>

          <div class="col-lg-2 col-6 text-center">
            <span data-toggle="counter-up">6</span>
            <p>核准專利</p>
          </div>

          <div class="col-lg-2 col-6 text-center">
            <span data-toggle="counter-up">33</span>
            <p>科技部計畫</p>
          </div>
          <div class="col-lg-2 col-6 text-center">
            <span data-toggle="counter-up">5</span>
            <p>產學合作計畫</p>
          </div>
          <div class="col-lg-2 col-6 text-center">
            <span data-toggle="counter-up">75</span>
            <p>獎勵及指導學生獲獎</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Lastest</h2>
          <p>近期動態</p>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Web Development</h4>
                  <p class="price">$169</p>
                </div>

                <h3><a href="course-details.html">Website Design</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Antonio</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="assets/img/course-2.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Marketing</h4>
                  <p class="price">$250</p>
                </div>

                <h3><a href="course-details.html">Search Engine Optimization</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
                    <span>Lana</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;35
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;42
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="assets/img/course-3.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Content</h4>
                  <p class="price">$180</p>
                </div>

                <h3><a href="course-details.html">Copywriting</a></h3>
                <p>Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
                    <span>Brandon</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;20
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;85
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

        </div>

      </div>
    </section><!-- End Popular Courses Section -->

  </main><!-- End #main -->
@endsection