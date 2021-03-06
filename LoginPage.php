<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>تــسجـيـل دخــول</title>
  <!-- delete it  -->
  <link href="style.css" rel="stylesheet" type="text/css">
  <!-- delete it  -->


  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/Login.css">
  <link rel="stylesheet" href="css/Navbar.css">
 
  <script src="main.js "> </script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lateef&family=Rakkas&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Markazi+Text&family=Noto+Sans+Arabic:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap" rel="stylesheet">
  
  <link rel="icon" type="image/x-icon" href="images/IMG_8776.png">
</head>

<body>

 

<!-- Navbar Section  -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" >
  <div class="container-fluid" style="font-family:'Noto Sans Arabic', sans-serif;">
    <img id="logo" src="../images/IMG_8776.png" alt="logo" width="45" height="60">
    <a class="navbar-brand " href="index.php">اتــــــســــــاق</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
      aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">الصـفحـة الـرئيـسيـة</a>
        </li>
        <div class="Newdrop-down" >
           <a class="nav-link dropdown-toggle" href="index/Artists.html" id="navbarScrollingDropdown" role="button">
           الـرسـاميـن
         </a>
          <li class="nav-item dropdown">
            <div id="Artists" class="Newdrop-down-content">
              <a class="first" href="index/AhmadAlmag.html">أحـمد المـغـلوث</a>
              <a class="first" href="index/AhmadF.html">أحـمـد فلـمـبـان</a>
              <a class="first" href="index/Zuhair.html">زُهِيــر طُـولَــه</a>
              <br><br>
              <a class="first" href="index/Sameer.html">سَـمـيــر الدهَـام</a>
              <a class="first" href="index/Saad.html">سَـعَــد العـبــيـد</a>
              <a class="first" href="index/SarahAbdu.html">سَـارة أبـو عَبـداللـه</a>
              <br><br>
              <a class="first" href="index/Shouq.html">شُــوق الـجـابـر</a>
              <a class="first" href="index/Shadia.html">شــادِيــة عـــالِــم</a>
              <a class="first" href="index/Saleh.html">صــالِح النــقِـيـدان</a>
              <br><br>
              <a class="first" href="index/Diyaa.html">ضــيــاء عَــزِيـز</a>
              <a class="first" href="index/Tahh.html">طَـــهَ الـصــبَّــان</a>
              <a class="first" href="index/Radwi.html">عبـدالحـليـم رضـوي</a>
              <br><br>
              <a class="first" href="index/Othman.html">عُثمَـان الخـزيـم</a>
              <a class="first" href="index/Ali.html">عَــلـي الــرزِيــزاء</a>
              <a class="first" href="index/Alsulaiman.html">عَبدالرحمَـن السلِيمان</a>
              <br><br>
              <a class="first" href="index/Alshaik.html">عَبـدالله الشِيـخ</a>
              <a class="first" href="index/Alyaa.html">عَليَــاء السُـلطـان</a>
              <a class="first" href="index/Garem.html">عَبـدالنَـاصِر غَـارِم</a>
              <br><br>
              <a class="first" href="index/Fuaad.html">فُــؤاد مـغـربَـل</a>
              <a class="first" href="index/Layan.html">لـيــان الـجـريـش</a>
              <a class="first" href="index/Mothla.html">مُثـلــى الـنُوشَــان</a>
    
          
            </div>
          </li>
        </div>

          <div class="Newdrop-down">
            <a class="nav-link dropdown-toggle" href="gallery.html" id="navbarScrollingDropdown" role="button"
           aria-expanded="false">
            المـعـارض
          </a>
            <li class="nav-item dropdown">
            <div id="Gallery" class="Newdrop-down-content">
                  <a class="first" href="gallery.html">المعارض الحالية</a>
                  <br><br>
                  <a class="first" href="gallery2.html" aria-current="true">المعارض السابقة</a>
                  <br><br>
                  <a class="first" href="gallery3.html">معارض ومتاحف عالمية</a>
               
    </div>    
   </li>
  </div>
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="Activities.html" style="color:black;transform: translate(1%, 2%);">الفعاليات</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active " aria-current="page" href="store.html" style="color:black;transform: translate(1%, 1%);">المـتـجـر </a>
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


  <br><br>
  <!-- *reference*  part of this code https://dribbble.com/yadav -->
  <!-- Login form -->
  <form action="" method="post" class="form" >
 
    <div class="form_background" style="transform: translate(-25rem, -50%);" >
        <h3 class="form-group_title">تسجــيل الدخـول</h3>
        <input class="form-group_input" type="email" id="e-mail" name="e-mail" placeholder=" البريد الإلكتروني"
           />
        <input class="form-group_input" type="password" id="pass" name="pass" placeholder="كلـمـة المـرور"
           />
        <button class="button button--form" name="submit" type="submit" style="color:white; border:1px solid #e57b5c; margin-right: 10px; background: #e57b5c;">دخـول</button>
      </div>
    </div>
    <fieldset class="fieldset">
      <div class="content">
       <h2>انـضـم إلـى اتســاق </h2>
       <p>
        للتـسجيـل، أدخل اسمك و بـريدك الإلـكترونـي،<br> ثم كلمة المرور الخاصة بك
       </p>
       <a href="register.php" style="color:white" class="button">أنـشـئ حـســابـك</a>
      </div>
      <span style="    color: #D83D5A;
    position: relative;
    right: 50.5%;
    top: -48.5%;"><?php echo $error; ?></span>
    </fieldset>

  </form>
   <!-- End Of Login form -->

<br><br><br><br><br>
 <!-- Footer section -->
 <footer style=" font-family: 'Noto Sans Arabic', sans-serif">
  <div class="mt-4 pt-4 ">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <h5>اتــــســــاق</h5>
          <p style=" color:black; "> هو أحد المصطلحات التي استعيرت من عالم المسموعات إلى عالم المرئيات وهو نظام يقوم على إيجاد مجموعة من العلاقات الظاهرة أو المحسوسة بين العناصر الفنية المختلفة على نحو متوافق ومتآلف، والاتساق يعد من أهم الخصائص، والصفات التي ينبغي أن تتوفر في التصميم المنتظم والجيد </p>
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
        <p style="text-align: left; color:black;"><small> جميع الحقوق محفوظة لاتساق 2021 ©</small></p>
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