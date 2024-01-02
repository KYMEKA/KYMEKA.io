        <?php
          $host="localhost";
          $user="root";
          $pass="1234";
          $db="pi";
          $connect=mysqli_connect($host, $user, $pass, $db);
          $conndb="select * From mg2";
          $result=mysqli_query($connect, $conndb);

          while ($row=mysqli_fetch_row($result)) 
          {

        ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>KYMG</title>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['시간', '내부먼지', '외부먼지'],
          ['09:00',  54,      60],
          ['10:00',  53,      54],
          ['11:00',  48,      55],
          ['12:00',  45,      50]
        ]);

        var options = {
          title: '먼지량',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/kymg1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Welcome to <span>KYMG</span></h1>
            <p class="animated fadeInRightBig">건양대학교 먼지정보를 보여드립니다.</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">미세먼지 정보 보기</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/kymg2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Say GoodBye to <span>DUST</span></h1>
            <p class="animated fadeInRightBig">실시간 미세먼지 정보 업로드</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">미세먼지 정보 보기</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/kymg3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We Want <span>Clean SKY</span></h1>
            <p class="animated fadeInRightBig">건양대학교 의료IT공학과</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">미세먼지 정보 보기</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>
    </div><!--/#home-slider-->

    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--<a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="images/logo.png" alt="logo"></h1>
          </a>-->                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#services">현재 미세먼지</a></li> 
            <li class="scroll"><a href="#about-us">미세먼지 환경 기준</a></li>                     
            <li class="scroll"><a href="#portfolio">미세먼지 관련 웹사이트</a></li>
            <li class="scroll"><a href="#team">개발자 소개</a></li>
            <li class="scroll"><a href="#blog">미세먼지 정보</a></li>
            <li class="scroll"><a href="#contact">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->

  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>현재 미세먼지</h2>
            <p>현재 건양대학교 내부와 외부의 미세먼지 농도를 보여줍니다.</p>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">





        <h2 style="text-align: center;">현재의 내부 미세먼지 농도는 : <strong> <font color="green" size="20px"> <?php echo "$row[0]"; } ?> ㎍/㎥ </font></strong></h2>

        <h2 style="text-align: center;  ">현재의 외부 미세먼지 농도는 : <strong> <font color="green" size="20px">
          <?php $conndb2="select * From omg2 order by 'djmg' desc limit 1";
          $result=mysqli_query($connect, $conndb2);

          while ($row=mysqli_fetch_row($result)) 
          { echo "$row[0]"; } ?> ㎍/㎥ </font></strong></h2>

        <div id="curve_chart" style="width: 900px; height: 500px"></div>

    </div>
  </section><!--/#services-->


  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        
          
                <div id="cont_body">
        

        <br>
        <br>
        <h2>&nbsp;미세먼지 환경기준</h2>
        <p></p>
            <li>&nbsp;&nbsp;&nbsp;* 예보내용이 '약간나쁨'인 경우, 어린이와 노인, 호흡기 질환자 등은 가급적 외출을 자제하고 외출 시에는 식약처가 인증한 황사마스크를 착용하세요.</li>
            <li>&nbsp;&nbsp;&nbsp;* 미세먼지 예보는 미세먼지 농도에 따라 총 5가지 등급으로 나뉘어집니다.</li>
            <li>&nbsp;&nbsp;&nbsp;* 장시간 외출 시, 실시간 미세먼지 농도 확인을 생활화하고 미세먼지 농도가 높은날에는 대기오염을 줄이기 위헤 지하철 등 대중교통을 이용해주세요.</li>
          </div>
          <br>
          <table class="table table-bordered table-hover">
            <caption>
            <span class = 'text-info'> &nbsp;&nbsp;&nbsp;* 약간나쁨 : (어린이 노인 등) 장시간 실외활동 가급적 자제 </span><br>
            <span class = 'text-warning'> &nbsp;&nbsp;&nbsp;* 나쁨 : (어린이 노인 등) 무리한 실외활동 자제 
                                (일반인) 장시간 무리한 실외활동 자제</span><br>
            <span class = 'text-danger'> &nbsp;&nbsp;&nbsp;* 매우나쁨 :  (어린이 노인 등) 실외활동 제한
                                (일반인) 실외활동 자제</span><br>
            </caption>
        <br>   
        <thead> <미세먼지 농도별 예보등급>
            <tr>
                <th  bgcolor="#0d81e5">좋음</th>
                <th  bgcolor="#4dc11d">보통</th>
                <th  bgcolor="#46aee2">약간 나쁨</th>
                <th  bgcolor="#efd02d">나쁨</th>
                <th  bgcolor="#e22626">매우나쁨</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>0 ~ 30</td>
                <td >31 ~ 80</td>
                <td>81 ~ 120</td>
                <td >121 ~ 200</td>
                <td >201~</td>
            </tr>
        </tbody>
    </table>

      </div>
    </div>
  </section><!--/#about-us-->

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>미세먼지 관련 웹사이트</h2>
          <p>다른 지역의 미세먼지 정보를 제공하는 웹사이트 입니다..</p>
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/기상청.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>기상청</h3>
                    <p></p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a href="http://www.weather.go.kr/weather/main.jsp" ><i class="fa fa-link"></i></a></span>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/에어코리아2.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>에어 코리아</h3>
                    <p></p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a href="https://www.airkorea.or.kr/index" ><i class="fa fa-link"></i></a></span>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/대전2.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>대전 보건환경연구원</h3>
                    <p></p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a  href="https://www.daejeon.go.kr/hea/index.do" ><i class="fa fa-link"></i></a></span>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/행안부2.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>국민 재난 안전 포털</h3>
                    <p></p>
                  </div>
                  <div class="folio-overview">
                    <span class="folio-link"><a  href="http://www.safekorea.go.kr/idsiSFK/126/menuMap.do?w2xPath=/idsiSFK/wq/sfk/cs/contents/prevent/prevent14.xml"  ><i class="fa fa-link"></i></a></span>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->


  <section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>개발자 소개</h2>
          <p>KYMG 시스템을 만든 건양대학교 의료IT공학과 개발자들 입니다.</p>
        </div>
      </div>
      <div class="team-members">
        <div class="row">
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img width="150" height="200" src="images/team/송호중.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>송호중</h3>
                <h4>팀장 &amp; WEB</h4>
                <p>songhj6692@gmail.com</p>
              </div>

            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-image">
                <img width="150" height="200" src="images/team/정승호.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>정승호</h3>
                <h4>APP</h4>
                <p>sso0091@naver.com</p>
              </div>

            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="member-image">
                <img width="150" height="200" src="images/team/신재우.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>신재우</h3>
                <h4>H/W Developer</h4>
                <p>wodn5326@naver.com </p>
              </div>

            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img   width="150" height="200" src="images/team/이현승.jpg" alt="">
              </div>
              <div class="member-info">
                <h3>이현승</h3>
                <h4>H/W Developer</h4>
                <p>dlgustmd1231@naver.com</p>
              </div>

            </div>
          </div>
        </div>
      </div>            
    </div>
  </section><!--/#team-->



  <section id="contact">
    <h2 style="text-align: center;">미세먼지 측정 위치</h2>
    <div id="google-map" class="wow fadeIn" data-latitude="36.3065056" data-longitude="127.34257219999995" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contact Us</h2>


              <div>
                <p>KYMG를 찾아주셔서 감사합니다. 궁금학 점이 있으면 언제든지 아래의 주소로 연락주세요.</p>
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Address:</span> 대한민국 대전광역시 서구 관저동 건양대학교 </li>
                  <li><i class="fa fa-phone"></i> <span> Phone:</span> 010-2714-6692 </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:songhj6692@gmail.com"> songhj6692@gmail.com</a></li>

                </ul>
              </div>  

          </div>



        </div>

      </div>
    </div>        
  </section><!--/#contact-->


  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="images/" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2018 KYMG</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by <a href="https://www.konyang.ac.kr/">konyang</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>