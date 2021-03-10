<main>
    <section class="page">
        <img class='page__img' src="./style/indexPg/img/page.jpg" alt="">
        <div class="page__pupup"></div>
        <div class="page__content">
            <h1 class="page__title">Описание школы</h1>
            <a href="" class="page__btn">Подробнее</a>
        </div>
    </section>
    <article class="news">
        <div class="news__slider">
            <div class="news_content">
                <div class="news__left">
                    <img src="./style/indexPg/img/news1.jpg" alt="" class="news__img">
                </div>
                <div class="news__right">
                    <div class="news__content">
                        <h2>Описание новости</h2>
                        <p>Текст новости</p>
                    </div>
                </div>
            </div>

            <?
            $Info= new indexInfo();
            $Info->sliderInfo();

            ?>
        </div>
    </article>
    <article class="history">
        <div class="container">
            <div class="history__top">
                <div class="history__content">
                    <p class="history__text">Общеобразовательная организация «Троицкая школа»-юридическое лицо,
                        являющееся
                        частью системы образования Кыргызской Республики, обеспечивающее удовлетворение потребностей
                        личности в получении качественного начального общего, основного общего и среднего общего в
                        интеллектуальном, физическом и нравственном развитии
                        Проект школы был запущен в сентябре 2013 года, официальное открытие состоялось 1 сентября
                        2015 года.
                        Учредителем школы является «Бишкекская и Кыргызстанская Епархия Среднеазиатского
                        митрополичьего
                        округа русской Православной Церкви» Директором школы является настоятель Храма Пресвятой
                        Троицы г.Каракол протоиерей Чувичкин Сергей Васильевич.
                        В школе обучаются дети с 1 по 9 класс. Форма обучения учащихся- очная, обучение и воспитание ведутся
                        на русском языке.
                        Миссией школы является усвоение образовательного минимума содержания образовательных программ их
                        адаптация к жизни в обществе. Основой воспитательного процесса школа ставит духовно-нравственные
                        традиции </p>
                </div>
                <img src="./style/indexPg/img/history-img.jpg" alt="" class="history__img">
            </div>
        </div>
    </article>
    <article class="teachers">
        <div class="container">
            <div class="teachers__slider">

                <?
                $Info->teachersSliderInfo();
                ?>



                </div>
                <div class="teachers__card">
                    <img src="../imgUser/12345.jpg" alt="">
                    <div class="teachers__content">
                        <div class="teachers__subtitle">Имя учителя</div>
                        <div class="teachers__text">Предмет</div>
                    </div>
                </div>
                <div class="teachers__card">
                    <img src="./img/teacher__img.jpg" alt="">
                    <div class="teachers__content">
                        <div class="teachers__subtitle">Имя учителя</div>
                        <div class="teachers__text">Предмет</div>
                    </div>
                </div>
                <div class="teachers__card">
                    <img src="./img/teacher__img.jpg" alt="">
                    <div class="teachers__content">
                        <div class="teachers__subtitle">Имя учителя</div>
                        <div class="teachers__text">Предмет</div>
                    </div>
                </div>
                <div class="teachers__card">
                    <img src="./img/teacher__img.jpg" alt="">
                    <div class="teachers__content">
                        <div class="teachers__subtitle">Имя учителя</div>
                        <div class="teachers__text">Предмет</div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </article>
</main>