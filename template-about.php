<?php
/**
 * Template Name: О компании
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

    <section class="about">
      <div class="container">
        <h1 class="about__title title">О компании</h1>
        <div class="about-block">
          <div class="about-block__item">
            <div class="about-block__content">
              <div class="about-block__content-title">РМЦ “Калиброн”</div>
              <p class="about-block__content-text">
                Метрологическая лаборатория РМЦ «Калиброн» уже более 15 лет
                оказывает услуги поверки и калибровки средств измерений.
                Начало деятельности было положено в 2008 году и главной целью
                организации было обеспечение производителей средств измерений
                и их потребителей качественным и, главное, сертифицированным
                контролем продукции.
              </p>
              <p class="about-block__content-text">
                Набираясь опыта и расширяя собственный парк эталонного
                оборудования было принято решение о развитии в направлении
                поверки СИ.
              </p>
              <p class="about-block__content-text">
                Первая полученная аккредитация позволяла производить работы по
                поверке неширокого списка линейно-угловых средств измерений,
                таких как линейки, штангенциркули, микрометры, меры длины,
                нутромеры и некоторые другие.
              </p>
            </div>
            <div class="about-block__item-img">
              <img src="./images/about/about-1.png" alt="img" />
            </div>
          </div>
          <div class="about-block__item">
            <div class="about-block__content">
              <div class="about-block__content-title">
                Высококвалифицированные специалисты
              </div>
              <p class="about-block__content-text">
                Уже к этому моменту сформировался коллектив, состоящий из
                мастеров и энтузиастов своего дела, который и сейчас обрастает
                новыми сотрудниками с одним неизменным качеством — любовь к
                своей работе.
              </p>
              <p class="about-block__content-text">
                Жесткий отбор сотрудников позволил не останавливаться на
                достигнутом. ООО РМЦ «Калиброн» ежегодно проходит процедуру
                расширения аккредитации и регулярно подтверждает имеющуюся
                аккредитацию.
              </p>
            </div>
            <div class="about-block__item-img">
              <img src="./images/about/about-2.png" alt="img" />
            </div>
          </div>
          <div class="about-block__item">
            <div class="about-block__content">
              <div class="about-block__content-title">О лаборатории</div>
              <p class="about-block__content-text">
                Метрологическая лаборатория РМЦ «Калиброн» внесена в реестр
                аккредитованных лиц за номером РОСС RU.0001.310096. Карточка
                аккредитованного лица размещена на сайте Федеральной службы по
                аккредитации.
              </p>
              <p class="about-block__content-text">
                Штат сотрудников включает около 30 высококвалифицированных
                метрологов из различных областей: линейно-угловые измерения,
                средства измерения давления и вакуума, электро-технические
                измерения, температурные, механические измерения и другие.
              </p>
              <p class="about-block__content-text">
                Также лаборатория обладает сильнейшим парком контрольных
                калибров, что гарантирует калибровку калибров в кратчайшие
                сроки.
              </p>
            </div>
            <div class="about-block__item-img">
              <img src="./images/about/about-3.png" alt="img" />
            </div>
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