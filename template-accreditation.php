<?php
/**
 * Template Name: Аккредитация
 */
?>
<?php get_header();?>
    <main class="main">
      <div class="breadcrumbs">
        <div class="container">
            <?php if(function_exists('bcn_display'))
                {
                    bcn_display();
            }?>
        </div>
      </div>

      <section class="documentation">
        <div class="container">
          <h1 class="documentation__title title">
            Карточка аккредитованного лица
          </h1>
          <p class="documentation__text">
            Метрологическая лаборатория РМЦ «Калиброн» внесена в реестр
            аккредитованных лиц за номером РОСС RU.0001.310096. Карточка
            аккредитованного лица размещена на сайте
            <span>Федеральной службы по аккредитации</span>
          </p>
          <h3 class="documentation__subtitle subtitle">
            Документы для ознакомления
          </h3>
          <div class="documentation-block">
            <div class="documentation-block__left">
              <div class="documentation-block__item">
                <div class="documentation-block__item-img">
                  <img
                    src="./images/accreditation/documentation-1.jpg"
                    alt="img"
                  />
                </div>
                <div class="documentation-block__item-title">
                  Область аккредитации калибровка
                </div>
              </div>
              <div class="documentation-block__item">
                <div class="documentation-block__item-img">
                  <img
                    src="./images/accreditation/documentation-2.jpg"
                    alt="img"
                  />
                </div>
                <div class="documentation-block__item-title">
                  Подтверждение компетенции
                </div>
              </div>
              <div class="documentation-block__item">
                <div class="documentation-block__item-img">
                  <img
                    src="./images/accreditation/documentation-3.jpg"
                    alt="img"
                  />
                </div>
                <div class="documentation-block__item-title">
                  Свидетельство регистрации
                </div>
              </div>
              <div class="documentation-block__item">
                <div class="documentation-block__item-img">
                  <img
                    src="./images/accreditation/documentation-4.jpg"
                    alt="img"
                  />
                </div>
                <div class="documentation-block__item-title">
                  Область аккредитации поверка
                </div>
              </div>
              <div class="documentation-block__item">
                <div class="documentation-block__item-img">
                  <img
                    src="./images/accreditation/documentation-5.jpg"
                    alt="img"
                  />
                </div>
                <div class="documentation-block__item-title">
                  Приказ об аккредитации
                </div>
              </div>
              <div class="documentation-block__item">
                <div class="documentation-block__item-img">
                  <img
                    src="./images/accreditation/documentation-6.jpg"
                    alt="img"
                  />
                </div>
                <div class="documentation-block__item-title">
                  Приказ на шифр
                </div>
              </div>
            </div>

            <div class="documentation-block__right">
              <div class="documentation-block__download">
                <div class="documentation-block__download-img">
                  <img
                    src="./images/accreditation/documentation-word.png"
                    alt="img"
                  />
                </div>
                <div class="documentation-block__info">
                  <div class="documentation-block__info-title">Реквизиты</div>
                  <a href="#" class="documentation-block__info-link">Скачать</a>
                </div>
              </div>
              <div class="documentation-block__download">
                <div class="documentation-block__download-img">
                  <img
                    src="./images/accreditation/documentation-word.png"
                    alt="img"
                  />
                </div>
                <div class="documentation-block__info">
                  <div class="documentation-block__info-title">
                    Договор на оказание услуг
                  </div>
                  <a href="#" class="documentation-block__info-link">Скачать</a>
                </div>
              </div>
              <div class="documentation-block__download">
                <div class="documentation-block__download-img">
                  <img
                    src="./images/accreditation/documentation-word.png"
                    alt="img"
                  />
                </div>
                <div class="documentation-block__info">
                  <div class="documentation-block__info-title">
                    Приказ Минпромторга по поверкам
                  </div>
                  <a href="#" class="documentation-block__info-link">Скачать</a>
                </div>
              </div>
              <div class="documentation-block__download">
                <div class="documentation-block__download-img">
                  <img
                    src="./images/accreditation/documentation-word.png"
                    alt="img"
                  />
                </div>
                <div class="documentation-block__info">
                  <div class="documentation-block__info-title">
                    Закон об обеспечении единства измерений
                  </div>
                  <a href="#" class="documentation-block__info-link">Скачать</a>
                </div>
              </div>
              <div class="documentation-block__download">
                <div class="documentation-block__download-img">
                  <img
                    src="./images/accreditation/documentation-word.png"
                    alt="img"
                  />
                </div>
                <div class="documentation-block__info">
                  <div class="documentation-block__info-title">
                    Изменение в Федеральном законе №102-Ф3
                  </div>
                  <a href="#" class="documentation-block__info-link">Скачать</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="accreditation">
        <div class="container">
          <div class="accreditation__inner">
            <h3 class="accreditation__title name">Область аккредитации</h3>

            <div class="search">
              <form class="search-form">
                <input
                  type="text"
                  class="search-form__input"
                  placeholder="Search"
                />
              </form>
              <div class="search-form__close">
                <img src="./images/home/close_small.svg" alt="img" />
              </div>
            </div>

            <div class="accreditation-table">
              <div class="accreditation-table__inner">
                <div class="accreditation-table__headers">
                  <div class="accreditation-table__headers-num accreditation-table__headers-item">№ п/п</div>
                  <div class="accreditation-table__headers-name accreditation-table__headers-item">
                    Измерения, тип (группы) средств измерений
                  </div>
                  <div class="accreditation-table__headers-range accreditation-table__headers-item">
                    Диапазон измерений
                  </div>
                  <div class="accreditation-table__headers-class accreditation-table__headers-item">
                    Погрешность и (или) неопределенность (класс разряд)
                  </div>
                </div>
                <div class="accreditation-table__subtitle">
                  Измерения геометрических величин
                </div>
                <div class="accreditation-table__item">
                  <div class="accreditation-table__item-num accreditation-table__item-element">1</div>
                  <div class="accreditation-table__item-name accreditation-table__item-element">
                    Штангенциркули
                  </div>
                  <div class="accreditation-table__item-range accreditation-table__item-element">(0…4000) мм</div>
                  <div class="accreditation-table__item-class accreditation-table__item-element">
                    ПГ ±(0,02…0,45) мм, КТ 1; КТ 2
                  </div>
                </div>
                <div class="accreditation-table__item">
                  <div class="accreditation-table__item-num accreditation-table__item-element">2</div>
                  <div class="accreditation-table__item-name accreditation-table__item-element">
                    Штангенглубиномеры
                  </div>
                  <div class="accreditation-table__item-range accreditation-table__item-element">(0…4000) мм</div>
                  <div class="accreditation-table__item-class accreditation-table__item-element">
                    ПГ ±(0,02…0,20) мм
                  </div>
                </div>
                <div class="accreditation-table__item">
                  <div class="accreditation-table__item-num accreditation-table__item-element">3</div>
                  <div class="accreditation-table__item-name accreditation-table__item-element">
                    Микрометры, в том числе специального назначения. Меры
                    установочные к микрометрам
                  </div>
                  <div class="accreditation-table__item-range accreditation-table__item-element">(0…1000) мм</div>
                  <div class="accreditation-table__item-class accreditation-table__item-element">
                    ПГ ±(1,0…22) мкм, КТ 1; КТ 2
                  </div>
                </div>
                <div class="accreditation-table__item">
                  <div class="accreditation-table__item-num accreditation-table__item-element">4</div>
                  <div class="accreditation-table__item-name accreditation-table__item-element">
                    Глубиномеры микрометрические, индикаторные
                  </div>
                  <div class="accreditation-table__item-range accreditation-table__item-element">(0…300) мм</div>
                  <div class="accreditation-table__item-class accreditation-table__item-element">
                    ПГ ±(0,003…0,05) мм, КТ 1; КТ 2
                  </div>
                </div>
                <div class="accreditation-table__item">
                  <div class="accreditation-table__item-num accreditation-table__item-element">5</div>
                  <div class="accreditation-table__item-name accreditation-table__item-element">
                    Микрометры рычажные
                  </div>
                  <div class="accreditation-table__item-range accreditation-table__item-element">(0…2000) мм</div>
                  <div class="accreditation-table__item-class accreditation-table__item-element">
                    ПГ ±(0,7…36) мкм
                  </div>
                </div>
              </div>
            </div>

            <div class="pagination">
              <ul class="pagination__list">
                <li class="pagination__list-item">
                  <a
                    href="#"
                    class="pagination__list-link pagination__list-link--active"
                    >1</a
                  >
                </li>
                <li class="pagination__list-item">
                  <a href="#" class="pagination__list-link">2</a>
                </li>
                <li class="pagination__list-item">
                  <a href="#" class="pagination__list-link">...</a>
                </li>
                <li class="pagination__list-item">
                  <a href="#" class="pagination__list-link">9</a>
                </li>
                <li class="pagination__list-item">
                  <a href="#" class="pagination__list-link">10</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="form">
        <div class="container">
          <h3 class="form__title subtitle">Получить консультацию</h3>
          <div class="form-block">
            <div class="form-block__content">
              <div class="form-block__item">
                <p class="form-block__item-text">Телефон</p>
                <a href="tel:+74957969275" class="form-block__item-name">
                  +7 (495) 796-92-75
                </a>
                <img
                  src="./images/home/call-form.svg"
                  alt="img"
                  class="form-block__item-img"
                />
              </div>
              <div class="form-block__item">
                <p class="form-block__item-text">Почта</p>
                <a
                  href="mailto:info@calibronrmc.ru"
                  class="form-block__item-name"
                >
                  info@calibronrmc.ru
                </a>
                <img
                  src="./images/home/mail-form.svg"
                  alt="img"
                  class="form-block__item-img"
                />
              </div>
              <div class="form-block__item">
                <p class="form-block__item-text">По будням</p>
                <div class="form-block__item-name">08:45-17:30</div>
                <img
                  src="./images/home/alarm-form.svg"
                  alt="img"
                  class="form-block__item-img"
                />
              </div>
              <div class="form-block__item">
                <p class="form-block__item-text">Москва</p>
                <div class="form-block__item-name">Электродная 2, с. 23</div>
                <img
                  src="./images/home/location_on-form.svg"
                  alt="img"
                  class="form-block__item-img"
                />
              </div>
            </div>

            <form class="form-block__info">
              <p class="form-block__info-text">
                Наш менеджер свяжется с вами и ответит на все интересующие
                вопросы
              </p>
              <div
                class="form-block__info-wrapper form-block__info-wrapper--user"
              >
                <input
                  type="text"
                  class="form-block__info-input"
                  placeholder="Имя"
                  required
                />
              </div>

              <div
                class="form-block__info-wrapper form-block__info-wrapper--phone"
              >
                <input
                  type="text"
                  class="form-block__info-input"
                  placeholder="Телефон"
                  required
                />
              </div>
              <button class="form-block__info-btn btn">Ждем звонка!</button>
            </form>
          </div>
        </div>
      </section>
    </main>
<?php get_footer();?>