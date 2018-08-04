<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Курсы английского">
    <meta name="keywords" content="Курсы английского, английский язык">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Курсы английского</title>
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="icon" type="image/ico" sizes="16x16" href="img/favicon.ico">
</head>
<body>
<div class="page-wrapper">
    <header class="header">
        <div class="header__inner">
            <div class="header__content">
                <div class="nav__bar">
                    <button class="nav__trigger">
                        <span class="nav__trigger-line"></span>
                    </button>
                    <nav class="nav">
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a href="#timetable" class="nav__link">Расписание</a>
                            </li>
                            <li class="nav__item">
                                <a href="#prices" class="nav__link">Цены</a>
                            </li>
                            <li class="nav__item">
                                <a href="#reviews" class="nav__link">Отзывы</a>
                            </li>
                            <li class="nav__item">
                                <a href="#contacts" class="nav__link">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="logo">
                    <a href="#" class="logo__link">
                        <img src="img/logo.svg" alt="english-j">
                    </a>
                </div>
                {{--<div class="language">--}}
                {{--<a href="#" class="language__toggle">Русский</a>--}}
                {{--<ul class="language__list">--}}
                {{--<li class="language__item">--}}
                {{--<a href="#" class="language__link">English</a>--}}
                {{--</li>--}}
                {{--</ul>--}}
                {{--</div>--}}
            </div>
        </div>
    </header>
    <div class="banner">
        <div class="banner__inner">
            <div class="banner__content">
                <h1 class="banner__title" data-aos="zoom-in">Учи английский с Юлей!</h1>
                <p class="banner__text" data-aos="slide-up" data-aos-delay="200">Наши преимущества:
                    </br>Доступные цены.
                    </br>Удобное расписание.
                    </br>Работа профессионалов.
                    </br>Индивидуальный поход.
                </p>
                <a href="#" class="btn btn-border--gray btn--lg popup__toggle banner__link" data-aos="zoom-in"
                   data-aos-delay="500">Хочу учить язык</a>
            </div>
        </div>
    </div>
    <div class="directions">
        <div class="directions__inner">
            <div class="directions__row">
                <div class="directions__col" data-aos="fade">
                    <div class="directions__container">
                        <div class="directions__icon-block">
                            <span class="directions__icon individual__icon"></span>
                        </div>
                        <strong class="directions__title">Индивидуальные занятия</strong>
                        <a href="#" class="directions__link">Читать подробнее</a>
                        <div class="directions-desc">
                            <div class="directions-desc__container">
                                <div class="directions-desc__head">
                                    <div class="directions-desc__icon-block">
                                        <span class="directions__icon individual__icon"></span>
                                    </div>
                                    <strong class="directions-desc__title">Индивидуальные занятия</strong>
                                </div>
                                <div class="directions-desc__body">
                                    <p class="directions-desc__text">Идеальный вариант, если:
                                        </br>1. Вы не любите большие компании.
                                        </br>2. Вас интересует гибкий график занятий.
                                        </br>3. Вам необходимы специфические знания (специальный английский).
                                        </br>4. Вам или Вашему ребёнку нужна подготовка к экзаменам/ЗНО.
                                    </p>
                                </div>
                                <button type="button" class="directions-desc__close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="directions__col" data-aos="fade">
                    <div class="directions__container">
                        <div class="directions__icon-block">
                            <span class="directions__icon general__icon"></span>
                        </div>
                        <strong class="directions__title">Общий английский в группах</strong>
                        <a href="#" class="directions__link">Читать подробнее</a>
                        <div class="directions-desc">
                            <div class="directions-desc__container">
                                <div class="directions-desc__head">
                                    <div class="directions-desc__icon-block">
                                        <span class="directions__icon general__icon"></span>
                                    </div>
                                    <strong class="directions-desc__title">Общий английский в группах</strong>
                                </div>
                                <div class="directions-desc__body">
                                    <p class="directions-desc__text">Преимущества:
                                        </br>1. Бюджетно.
                                        </br>2. Разговорная практика.
                                        </br>3. Интерактивные игры и упражнения.
                                        </br>Набираем взрослые и детские группы.
                                    </p>
                                </div>
                                <button type="button" class="directions-desc__close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="directions__col" data-aos="fade">
                    <div class="directions__container">
                        <div class="directions__icon-block">
                            <span class="directions__icon conversational__icon"></span>
                        </div>
                        <strong class="directions__title">Разговорный английский в группах</strong>
                        <a href="#" class="directions__link">Читать подробнее</a>
                        <div class="directions-desc">
                            <div class="directions-desc__container">
                                <div class="directions-desc__head">
                                    <div class="directions-desc__icon-block">
                                        <span class="directions__icon conversational__icon"></span>
                                    </div>
                                    <strong class="directions-desc__title">Разговорный английский в группах</strong>
                                </div>
                                <div class="directions-desc__body">
                                    <p class="directions-desc__text">Небольшие группы (4-6 человек). Минимум грамматики,
                                        максимум разговорной практики. Подойдет для людей, которые уже знают грамматику,
                                        но имеют «языковой барьер».</p>
                                </div>
                                <button type="button" class="directions-desc__close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="directions__col" data-aos="fade">
                    <div class="directions__container">
                        <div class="directions__icon-block">
                            <span class="directions__icon corporate__icon"></span>
                        </div>
                        <strong class="directions__title">Корпоративные занятия</strong>
                        <a href="#" class="directions__link">Читать подробнее</a>
                        <div class="directions-desc">
                            <div class="directions-desc__container">
                                <div class="directions-desc__head">
                                    <div class="directions-desc__icon-block">
                                        <span class="directions__icon corporate__icon"></span>
                                    </div>
                                    <strong class="directions-desc__title">Корпоративные занятия</strong>
                                </div>
                                <div class="directions-desc__body">
                                    <p class="directions-desc__text">Для офисных работников. Занятия как выездные, так и
                                        в стенах школы.</p>
                                </div>
                                <button type="button" class="directions-desc__close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="directions__col" data-aos="fade">
                    <div class="directions__container">
                        <div class="directions__icon-block">
                            <span class="directions__icon special__icon"></span>
                        </div>
                        <strong class="directions__title">Специальный английский</strong>
                        <a href="#" class="directions__link">Читать подробнее</a>
                        <div class="directions-desc">
                            <div class="directions-desc__container">
                                <div class="directions-desc__head">
                                    <div class="directions-desc__icon-block">
                                        <span class="directions__icon special__icon"></span>
                                    </div>
                                    <strong class="directions-desc__title">Специальный английский</strong>
                                </div>
                                <div class="directions-desc__body">
                                    <p class="directions-desc__text">Индивидуальные занятий с упором на лексику
                                        определенной тематики.
                                        </br>Например, юридический, медицинский, бизнес, IT - сфера.
                                    </p>
                                </div>
                                <button type="button" class="directions-desc__close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="directions__col" data-aos="fade">
                    <div class="directions__container">
                        <div class="directions__icon-block">
                            <span class="directions__icon skype__icon"></span>
                        </div>
                        <strong class="directions__title">Английский по Skype</strong>
                        <a href="#" class="directions__link">Читать подробнее</a>
                        <div class="directions-desc">
                            <div class="directions-desc__container">
                                <div class="directions-desc__head">
                                    <div class="directions-desc__icon-block">
                                        <span class="directions__icon skype__icon"></span>
                                    </div>
                                    <strong class="directions-desc__title">Английский по Skype</strong>
                                </div>
                                <div class="directions-desc__body">
                                    <p class="directions-desc__text">Идеально для занятых людей, которые живут в другом
                                        городе или находятся в постоянных переездах.</p>
                                </div>
                                <button type="button" class="directions-desc__close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="timetable" class="timetable">
        <div class="timetable__inner">
            <div class="timetable__row">
                <div class="timetable__left" data-aos="slide-right">
                    <h2 class="timetable__title">Выбери для себя удобное время</h2>
                    <p class="timetable__text">Не нашёл? Звони или пиши нам.</p>
                </div>
                <div class="timetable__right" data-aos="slide-left">
                    <div class="timetable__table">
                        <h3 class="timetable__table-title">Будние дни</h3>
                        <span class="timetable__table-caption">Пн - Пт</span>
                        <p class="timetable__table-text">График работы: 9:00 - 21:00</p>
                        <ul class="timetable__table-list">
                            @foreach($schedules as $schedule)
                                <li>{{$schedule->getGroupName()}} - {{$schedule->getSchedule()}}</li>
                            @endforeach
                        </ul>
                        <a href="#" class="btn btn-border--green  btn--sm popup__toggle timetable__table-link">Связаться
                            со мной</a>
                    </div>
                    <div class="timetable__table">
                        <h3 class="timetable__table-title">Выходные</h3>
                        <span class="timetable__table-caption">Сб - Вс</span>
                        <p class="timetable__table-text">График работы: 10:00 - 16:00</p>
                        <ul class="timetable__table-list">
                            @foreach($schedules as $schedule)
                                <li>{{$schedule->getGroupName()}} - {{$schedule->getSchedule()}}</li>
                            @endforeach
                        </ul>
                        <a href="#" class="btn btn-border--green btn--sm popup__toggle timetable__table-link">Связаться
                            со мной</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="prices" class="prices">
        <div class="prices__inner">
            <div class="prices__row">
                <div class="prices__content" data-aos="slide-left">
                    <h2 class="prices__title">Стоимость</h2>
                    <p class="prices__text">Групповые занятия (8 занятий по 1,5 часа) - 950 грн.
                        </br>При оплате за весь курс (40 занятий) - скидка 15%.
                        </br>Группа выходного дня (4 занятия по 2 часа) - 850 грн.
                        </br>Индивидуальные занятия - 170 грн в час.
                        </br>Детям (<18 лет) предоставляется скидка на все виды занятий в размере 20%.
                        </br>Стоимость корпоративных занятий и специального английского – подсчитывается индивидуально.
                    </p>
                    <a href="#" class="btn btn--green btn--lg popup__toggle prices__link">Связаться со мной
                        <span class="prices__link-icon"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="progress">
        <div class="progress__inner">
            <div class="progress__row">
                <div class="progress__col" data-aos="zoom-in">
                    <div class="progress__container">
                        <div class="progress__icon-block">
                            <span class="progress__icon students__icon"></span>
                        </div>
                        <div class="progress__content">
                            <strong class="progress__title">30</strong>
                            <span class="progress__subtitle">Учеников</span>
                        </div>
                    </div>
                </div>
                <div class="progress__col" data-aos="zoom-in">
                    <div class="progress__container">
                        <div class="progress__icon-block">
                            <span class="progress__icon clock__icon"></span>
                        </div>
                        <div class="progress__content">
                            <strong class="progress__title">3500</strong>
                            <span class="progress__subtitle">Часов занятий <br>английского</span>
                        </div>
                    </div>
                </div>
                <div class="progress__col" data-aos="zoom-in">
                    <div class="progress__container">
                        <div class="progress__icon-block">
                            <span class="progress__icon books__icon"></span>
                        </div>
                        <div class="progress__content">
                            <strong class="progress__title">40</strong>
                            <span class="progress__subtitle">Пройденных <br>книг</span>
                        </div>
                    </div>
                </div>
                <div class="progress__col" data-aos="zoom-in">
                    <div class="progress__container">
                        <div class="progress__icon-block">
                            <span class="progress__icon smiles__icon"></span>
                        </div>
                        <div class="progress__content">
                            <strong class="progress__title progress__title--small">миллион</strong>
                            <span class="progress__subtitle">Улыбок любимых <br>учеников</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="reviews" class="reviews" data-aos="slide-in">
        <div class="reviews__inner">
            <span class="reviews__icon"></span>
            <h2 class="reviews__title">Отзывы учеников</h2>
            <div class="reviews__slider">
                <div class="reviews__slider-item">
                    <div class="reviews__slider-photo">
                        <img src="/img/avatar_angelina.jpg"
                             alt="user photo">
                    </div>
                    <strong class="reviews__slider-name">Ангелина</strong>
                    <span class="reviews__slider-caption">Студентка</span>
                    <span class="reviews__slider-hr"></span>
                    <p class="reviews__slider-text">Крутые курсы английского. Сложные и запутанные правила подаются
                        очень просто и доступно.</p>
                </div>
                <div class="reviews__slider-item">
                    <div class="reviews__slider-photo">
                        <img src="/img/avatar_polina.jpg" alt="user photo">
                    </div>
                    <strong class="reviews__slider-name">Полина</strong>
                    <span class="reviews__slider-caption">Школьница</span>
                    <span class="reviews__slider-hr"></span>
                    <p class="reviews__slider-text">Юлия - очень хороший учитель , хорошо объясняет все четко и понятно.
                        У меня очень сильно повысился уровень знаний по английскому языку. Мне очень нравится, что я на
                        уроках работаю, а не смотрю в потолок ) Спасибо Юле большое за обучение.</p>
                </div>
                <div class="reviews__slider-item">
                    <div class="reviews__slider-photo">
                        <img src="/img/avatar_lilia.jpg"
                             alt="user photo">
                    </div>
                    <strong class="reviews__slider-name">Лилия</strong>
                    <span class="reviews__slider-caption">Работник банковской сферы</span>
                    <span class="reviews__slider-hr"></span>
                    <p class="reviews__slider-text">Спасибо Юле большое за увлекательное изучение английского языка!
                        Спасибо Юле большое за увлекательное изучение английского языка! Юлия – это преподаватель, который сможет найти подход к любому студенту. Очень увлекательные и интересные проводились speaking club каждую субботу. Я однозначно рекомендую выбрать Юлию.
                    </p>
                </div>
                <div class="reviews__slider-item">
                    <div class="reviews__slider-photo">
                        <img src="/img/avatar_yulia.jpg"
                             alt="user photo">
                    </div>
                    <strong class="reviews__slider-name">Юлия</strong>
                    <span class="reviews__slider-caption">Студентка</span>
                    <span class="reviews__slider-hr"></span>
                    <p class="reviews__slider-text">Занималась у Юли сначала индивидуально, затем в группе. В группе было комфортно обучаться, не чувствовала себя обделенной, каждому участнику уделялось достаточное количество времени, не было большого разрыва в знаниях английского в группе.
                        Неформальная обстановка на занятиях, присутствовало лёгкое общение. Юля - преподаватель с хорошим уровнем английского.
                        Не жалею, что потратила время и деньги на эти курсы.
                    </p>
                </div>
                <div class="reviews__slider-item">
                    <div class="reviews__slider-photo">
                        <img src="/img/avatar-alex.jpg"
                             alt="user photo">
                    </div>
                    <strong class="reviews__slider-name">Алексей</strong>
                    <span class="reviews__slider-caption">Разработчик игр</span>
                    <span class="reviews__slider-hr"></span>
                    <p class="reviews__slider-text">Брал индивидуальные занятия английским, и в очень короткий срок Юлия смогла поднять мой уровень владения английским, чтобы я смог самостоятельно общаться с заказчиками и в несколько раз увеличить свою заработную плату. Все занятия проходили очень оживленно и интересно. Даже самые сложные правила Юлия смогла рассказать на паре простых и легко запоминающихся примеров.
                    </p>
                </div>
                <div class="reviews__slider-item">
                    <div class="reviews__slider-photo">
                        <img src="/img/avatar-anton.jpg"
                             alt="user photo">
                    </div>
                    <strong class="reviews__slider-name">Антон</strong>
                    <span class="reviews__slider-caption">Работник сферы образования, декан</span>
                    <span class="reviews__slider-hr"></span>
                    <p class="reviews__slider-text">Спасибо Юле, ее уроки были очень познавательными, язык дается с легкостью, когда на уроках царит приятная дружеская атмосфера, преподаватель не давит на тебя и умеет заинтересовать, всё это о ней.
                    </p>
                </div>
                <div class="reviews__slider-item">
                    <div class="reviews__slider-photo">
                        <img src="/img/avatar-anna.jpg"
                             alt="user photo">
                    </div>
                    <strong class="reviews__slider-name">Анна</strong>
                    <span class="reviews__slider-caption">Студентка</span>
                    <span class="reviews__slider-hr"></span>
                    <p class="reviews__slider-text">Очень квалифицированный преподаватель! За короткое время нужно было выучить много информации и мы с Юлей справились. Подача материала лёгкая и доступная. Советую всем обращаться к ней.
                    </p>
                </div>
                <div class="reviews__slider-item">
                    <div class="reviews__slider-photo">
                        <img src="/img/avatar-anna2.jpg"
                             alt="user photo">
                    </div>
                    <strong class="reviews__slider-name">Анна</strong>
                    <span class="reviews__slider-caption">Работник сферы ресторанного бизнеса</span>
                    <span class="reviews__slider-hr"></span>
                    <p class="reviews__slider-text">Я очень довольна нашими занятиями английского с Юлей. Все профессионально, она понимающий и очень приятный преподаватель, знает свое дело. Доходчиво объясняет. Результаты видно уже через пару недель. Я после двух-трех занятий вспомнила все, что учила лет пять назад. Спасибо Юле большое!
                    </p>
                </div>
                <div class="reviews__slider-item">
                    <div class="reviews__slider-photo">
                        <img src="/img/avatar-dima.jpg"
                             alt="user photo">
                    </div>
                    <strong class="reviews__slider-name">Дмитрий</strong>
                    <span class="reviews__slider-caption">Студент, работник сферы розничной торговли</span>
                    <span class="reviews__slider-hr"></span>
                    <p class="reviews__slider-text">Отличные курсы английского, во-первых не дорогие, во-вторых постоянно разговариваем , да и преподаватель классный и видно, что со знанием дела ведёт уроки. Все занятия проходят с юмором и позитивом!
                    </p>
                </div>
                <div class="reviews__slider-item">
                    <div class="reviews__slider-photo">
                        <img src="/img/avatar-kristina.jpg"
                             alt="user photo">
                    </div>
                    <strong class="reviews__slider-name">Кристина</strong>
                    <span class="reviews__slider-caption">Школьница</span>
                    <span class="reviews__slider-hr"></span>
                    <p class="reviews__slider-text">Занятия с Юлей проходят неплохо. Мне нравится то, что учительница молодая,и она не придирается к тебе, не учит по старой программе, а по современной. Рядом с ней чувствуешь себя комфортно. Рассказывает, то что пережила сама, поскольку сама сдавала ЗНО и не дает тебе совершить ее ошибки.
                    </p>
                </div>
                <div class="reviews__slider-item">
                    <div class="reviews__slider-photo">
                        <img src=""
                             alt="user photo">
                    </div>
                    <strong class="reviews__slider-name">Татьяна</strong>
                    <span class="reviews__slider-caption">Преподаватель</span>
                    <span class="reviews__slider-hr"></span>
                    <p class="reviews__slider-text">Нужен был репетитор английского языка для сына - пятиклассника. Обратились к Юлии. Понравилось, что она сразу нашла контакт с ребенком, подобрала формы обучения, удобные для него, уделяя внимание как грамматике, так и лексике языка.
                    </p>
                </div>
                <div class="reviews__slider-item">
                    <div class="reviews__slider-photo">
                        <img src="/img/avatar-lena.jpg"
                             alt="user photo">
                    </div>
                    <strong class="reviews__slider-name">Елена</strong>
                    <span class="reviews__slider-caption">Фронт-енд разработчик</span>
                    <span class="reviews__slider-hr"></span>
                    <p class="reviews__slider-text">Хожу на курсы английского языка к Юле, очень хорошая подача материала, понятно, останавливается на темах, которые тяжело воспринимаются. Заметный результат занятий!
                    </p>
                </div>
                <div class="reviews__slider-item">
                    <div class="reviews__slider-photo">
                        <img src="/img/avatar-lena2.jpg"
                             alt="user photo">
                    </div>
                    <strong class="reviews__slider-name">Елена Морозова</strong>
                    <span class="reviews__slider-caption">Фронт-енд разработчик</span>
                    <span class="reviews__slider-hr"></span>
                    <p class="reviews__slider-text">Юля - отличный преподаватель. Уроки проходят продуктивно, новый материал объясняется доступно, постоянно расширяется словарный запас. Занятия проводятся на английском, постоянно практикуется устное общение на различные, чаще всего бытовые темы в непринужденной, легкой форме. Есть домашние задания, которые помогают систематизировать освоенное на уроке.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="contacts" class="contacts">
        <div class="contacts__inner">
            <div class="contacts__row">
                <div class="contacts__left" data-aos="slide-right">
                    <h2 class="contacts__title">Контакты</h2>
                    <address>
                        <p class="contacts__text">Школа английского в Харькове Speak English with Julia.</p>
                        {{--<span class="contacts__caption">Адрес:</span>--}}
                        {{--<span class="contacts__address">1600 Pennsylvania Ave NW, Washington</span>--}}
                        <span class="contacts__caption">Телефон:</span>
                        <a href="tel:+380501828348" class="contacts__tel">+38 (050) 182 83 48</a>
                        <span class="contacts__caption">E-mail:</span>
                        <a href="mailto:yprudnykova@gmail.com" class="contacts__mail">yprudnykova@gmail.com</a>
                    </address>
                </div>
                <div class="contacts__right" data-aos="slide-left">
                    <form action="#" class="contacts__form">
                        {{csrf_field()}}
                        <fieldset>
                            <div class="contacts__form-row">
                                <div class="contacts__form-col">
                                    <div class="contacts__form-field">
                                        <input type="text" name="name" class="contacts__form-input" placeholder="Имя*">
                                        <span class="contacts__form-icon user-icon"></span>
                                    </div>
                                </div>
                                <div class="contacts__form-col">
                                    <div class="contacts__form-field">
                                        <input type="email" name="email" class="contacts__form-input"
                                               placeholder="E-mail*">
                                        <span class="contacts__form-icon email-icon"></span>
                                    </div>
                                </div>
                                <div class="contacts__form-col">
                                    <div class="contacts__form-field">
                                        <input type="tel" name="phone" class="contacts__form-input"
                                               placeholder="Телефон">
                                        <span class="contacts__form-icon tel-icon"></span>
                                    </div>
                                </div>
                                <div class="contacts__form-col">
                                    <div class="contacts__form-field">
                                        <textarea name="message" class="contacts__form-textarea"
                                                  placeholder="Вопросы и пожелания"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn--green btn--lg contacts__form-btn">Отправить
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer__inner">
            <div class="footer__row">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="#" class="footer__logo-link">
                            <img src="img/logo.svg" alt="english-j">
                        </a>
                    </div>
                    <div class="footer__about__desc">
                        <p class="footer__about__desc-text">Школа английского в Харькове Speak English with Julia.</p>
                    </div>
                </div>
                <div class="footer__nav">
                    <span class="footer__caption">Меню</span>
                    <ul class="footer__nav-list">
                        <li class="footer__nav-item">
                            <a href="#timetable" class="footer__nav-link">Расписание</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="#prices" class="footer__nav-link">Цены</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="#reviews" class="footer__nav-link">Отзывы</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="#contacts" class="footer__nav-link">Контакты</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__contacts">
                    <span class="footer__caption">Контакты</span>
                    <ul class="footer__contacts-list">
                        {{--<li class="footer__contacts-item">--}}
                        {{--<span class="footer__contacts-caption">Адрес:</span>--}}
                        {{--<span class="footer__contacts-address">текст (еще не знаю)</span>--}}
                        {{--</li>--}}
                        <li class="footer__contacts-item">
                            <span class="footer__contacts-caption">Телефон:</span>
                            <a href="tel:+380501828348" class="footer__contacts-tel">+38 (050) 182 83 48</a><br>
                            <span class="footer__contacts-operator">(Vodafone)</span>
                        </li>
                        <li class="footer__contacts-item">
                            <span class="footer__contacts-caption">E-mail:</span>
                            <a href="mailto:yprudnykova@gmail.com"
                               class="footer__contacts-mail">yprudnykova@gmail.com</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__social">
                    <span class="footer__caption"> Социальные сети</span>
                    <ul class="footer__social-list">
                        <li class="footer__social-item">
                            <span class="footer__social-icon fb-icon"></span>
                            <a href="#" class="footer__social-link">Facebook</a>
                        </li>
                        <li class="footer__social-item">
                            <span class="footer__social-icon inst-icon"></span>
                            <a href="#" class="footer__social-link">Instagram</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footer__copyrighted">
                <p class="footer__copyrighted-text">&copy; 2018 English school. All rights reserved. Design by <a
                            href="#">Regetsiy Olya</a>
                </p>
            </div>
        </div>
    </footer>
</div>
<div class="popup">
    <div class="popup__container">
        <span class="popup__title">Запишись на курсы</span>
        <span class="popup__subtitle">Пожалуйста, заполните поля <br>ввода ниже:</span>
        <form action="#" class="contacts__form">
            {{csrf_field()}}
            <fieldset>
                <div class="contacts__form-row">
                    <div class="contacts__form-col">
                        <div class="contacts__form-field">
                            <input type="text" name="name" class="contacts__form-input" placeholder="Имя*">
                            <span class="contacts__form-icon user-icon"></span>
                        </div>
                    </div>
                    <div class="contacts__form-col">
                        <div class="contacts__form-field">
                            <input type="email" name="email" class="contacts__form-input" placeholder="E-mail*">
                            <span class="contacts__form-icon email-icon"></span>
                        </div>
                    </div>
                    <div class="contacts__form-col">
                        <div class="contacts__form-field">
                            <input type="tel" name="phone" class="contacts__form-input" placeholder="Телефон">
                            <span class="contacts__form-icon tel-icon"></span>
                        </div>
                    </div>
                    <div class="contacts__form-col">
                        <div class="contacts__form-field">
                            <textarea name="message" class="contacts__form-textarea"
                                      placeholder="Вопросы и пожелания"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn--green btn--lg contacts__form-btn">Связаться с нами</button>
                </div>
            </fieldset>
        </form>
        <button type="button" class="popup__close">Close</button>
    </div>
</div>
<script src="js/aos.js"></script>  <!-- TODO move to app.js -->
<script src="js/app.js"></script>
</body>
</html>