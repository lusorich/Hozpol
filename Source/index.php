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
            <a class="main-nav__item main-nav__item--active" href="#">Главная</a>
          </li>
          <li>
            <a class="main-nav__item" href="about.php">О нас</a>
          </li>
          <li>
            <a class="main-nav__item" href="price.php">Услуги и цены</a>
          </li>
          <li>
            <a class="main-nav__item" href="doctors.php">Наши специалисты</a>
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
        <section class="landing">
          <h1 class="landing__title">Приходи в хозрасчетную поликлинику уже сегодня!</h1>
          <p class="landing__slogan">Лучшая в городе поликлиника</p>
          <a class="link link--landing" href="schedule.php">График работы</a>
        </section>
        <section class="stock">
          <div class="wrapper-title">
            <h2 class="stock__title">Акции</h2>
          </div>
          <ul class="stock__list">
            <li class="stock__item">
              <article class="stock-card">
                <h1 class="visually-hidden">Скидка на "Лаборатрный минимум"</h1>
                <div class="stock-card__icon-wrapper">
                  <img class="stock-card__icon" width="50" height="50" src="img/sprite/icon-medical.svg" alt="Иконка">
                </div>
                <a class="stock-card__link" href="price.php">
                  <p class="stock-card__desc">Программа "Лабораторный минимум" по сниженной цене</p>
                </a>
              </article>
            </li>
            <li class="stock__item">
              <article class="stock-card">
                <h1 class="visually-hidden">Скидка 50% на повторный прием</h1>
                <div class="stock-card__icon-wrapper">
                  <img class="stock-card__icon" width="50" height="50" src="img/sprite/icon-medical-report.svg" alt="Иконка">
                </div>
                <a class="stock-card__link" href="price.php">
                  <p class="stock-card__desc">Скидка 50% на повторный прием</p>
                </a>
              </article>
            </li>
            <li class="stock__item">
              <article class="stock-card">
                <h1 class="visually-hidden">Скидка на программу "Женское здоровье"</h1>
                <div class="stock-card__icon-wrapper">
                  <img class="stock-card__icon" width="50" height="50" src="img/sprite/icon-examination.svg" alt="Иконка">
                </div>
                <a class="stock-card__link" href="price.php">
                  <p class="stock-card__desc">Программа "Женское здоровье" по сниженной цене</p>
                </a>
              </article>
            </li>
          </ul>
        </section>
        <section class="advantage">
          <div class="wrapper-title">
            <h2 class="advantage__title">Преимущества</h2>
          </div>
          <ul class="advantage__list">
            <li class="advantage__item">
              <div class="advantage__img">
                <img src="img/special.jpg" alt="Картинка со специалистом" width="400" height="322">
              </div>
              <article class="advantage-card">
                <div class="advantage-card__wrapper">
                  <div class="advantage-card__icon-wrapper">
                    <img class="advantage-card__icon" width="50" height="50" src="img/sprite/icon-education.svg" alt="Иконка">
                  </div>
                  <h2 class="advantage-card__title">Опытные специалисты</h2>
                </div>
                <p class="advantage-card__desc">В хозрасчетной поликлинике работают более 20 специалистов высшей категории</p>
                <div class="advantage-card__link-wrapper">
                  <a class="advantage-card__link" href="doctors.php">Наши специалисты</a>
                </div>
              </article>
            </li>
            <li class="advantage__item">
              <article class="advantage-card">
                <div class="advantage-card__wrapper">
                  <div class="advantage-card__icon-wrapper">
                    <img class="advantage-card__icon" width="50" height="50" src="img/sprite/icon-doctor.svg" alt="Иконка">
                  </div>
                  <h2 class="advantage-card__title">Моментальный прием<br>врача</h2>
                </div>
                <p class="advantage-card__desc">Прием ведется как по записи, так и по живой очереди.</p>
                <div class="advantage-card__link-wrapper">
                  <a class="advantage-card__link" href="schedule.php">График работы</a>
                </div>
              </article>
              <div class="advantage__img">
                <img src="img/desk-doctor.jpg" alt="Аппарат" width="400" height="322">
              </div>
            </li>
            <li class="advantage__item">
              <div class="advantage__img">
                <img src="img/binoculars.jpg" alt="Бинокуляр" width="400" height="322">
              </div>
              <article class="advantage-card">
                <div class="advantage-card__wrapper">
                  <div class="advantage-card__icon-wrapper">
                    <img class="advantage-card__icon" width="50" height="50" src="img/sprite/icon-hospital.svg" alt="Иконка">
                  </div>
                  <h2 class="advantage-card__title">Многопрофильная поликлиника</h2>
                </div>
                <p class="advantage-card__desc">У нас вы получите помощь и консультацию из различных областей медицинских услуг</p>
                <div class="advantage-card__link-wrapper">
                  <a class="advantage-card__link" href="about.php">О нас</a>
                </div>
              </article>
            </li>
            <li class="advantage__item">
              <article class="advantage-card">
                <div class="advantage-card__wrapper">
                  <div class="advantage-card__icon-wrapper">
                    <img class="advantage-card__icon" width="50" height="50" src="img/sprite/icon-microscope.svg" alt="Иконка">
                  </div>
                  <h2 class="advantage-card__title">Клиника-лабораторная диагностика</h2>
                </div>
                <p class="advantage-card__desc">Исследование различных анализов с точным, быстрым и информативным результатом.</p>
                <div class="advantage-card__link-wrapper">
                  <a class="advantage-card__link" href="price.php">Услуги и цены</a>
                </div>
              </article>
              <div class="advantage__img">
                <img src="img/biology.png" alt="Колбы" width="400" height="322">
              </div>
            </li>
          </ul>
        </section>
        <section class="directions">
          <div class="wrapper-title">
            <h3 class="directions__title">Наши направления</h3>
          </div>
          <p class="directions__desc">Сейчас в штате хозрасчетной поликлиники свыше 40 врачей. В ней работают терапевт, кардиолог, специалисты УЗИ, дерматовенеролог, невролог, хирург и прочие специалисты. У нас вы получите качественное и эффективное медицинское обслуживание за приемлиемую плату!</p>
          <ul class="directions__list">
            <li class="directions__item">
              <a class="directions__link" href="doctors.php">
                <article class="directions-card">
                  <div class="directions-card__icon-wrapper">
                    <img class="directions-card__icon" width="50" height="50" src="img/sprite/icon-blood-pressure.svg" alt="Иконка">
                  </div>
                  <h3 class="directions-card__title">Терапия</h3>
                  <p class="directions-card__desc">Если вы не знаете, к какому доктору обратиться с возникшей проблемой, именно терапевт выпишет направление к узкому специалисту, основываясь на специфике жалоб и клинических проявлений.</p>
                </article>
              </a>
            </li>
            <li class="directions__item">
              <a class="directions__link" href="price.php">
                <article class="directions-card">
                  <div class="directions-card__icon-wrapper">
                    <img class="directions-card__icon" width="50" height="50" src="img/sprite/icon-gynecology.svg" alt="Иконка">
                  </div>
                  <h3 class="directions-card__title">Гинекология</h3>
                  <p class="directions-card__desc">Гинеколог занимается диагностикаой, лечением и профилактикой заболеваний женской половой сферы. Его задача: сохранение и восстановление нормального функционирования женской репродуктивной системы</p>
                </article>
              </a>
            </li>
            <li class="directions__item">
              <a class="directions__link" href="price.php">
                <article class="directions-card">
                  <div class="directions-card__icon-wrapper">
                    <img class="directions-card__icon" width="50" height="50" src="img/sprite/icon-medical-tools.svg" alt="Иконка">
                  </div>
                  <h3 class="directions-card__title">Хирургия</h3>
                  <p class="directions-card__desc">Помощь хирурга может потребоваться в самых различныъ ситуациях - от исправления эстетического дефекта, удаления рубца или шрама до лечения тяжелого заболевания</p>
                </article>
              </a>
            </li>
            <li class="directions__item">
              <a class="directions__link" href="price.php">
                <article class="directions-card">
                  <div class="directions-card__icon-wrapper">
                    <img class="directions-card__icon" width="50" height="50" src="img/sprite/icon-lungs.svg" alt="Иконка">
                  </div>
                  <h3 class="directions-card__title">Урология</h3>
                  <p class="directions-card__desc">В обязанности уролога входит широкий ряд патологий мочеполовой системы, от воспалительных заболеваний мочевого пузыря и почек, до болезней репродуктивной системы и инфекций, передающихся половым путем.</p>
                </article>
              </a>
            </li>
            <li class="directions__item">
              <a class="directions__link" href="price.php">
                <article class="directions-card">
                  <div class="directions-card__icon-wrapper">
                    <img class="directions-card__icon" width="50" height="50" src="img/sprite/icon-cardiogram.svg" alt="Иконка">
                  </div>
                  <h3 class="directions-card__title">Кардиология</h3>
                  <p class="directions-card__desc">Кардиолог - это врач, который занимается диагностикой и лечением заболеваний сердца и коронарных сосудов. Малоподвижный образ жизни является одним из факторов риска в возникновении проблем с сердцем.</p>
                </article>
              </a>
            </li>
            <li class="directions__item">
              <a class="directions__link" href="price.php">
                <article class="directions-card">
                  <div class="directions-card__icon-wrapper">
                    <img class="directions-card__icon" width="50" height="50" src="img/sprite/icon-ophtalmology.svg" alt="Иконка">
                  </div>
                  <h3 class="directions-card__title">Офтальмология</h3>
                  <p class="directions-card__desc">Заболевания глаз, бытовые травмы, снижение остроты зрения требуют немедленного обращения к офтальмологу. Также рекомендуется проходить профилактический осмотр у офтальмолога.</p>
                </article>
              </a>
            </li>
          </ul>
          <div class="directions__link-more-wrapper">
            <a class="directions__link-more" href="doctors.php">
              <p class="directions__link-more-desc">Посмотреть больше направлений</p>
            </a>
          </div>
        </section>
        <section class="news">
          <div class="wrapper-title">
            <h2 class="news__title">Новости</h2>
          </div>
          <ul class="news__list">
            <li class="news__item">
              <a class="news__link">
                <article class="news-card">
                  <div class="news-card__img-wrapper">
                    <img class="news-card__img" width="300" height="300" src="img/newYear.png" alt="Ёлка">
                  </div>
                  <h3 class="news-card__title">График работы на новогодние праздники</h3>
                </article>
              </a>
            </li>
            <li class="news__item">
              <a class="news__link">
                <article class="news-card">
                  <div class="news-card__img-wrapper">
                    <img class="news-card__img" width="300" height="300" src="img/AIDS.png" alt="Остановим СПИД">
                  </div>
                  <h3 class="news-card__title">Всемирный день борьбы со СПИДом</h3>
                </article>
              </a>
            </li>
            <li class="news__item">
              <a class="news__link">
                <article class="news-card">
                  <div class="news-card__img-wrapper">
                    <img class="news-card__img" width="300" height="300" src="img/Tablets.png" alt="Антибиотики">
                  </div>
                  <h3 class="news-card__title">Антибиотики - миф или правда?</h3>
                </article>
              </a>
            </li>
          </ul>
        </section>
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
    <script src="js/scriptHeader.js"></script>
  </body>
</html>
