<?php
/**
 * Template Name: Испытания
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

    <section class="tests">
        <div class="container">
            <h1 class="tests__title title">Испытания СИ</h1>
            <div class="tests-block">
            <div class="tests-block__img">
                <img src="./images/tests/test-img.png" alt="img" />
            </div>
            <form class="tests-block__form">
                <div class="tests-block__form-title name">Оставить заявку</div>
                <div class="tests-block__wrapper tests-block__wrapper--user">
                <input
                    type="text"
                    class="tests-block__form-input"
                    placeholder="Имя"
                    required
                />
                </div>
                <div class="tests-block__wrapper tests-block__wrapper--phone">
                <input
                    type="text"
                    class="tests-block__form-input"
                    placeholder="Телефон"
                    required
                />
                </div>
                <div class="tests-block__wrapper tests-block__wrapper--email">
                <input
                    type="text"
                    class="tests-block__form-input"
                    placeholder="Email"
                    required
                />
                </div>
                <div class="tests-block__wrapper tests-block__wrapper--inn">
                <input
                    type="text"
                    class="tests-block__form-input"
                    placeholder="ИНН"
                    required
                />
                </div>
                <textarea
                class="tests-block__form-textarea"
                placeholder="Дополнительная мнформация о заказе"
                ></textarea>

                <div class="tests-block__bottom">
                <input class="tests-block__form-file" type="file" />
                </div>
                <button class="tests-block__form-btn btn">Подтвердить</button>
            </form>
            </div>
        </div>
    </section>

    <section class="procedure">
        <div class="container">
            <div class="procedure__inner">
            <h3 class="procedure__title title">
                Процедура передачи в поверку и получения СИ
            </h3>
            <div class="procedure-block">
                <div class="procedure-block__left">
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">1</div>
                    <p class="procedure-block__item-text">
                    Подача заявки на проведение работ по испытаниям
                    </p>
                </div>
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">2</div>
                    <p class="procedure-block__item-text">Заключение договора</p>
                </div>
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">3</div>
                    <p class="procedure-block__item-text">
                    Предоставление образцов, необходимой документации
                    </p>
                </div>
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">4</div>
                    <p class="procedure-block__item-text">
                    Согласование программы испытаний
                    </p>
                </div>
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">5</div>
                    <p class="procedure-block__item-text">Проведение испытаний</p>
                </div>
                </div>
                <div class="procedure-block__right">
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">6</div>
                    <p class="procedure-block__item-text">
                    Оформление и согласование комплекта документов
                    </p>
                </div>
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">7</div>
                    <p class="procedure-block__item-text">
                    Передача документов на экспертизу в Единый центр проверки
                    результатов
                    </p>
                </div>
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">8</div>
                    <p class="procedure-block__item-text">
                    Передача документов в Росстандарт для вынесения решения об
                    утверждении типа и внесении в ФИФ по обеспечению единства
                    измерений
                    </p>
                </div>
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">9</div>
                    <p class="procedure-block__item-text">
                    Опубликование приказа Росстандарта
                    </p>
                </div>
                <div class="procedure-block__item">
                    <div class="procedure-block__item-title">10</div>
                    <p class="procedure-block__item-text">
                    Получение в Росстандарте сертификата об утверждении типа СИ.
                    (при необходимости)
                    </p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <div class="word">
        <div class="container">
            <div class="word-block">
            <div class="word-block__item">
                <div class="word-block__item-img">
                <img src="./images/price-word.png" alt="img" />
                </div>
                <div class="word-block__content">
                <a href="#" class="word-block__content-link">Скачать</a>
                <div class="word-block__content-title">Бланк заявки</div>
                </div>
            </div>
            <div class="word-block__item">
                <div class="word-block__item-img">
                <img src="./images/price-exel.png" alt="img" />
                </div>
                <div class="word-block__content">
                <a href="#" class="word-block__content-link">Скачать</a>
                <div class="word-block__content-title">Прайс лист</div>
                </div>
            </div>
            <div class="word-block__item">
                <div class="word-block__item-img">
                <img src="./images/price-word.png" alt="img" />
                </div>
                <div class="word-block__content">
                <a href="#" class="word-block__content-link">Скачать</a>
                <div class="word-block__content-title">
                    Бланк выездной поверки
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <section class="region">
        <div class="container">
            <h3 class="region__title title">Область аккредитации</h3>
            <p class="region__text">
            Наша лаборатория аккредитована на право проведения испытаний в целях
            утверждения типа средств измерений (внесение в ГОСРЕЕСТР СИ), номер
            в реестре аккредитованных лиц RA.RU.314442
            </p>
            <p class="region__text">
            В соответствии с Федеральным законом №102-ФЗ в сфере
            государственного регулирования обеспечения единства измерений
            применяются средства измерений утвержденного типа. Утверждение типа
            средств измерений – документально оформленное в установленном
            порядке решение о признании соответствия типа средств измерений
            метрологическим и техническим требованиям (характеристикам) на
            основании результатов испытаний средств измерений в целях
            утверждения типа.
            </p>
            <div class="region-block">
            <ul class="region-block__list">
                <li class="region-block__list-item">Штангенинструмент</li>
                <li class="region-block__list-item">
                Микрометрический инструмент
                </li>
                <li class="region-block__list-item">
                Глубиномеры микрометрические, глубиномеры, индикаторные
                </li>
                <li class="region-block__list-item">
                Скобы с отсчетным устройством: скобы рычажные, скобы
                индикаторные
                </li>
                <li class="region-block__list-item">
                Головки измерительные рычажно-зубчатые, многооборотные, цифровые
                </li>
                <li class="region-block__list-item">
                Индикаторы часового типа, рычажного типа и многооборотные,
                цифровые
                </li>
                <li class="region-block__list-item">
                Нутромеры индикаторные, нутромеры повышенной точности, нутромеры
                трехточечные. Нутромеры микрометрические
                </li>
                <li class="region-block__list-item">
                Угломеры нониусные, оптические, цифровые, маятниковые
                </li>
                <li class="region-block__list-item">Шаблоны</li>
                <li class="region-block__list-item">
                Линейки измерительные металлические искладные
                </li>
                <li class="region-block__list-item">Линейки поверочные</li>
                <li class="region-block__list-item">
                Линейки охватывающие (циркометры)
                </li>
                <li class="region-block__list-item">
                Рулетки металлические измерительные
                </li>
            </ul>

            <ul class="region-block__list">
                <li class="region-block__list-item">Плиты поверочные</li>
                <li class="region-block__list-item">
                Уровни рамные и брусковые, в т.ч. с микрометрической подачей
                ампулы
                </li>
                <li class="region-block__list-item">Уровни строительные</li>
                <li class="region-block__list-item">Угольники</li>
                <li class="region-block__list-item">
                Меры внутренних и наружных диаметров
                </li>
                <li class="region-block__list-item">Толщиномеры, стенкомеры</li>
                <li class="region-block__list-item">Проволочки, ролики</li>
                <li class="region-block__list-item">Щупы</li>
                <li class="region-block__list-item">Сита лабораторные</li>
                <li class="region-block__list-item">
                Образцы шероховатости поверхности (сравнения)
                </li>
                <li class="region-block__list-item">Кронциркули индикаторные</li>
                <li class="region-block__list-item">Штифты контрольные</li>
                <li class="region-block__list-item">
                Меры длины концевые плоскопараллельные
                </li>
            </ul>
            </div>
        </div>
    </section>

    <section class="advantages">
        <div class="container">
            <h3 class="advantages__title title">Преимущества работы с нами</h3>
            <div class="advantages-block">
            <div class="advantages-block__item">
                <div class="advantages-block__item-img">
                <img src="./images/tests/advantages-1.svg" alt="img" />
                </div>
                <div class="advantages-block__item-title">
                Все виды метрологических услуг
                </div>
                <div class="advantages-block__item-text">
                Надежные метрологические решения под одной крышей: от поверки до
                калибровки
                </div>
            </div>
            <div class="advantages-block__item">
                <div class="advantages-block__item-img">
                <img src="./images/tests/advantages-2.svg" alt="img" />
                </div>
                <div class="advantages-block__item-title">
                15 лет опыта калибровки
                </div>
                <div class="advantages-block__item-text">
                С начала 2008 года компания на рынке услуг по поверке и
                калибровке средств измерений
                </div>
            </div>
            <div class="advantages-block__item">
                <div class="advantages-block__item-img">
                <img src="./images/tests/advantages-3.svg" alt="img" />
                </div>
                <div class="advantages-block__item-title">
                Персональный менеджер
                </div>
                <div class="advantages-block__item-text">
                Выставление счета за 15 минут и полное ведение вашего кейса
                </div>
            </div>
            <div class="advantages-block__item">
                <div class="advantages-block__item-img">
                <img src="./images/tests/advantages-4.svg" alt="img" />
                </div>
                <div class="advantages-block__item-title">
                130+ аккредитаций СИ
                </div>
                <div class="advantages-block__item-text">
                Доверьтесь нашим аккредитациям в области средств измерений —
                гарантия вашей уверенности в качестве
                </div>
            </div>
            <div class="advantages-block__item">
                <div class="advantages-block__item-img">
                <img src="./images/tests/advantages-5.svg" alt="img" />
                </div>
                <div class="advantages-block__item-title">
                Большой парк контрольных калибров
                </div>
                <div class="advantages-block__item-text">
                Более 600 кв.м. лаборатории с обширным парком контрольных
                калибров для точных измерений
                </div>
            </div>
            <div class="advantages-block__item">
                <div class="advantages-block__item-img">
                <img src="./images/tests/advantages-6.svg" alt="img" />
                </div>
                <div class="advantages-block__item-title">
                Более 30 опытных специалистов
                </div>
                <div class="advantages-block__item-text">
                Наша команда включает более 30 опытных метрологов —
                профессионалов в своей области
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="slider">
        <div class="container">
            <div class="tests__circle">
            <div class="circle">
                <div class="text">
                <p>Метрология Р М Ц Калиброн</p>
                </div>
            </div>
            </div>
            <div class="slider-block">
            <div class="slider-block__left">
                <div class="slider-block__left-title name">
                Область аккредитации на поверку и калибровку
                </div>
                <a href="#" class="slider-block__left-link">Испытания СИ</a>
                <a href="#" class="slider-block__left-link">Поверка</a>
            </div>
            <div class="slider-block__center">
                <div class="slider-block__inner">
                <div class="slider-block__item">
                    <div class="slider-block__item-img">
                    <img src="./images/tests/slider-img.png" alt="img" />
                    </div>
                </div>
                <div class="slider-block__item">
                    <div class="slider-block__item-img">
                    <img src="./images/tests/slider-img.png" alt="img" />
                    </div>
                </div>
                </div>
            </div>
            <div class="slider-block__right">
                <p class="slider-block__right-text">
                Метрологическая лаборатория РМЦ «КАЛИБРОН» аккредитована в
                национальной системе аккредитации (РОСС RU.0001.310 096 и
                RA.RU.314 442).
                </p>
                <p class="slider-block__right-text">
                С 2008 года компания предоставляет услуги по поверке и
                калибровке средств измерений, стремясь к постоянному развитию и
                высокому стандарту качества
                </p>
                <a href="#" class="slider-block__right-btn btn">Все документы</a>
            </div>
            </div>
            <a
            href="#"
            class="slider-block__right-btn btn slider-block__right-btn--mobile"
            >Все документы</a
            >
        </div>
    </section>

    <section class="reviews">
        <div class="container">
            <div class="reviews__title title">Отзывы наших клиентов</div>
            <div class="reviews-slider">
            <div class="reviews-slider__inner">
                <div class="reviews-slider__wrapper">
                <div class="reviews-slider__item">
                    <div class="reviews-slider__item-img">
                    <img src="./images/tests/reviews-1.png" alt="img" />
                    </div>
                    <div class="reviews-slider__item-text">
                    Трудолюбивые сотрудники, честная организация. Оставленную на
                    сайте заявку обрабатывают практически моментально. Бывало,
                    вносим правки, при этом негатива не испытываем. Наоборот,
                    менеджеры, тут же реагируют и выполняют обновленный заказ.
                    Инструмент получаем в срок с соответствующей документацией.
                    </div>
                    <div class="reviews-slider__item-name">Михаил Иджян</div>
                    <div class="reviews-slider__item-job">Директор</div>
                </div>
                </div>
                <div class="reviews-slider__wrapper">
                <div class="reviews-slider__item">
                    <div class="reviews-slider__item-img">
                    <img src="./images/tests/reviews-2.png" alt="img" />
                    </div>
                    <div class="reviews-slider__item-text">
                    Трудолюбивые сотрудники, честная организация. Оставленную на
                    сайте заявку обрабатывают практически моментально. Бывало,
                    вносим правки, при этом негатива не испытываем. Наоборот,
                    менеджеры, тут же реагируют и выполняют обновленный заказ.
                    Инструмент получаем в срок с соответствующей документацией.
                    </div>
                    <div class="reviews-slider__item-name">Михаил Иджян</div>
                    <div class="reviews-slider__item-job">Директор</div>
                </div>
                </div>
                <div class="reviews-slider__wrapper">
                <div class="reviews-slider__item">
                    <div class="reviews-slider__item-img">
                    <img src="./images/tests/reviews-3.png" alt="img" />
                    </div>
                    <div class="reviews-slider__item-text">
                    Трудолюбивые сотрудники, честная организация. Оставленную на
                    сайте заявку обрабатывают практически моментально. Бывало,
                    вносим правки, при этом негатива не испытываем. Наоборот,
                    менеджеры, тут же реагируют и выполняют обновленный заказ.
                    Инструмент получаем в срок с соответствующей документацией.
                    </div>
                    <div class="reviews-slider__item-name">Михаил Иджян</div>
                    <div class="reviews-slider__item-job">Директор</div>
                </div>
                </div>
                <div class="reviews-slider__wrapper">
                <div class="reviews-slider__item">
                    <div class="reviews-slider__item-img">
                    <img src="./images/tests/reviews-1.png" alt="img" />
                    </div>
                    <div class="reviews-slider__item-text">
                    Трудолюбивые сотрудники, честная организация. Оставленную на
                    сайте заявку обрабатывают практически моментально. Бывало,
                    вносим правки, при этом негатива не испытываем. Наоборот,
                    менеджеры, тут же реагируют и выполняют обновленный заказ.
                    Инструмент получаем в срок с соответствующей документацией.
                    </div>
                    <div class="reviews-slider__item-name">Михаил Иджян</div>
                    <div class="reviews-slider__item-job">Директор</div>
                </div>
                </div>
            </div>
            <div class="reviews-slider__arrows"></div>
            </div>
        </div>
    </section>

    <div class="yandex">
        <div class="container">
            <div class="yandex-box">
            <div class="yandex-box__item">
                <div class="yandex-box__item-img">
                <img src="./images/tests/rate-1.png" alt="img" />
                </div>
            </div>
            <div class="yandex-box__item">
                <div class="yandex-box__item-img">
                <img src="./images/tests/rate-2.png" alt="img" />
                </div>
            </div>
            <div class="yandex-box__item">
                <div class="yandex-box__item-img">
                <img src="./images/tests/rate.png" alt="img" />
                </div>
            </div>
            </div>
        </div>
    </div>

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