<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8">
  <title>اتســاق</title>
  <!-- First Mobile Meta -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/Fonts/fonts.css">
  <link rel="stylesheet" href="css/section2.css">



  <link rel="icon" type="image/x-icon" href="images/IMG_8776.png">
  
  <!-- for dropdown functionality -->
  <style type="text/css">
    .dropdown-large {
      padding: 1rem;
    }

    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {
      .dropdown-large {
        min-width: 500px;
      }
    }

    /* ============ desktop view .end// ============ */

    .dropdown-large a {
      text-decoration: none;
      color: rgb(153, 93, 93);
    }

    #smallList.show {
      min-width: 250px;
    }
  </style>

  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function () {
      /////// Prevent closing from click inside dropdown
      document.querySelectorAll('.dropdown-menu').forEach(function (element) {
        element.addEventListener('click', function (e) {
          e.stopPropagation();
        });
      })
    });
    // DOMContentLoaded  end
  </script>
</head>

<body>

  <!-- Navbar Section  -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <img id="logo" src="images/IMG_8776.png" alt="logo" width="45" height="60">
      <a class="navbar-brand " href="#">اتــــــســــــاق</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">الصـفحـة الـرئيـسيـة</a>
          </li>
          <div style="display:contents;">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" style="color:black;"> الـرسـامـيـن
              </a>
              <div class="dropdown-menu dropdown-large" style="text-align: right;">
                <div class="row g-3">
                  <div class="col-6">

                    <ul class="list-unstyled">
                      <li><a href="Sameer.html">سَميــر الدهَـام</a></li>
                      <li><a href="Saad.html">سَعَــد العبيـد</a></li>
                      <li><a href="SarahAbdu.html">سَـارة أبو عبدالله</a></li>
                      <li><a href="Alsulaiman.html">عَبدالرحمَن السلِيمان</a></li>
                      <li><a href="Alshaik.html">عَبداللـه الشِيـخ</a></li>
                      <li><a href="Garem.html">عَبدالنَـاصِر غَـارِم</a></li>
                    </ul>
                  </div><!-- end col-3 -->
                  <div class="col-6">

                    <ul class="list-unstyled">
                      <li><a href="AhmadAlmag.html" aria-current="true">أحمـد المغلوث</a></li>
                      <li><a href="AhmadF.html">أحمـد فلمبـان</a></li>
                      <li><a href="Zuhair.html">زُهِيــر طُـولَه</a></li>
                      <li><a href="Diyaa.html">ضيــاء عَـزِيـز</a></li>
                      <li><a href="Tahh.html">طَـهَ الصـبَّان</a></li>
                      <li><a href="Radwi.html">عبدالحليـم رضـوي</a></li>
                    </ul>
                  </div><!-- end col-3 -->

                  <div class="col-6">

                    <ul class="list-unstyled">
                      <li><a href="Alyaa.html">عَليَاء السُلطان</a></li>
                      <li><a href="Layan.html">ليان الجريش</a></li>
                      <li><a href="Mothla.html">مُثلى النُوشَان</a></li>

                    </ul>
                  </div>
                </div><!-- end row -->
              </div> <!-- dropdown-large.// -->
            </li>
          </div>
          <!-- UNTIL HERE -->
          <div style="display:contents;">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" style="color:black;"> المـعـارض
              </a>
              <div class="dropdown-menu dropdown-large" id="smallList" style="text-align: right;">
                <span class="row g-3">

                  <ul class="list-unstyled">
                    <li><a href="gallery.html">المعارض الحالية</a></li>
                    <li><a href="gallery2.html" aria-current="true">المعارض السابقة</a></li>
                    <li><a href="gallery3.html">معارض ومتاحف عالمية</a></li>
                  </ul>

                </span><!-- end row -->
              </div> <!-- dropdown-large.// -->
            </li>
          </div>

          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="Activities.html">الفعاليات</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="#">المـتـجـر </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="register.php"> <button class="btn btn-outline "
                type="submit"
                style="border:1px solid lightgray; color:black;  margin-right: 10px; padding: 2px 4px ;  transform:translate(0%,-10%);">تــسجـيـل</button>
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="LoginPage.php"> <button class="btn btn-outline "
                type="submit"
                style="border:1px solid lightgray; color:black;  margin-right: 10px; padding: 2px 4px; transform:translate(0%,-10%);">تــسجـيـل
                دخــول</button> </a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
  <!-- end of navbar -->

  <br> <br>

  <!-- New  Crousel-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
        aria-label="Slide 5"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="images/34210b86ce933b265c7386d48a4c3214.jpg" alt="image1" class="d-block w-100 "
          alt="First slide" height="500" width="500">
        <div class="container">
          <div class="carousel-caption text-start">
            <h5 style="color:black; position: relative; right:65%; bottom:5em; text-align: right;">
              اتـــــســـــــــــــاق</h5>
            <p style="color:black; position: relative; right:65%; bottom:5em; text-align: right;"> إن
              الاتـــــســـــــــــــاق في الشكل، والتوازن والانسجام والتوافق <br>بين عناصر العمل الفني بمثابة المرشد
              للمدرك الجمالي<br> و ترتيب العناصر حسب الأهميـة يوضح للمتلقـي كيف يوزع اهتمامه <br>"ولولا هذا المرشد لتشتت
              الانتباه تماماً، ولما عاد للتجربة عندئذ <br>ذلـك العـمـق والحيوية اللذان يتميز بهما التذوق الجمالي" </p>
            <button type="button" class="btn" onclick="location.href = 'https://www.google.com.sa/?hl=ar'; "
              style=" position: relative; left:25%; bottom:5em;  background-color: lightgray; font-weight: bold;">التسجيل</button>
          </div>
        </div>
      </div>


      <div class="carousel-item">
        <img class="d-block w-100" src="images/عالم2.png" alt="image1" class="d-block w-100 " alt="Second slide"
          height="500" width="500">
        <div class="container">
          <div class="carousel-caption text-start">
            <h5 style="color:black; position: relative; right:85%; bottom:6em; text-align: right;">شادية ورجاء عالم</h5>
            <p style="color:black; position: relative; right:85%; bottom:6em; text-align: right;">ما بين مكة والبندقية..
              <br>أول فنانتين تمثلان المملكة العربية السعودية<br> في بينالي البندقية اطلع الآن!
            </p>
            <button type="button" class="btn" onclick="location.href = 'https://www.google.com.sa/?hl=ar'; "
              style=" position: relative; left:5%; bottom:6em;  background-color: lightgray; font-weight: bold">الرسامين</button>
          </div>
        </div>
      </div>


      <div class="carousel-item">
        <img class="d-block w-100" src="images/معرض2.png" alt="image3" class="d-block w-100 " alt="Third slide"
          height="500" width="500">
        <div class="container">
          <div class="carousel-caption text-start">
            <h5 style="color:black; position: relative; right:75%; bottom:6em; text-align: right;">Lift Art Gallery
            </h5>
            <p style="color:black; position: relative; right:75%; bottom:6em; text-align: right;">انطلاقاً من إيمان
              المعرض الشديد بأنه يمكن إثراء هذه الحياة<br> من خلال تجربة الفن المعاصر، يقوم Lift Art Gallery<br> بعرض
              مجموعة متنوعة من الأعمال الفنية المتميزة ! للمزيد ..</p>
            <button type="button" class="btn" onclick="location.href = 'https://www.google.com.sa/?hl=ar'; "
              style=" position: relative; left:15%; bottom:5em;  background-color: lightgray; font-weight: bold;">المـعـارض</button>
          </div>
        </div>
      </div>


      <div class="carousel-item">
        <img class="d-block w-100" src="images/activity2.png" alt="image5" class="d-block w-100" alt="Fifth slide"
          height="500" width="500">
        <div class="container">
          <div class="carousel-caption text-start">
            <h5 style="color:black; position: relative; right:65%; bottom:6em; text-align: right;">Eleven Art Gallery &
              Café </h5>
            <p style="color:black; position: relative; right:65%; bottom:6em; text-align: right;">استمتع بأروع تجربة من
              ورشات العمل الجماعية<br> في جو مليء بطاقات الفن والابداع ورائحة القهوة<br> في Eleven Art Gallery & Café
            </p>
            <button type="button" class="btn" onclick="location.href = 'https://www.google.com.sa/?hl=ar'; "
              style=" position: relative; left:25%; bottom:5em;  background-color: lightgray; font-weight: bold;">الفعاليات</button>
          </div>
        </div>
      </div>




      <div class="carousel-item">
        <img class="d-block w-100" src="images/page4.jpg" alt="image4" class="d-block w-100 " alt="Fourth slide"
          height="500" width="500">
        <div class="container">
          <div class="carousel-caption text-start">
            <h5 style="color:black; position: relative; right:65%; bottom:6em; text-align: right;">متجر
              اتــــســـــــــــاق الالكتروني</h5>
            <p style="color:black; position: relative; right:65%; bottom:6em; text-align: right;">تشكيلة رائعة من
              المنتجات المختارة بكل اتـســـاق <br>لتناسب ذائقتكم الفنية... </p>
            <button type="button" class="btn" onclick="location.href = 'https://www.google.com.sa/?hl=ar'; "
              style=" position: relative; left:25%; bottom:6em; background-color: lightgray; font-weight: bold;">المـعـارض</button>
          </div>
        </div>
      </div>





      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <br><br><br>
  <img alt="pic" class="bg" src="https://www.sasca.org.sa/public//assets/cards/images/bgMemberShip.png"
    style=" width: 100%;">

  <!-- نبذه عن اتساق -->
  <div class="container" id="about_us"> تُعتبر الفنون البصريةُ لغةَ تخاطب بين الشعوب، فهي تساعد على نقل الثقافات دون
    الحاجة إلى الشرح والتفسير، كما أنها عنصر أساسي في تشكيل الثقافة السعودية؛ وعليه فقد أبدينا نحن
    -اتــــســـــــــــاق- اهتماماً بتعزيز الفنون البصرية، وتمكين ممتهنيها ومحترفيها وهواتها بكافة السبل، وتحفيزهم على
    إنتاج وتقديم أعمال فنية تثري قطاع الفنون البصرية؛ لتكون المملكة رائدةً بفنها وفنانيها.</div>

  <img alt="pic" class="bg" src="https://www.sasca.org.sa/public//assets/cards/images/bgMemberShip.png"
    style=" width: 100%;">

  <!-- Section 2 -->
  <section class="support">
    <div class="container-fostrap">
      <div>
        <h1 class="heading" style="font-family: 'Lateef', cursive; font-size:400%;
          ">
          الـجــهــات الــداعـمــة
          <hr>
        </h1>

      </div>
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-4">
              <div class="card">
                <div class="img-card">
                  <img src="../Saudi_Artists_Website-main/images/Visual_Art.jpg"
                    alt="شعار هيئة الفنون البصرية السعودية" />
                </div>
                <div class="card-content">
                  <h4>
                    هيئة الفنون البصرية السعودية
                  </h4>

                  <p>

                    هيئة حكومية سعودية تأسست في فبراير 2020، ومقرها في العاصمة الرياض

                    <span id="dots1">...</span><span id="more1" style="display:none;">
                      تهدف الهيئة لـتطوير الفنون البصرية، وبناء البرامج التعليمية المتعلقة بها، إضافة لتقديم المنح
                      الدراسية للموهوبين ودعم حماية حقوق الملكية الفكرية.

                  </p>
                  <button onclick="myFunction1()" id="myBtn1">اقـرأ أكثـر</button>
                </div>

                <div class="card-read-more">
                  <a href="https://visualarts.moc.gov.sa" class="btn btn-link btn-block" target="_blank">
                    للوصول إلى الموقع </a>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="card">
                <div class="img-card">
                  <img src="../Saudi_Artists_Website-main/images/SA.png"
                    alt="شعارالجمعية العربية السعودية للثقافة والفنون" />
                </div>
                <div class="card-content">
                  <h4>
                    الجمعية العربية السعودية للثقافة والفنون

                  </h4>
                  <p>
                    جمعية حكومية سعودية تأسست في ديسمبر 1973، ومقرها في العاصمة الرياض
                    <span id="dots2">...</span><span id="more2" style="display:none;">
                      تهدف الجمعية لـالارتقاء بمستوى الثقافة والفنون بالمملكة العربية السعودية، ورعاية الأدباء والفنانين
                      السعوديين والعمل على رفع مستواهم الثقافي والفني والاجتماعي وتأمين مستقبلهم وتوجيههم لما يخدم
                      مجتمعهم، وتمثيل المملكة في كل عمل من شأنه الارتقاء بالثقافة والفنون على المستويين العربي والعالمي.
                    </span>
                  </p>
                  <button onclick="myFunction2()" id="myBtn2">اقـرأ أكثـر</button>
                </div>
                <div class="card-read-more">
                  <a href="https://www.sasca.org.sa" class="btn btn-link btn-block" target="_blank">
                    للوصول إلى الموقع </a>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="card">
                <div class="img-card">
                  <img src="../Saudi_Artists_Website-main/images/Moc.jpg" alt="شعار وزارة الثقافة" />
                </div>
                <div class="card-content">
                  <h4>
                    وزارة الثقافة السعودية
                  </h4>
                  <p>
                    جمعية حكومية سعودية تأسست في يونيو 2018، ومقرها في العاصمة الرياض
                    <span id="dots3">...</span><span id="more3" style="display:none;">
                      تهدف الوزارة لـأن تزدهر المملكة العربية السعودية بمختلف ألوان الثقافة، لتثري نمط حياة الفرد، وتسهم
                      في تعزيز الهوية الوطنية، وتشجع الحوار الثقافي مع العالم، وتمكين وتشجيع القطاع الثقافي السعودي بما
                      يعكس حقيقة ماضينا العريق، ويفتح للعالم منافذ جديدة ومختلفة للإبداع والتعبير الثقافي.
                    </span>
                  </p>
                  <button onclick="myFunction3()" id="myBtn3">اقـرأ أكثـر</button>
                </div>
                <div class="card-read-more">
                  <a href="https://www.moc.gov.sa/ar" class="btn btn-link btn-block" target="_blank">
                    للوصول إلى الموقع </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Section2  -->
  <script src="js/main.js"></script>


  <!-- Footer section -->
  <footer>
    <div class="mt-4 pt-4 ">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h5>اتــــســــاق</h5>
            <p>تُعتبر الفنون البصريةُ لغةَ تخاطب بين الشعوب، فهي تساعد على نقل الثقافات دون الحاجة إلى الشرح والتفسير،
              كما أنها عنصر أساسي في تشكيل الثقافة السعودية؛ وعليه فقد أبدينا نحن -اتساق- اهتماماً بتعزيز الفنون
              البصرية، وتمكين ممتهنيها ومحترفيها وهواتها بكافة السبل، وتحفيزهم على إنتاج وتقديم أعمال فنية تثري قطاع
              الفنون البصرية؛ لتكون المملكة رائدةً بفنها وفنانيها. </p>
          </div>
          <div class="col-lg-3 ">
            <h5>الأقسام</h5>
            <a href="#">الرسامين</a><br><br>
            <a href="#">المعارض</a><br><br>
            <a href="#">الفعاليات</a><br><br>
            <a href="#">المتجر</a><br><br>
          </div>
          <div class="col-lg-3">
            <h5>الجهات الداعمة</h5>
            <a href="https://visualarts.moc.gov.sa/">هيئة الفنون البصرية السعودية</a><br><br>
            <a href="https://www.sasca.org.sa/"> الجمعية العربية للثقافة والفنون</a><br><br>
            <a href="https://www.moc.gov.sa/ar">وزارة الثقافة السعودية</a><br><br>
          </div>
          <div class="col-lg-3">
            <h5 class="mt-lg-0 mt-sm-4">تواصل معنا</h5>
            <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a><br>
            <a href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a><br>
            <a href="mailto:wla-09-@hotmail.com" target="_blank"><i class="far fa-envelope"></i></a><br>
          </div>

        </div>
        <div class="row">
          <p style="text-align: left;"><small> جميع الحقوق محفوظة لاتساق 2021 ©</small></p>
        </div>
      </div>
    </div>
    <img src="../Saudi_Artists_Website-main/images/footer.gif" alt="" width="100%">
  </footer>
  <!-- End of Footer section -->










  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <script src="https://kit.fontawesome.com/97b85f78e7.js" crossorigin="anonymous"></script>
  <!-- for social media icons-->




</body>

</html>