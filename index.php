<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Кальянная</title>
    <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="style.css">
  
    

    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 


        

</head>

 
<body>




<header>

    <div class="header_container">
        <div class="logo">
                <img src="img/Logo.png" alt="logo">

        </div>
        <input type="checkbox" id="menu_checkbox">
<nav role="navigation">
    <label for="menu_checkbox" class="toggle_button" data-open="MENU" data-close="CLOSE" onclick></label>
<ul class="menu">
        <li ><a  class= "kup"href="#">Home</a></li>
        <li ><a href="#">Купить</a></li>

</ul>

</nav> 

    </div>

</header>

    
<main>
        
    <section class="top_slide">
            <div class="top_container">
                
            
 <div>
     <h2> Кальяны </h2>

 </div>

 <div>
        
    </div>
    <div><p>лучшие </p></div>
    <div><p class="p2">цены</p></div>
    <div><p class="p3">на</p></div>
    <div><p class="p4">кальяны</p></div>
</div>

       

    </section>
  

    <section class="specialize">
    
<div class="specialize_container ">
        <h3>Купите за супер ценой </h3>
        <p> Цена на все кальяны - <del>1500</del>  <b>1300 грн</b>    -20%!</p>
        

       


        <div class="specialize_cards " >
                <div class="card">
                        <div class="top_card">
                            <img src="img/jambo.jpeg" alt="">
                        </div>

                        <div class="bottom_card">
                                <p class="first_p">Кальян AMY 4 STARS 460 
                                </p>
                        </div>
                </div>
                <div class="card">
                        <div class="top_card">
                            <img src="img/egypit.jpeg" alt="">
                        </div>

                        <div class="bottom_card">
                                <p class="first_p">Кальян AMY 4 STARS 440</p>
                        </div>
                </div>
                <div class="card">
                        <div class="top_card">
                            <img src="img/jambo2.jpeg" alt="">
                        </div>

                        <div class="bottom_card">
                                <p class="first_p">Кальян AMY 4 STARS 420</p>
                        </div>
                </div>
                <div class="card">
                        <div class="top_card">
                            <img src="img/jambo3.jpeg" alt="">
                        </div>

                        <div class="bottom_card">
                                <p class="first_p">Кальян AMY 4 STARS 450</p>
                        </div>
                </div>
        </div>
</div>
        
        
         
    </section>
    <section class="portfolio ">
        <div class="Zina">
       <a id="zakaz" onclick="return false" href="#">  1300</a> 
    </div> 
  


    <div id="ok">
        Спасибо за ваш заказ! В ближайшее время с вами свяжутся из СБУ!
    </div>

    <div id="form"> 
        <form action="send.php" method="POST">
        <label for="name">Имя</label><input type="text" id="name" placeholder="Укажите Ваше имя" required> 
        <label for="lastname">Фамилия</label><input type="text" id="lastname" placeholder="Укажите Вашу фамилию" required>
        <label>Номер телефона <input type="tel" name="numb" placeholder="Укажите Ваш номер телефона" required></label>
        <label>E-mail <input type="email" name="mail" placeholder="Укажите Ваш емайл" required></label>
        <div id="nice"><input  type="submit" value="Подтвердить"></div>
        

        
    </form>
    </div>
     

        <p>Галерея</p>

        <div class="toggles">

            <button id="showall">Показать все</button>
            <button id="webdev">Чаши</button>
            <button id="graphd">Колбы</button>
            <button id="kaliani">Кальяны</button>
        </div>
        <div class="posts">

            <div class="post kaliani"><img src="img/kali.jpg" alt=""></div>
            <div class="post webdev"><img src="img/kal3.jpg" alt=""></div>
            <div class="post graphd"><img src="img/kolba.jpg" alt=""></div>
            <div class="post webdesign"><img src="img/kal4.jpg" alt=""></div>
          

        </div>
    </section>

</main>

<footer>

    <div class="footer_container">
            <div class="about_us">
                    <h4>Кальянная</h4>
                    <p>Для заказа нажмите кнопку  <b>заказать</b> и ждите!</p>
                </div>
            
                <div class="tweets">
                        <h4>Cоциальные сети </h4>
                        <p><img src="img/inst.png" alt="">наш инстаграм</p>
                        
                </div>
            
                <div class="contacts">
                        <h4>Контакты </h4>
                        <p>+380992160046
                            +380993030366
                        </p>
                </div>
   
    
</footer>


<script>
        $( document ).ready(function(){
          $( "#zakaz" ).click(function(){ // задаем функцию при нажатиии на элемент с классом toggle
            $( "#form" ).slideToggle(); //  скрываем, или отображаем все элементы <div>
          });
          
        });
</script>

<script>
        $( document ).ready(function(){
          $( "#form a" ).click(function(){ // задаем функцию при нажатиии на элемент с классом toggle
            $( "#form" ).slideToggle()
            $( "#ok" ).slideToggle()

          });


        });
         
</script>
    
        <script src="script.js"></script>

</div> 
</body>
</html>