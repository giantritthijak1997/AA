<?php
	include 'config/connection.php';
	$sql = "SELECT * FROM files WHERE status = 1";
	$result = $conn->query($sql);
  $numrows = $result->num_rows;
  
  $sqlcat = "SELECT * FROM category WHERE status = 1";
	$resultcat = $conn->query($sqlcat);
  $numrowscat = $resultcat->num_rows;
?>
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>TFAC KNOWLEDGE CENTER</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  

  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/download.png" />
  
</head>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->

    <!-- start header -->
    <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
            </div>
            <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
              </div>                    
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.php"><img src="img/sB5MpHJ6qa.png" alt="" class="logo" /></a>
              
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                <ul class="nav topnav">
                <li class="dropdown active">
                  <a href="index.php">Home <i class=""></i></a>
                <ul class="dropdown-menu">
                       <!-- <li><a href="index-alt2.html">Homepage 2</a></li>
                        <li><a href="index-alt3.html">Homepage 3</a></li>-->
                </ul>
                  </li>
                  <li class="dropdown">
                    
                    <ul class="dropdown-menu">
                        
                        <li class="dropdown"><a href="Page4.php">มาตรฐานการศึกษา <i class="icon-angle-right"></i></a>
                            <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="portfolio-3cols.html">ประเภทย่อ</a></li>
                            <li><a href="portfolio-3cols.html">ประเภทย่อ</a></li>
                            <li><a href="portfolio-3cols.html">ประเภทย่อ</a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                   
                    </li>
                    <li>
                      <a href="contact.html">คู่มือการใช้งานเว็บไซต์ </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    <section id="featured">
      <!-- start slider -->
      <!-- Slider -->
      <div id="nivo-slider">
       <!-- <div class="nivo-slider">-->
          <!-- Slide #4 image-->
          <img src="img/slides/nivo/bg-3.jpg" alt="" title="#caption-4" />
        </div>
       
    <!--<section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <section id="content">
              <div class="container">
                <div class="row">
                  <div class="span6">
                  <center> <h2>Welcome to <strong><br>TFAC KNOWLEDGE CENTER</strong></h2>
                    <p>
                      ห้องสมุดเป็นแหล่งสืบค้นข้อมูลตั้งแต่เราเริ่มรู้จักศึกษาค้นคว้าด้วยตนเอง  เป็นการค้นคว้าหาความรู้จากเอกสารที่รวบรวมความรู้ไว้เป็นเล่ม  เป็นเรื่อง ๆ  จัดไว้เป็นสัดส่วนตามหมวดหมู่ในระบบหนังสือ
                    </p>
                    <p>
                      บางครั้งอาจหาสิ่งที่ต้องการสืบค้นเจอบ้างไม่เจอบ้าง  แต่สมัยใหม่นี้มีห้องสมุดแบบใหม่ที่เราเรียกกันว่า  ห้องสมุดออนไลน์  ถ้าใครสืบค้นข้อมูลทางอินเทอร์เน็ตคล่องแคล่ว อยากเรียนรู้เรื่องอะไร  ศึกษาเรื่องอะไร  ก็เข้าไปเรียนรู้ในห้องเรียนนั้น ๆ  ได้เลย
                    </p>
                    <p>
                      ระบบนี้ก็ดีอีกแบบ จะได้ช่วยลดปริมาณกระดาษที่ใช้ให้น้อยลง จะได้ไม่ต้องไปตัดไม้ทำลายป่ากันซะที ในบทความนี้ผู้เขียนจะกล่าวถึงความหมายของห้องสมุดออนไลน์ วัตถุประสงค์ของห้องสมุดออนไลน์ รูปแบบของห้องสมุดออนไลน์ วิธีการใช้ห้องสมุดออนไลน์ และปัจจัยที่ทำให้การใช้ห้องสมุดออนไลน์ประสบความสำเร็จ
                    </p>
                  </div>
                  <div class="span6">
                    <!-- start flexslider -->
                    <!--<div class="flexslider">
                      <ul class="slides">
                        <li>
                          <img src="img/works/full/Tacc20190.jpg" alt="" />
                        </li>
                        <li>
                          <img src="img/works/full/vd.jpg" alt="" />
                        </li>
                        <li>
                          <img src="img/works/full/TFRS9.jpg" alt="" />
                        </li>
                      </ul>
                    </div>
                    <!-- end flexslider -->
                  </div>
                </div>
          </div>
        </div>
      </div>
    </section> 
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
            <?php $i=1; while($rowcat = $resultcat->fetch_assoc()) {?>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                  <li><a href="Page1.php?cat=<?=$rowcat['category_id'];?>"><i class="<?=$rowcat['category_icon'];?> icon-circled icon-64 active"></i>
                    
                  </div>
                  <div class="text">
                    <h6><?=$rowcat['category_name'];?></h6>
                    <a href="Page1.php?cat=1">รายละเอียดเพิ่มเติม...</a>
                   
                  </div>
                </div>
              </div>
              <?php }
                  ?>
              
              
              
            </div>
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <!-- Portfolio Projects -->
        <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
          <center><h1>หนังสือที่อัพเดทล่าสุด</h1></center>
            <div class="clearfix">
            </div>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
                  <!-- Item Project and Filter Name -->          
                  <?php $i=1; while($row = $result->fetch_assoc()) {?>
                  <li class="item-thumbs span4 design" data-id="id-0" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" target="_blank" title="Portfolio name" href="uploads/doc/<?=$row['file_name'];?>">
						<span class="overlay-img"></span>
						<span class="overlay-img-thumb font-icon-plus"></span>
						</a>
                    <!-- Thumb Image and Description -->

                    <img src="uploads/pic/<?=$row['file_picture'];?>" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <?php }
                  ?>
                 </ul>
              </section>
            </div>
          </div>
        </div>
      </div>
    </section>       
        <!-- End Portfolio Projects -->
        <!-- divider -->
       <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
       </div>
      </div>
    </section>
    <section id="bottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div id="twitter-wrapper">
                <div id="twitter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="row">
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="#">About our company</a></li>
                <li><a href="#">Our services</a></li>
                <li><a href="#">Meet our team</a></li>
                <li><a href="#">Explore our portfolio</a></li>
                <li><a href="#">Get in touch with us</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Important stuff</h5>
              <ul class="link-list">
                <li><a href="#">Press release</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Career center</a></li>
                <li><a href="#">Flattern forum</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Flickr photostream</h5>
              <div class="flickr_badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
              </div>
              <div class="clear">
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Get in touch with us</h5>
              <address>
								<strong>Flattern studio, Pte Ltd</strong><br>
								 Springville center X264, Park Ave S.01<br>
								 Semarang 16425 Indonesia
					 		</address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <i class="icon-envelope-alt"></i> email@domainname.com
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; Flattern - All right reserved.</span>
                </p>
                
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/jquery.nivo.slider.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.ba-cond.min.js"></script>
  <script src="js/jquery.slitslider.js"></script>
  <script src="js/animate.js"></script>

  <!-- Template Custom JavaScript -->

  <!-- PAE -->
  <script src="js/custom.js"></script>

</body>
</html>
