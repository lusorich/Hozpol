<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Хозрасчетная поликлиника</title>
    <link rel="stylesheet" href="css/style.min.css">
  </head>
  <body>
    <header class="page-header">
      <nav class="main-nav main-nav--closed main-nav--nojs">
        <div class="main-nav__wrapper">
          <a class="main-nav__logo" href="index.php">
            <picture>
              <img class="main-nav__logo-img" width="50" height="50" src="img/icon-logo.svg" alt="Логотип хозрасчетной поликлиники">
            </picture>
            <span class="main-nav__logo-title">Хозрасчетная поликлиника</span>
          </a>
          <button class="main-nav__toggle" type="button">
          <span class="visually-hidden">Открыть меню</span>
          </button>
        </div>
        <ul class="main-nav__list">
          <li>
            <a class="main-nav__item" href="index.php">Главная</a>
          </li>
          <li>
            <a class="main-nav__item" href="about.php">О нас</a>
          </li>
          <li>
            <a class="main-nav__item" href="price.php">Услуги и цены</a>
          </li>
          <li>
            <a class="main-nav__item main-nav__item--active" href="#">Наши специалисты</a>
          </li>
          <li>
            <a class="main-nav__item" href="news.php">Новости</a>
          </li>
          <li>
            <a class="main-nav__item" href="schedule.php">График работы</a>
          </li>
          <li>
            <a class="main-nav__item" href="#contacts__anchor">Контакты</a>
          </li>
        </ul>
      </nav>
    </header>
    <main class="page">
      <div class="container">
        <div class="wrapper-title">
          <h1 class="page__title">Наши специалисты</h1>
        </div>
        <ul class="product__menu-list product__menu-list--doctors">
          <li class="product__menu-item product__menu-item--active"><a href="#">Все специальности</a></li>
          <li class="product__menu-item"><a href="doctors_page/gynecology.php">Гинекология</a></li>
          <li class="product__menu-item"><a href="doctors_page/therapy.php">Терапия</a></li>
          <li class="product__menu-item"><a href="doctors_page/cardiology.php">Кардиология</a></li>
          <li class="product__menu-item"><a href="doctors_page/neurology.php">Неврология</a></li>
          <li class="product__menu-item"><a href="doctors_page/surgery.php">Хирургия</a></li>
          <li class="product__menu-item"><a href="doctors_page/traumatology.php">Травматология</a></li>
          <li class="product__menu-item"><a href="doctors_page/allergology.php">Аллергология</a></li>
          <li class="product__menu-item"><a href="doctors_page/endocrinology.php">Эндокринология</a></li>
          <li class="product__menu-item"><a href="doctors_page/dermatovenereology.php">Дерматовенерология</a></li>
          <li class="product__menu-item"><a href="doctors_page/masseurs.php">Массажисты</a></li>
          <li class="product__menu-item"><a href="doctors_page/ultrasound.php">Кабинет УЗИ</a></li>
          <li class="product__menu-item"><a href="doctors_page/urology.php">Урология</a></li>
          <li class="product__menu-item"><a href="doctors_page/oncology.php">Онкология</a></li>
          <li class="product__menu-item"><a href="doctors_page/otolaryngolo.php">Отолорингология</a></li>
          <li class="product__menu-item"><a href="doctors_page/ophtalmology.php">Офтальмология</a></li>
          <li class="product__menu-item"><a href="doctors_page/kdl.php">КДЛ</a></li>
        </ul>
        <h2 class="doctors__title">Терапия</h2>
        <ul class="doctors__list">
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/skornyakova.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Скорнякова Вера Николаевна</h1>
              <p class="doctor-card__desc">Врач-терапевт (высшая категория)</p>
            </article>
          </li>
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/hamidullina.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Хамидуллина Альфия Разифовна</h1>
              <p class="doctor-card__desc">Врач-терапевт (специалист)</p>
            </article>
          </li>
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/nagaeva.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Нагаева Лена Валериевна</h1>
              <p class="doctor-card__desc">Врач-терапевт (высшая категория)</p>
            </article>
          </li>
        </ul>
        <h2 class="doctors__title">Гинекология</h2>
        <ul class="doctors__list">
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/kortunova.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Кортунова Вероника Владимировна</h1>
              <p class="doctor-card__desc">Врач-акушер-гинеколог (высшая категория)</p>
            </article>
          </li>
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/sablina.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Саблина Наталья Ивановна</h1>
              <p class="doctor-card__desc">Врач-акушер-гинеколог (высшая категория)</p>
            </article>
          </li>
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/garipova.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Гарипова Гульназ Юлаевна</h1>
              <p class="doctor-card__desc">Врач-акушер-гинеколог (высшая категория)</p>
            </article>
          </li>
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/nagaeva.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Калимова Лариса Валерьевна</h1>
              <p class="doctor-card__desc">Врач-акушер-гинеколог (специалист)</p>
            </article>
          </li>
        </ul>
        <h2 class="doctors__title">Кардиология</h2>
        <ul class="doctors__list">
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/petrova.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Петрова Елена Александровна</h1>
              <p class="doctor-card__desc">Врач-кардиолог (специалист)</p>
            </article>
          </li>
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/polikarpova.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Поликарпова Наталья Александровна</h1>
              <p class="doctor-card__desc">Врач-кардиолог (высшая категория)</p>
            </article>
          </li>
        </ul>
        <h2 class="doctors__title">Офтальмология</h2>
        <ul class="doctors__list">
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/agzamov.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Агзамов Вадим Танзелгаянович</h1>
              <p class="doctor-card__desc">Врач-офтальмолог (специалист)</p>
            </article>
          </li>
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/zhitaeva.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Житаева Хава Абдулхамидовна</h1>
              <p class="doctor-card__desc">Врач-офтальмолог (специалист)</p>
            </article>
          </li>
        </ul>
        <h2 class="doctors__title">Неврология</h2>
        <ul class="doctors__list">
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/fatkullin.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Фаткуллин Алик Хасанович</h1>
              <p class="doctor-card__desc">Врач-невролог (заслуженный врач РБ)</p>
            </article>
          </li>
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/habutdinova.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Хабудтинова Зульфия Рашитовна</h1>
              <p class="doctor-card__desc">Врач-невролог (1 категория)</p>
            </article>
          </li>
        </ul>
        <h2 class="doctors__title">Эндокринология</h2>
        <ul class="doctors__list">
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/galieva.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Галиева Аделя Файзирахмановна</h1>
              <p class="doctor-card__desc">Врач-эндокринолог (заслуженный врач РБ)</p>
            </article>
          </li>
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/ishakova.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Хабудтинова Зульфия Рашитовна</h1>
              <p class="doctor-card__desc">Врач-эндокринолог (специалист)</p>
            </article>
          </li>
        </ul>
        <h2 class="doctors__title">Дерматовенерология</h2>
        <ul class="doctors__list">
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/hairetdinov.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Хайретдинов Алексей Викторович</h1>
              <p class="doctor-card__desc">Врач-дерматовенеролог (специалист)</p>
            </article>
          </li>
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/kopusova.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Копусова Светлана Ивановна</h1>
              <p class="doctor-card__desc">Врач-дерматовенеролог (высшая категория)</p>
            </article>
          </li>
        </ul>
        <h2 class="doctors__title">Отоларингология</h2>
        <ul class="doctors__list">
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/scharipov.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Шарипов Ильгам Рафаэлович</h1>
              <p class="doctor-card__desc">Врач-отоларинголог (специалист)</p>
            </article>
          </li>
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/nuriahmetova.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Нуриахметова Анна Григорьевна</h1>
              <p class="doctor-card__desc">Врач-отоларинголог (высшая категория)</p>
            </article>
          </li>
        </ul>
        <h2 class="doctors__title">Врачи УЗИ и УЗД</h2>
        <ul class="doctors__list">
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/ivanova.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Иванова Наталья Витальевна</h1>
              <p class="doctor-card__desc">Врач УЗД</p>
            </article>
          </li>
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/tumeneva.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Тюменева Оксана Ринатовна</h1>
              <p class="doctor-card__desc">Врач УЗД</p>
            </article>
          </li>
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/darminova.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Дарминова Алия Нуримановна</h1>
              <p class="doctor-card__desc">Врач УЗД</p>
            </article>
          </li>
        </ul>
        <h2 class="doctors__title">Онкология</h2>
        <ul class="doctors__list">
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/fathullin.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Фатхуллин Азамат Салаватович</h1>
              <p class="doctor-card__desc">Врач-онколог-маммолог (высшая категория)</p>
            </article>
          </li>
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/ivanov.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Иванов Дмитрий Евгеньевич</h1>
              <p class="doctor-card__desc">Врач-онколог-маммолог (2 категория)</p>
            </article>
          </li>
        </ul>
        <h2 class="doctors__title">Урология</h2>
        <ul class="doctors__list">
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/yuldaschev.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Юлдашев Салават Марсович</h1>
              <p class="doctor-card__desc">Врач-уролог (высшая категория)</p>
            </article>
          </li>
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/scharipovI.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Шарипов Ильяс Маратович</h1>
              <p class="doctor-card__desc">Врач-уролог (специалист)</p>
            </article>
          </li>
        </ul>
        <h2 class="doctors__title">Клинико-диагностическая лаборатория</h2>
        <ul class="doctors__list">
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/gareeva.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Гареева Люция Амировна</h1>
              <p class="doctor-card__desc">Врач КДЛ</p>
            </article>
          </li>
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/chigvinceva.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Чигвинцева Нурия Рамиловна</h1>
              <p class="doctor-card__desc">Врач КДЛ</p>
            </article>
          </li>
        </ul>
        <h2 class="doctors__title">Хирургия</h2>
        <ul class="doctors__list">
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/sargsyan.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Саргсян Ани Мушеговна</h1>
              <p class="doctor-card__desc">Врач-хирург-флеболог</p>
            </article>
          </li>
        </ul>
        <h2 class="doctors__title">Травматология</h2>
        <ul class="doctors__list">
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/davletkildeev.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Давлеткильдеев Рафаэль Равильевич</h1>
              <p class="doctor-card__desc">Врач-травматолог-ортопед (специалист)</p>
            </article>
          </li>
        </ul>
        <h2 class="doctors__title">Аллергология</h2>
        <ul class="doctors__list">
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/schamuratova.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Шамуратова Гульнара Фидусовна</h1>
              <p class="doctor-card__desc">Врач-аллерголог-иммунолог (1я категория)</p>
            </article>
          </li>
        </ul>
        <h2 class="doctors__title">Массажисты</h2>
        <ul class="doctors__list">
          <li class="doctors__item">
            <article class="doctor-card">
              <picture>
                <img class="main-nav__logo-img" width="260" height="360" src="img/doctors/mugallimov.jpg" alt="Фото врача">
              </picture>
              <h1 class="doctor-card__title">Мугаллимов Ильгиз Альфисович</h1>
              <p class="doctor-card__desc">Массажист</p>
            </article>
          </li>
        </ul>
      </div>
    </main>
    <footer class="footer">
      <div class="contacts">
        <div class="wrapper-title">
          <a id="contacts__anchor"><span class="visually-hidden">Якорь</span></a>
          <h2 class="contacts__title">Контакты</h2>
        </div>
        <div class="contacts__iframe-wrapper">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1935.966196382065!2d56.00784725995501!3d54.75773128419276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43d939ec0ea08dbb%3A0x9ef435c0adff24d7!2z0L_RgNC-0YHQvy4g0J7QutGC0Y_QsdGA0Y8sIDYyLzIsINCj0YTQsCwg0KDQtdGB0L8uINCR0LDRiNC60L7RgNGC0L7RgdGC0LDQvSwgNDUwMDU0!5e0!3m2!1sru!2sru!4v1559205318577!5m2!1sru!2sru" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="contacts__wrapper">
          <div class="address contacts__address">
            <h3 class="address__title">Адрес:</h3>
            <p class="address__desc">МУПХП г.Уфы. Проспект октября, 62/2, город Уфа 450054. Ближайшая остановка "Юношеская библиотека"</p>
          </div>
          <div class="contacts__wrapper-inner">
            <div class="phone contacts__phone">
              <h3 class="phone__title">Телефоны:</h3>
              <a href="tel:+73472000502">+7 (347) 200-05-02</a>
              <a href="tel:+73472376924">+7 (347) 237-69-24</a>
              <a href="tel:+73472788535">+7 (347) 278-85-35</a>
            </div>
            <div class="mail contacts__mail">
              <h3 class="mail__title">Почта:</h3>
              <a href="mailto:muhp@yandex.ru">muhp@yandex.ru</a>
            </div>
          </div>
          <div class="schedule contacts__schedule">
            <h3 class="schedule__title">График работы:</h3>
            <p class="schedule__desc">Пн-пт - 8:00 - 20:00</p>
            <p class="schedule__desc">Сб - 8:00 - 17:00</p>
            <p class="schedule__desc">Вс - 9:00 - 15:00</p>
          </div>
        </div>
        <div class="social contacts__social">
          <ul class="social__list">
            <li class="social__item social__item--vk">
              <a href="">
                <span class="visually-hidden">Мы в вконтакте</span>
                <svg class="social__icon social__icon--vk" width="32" height="22" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 12">
                  <path d="M17.6 12c-.3 0-.9-.1-1.5-.5-.5-.3-.9-.7-1.3-1.2-.3-.3-.9-.9-1.1-.9-.2.1-.4.7-.3 1.2 0 .1 0 .6-.3.9-.3.3-.8.4-.9.4h-1.4c-.7 0-3.2-.2-5.4-2.3C2.5 7.1.2 2.2.1 2 0 1.6-.1 1.2.2.9c.3-.3.8-.4 1-.4h3.1c.1 0 .4.1.7.3.3.2.4.5.5.6 0 0 .5 1.1 1.1 2 1 1.5 1.4 1.9 1.5 2 .1-.4.2-1.4.1-2.3 0-.4-.1-.8-.2-1-.1-.1-.3-.2-.5-.2l-.6-.5c0-.5.5-.9.9-1.1.5-.2 1.3-.3 2.3-.3h.5c.9 0 1.2.1 1.6.1 1.2.3 1.2 1.3 1.1 2.5v1.6c0 .3 0 .8.1 1 .2-.1.6-.5 1.5-1.9.6-.9 1-1.9 1.1-2.1.1-.3.4-.7 1.2-.7h3.4c.7 0 1.2.2 1.3.7.2.5.1 1.3-1.7 3.5-.3.3-.5.6-.7.9-.5.4-.9 1-.9 1.1 0 .1.5.5.9.9 1.1.9 1.9 1.7 2.2 2.3.4.6.3 1 .2 1.3-.3.7-1.2.7-1.4.8h-2.9zm-3.9-3.7c.7 0 1.2.6 1.8 1.2.4.4.7.8 1.1 1 .5.3 1 .3 1 .3h2.9c.1 0 .3-.1.4-.1 0 0 0-.1-.1-.1-.3-.5-1-1.3-2-2.1-.9-.7-1.3-1.1-1.4-1.7 0-.6.4-1.1 1.2-2.1.2-.2.4-.5.7-.8 1.1-1.4 1.4-2 1.5-2.3h-3.9c0 .4-.5 1.5-1.1 2.4-1.4 2.1-2 2.4-2.5 2.4-.1 0-.3 0-.4-.1-.7-.4-.7-1.4-.7-2.1V2.6c.1-1.3 0-1.3-.3-1.4-.3-.1-.5-.1-1.4-.1H10c-.5 0-1 0-1.4.1l.2.2c.4.5.4 1.5.4 1.7.1 1.3 0 2.9-.7 3.3-.1 0-.2.1-.4.1-.6 0-1.3-.7-2.5-2.5C5 2.9 4.5 1.8 4.5 1.8s0-.1-.1-.1-.2-.1-.2-.1h-3c.4.9 2.5 5 4.8 7.2 2 1.9 4.3 2 4.7 2h1.4s.2 0 .2-.1v-.1c0-.2 0-2 1.2-2.3h.2z"/>
                </svg>
              </a>
            </li>
            <li class="social__item social__item--insta">
              <a href="">
                <span class="visually-hidden">Мы в инстаграмме</span>
                <svg class="social__icon social__icon--insta"  width="26" height="26" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                  <path class="st0" d="M11.8 1C13.6 1 15 2.4 15 4.2v7.7c0 1.7-1.4 3.1-3.1 3.1H4.2C2.4 15 1 13.6 1 11.8V4.2C1 2.4 2.4 1 4.2 1h7.6m0-1H4.2C1.9 0 0 1.9 0 4.2v7.7C0 14.1 1.9 16 4.2 16h7.7c2.3 0 4.2-1.9 4.2-4.2V4.2C16 1.9 14.1 0 11.8 0z"/>
                  <path class="st0" d="M8 4.9c1.7 0 3.1 1.4 3.1 3.1 0 1.7-1.4 3.1-3.1 3.1-1.7 0-3.1-1.4-3.1-3.1 0-1.7 1.4-3.1 3.1-3.1m0-1C5.7 3.9 3.9 5.7 3.9 8s1.8 4.1 4.1 4.1 4.1-1.8 4.1-4.1S10.3 3.9 8 3.9z"/>
                  <circle class="st0" cx="12.3" cy="3.7" r=".9"/>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <script src="js/script.js"></script>
  </body>
</html>
