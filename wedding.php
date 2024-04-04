<?php require "db/db.php";?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <title>Wedding_Alexandr_Nataly</title>

    <link rel = "stylesheet" href="wedding.css">
    <link rel = "stylesheet" href="scroll.css">
    <link rel = "stylesheet" href="media.css">
    

    <script defer src="wedding.js"></script>
    <script defer src="scroll.js"></script>
    <script defer src="wishesFeedback.js"></script>
    <script defer src="guestsFeedback.js"></script>
    
    
</head>
<body>


    <a href="#"><div id="scroll_btn">↑</div></a>
<!-- Блок 1  .....................................................................................--> 

        <div id = "S1_main" class = "scroll mains">            
            <div id = "s1" class = "s">
              <div id = "title_S1" class="titles titles_s1">
                <img src="images/names.png" alt="title">
              </div>
              <div id = "ad_s1">
                <div>Приглашение на свадьбу</div>
                <div>6 сентября 2024</div>
              </div>
              <div class = "timer">
                <p>До бракосочетания осталось :</p>
                <div class = "timer__items">
                    <div  class = "timer__item timer__days">00</div>
                    <div  class = "timer__item timer__hours">00</div>
                    <div class = "timer__item timer__minutes">00</div>
                    <div class = "timer__item timer__seconds">00</div>
                </div>
              </div>
            </div>
        </div>


<!-- Блок 2  ...................................................................................--> 

        <div id = "S2_main" class = "scroll mains">            
          <div id = "s2" class = "s">
            <div class = "titles titles_s2">
              <img src="images/Group 25.png" alt="title">
            </div>
            <div id = "texts_s2">
                <p class = "title_s2"> Дорогие друзья, родные и близкие!</p>
                <p class = "text_s2"> Мы счастливы пригласить вас на нашу свадьбу. Для 
                    нас очень важно, чтобы вы смогли разделить с нами
                     самое счастливое мгновение в нашей жизни. 
                     Порадуйте нас своим присутствием:</p>
            </div>
          </div>
        </div>


<!-- Блок 3  ......................................................................................................................-->

        <div id = "S3_main" class = "scroll mains">
          <div id = "s3" class = "s">
            <div class = "titles titles_s3">
              <img src="images/Group 26.png" alt="title">
            </div>
        
            <form id="reg_form">
              <class="wrapper">
                <li class="form-row">
                  <label for="name">Ваше имя:</label>
                  <input type="text" id="name" placeholder="Имя" required >
                </li>
                <li class="form-row">
                  <label for="surname">Ваша фамилия:</label>
                  <input type="text" id="surname" placeholder="Фамилия" required >
                </li>
                <li class="form-row">
                  <label for="registred">Подтверждение:</label>
                  <select name="registred" id = "registred">
                    <option disabled selected>Выберите</option>
                    <option id="yes" value="1">Я приду</option>
                    <option id="no" value="2">Я не смогу прийти</option>
                  </select>
                </li>
                <li class ="form_hidden" id ="drink">

                  <label class="checkbox style-f">
                    <input value = 'Вино белое сухое' type="checkbox"/>
                    <div class="checkbox__checkmark"></div>
                    <div class="checkbox__body">Вино белое сухое</div>
                  </label> <br>

                  <label class="checkbox style-f">
                    <input value = 'Вино белое сладкое/полусладкое' type="checkbox"/>
                    <div class="checkbox__checkmark"></div>
                    <div class="checkbox__body">Вино белое сладкое/полусладкое</div>
                  </label><br>

                  <label class="checkbox style-f">
                    <input value = 'Вино красное сухое' type="checkbox"/>
                    <div class="checkbox__checkmark"></div>
                    <div class="checkbox__body">Вино красное сухое</div>
                  </label><br>

                  <label class="checkbox style-f">
                    <input value = 'Вино красное сладкое/полусладкое' type="checkbox"/>
                    <div class="checkbox__checkmark"></div>
                    <div class="checkbox__body">Вино красное сладкое/полусладкое</div>
                  </label><br>

                  <label class="checkbox style-f">
                    <input value = 'Водка' type="checkbox"/>
                    <div class="checkbox__checkmark"></div>
                    <div class="checkbox__body">Водка</div>
                  </label><br>

                  <label class="checkbox style-f">
                    <input value = 'Коньяк' type="checkbox"/>
                    <div class="checkbox__checkmark"></div>
                    <div class="checkbox__body">Коньяк</div>
                  </label><br>

                  <label class="checkbox style-f">
                    <input value = 'Шампанское' type="checkbox"/>
                    <div class="checkbox__checkmark"></div>
                    <div class="checkbox__body">Шампанское</div>
                  </label><br>

                  <label class="checkbox style-f">
                    <input value = 'Безалкогольные напитки' type="checkbox"/>
                    <div class="checkbox__checkmark"></div>
                    <div class="checkbox__body">Безалкогольные напитки</div>
                  </label><br>

                  <label class="checkbox style-f">
                    <input value = 'Любое' type="checkbox"/>
                    <div class="checkbox__checkmark"></div>
                    <div class="checkbox__body">Любое</div>
                  </label>                 
                </li>
                
              
                
                <li class="form-row">
                  <textarea name="text" id = "comment" placeholder="*комментарии"></textarea>
                </li>
                <li class="form-row">
                  <button id = "submit_reg" type="submit">Отправить</button>
                </li>
              </ul>
            </form>
          </div>
        </div>

        
<!-- Блок 4  ....................................................................................-->
<?php
$guests = get_guests_all();
$count = get_guests_number();
?> 
        <div id = "S4_main" class = "scroll mains">
          <div id = "s4" class = "s">
            <div class = "titles titles_s4">
              <img src="images/Group 28.png" alt="title">
            </div>
            <div id = "number_guests">

              <p>Количество зарегистрировавшихся гостей :</p>
              <p id = "number_guests_number"><?php echo $count?></p>
            </div>
            <div id = "board">
            
<?php
foreach ($guests as $guest): ?>
        <div class = "guest">
          <p class="name_guest"><?php echo $guest['name_guest']; ?></p>
          <p class = "surname_guest"><?php echo $guest['surname_guest']; ?></p>
        </div>
<?php endforeach; 
?>

              
              
            </div>
          </div>
        </div>


<!-- Блок 5  .......................................................................................-->  
     
        <div id = "S5_main" class = "scroll mains">
          <div id = "s5" class = "s">
            <div class = "titles titles_s5">
              <img src="images/Group 29.png" alt="title">
            </div>
            <div id="block_questions">
              <div class = "question">Будет ли дресс-код?</div>
                <p class = "answer">*Мы будем рады, если наши гости выберут наряды в пастельных тонах.</p>
                <div id = "colors">
                  <div class = "color" id = "blue"></div>
                  <div class = "color" id = "green"></div>
                  <div class = "color" id = "yellow"></div>
                  <div class = "color" id = "turquoise"></div>
                  <div class = "color" id = "beige"></div>
                </div>
              <div class = "question">Какие подарки предпочтительны?</div>
                <p class = "answer">*Мы будем рады поздравлениям в конвертах.</p>
              <div class = "question">Кому можно задать вопросы по организации мероприятия?</div>
                <p class = "answer">*По всем вопросам можно писать в telegram <a href = "#">@MakarovaNataly</a>, также есть общий чат нашей свадьбы  telegram <a href = "#">@MakarovaNataly</a>.</p>
              <div class = "question">Где можно посмотреть фото с торжества?</div>
                <p class = "answer">*Как только фотограф подготовит наш альбом - ссылка на него появится <a href = "#">здесь</a>.</p>
              <div class = "question">Вход по лотерейным билетам</div>
            </div>
          </div>
        </div>

  
<!-- Блок 6  .......................................................................................--> 

        <div id = "S6_main" class = "scroll mains">
          <div id = "s6" class = "s">
            <div class = "titles titles_s6">
              <img src="images/Group 30.png" alt="title">
            </div>
            <div id = "block_occations">
              <div class = "position">
                <div class = "timeDate">15:30</div>
                <div class = "occation">Сбор гостей в ресторане,<br>Праздничный Ужин </div>
              </div>
              <div class = "position">
                <div class = "timeDate">23:00</div>
                <div class = "occation">Окончание вечера</div>
              </div>
            </div>
          </div>
        </div>


  <!-- Блок 7  .......................................................................................-->  

        <div id = "S7_main" class = "scroll mains">
          <div id = "s7" class = "s">
            <div class = "titles titles_s7">
              <img src="images/Group 31.png" alt="title">
            </div>
            <p class="adress">г. Пермь ул Степная, 2</p>
            <p id = "name_hall">Банкетный зал "Barn house"</p>
            <div id = "map">
              <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Afce5920bd182ebd40db24be1d5b8dca87328f29c8787f4ad5f22bf794d4320b5&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
          </div>
        </div>


  <!-- Блок 8  .......................................................................................-->  

        <div id = "S8_main" class = "scroll mains">
          <div id = "s8" class = "s">
            <div class = "titles titles_s8">
              <img src="images/Group 32.png" alt="title">
            </div>
            <p class = "text_s8">Нам будет приятно, если вы оставите
                ваши поздравления здесь
                <p class = "quiz">*за лучшее поздравление Вы можете получить приз на свадьбе</p>

            </p>

            <div id = "wishes">
            <marquee direction="down" scrolldelay="13 0" truespeed="truespeed">
<?php
$wishes = get_wishes_all();
foreach ($wishes as $wish): ?>
    <div class="wish_each">
        <p class = "inner_wish"><?php echo $wish['comment_wish']; ?></p>
        <p class = "inner_name"><?php echo $wish['name_wish']; ?></p>
    </div>
<?php endforeach; 
mysqli_close($db);?>
              </marquee>
            </div>
          </div>
        </div>


  <!-- Блок 9  .......................................................................................-->  

        <div id = "S9_main" class = "scroll mains">
          <div id = "s9" class = "s">
            <div class = "titles titles_s9">
              <img src="images/Group 36.png">
            </div>

            <form id="wish_form"> 
              <textarea name="comment_wish" id = "comment_wish" placeholder="*поздравление"></textarea>
              <div class = "wish_name_btn">
                <div><input type="name_wish" id="name_wish" placeholder="Имя" required ></div>
                <div><button id="wish_button" name = "submitWish" class = "btn_wish" type="submit">Отправить поздравление</button></div>
              </div>
            </form>

          </div>
        </div>

  <!-- Блок Footer  .......................................................................................-->  
  <div id = "footer" class =  "mains">
    
      <div class = "titles">
        <img class = "flowers_footer" src="images/Group 38.png" >
      </div>
    <div>
      Александр & Наталья
    </div>
      <div>
      Сайт-приглашение на бракосочетание
    </div>
  </div>



</body>
</html>
