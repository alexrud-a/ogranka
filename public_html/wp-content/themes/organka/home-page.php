<?php

/**
* Template Name: Home
*/

get_header();
?>
<div class="home">
<?php
if( have_rows('slider') ): ?>
    <section class="section section--main">
        <div class="slider slider--main js-slider">
        <? while ( have_rows('slider') ) : the_row(); ?>
            <div>
                <div class="slider__item" style="background-image: url('<? the_sub_field('img'); ?>')">
                    <div class="container">
                        <div class="slider__title">
                            <? the_sub_field('title'); ?>
                        </div>
                        <div class="slider__text">
                            <? the_sub_field('text'); ?>
                        </div>
                        <a class="slider__btn btn btn--white" href="<? the_sub_field('link'); ?>">
                            <? the_sub_field('link-text'); ?>
                        </a>
                    </div>
                </div>
            </div>
        <? endwhile; ?>
        </div>
    </section>
<? endif; ?>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="section__title">
                    Ювелирная студия-мастерская JEWELLERY
                </h1>
            </div>
            <div class="col-12">
                <div class="section__text">
                    <p>
                        Сегодня ювелирная студия CAPRICE,
                        основанная в 2007 году, — это команда
                        настоящих виртуозов, готовых воплотить
                        вашу задумку в реальность и создать
                        любое украшение из серебра, золота,
                        платины или палладия.
                    </p>
                    <p>
                        В уютном шоу-руме вас окружит атмосфера
                        прекрасных фантазий и вы сможете подобрать
                        аксессуары на любой вкус и бюджет. Мастера
                        изготавливают изделия по предоставленным
                        или собственным разработкам, а также создают
                        эксклюзивный дизайн украшений.
                    </p>
                    <p>
                        Здесь можно заказать любые драгоценности:
                    </p>
                    <ul>
                        <li>
                            кольца — обручальные, помолвочные, перстни, печатки, тринити, фаланговые;
                        </li>
                        <li>
                            серьги всех типов;
                        </li>
                        <li>
                            браслеты — модели на руку, анклеты, для часов;
                        </li>
                        <li>
                            шейные аксессуары — колье, цепи;
                        </li>
                        <li>
                            подвески — кулоны, медальоны, шармы;
                        </li>
                        <li>
                            галстучные зажимы;
                        </li>
                        <li>
                            запонки;
                        </li>
                        <li>
                            диадемы;
                        </li>
                        <li>
                            религиозные предметы — крестики, оклады икон, ладанки.
                        </li>
                    </ul>
                    <p>
                        На сайте представлен адрес ювелирной мастерской в Москве и телефоны, а также отзывы заказчиков.
                    </p>
                    <p>
                        CAPRICE JEWELLERY — это гарантированно высокое качество, индивидуальный и творческий подход к каждому заказу, безмерная любовь к ювелирному делу.
                    </p>
                    <p>
                        Ознакомьтесь с полным спектром услуг студии и ценами.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title">
                    Каталог ювелирных изделий
                </h2>
            </div>
            <div class="col-12">
                <div class="catalog">
                    <a href="#" class="catalog__item">
                        <div class="catalog__cat">
                            Обручальные кольца
                        </div>
                    </a>
                    <a href="#" class="catalog__item">
                        <div class="catalog__cat">
                            Серьги и комплекты
                        </div>
                    </a>
                    <a href="#" class="catalog__item">
                        <div class="catalog__cat">
                            Подвески
                        </div>
                    </a>
                    <a href="#" class="catalog__item">
                        <div class="catalog__cat">
                            Браслеты
                        </div>
                    </a>
                </div>
                <a class="catalog__btn" href="#">
                    Все категории
                </a>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title">
                    Услуги ювелирной мастерской
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="https://capricejewellery.ru/wp-content/uploads/2019/09/IMG_9450-700x400.jpg">
            </div>
            <div class="col-md-8">
                <h3 class="section__subtitle">
                    Изготовление изделий на заказ
                </h3>
                <div class="section__text">
                    Мастерская ведет производство ювелирных
                    украшений на заказ по индивидуальным и
                    типовым проектам. Основой для разработки
                    модели может стать эскиз, фото и даже
                    словесное описание — дизайнер учтет всю
                    предоставленную информацию и постарается
                    идеально трансформировать задумку в 3D-модель.
                    Многолетний опыт и любовь к своему делу позволяют
                    мастерам эффективно работать с редкими и
                    драгоценными материалами, преобразуя их по желанию
                    заказчика. Ювелиры могут изготовить для вас стильные
                    аксессуары и настоящие семейные реликвии, выполняя
                    работы на высочайшем уровне даже при сложнейшем дизайне изделий.
                </div>
                <a href="#" class="section__btn btn btn--black">
                    Подробнее
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h3 class="section__subtitle">
                    Ювелирный ремонт
                </h3>
                <div class="section__text">
                    Срочный ремонт ювелирных изделий, деликатная
                    реставрация покрытий и замена элементов —
                    востребованные услуги среди любителей драгоценностей.
                    Мы гарантируем качественное восстановление украшений:
                    спайку цепочек, подгонку колец и перстней, нанесение
                    декоративных слоев эмали и металла, деликатное внедрение
                    новых элементов взамен утраченных или дефектных.
                    Ваши вещи получат вторую жизнь. Также мастерская
                    ремонтирует изделия для интерьерного декора, выполненные
                    из благородных металлов, например, серебряные подсвечники
                    и статуэтки, золотые пудреницы и шкатулки, другие предметы.
                </div>
                <a href="#" class="section__btn btn btn--black">
                    Подробнее
                </a>
            </div>
            <div class="col-md-4">
                <img src="https://capricejewellery.ru/wp-content/uploads/2019/09/IMG_9699-700x400.jpg">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img src="https://capricejewellery.ru/wp-content/uploads/2019/09/IMG_9553-700x400.jpg">
            </div>
            <div class="col-md-8">
                <h3 class="section__subtitle">
                    Ювелирная сварка
                </h3>
                <div class="section__text">
                    Для восстановления поврежденных драгоценностей,
                    часов и антиквариата студия CAPRICE применяет
                    сварные технологии. Мастера запаивают корпусные
                    части, труднодоступные места в украшениях и
                    деликатные изделия со вставками, которые боятся
                    нагрева,. Например, если кольца не подходят
                    по размеру, их раскатывают с предварительным
                    нагреванием. Прочные соединения создаются точечным
                    электродуговым, лазерным или контактным воздействием.
                    В работе с драгоценными металлами преимущественно
                    используется эффективная и бережная лазерная сварка.
                    Перед ремонтом мастера проводят диагностику повреждения
                    и определяют приемлемый способ восстановления.
                </div>
                <a href="#" class="section__btn btn btn--black">
                    Подробнее
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <h3 class="section__subtitle">
                    Ювелирная гравировка
                </h3>
                <div class="section__text">
                    Авторские подписи, вензеля, монограммы,
                    рисунки придают ювелирным изделиям
                    индивидуальность и особый шик. В числе
                    работ по гравировке, которые выполняются
                    на заказ в нашей студии, — надписи на корпусах
                    и крышках часов, антикварных предметах, корпусах
                    телефонов и планшетов, кольцах и кулонах.
                    Для корпоративных и бизнес-подарков предлагается
                    нанесение логотипа или другой символики фирмы.
                    Гравировочные работы на драгметаллах выполняются
                    вручную или посредством лазерного оборудования.
                    Мастер выбирает оптимальный для конкретного заказа способ.
                </div>
                <a href="#" class="section__btn btn btn--black">
                    Подробнее
                </a>
            </div>
            <div class="col-md-4">
                <img src="https://capricejewellery.ru/wp-content/uploads/2019/09/IMG_8772-700x400.jpg">
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title">
                    Стоимость услуг ювелирной студии
                </h2>
            </div>
            <div class="col-12">
                <table class="table-price">
                    <thead>
                    <tr>
                        <td>
                            Услуги
                        </td>
                        <td>
                            Стоимость
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            Спайка цепочек
                        </td>
                        <td>
                            500 руб.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Вставка выпавшего камня
                        </td>
                        <td>
                            от 700 руб.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Ремонт золотых часов
                        </td>
                        <td>
                            от 800 руб.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Гравировка колец внутри (алмазная/лазерная)
                        </td>
                        <td>
                            от 500 / 800 руб.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Гравировка снаружи колец (алмазная/лазерная)
                        </td>
                        <td>
                            от 500 / 800 руб.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Гравировка по плоскости (замок, флешка, зажигалка и т. д.) алмазная/лазерная
                        </td>
                        <td>
                            от 500 / 600 руб.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Оценка стоимости камней
                        </td>
                        <td>
                            от 1000 руб.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Оценка золотых часов
                        </td>
                        <td>
                            от 3000 руб.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Огранка камней
                        </td>
                        <td>
                            от 120 руб./1 ct
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Разработка 3D-модели изделия
                        </td>
                        <td>
                            от 3000 руб.
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Стоимость золочения изделий
                        </td>
                        <td>
                            от 500 руб.
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title">
                    Как мы работаем?
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h3 class="section__subtitle">
                    Приобретение изделия из каталога
                </h3>
                <ul>
                    <li>
                        Выберите украшение в каталоге
                    </li>
                    <li>
                        Выберите необходимые параметры и добавьте в корзину
                    </li>
                    <li>
                        Оформите заказ
                    </li>
                    <li>
                        После чего наш специалист свяжется с вами для уточнения деталей и подтверждения заказа
                    </li>
                    <li>
                        Получаете свой заказ с курьером (бесплатная доставка по России и СНГ) или в нашем офисе в Москве
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3 class="section__subtitle">
                    Приобретение изделия из каталога
                </h3>
                <ul>
                    <li>
                        Присылаете эскиз или описываете украшение в письме
                    </li>
                    <li>
                        Мы обсуждаем с вами украшения и материалы у нас в офисе или по телефону
                    </li>
                    <li>
                        Вы, совместно с нашим дизайнером, составляете техническое задание
                    </li>
                    <li>
                        После согласования задания составляется 3D-модель украшения
                    </li>
                    <li>
                        После корректировки приступаем к изготовлению (2–4 недели)
                    </li>
                    <li>
                        Получаете свой заказ с курьером (бесплатная доставка по России и СНГ) или в нашем офисе в Москве
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <h3 class="section__subtitle">
                    Приобретение изделия из каталога
                </h3>
                <ul>
                    <li>
                        Вы приносите изделие в нашу мастерскую
                    </li>
                    <li>
                        Мы производим оценку, называем стоимость и сроки
                    </li>
                    <li>
                        Производим ремонт (от 30 мин. до 2-х дней в зависимости от сложности)
                    </li>
                    <li>
                        Вы принимаете работу и оплачиваете стоимость
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title">
                    Наши работы
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-products">
                    <a href="#">
                        <div class="slider-products__item"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title">
                    Отзывы наших клиентов
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="slider-feedback">
                    <a href="#">
                        <div class="slider-feedback__item"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title">
                    Задать вопрос:
                </h2>
            </div>
            <div class="col-12">
                <div class="form__wrap">

                </div>
            </div>
        </div>
    </div>
</section>
</div>
<?php
get_footer();
