@extends('layout.app')
@section('navbar.active.teacher','active')
@section('content')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>老師介紹</h2>
        <p>Professor</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-4 order-1 order-lg-1" data-aos="fade-left" data-aos-delay="100">
              <img src="assets/img/teacher.jpg" class="img-fluid" alt="" style="width: 80%;margin:0px auto;">
            </div>
            <div class="col-lg-7 pt-4 pt-lg-0 order-2 order-lg-2 content">
              <h3>楊文祿 <span class="font-italic">Wen-Luh Yang</span></h3>
              <p class="font-italic">
                逢甲大學電子工程學系 特聘教授
              </p>
              <ul>
                <li><i class="icofont-phone"></i> 校內分機: #{{ $basic_info->where('type','=','phone')->first()->value }}</li>
                <li><i class="icofont-ui-email"></i> Email: {{ $basic_info->where('type','=','email')->first()->value }}</li>
                <li><i class="icofont-building-alt"></i> 辦公室: {{ $basic_info->where('type','=','office')->first()->value }}</li>
              </ul>
              <p>
                <b>專長</b>
              </p>
              <ul>
                <li>半導體物理及元件Semiconductor Device Physics</li>
                <li>超大型積體電路設計及技術Semiconductor Manufacturing Technology</li>
              </ul>
              <p>
                <b>學歷</b>
              </p>
              <ul>
                <li>國立交通大學 電子研究所 博士</li>
                <li>國立交通大學 電子研究所 碩士</li>
                <li>國立交通大學 電子研究所 學士</li>

              </ul>
              <a href="mailto:wlyang@fcu.edu.tw" class="btn btn-outline-primary"> <i class="icofont-send-mail"></i> 寫信給我</a>
              <a href="http://www.ece.fcu.edu.tw/wSite/ct?xItem=12a00861ee83a0d9&ctNode=34655&mp=490101&submit=%E5%80%8B%E4%BA%BA%E8%B3%87%E6%96%99" class="btn btn-outline-info"><i class="icofont-external-link"></i> 系上網站</a>
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

    <!-- ======= Exprience Section ======= -->
    <section id="">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Experience</h2>
            <p>經歷</p>
          </div>
  
          <div class="row">
              <div class="col-lg-12">
                  <table class="table table-bordered table-responsive-sm">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>服務系所 Department</th>
                              <th>職稱 Job</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1</td>
                              <td>電子工程學系</td>
                              <td>特聘教授</td>
                          </tr>
                          <tr>
                              <td>2</td>
                              <td>電子工程學系</td>
                              <td>系主任</td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td>資訊電機工程碩士在職專班</td>
                              <td>主任</td>
                          </tr>
                          <tr>
                              <td>4</td>
                              <td>資電學院不分系榮譽班</td>
                              <td>主任</td>
                          </tr>
                          <tr>
                              <td>5</td>
                              <td>資訊電機學院</td>
                              <td>副院長</td>
                          </tr>
                          <tr>
                              <td>6</td>
                              <td>半導體與光電產業研發碩士專班</td>
                              <td>執行長</td>
                          </tr>
                          <tr>
                              <td>7</td>
                              <td>電機工程學系(所)</td>
                              <td>副教授</td>
                          </tr>
                          <tr>
                              <td>8</td>
                              <td>電機工程學系</td>
                              <td>教授</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
  
        </div>
      </section><!-- End Journal Articles Section -->


    <!-- ======= Journal Articles Section ======= -->
    <section id="">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Journal Articles</h2>
          <p>期刊論文</p>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <small>*本處僅列出近期論文，其他詳情請參閱系上網頁。</small>
                <table class="table table-bordered table-responsive-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>作者 Authors</th>
                            <th>標題 Title</th>
                            <th>出處 Journal</th>
                            <th width="10%">發表時間 Time</th>
                            <th >索引 Citation Index</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Chi-Chang Wu, Wen-Fa Wu, Guan-Wei Lin, and Wen-Luh Yang</td>
                            <td>Effects of the Molecular Chain Length of Polyimide on the Characteristics of Organic Resistive Random Access Memories</td>
                            <td>IEEE Transactions on Electron, 67,277-282(doi: 10.1109/TED.2019.2952361)</td>
                            <td>2019-11</td>
                            <td>SCI</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Chang-Fu Han, Rong-Hong Tasi, Glen-Huang Wu, Chang-Shuo Chang, Chung-Gen Chung, Chang-Hong Shen, Wen-Luh Yang, Chang-Li Lin, Jen-Fin Lin</td>
                            <td>Evaluations of heat treatment on polymer adhesive bonging and thermal-induced failure of two-layer through-silicon via structures</td>
                            <td>Sensors and Actuators A:Physical, 285(2019), pp. 685-699</td>
                            <td>2018-11</td>
                            <td>SCI</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Bohr-Ran Huang, Meng-Jiy Wang, Deepa Kathiravan, Alfin Kurniawan, Hong-Hui Zhang, and Wen-Luh Yang</td>
                            <td>Interfacial Effect of Oxygen-Doped Nanodiamond on CuO and Micropyramidal Silicon Heterostructures for Efficient Nonenzymatic Glucose Sensor</td>
                            <td>ACS Applied BIO Materials, vol. 1, pp. 1579-1586</td>
                            <td>2018-09</td>
                            <td>SCI</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Ching-Sung Lee*, Wei-Chou Hsu, Yi-Ping Huang, Han-Yin Liu, Wen-Luh Yang, and Shen-Tin Yang</td>
                            <td>Comparative Study on Graded-Barrier AlxGa1-xN/AlN/GaN/Si Metal-Oxide-Semiconductor Heterostructure Field-Effect Transistor by Using Ultrasonic Spray Pyrolysis Deposition Technique</td>
                            <td>Semiconductor Science and Technology, vol.33, pp.065004-1~7</td>
                            <td>2018-04</td>
                            <td>SCI</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Chi-Chang Wu, Hsin-Chiang You, Yu-Hsien Lin, Chia-Jung Yang, Yu-Ping Hsiao, Tun-Po Liao and Wen-Luh Yang</td>
                            <td>Impact of Electrode Surface Morphology in ZnO-Based Resistive Random Access Memory Fabricated Using the Cu Chemical Displacement Technique</td>
                            <td>Materials, 11(2), 2018, pp. 265-274</td>
                            <td>2018-02</td>
                            <td>SCI</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Chi-Chang Wu*, Yankuba B. Manga, Jia-Yang Hung, and Wen-Luh Yang</td>
                            <td>A Novel Approach to Fabricate Silicon Nanowire Field Effect Transistor for Biomolecule Sensing</td>
                            <td>AETA 2017 - Recent Advances in Electrical Engineering and Related Sciences:, 2017, 250-257</td>
                            <td>2018-01</td>
                            <td>ECONLIT</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Chi-Chang Wu, Yu-Ping Hsiao, Hsin-Chiang You, Guan-Wei Lin, Min-Fang Kao, Yankuba B. Manga, and Wen-Luh Yang</td>
                            <td>Improving the leakage current of polyimide-based resistive memory by tuning the molecular chain stack of the polyimide film</td>
                            <td>Japanese Journal of Applied Physics, 57, 02CA02</td>
                            <td>2017-12</td>
                            <td>SCI</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Yankuba B. Manga, Fu-Hsiang Ko, Yuh-Shyong Yang, Jia-Yang Hung, Wen-Luh Yang, Haw-Ming Huang, Chi-Chang Wu</td>
                            <td>Ultra-fast and sensitive silicon nanobelt field-effect transistor for high-throughput screening of alpha-fetoprotein</td>
                            <td>Sensors and Actuators B: Chemical, 256, 2018,1114-1121</td>
                            <td>2017-10</td>
                            <td>SCI</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Bohr-Ran Huang, Cheng-Liang Hsu, Yu-Kang Wang, and Wen-Luh Yang</td>
                            <td>Ultra-fast and sensitive silicon nanobelt field-effect transistor for high-throughput screening of alpha-fetoprotein</td>
                            <td>Sensors and Actuators B: Chemical, 256, 2018,1114-1121</td>
                            <td>2017-10</td>
                            <td>SCI</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Li-Min Lin, Wen-Luh Yang*, Yu-Hsien Lin, Yu-Ping Hsiao, Fun-Tat Chin, and Ming-Fang Kao</td>
                            <td>A novel nanoscale-crossbar resistive switching memory using a copper chemical displacement technique</td>
                            <td>Phys. Status Solidi A, 1–5</td>
                            <td>2016-12</td>
                            <td>SCI</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Hsin-Chiang You*, Cheng-Yen Wu and Wen-Luh Yang</td>
                            <td>Effects of Doped Stannum in the Fabrication of Zinc-Oxide Thin-Film Transistors</td>
                            <td>International Journal of Electrochemical Science, Volume 11, 3383 - 3392</td>
                            <td>2016-04</td>
                            <td>SCI</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Cheng-Yen Wu, Hsin-Chiang You, Gong-Kai Lin, Wen-Luh Yang</td>
                            <td>Improving the operational characteristic stability in Al/Au/ZnO/Al resistive random access memory devices</td>
                            <td>Japanese Journal of Applied Physics, Vol. 55, No. 4, pp.044101</td>
                            <td>2016-02</td>
                            <td>SCI</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

      </div>
    </section><!-- End Journal Articles Section -->
    <!-- ======= M.O.S.T. Project Section ======= -->
    <section id="">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>M.O.S.T. Project</h2>
            <p>科技部計畫</p>
          </div>
  
          <div class="row">
              <div class="col-lg-12 col-sm-12">
                  <small>*本處僅列出近期計畫，其他詳情請參閱系上網頁。</small>
                  <table class="table table-bordered table-responsive-sm">
                      <thead>
                          <tr>
                              <th>#</th>
                              <th>計畫名稱 Name</th>
                              <th width="10%">計畫日期(起) <br> Start Date</th>
                              <th width="10%">計畫日期(迄) <br> End Date</th>
                              <th >計畫編號 Project Number</th>
                              <th >擔任工作 Job</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td>1</td>
                            <td>化學置換法與聚亞醯胺薄膜開發應用於新穎記憶體元件(I)</td>
                            <td>2019-08</td>
                            <td>2020-07</td>
                            <td>MOST108-2221-E-035-001-</td>
                            <td>主持人</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>分子重量配比對聚亞醯胺電阻式記憶體之研究</td>
                            <td>2019-07</td>
                            <td>2020-02</td>
                            <td>108-2813-C-035-009-E</td>
                            <td>主持人</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>能隙可調式聚亞醯胺薄膜應用於新興電阻式記憶體以及結合電阻轉換層的新穎電荷擷取式記憶體之研究(3/3)</td>
                            <td>2018-08</td>
                            <td>2019-07</td>
                            <td>MOST105-2221-E-035-075-MY3</td>
                            <td>主持人</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>能隙可調式聚亞醯胺薄膜應用於新興電阻式記憶體以及結合電阻轉換層的新穎電荷擷取式記憶體之研究(2/3)</td>
                            <td>2017-08	</td>
                            <td>2018-07</td>
                            <td>MOST105-2221-E-035-075-MY3</td>
                            <td>主持人</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>聚亞醯胺電阻式記憶體特性分析與研究</td>
                            <td>2017-07	</td>
                            <td>2018-02</td>
                            <td>MOST105-2221-E-035-075-MY3</td>
                            <td>主持人</td>
                        </tr>
                      </tbody>
                  </table>
              </div>
          </div>
  
        </div>
      </section><!-- End M.O.S.T. Project Section -->

<!-- ======= Proceeding Section ======= -->
<section id="">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Proceeding</h2>
        <p>會議論文</p>
      </div>

      <div class="row">
          <div class="col-lg-12 col-sm-12">
              <small>*本處僅列出部分會議論文，其他詳情請參閱系上網頁。</small>
              <table class="table table-bordered table-responsive-sm">
                  <thead>
                      <tr>
                        <th>#</th>
                        <th>作者 Authors</th>
                        <th>標題 Title</th>
                        <th>會議名稱 Conference Name</th>
                        <th width="10%">發表時間 Time</th>
                        <th >地點 Place</th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1</td>
                        <td>Yen-Chun Liu, Syuan-Yi Li, Xin-Jie Wang, Chan-Yi Chiu, Chi-Chang Wu and Wen-Luh Yang</td>
                        <td>Cu-Ag Alloy By Using Chemical Displacement Method for Resistive Random-Access Memory</td>
                        <td>237th The Electrochemical Society (ECS) Meeting , Volume MA2020-01</td>
                        <td>2020-05</td>
                        <td>Palais des congrès de Montréal</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Chan-Yi Chiu, Ming-Hsun Yang, Wen-Chi Hsu, Chong-Yu Wu, Zheng-Shun Chien, Kuan-Sheng Lee, Yen-Chun Liu, Tun-Po Liao, Bo-Ling Tzeng, Chi-Chang Wu, and Wen-Luh Yang*</td>
                        <td>Improve Electrical Performance of Cu-based Resistive Switching Memory by Chemical Displacement Technique</td>
                        <td>2019 Asia-Pacific Workshop on Fundamentals and Applications of Advanced Semiconductor Devices (AWAD 2019) , 1</td>
                        <td>2019-07</td>
                        <td>1410-3 U-dong, Haeundae-gu</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Wen-Chi Hsu, Ming-Hsun Yang, Chan-Yi Chiu, Chong-Yu Wu, Zheng-Shun Chien, Kuan-Sheng Lee, Yen-Chun Liu, Bo-Ling Tzeng, Chi-Chang Wu, and Wen-Luh Yang*</td>
                        <td>Improving the Characteristics for Polyimide-based Resistive Random Access Memory by Different Rotating Speed of Rubbing</td>
                        <td>2019 Asia-Pacific Workshop on Fundamentals and Applications of Advanced Semiconductor Devices (AWAD 2019) , 1</td>
                        <td>2019-07</td>
                        <td>1410-3 U-dong, Haeundae-gu</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Yankuba B Manga, Jia-Yang Hung, Haw-Ming Huang, Wen-Luh Yang and Chi-Chang Wu</td>
                        <td>A novel poly-crystalline silicon nanowire field-effect transistor biosensor for potential biomolecules screening	</td>
                        <td>World Congress On BIOSENSORS AND BIOELECTRONICS , DOI : 10.4172/2469-5653-C3-017</td>
                        <td>2018-08</td>
                        <td>Convention center</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Jia-Yang Hung, Yankuba B. Manga, Yu-Ju Chen, Haw-Ming Huang, Wen-Luh Yang, Chi-Chang Wu</td>
                        <td>P16INK4a detection using an ultra-sensitive Silicon Nanowire Field Effect Transistor</td>
                        <td>The 7th IEEE International Symposium on Next-Generation Electronics (ISNE2018), 1</td>
                        <td>2018-05</td>
                        <td>台北科技大學</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Tun-Po Liao, Bo-Ling Tzeng, Chi-Chang Wu, and Wen-Luh Yang</td>
                        <td>Improving operation electric field of Cu-based Resistive Switching Memory by Cu Chemical Displacement Technique</td>
                        <td>The 7th IEEE International Symposium on Next-Generation Electronics (ISNE2018), 1</td>
                        <td>2018-05</td>
                        <td>台北科技大學</td>
                    </tr>
                  </tbody>
              </table>
          </div>
      </div>

    </div>
  </section><!-- End Proceeding Section -->

<!-- ======= Proceeding Section ======= -->
<section id="">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Patent</h2>
        <p>核准專利</p>
      </div>

      <div class="row">
          <div class="col-lg-12 col-sm-12">
              <table class="table table-bordered table-responsive-sm">
                  <thead>
                      <tr>
                        <th>#</th>
                        <th>專利名稱 Name</th>
                        <th>類別 Category</th>
                        <th>文號 Patent Number</th>
                        <th width="10%">日期(起) Start Date</th>
                        <th width="10%">日期(迄) End Date</th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>1</td>
                        <td>非對稱式汲源極通道結構異質場校體</td>
                        <td>發明</td>
                        <td>I292179	</td>
                        <td>2008-01</td>
                        <td>2025-01</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>以氮氧化合物為矽晶圓製程快速擴散方法</td>
                        <td>發明</td>
                        <td>發明第I244125號</td>
                        <td>2005-11</td>
                        <td>2021-07</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Oxygen-removing pre-process for copper interconnect grown by electrochemical displacement deposition (銅導線置換沈積之除氧方法)</td>
                        <td>發明</td>
                        <td>US006838116B2</td>
                        <td>2005-01</td>
                        <td>2009-07</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Oxygen-removing Pre-process for Copper Interconnect Grown by Electrochemical Displacement Deposition</td>
                        <td>發明</td>
                        <td>6,838,116</td>
                        <td>2005-01</td>
                        <td>2023-07</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>導線鑄模之置換沈積方法</td>
                        <td>發明</td>
                        <td>197866</td>
                        <td>2004-02</td>
                        <td>2022-12</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>銅導線置換沉積之除氧方法</td>
                        <td>發明</td>
                        <td>189507</td>
                        <td>2003-10</td>
                        <td>2022-11</td>
                    </tr>
                  </tbody>
              </table>
          </div>
      </div>

    </div>
  </section><!-- End Proceeding Section -->

  </main><!-- End #main -->
@endsection