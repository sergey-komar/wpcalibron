<?php
/**
 * Template Name: Контакты
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

      <section class="form-contact">
        <div class="container">
          <h1 class="contact__title title">Контакты</h1>
          <div class="form__inner">
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

            <div class="map">
              <iframe
                class="contact__map"
                src="https://yandex.ru/map-widget/v1/?um=constructor%3A9e7f9b2261293f90bd9bfc3ba040d7449edd6279e3d13d8275c16cd6d10e9eea&amp;source=constructor"
                width="100%"
                frameborder="0"
              ></iframe>
            </div>
          </div>
        </div>
      </section>

      <section class="employees">
        <div class="container">
          <h3 class="employees-title title">Наши сотрудники</h3>
          <div class="employees-block">
            <div class="employees-block__item">
              <div class="employees-block__item-img">
                <img src="./images/employees.png" alt="img" />
              </div>
              <div class="employees-block__item-title">
                Татьяна Ивановна Димитриева
              </div>
              <div class="employees-block__item-job">
                Руководитель отдела сбыта
              </div>
              <a
                href="mailto:dim@calibronrmc.ru"
                class="employees-block__item-info employees-block__item-info--email"
                >dim@calibronrmc.ru</a
              >
              <a
                href="tel:+74957969275"
                class="employees-block__item-info employees-block__item-info--tel"
                >+7 495 796-92-75</a
              >
              <span class="employees-block__item-info">Добавочный: 2172</span>
            </div>
            <div class="employees-block__item">
              <div class="employees-block__item-img">
                <img src="./images/employees.png" alt="img" />
              </div>
              <div class="employees-block__item-title">
                Татьяна Ивановна Димитриева
              </div>
              <div class="employees-block__item-job">
                Руководитель отдела сбыта
              </div>
              <a
                href="mailto:dim@calibronrmc.ru"
                class="employees-block__item-info employees-block__item-info--email"
                >dim@calibronrmc.ru</a
              >
              <a
                href="tel:+74957969275"
                class="employees-block__item-info employees-block__item-info--tel"
                >+7 495 796-92-75</a
              >
              <span class="employees-block__item-info">Добавочный: 2172</span>
            </div>
            <div class="employees-block__item">
              <div class="employees-block__item-img">
                <img src="./images/employees.png" alt="img" />
              </div>
              <div class="employees-block__item-title">
                Татьяна Ивановна Димитриева
              </div>
              <div class="employees-block__item-job">
                Руководитель отдела сбыта
              </div>
              <a
                href="mailto:dim@calibronrmc.ru"
                class="employees-block__item-info employees-block__item-info--email"
                >dim@calibronrmc.ru</a
              >
              <a
                href="tel:+74957969275"
                class="employees-block__item-info employees-block__item-info--tel"
                >+7 495 796-92-75</a
              >
              <span class="employees-block__item-info">Добавочный: 2172</span>
            </div>
          </div>
        </div>
      </section>

      <div class="information">
        <div class="container">
          <div class="information-wrraper">
            <div class="information-block">
              <div class="information-block__item">
                <div class="information-block__item-name">
                  Полное название предприятия:
                </div>
                <div class="information-block__item-text">
                  Общество с ограниченной ответственностью Региональный
                  метрологический центр «Калиброн»
                </div>
              </div>
              <div class="information-block__item">
                <div class="information-block__item-name">
                  Сокращенное название предприятия:
                </div>
                <div class="information-block__item-text">ООО РМЦ «Калиброн»</div>
              </div>
              <div class="information-block__item">
                <div class="information-block__item-name">Юридический адрес:</div>
                <div class="information-block__item-text">
                  111524 г. Москва, ул. Электродная, дом 2, строение 23, этаж 1,
                  пом. 1
                </div>
              </div>
              <div class="information-block__item">
                <div class="information-block__item-name">Фактический адрес:</div>
                <div class="information-block__item-text">
                  111524 г. Москва, ул. Электродная, дом 2, строение 23
                </div>
              </div>
              <div class="information-block__item">
                <div class="information-block__item-name">ОГРН</div>
                <div class="information-block__item-text">1087746764247</div>
              </div>
              <div class="information-block__item">
                <div class="information-block__item-name">ИНН</div>
                <div class="information-block__item-text">7719685973</div>
              </div>
              <div class="information-block__item">
                <div class="information-block__item-name">КПП</div>
                <div class="information-block__item-text">772001001</div>
              </div>
              <div class="information-block__item">
                <div class="information-block__item-name">Коды:</div>
                <div class="information-block__item-text">
                  ОКПО 86584677 ОКАТО 45263594000 ОКОПФ 65 ОКФС 16 ОКВЭД 74.30
                  ОКГУ 49013
                </div>
              </div>
              <div class="information-block__item">
                <div class="information-block__item-name">
                  Банковские реквизиты СБЕРБАНК
                </div>
                <div class="information-block__item-text">
                  Р/с 40702810738000159482 в ПАО Сбербанк к/с 30101810400000000225
                  БИК 044525225
                </div>
              </div>
              <div class="information-block__item">
                <div class="information-block__item-name">Директор</div>
                <div class="information-block__item-text">
                  Никульшин Никита Михайлович
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>	
   
			
                       
<?php get_footer();?>