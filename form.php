<!DOCTYPE html>
<html lang="ru_UA">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Розрахунок вартості кухні. Ціна кухні по розмірах. Кухня по готовому проекту.
    </title>
    <meta name="keywords" content="Кухні на замовлення" />
    <meta name="description" content="Ціна кухні на замовлення, Львів, Червоноград, Нововолинськ, Сокаль, виготовлення кухні під заказ, по мої розмірах , по моєму проекту,замовити кухню" />
    <?php include_once "head.php"; ?>
  </head>
  <body>
    <header class="header">
      <div class="header__top-row">
        <div class="container">
          <ul>
            <li>
              <a href="https://www.facebook.com/GV-Mebel-434729903988714/">
                <i class="fab fa-facebook">
                </i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-instagram">
                </i>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fab fa-youtube">
                </i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <nav>
        <div class="container row">
          <a href="/" class="header__logo-block">
            <img src="./img/header-logo.png" alt="">
          </a>
          <ul>
            <li>
              <a href="/">
                <span>Головна
                </span>
              </a>
            </li>
            <li>
              <a href="/gallery.php">
                <span>Галерея
                </span>
              </a>
            </li>
            <li>
              <a href="/materials.php">
                <span>Про матеріали
                </span>
              </a>
            </li>
            <li class="active">
              <a href="/form.php">
                <span>Розрахунок вартості
                </span>
              </a>
            </li>
            <li>
              <a href="/contacts.php">
                <span>Контакти
                </span>
              </a>
            </li>
          </ul>
          <div class="menu__burger">
            <span>
            </span>
          </div>
        </div>
      </nav>
    </header>
    <section id="bg100" class="formheader"> 
      <div id="box90">
        <div class="left">
          <h2>Розрахуйте вартість кухні за 5 хвилин
          </h2>
          <h5>Або надішліть готовий проект, щоб переконатися - ми робимо дешевше
          </h5>
        </div>
        <a href="#" class="header__content-completed-project button">У мене є готовий проект
        </a>
      </div>
    </section>
    <main class="questions">
      <div class="container">
        <div class="question question--first active">
          <div class="question__title-block">
            <p>1. Оберіть форму кухні
            </p>
            <div>
            </div>
          </div>
          <div class="question__toggle-block">
            <div class="question__block">
              <ul>
                <li data-answer="Пряма">
                  <p>Пряма
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/q1-1.png" alt="">
                  </div>
                </li>
                <li data-answer="Кутова">
                  <p>Кутова
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/q1-2.png" alt="">
                  </div>
                </li>
                <li data-answer="П-подібна">
                  <p>П-подібна
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/q1-3.png" alt="">
                  </div>
                </li>
                <li data-answer="Острівна">
                  <p>Острівна
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/q1-4.png" alt="">
                  </div>
                </li>
              </ul>
            </div>
            <div class="question__buttons">
              <a class="question__buttons-next">
                <span>Далі
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="question question--second">
          <div class="question__title-block">
            <p>2. Введіть розміри кухні по стінах
            </p>
            <div>
            </div>
          </div>
          <div class="question__toggle-block">
            <div class="question__block">
              <div class="question__block-sizes" id="pryama">
                <label id="label-q2_1">
                  <input type="text" class="q2_1" name="q2_1">
                  <span> см
                  </span>
                </label>
                <div>
                  <div class="question__answer-img-block">
                    <img src="./img/q1-1.png" alt="">
                  </div>
                </div>
              </div>
              <div class="question__block-sizes" id="kutova">
                <label id="label-q2_1">
                  <input type="text" class="q2_1" name="q2_1">
                  <span> см
                  </span>
                </label>
                <div>
                  <label>
                    <input type="text" class="q2_4">
                    <span> см
                    </span>
                  </label>
                  <div class="question__answer-img-block">
                    <img src="./img/q1-2.png" alt="">
                  </div>
                </div>
              </div>
              <div class="question__block-sizes" id="p-podibna">
                <label id="label-q2_1">
                  <input type="text" class="q2_1" name="q2_1">
                  <span> см
                  </span>
                </label>
                <div>
                  <label>
                    <input type="text" class="q2_4">
                    <span> см
                    </span>
                  </label>
                  <div class="question__answer-img-block">
                    <img src="./img/q1-3.png" alt="">
                  </div>
                  <label id="label-q2_3">
                    <input type="text" class="q2_2" name="q2_2">
                    <span> см
                    </span>
                  </label>
                </div>
              </div>
              <div class="question__block-sizes" id="ostrivna">
                <label id="label-q2_1">
                  <input type="text" class="q2_1" name="q2_1">
                  <span> см
                  </span>
                </label>
                <div>
                  <label>
                    <input type="text" class="q2_2">
                    <span> см
                    </span>
                  </label>
                  <div class="question__answer-img-block">
                    <img src="./img/q1-4.png" alt="">
                  </div>
                </div>
              </div>                    
            </div>
            <div class="question__buttons">
              <a class="question__buttons-prev">
                <span>Назад
                </span>
              </a>
              <a class="question__buttons-next">
                <span>Далі
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="question question--third">
          <div class="question__title-block">
            <p>3. Оберіть тип фасадів
            </p>
            <div>
            </div>
          </div>
          <div class="question__toggle-block">
            <div class="question__block">
              <ul>
                <li class="question__answer" data-answer="Плівкові">
                  <p>
                    <span>Плівкові
                    </span>
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/q3-1.png" alt="">
                  </div>
                </li>
                <li class="question__answer" data-answer="Фарбовані">
                  <p>
                    <span>Фарбовані
                    </span>
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/q3-2.png" alt="">
                  </div>
                </li>
                <li class="question__answer" data-answer="Акрилові">
                  <p>
                    <span>Акрилові
                    </span>
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/q3-3.png" alt="">
                  </div>
                </li>
                <li class="question__answer" data-answer="Шпоновані">
                  <p>
                    <span>Шпоновані
                    </span>
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/q3-4.png" alt="">
                  </div>
                </li>
                <li class="question__answer" data-answer="Панелі Cleaf">
                  <p>
                    <span>Панелі Cleaf
                    </span>
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/q3-5.png" alt="">
                  </div>
                </li>
                <li class="question__answer" data-answer="Панелі Niemann">
                  <p>
                    <span>Панелі Niemann
                    </span>
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/q3-6.png" alt="">
                  </div>
                </li>
                <li class="question__answer" data-answer="Панелі AGT">
                  <p>
                    <span>Панелі AGT
                    </span>
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/q3-7.png" alt="">
                  </div>
                </li>
                <li class="question__answer" data-answer="Складно визначитися">
                  <p>
                    <span>Складно визначитися
                    </span>
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/dk.png" alt="">
                  </div>
                </li>
              </ul>
            </div>
            <div class="question__buttons">
              <a class="question__buttons-prev">
                <span>Назад
                </span>
              </a>
              <a class="question__buttons-next">
                <span>Далі
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="question question--fourth">
          <div class="question__title-block">
            <p>4. Оберіть тип стільниці
            </p>
            <div>
            </div>
          </div>
          <div class="question__toggle-block">
            <div class="question__block">
              <ul>
                <li class="question__answer" data-answer="ДСП 28 мм, економ">
                  <p>ДСП 28 мм, економ
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/q4-1.png" alt="">
                  </div>
                </li>
                <li class="question__answer" data-answer="ДСП 38 мм, стандарт">
                  <p>ДСП 38 мм, стандарт
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/q4-2.png" alt="">
                  </div>
                </li>
                <li class="question__answer" data-answer="Штучний камінь">
                  <p>Штучний камінь
                  </p>
                  <div class="question__answer-img-block question__answer-img-block--mt44">
                    <img src="./img/q4-3.png" alt="">
                  </div>
                </li>
                <li class="question__answer" data-answer="Складно визначитися">
                  <p>Складно визначитися
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/dk.png" alt="">
                  </div>
                </li>
              </ul>
            </div>
            <div class="question__buttons">
              <a class="question__buttons-prev">
                <span>Назад
                </span>
              </a>
              <a class="question__buttons-next">
                <span>Далі
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="question question--fifth">
          <div class="question__title-block">
            <p>5. Оберіть клас фурнітури
            </p>
            <div>
            </div>
          </div>
          <div class="question__toggle-block">
            <div class="question__block">
              <ul>
                <li class="question__answer" data-answer="Економ">
                  <p>Економ
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/q5-1.png" alt="">
                  </div>
                </li>
                <li class="question__answer" data-answer="Стандарт">
                  <p>Стандарт
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/q5-2.png" alt="">
                  </div>
                </li>
                <li class="question__answer" data-answer="Стандарт+">
                  <p>Стандарт+
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/q5-3.png" alt="">
                  </div>
                </li>
                <li class="question__answer" data-answer="Преміум">
                  <p>Преміум
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/q5-4.png" alt="">
                  </div>
                </li>
                <li class="question__answer" data-answer="Складно визначитися">
                  <p>Складно визначитися
                  </p>
                  <div class="question__answer-img-block">
                    <img src="./img/dk.png" alt="">
                  </div>
                </li>
              </ul>
            </div>
            <div class="question__buttons">
              <a class="question__buttons-prev">
                <span>Назад
                </span>
              </a>
              <a class="question__buttons-next">
                <span>Далі
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="question question--sixth">
          <div class="question__title-block">
            <p>6. Оберіть свій подарунок до замовленої кухні!
            </p>
            <div>
            </div>
          </div>
          <div class="question__toggle-block">
            <div class="question__block">
              <ul>
                <li class="question__answer" data-answer="Мийка з нержавійки">
                  <p>Мийка з нержавійки
                  </p>
                  <img src="./img/q6-1.png" alt="">
                </li>
                <li class="question__answer" data-answer="LED-підсвітка">
                  <p>LED-підсвітка
                  </p>
                  <img src="./img/q6-2.png" alt="">
                </li>
                <li class="question__answer" data-answer="Комплект девайсів">
                  <p>Комплект девайсів
                  </p>
                  <img src="./img/q6-3.png" alt="">
                </li>
              </ul>
            </div>
            <div class="question__buttons">
              <a class="question__buttons-calculate">
                <span>Розрахувати вартість
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include_once "footer.php"; ?>    
    <div class="calculate-modal modal__overlay">
      <div class="calculate-modal-block modal__block">              
        <form class="form">
          <h4>Залиште контакти
          </h4>
          Менеджер зателефонує протягом 30 хвилин. Уточнить деталі та розрахує вартість проекту.
          <p>
            <input type="text" name="name" class="name" placeholder="Ваше ім'я" required>
            <input type="text" name="phone" class="phone" placeholder="Ваш телефон" required>
            <input type="submit" value="Розрахувати вартість" onclick="ga('send', 'event', 'cost', 'calculate')">
            <input type="hidden" name="q1_answer" id="q1_answer" value="без відповіді">
            <input type="hidden" name="q2_1_answer" id="q2_1_answer" value="без відповіді">
            <input type="hidden" name="q2_2_answer" id="q2_2_answer" value="без відповіді">
            <input type="hidden" name="q2_4_answer" id="q2_4_answer" value="без відповіді">
            <input type="hidden" name="q3_answer" id="q3_answer" value="без відповіді">
            <input type="hidden" name="q4_answer" id="q4_answer" value="без відповіді">
            <input type="hidden" name="q5_answer" id="q5_answer" value="без відповіді">
            <input type="hidden" name="q6_answer" id="q6_answer" value="без відповіді">
          </p>
          <div class="modal__close">
          </div>  
        </form>
      </div>
    </div>
    <div class="project-modal modal__overlay">
      <div class="project-modal-block modal__block">
        <form id="ajax-contact-form" enctype="multipart/form-data" method="post" class="form">
          <h4>Чудово!
          </h4>
          Менеджер зателефонує протягом 30 хвилин. Уточнить деталі та розрахує вартість проекту.
          <p>
            <input id="nameFF" name="nameFF" type="text" placeholder="Ваше ім'я" required>
            <input id="telFF" name="telFF" type="tel" placeholder="Ваш телефон" required>
            <input id="fileFF" name="fileFF" type="file">
            <input class="btn" type="submit" id="submitFF" value="Надіслати проект" onclick="ga('send', 'event', 'project', 'send')">
          </p>
          <div class="modal__close">
          </div> 
        </form>
      </div>
    </div>
  </body>
</html>
