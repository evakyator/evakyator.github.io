
<h1>БИОГУМУС БИОДИН</h1>
<p></p>
<style>
    span{
        align: left;
        display: inline-block;
        transform: translate(-10em, 0em);
    }
@keyframes tonext {
  75% {
    left: 0;
  }
  95% {
    left: 100%;
  }
  98% {
    left: 100%;
  }
  99% {
    left: 0;
  }
}

@keyframes tostart {
  75% {
    left: 0;
  }
  95% {
    left: -300%;
  }
  98% {
    left: -300%;
  }
  99% {
    left: 0;
  }
}

@keyframes snap {
  96% {
    scroll-snap-align: center;
  }
  97% {
    scroll-snap-align: none;
  }
  99% {
    scroll-snap-align: none;
  }
  100% {
    scroll-snap-align: center;
  }
}

body {
  max-width: 37.5rem;
  margin: 0 auto;
  padding: 0 1.25rem;
  font-family: 'Lato', sans-serif;
}

* {
  box-sizing: border-box;
  scrollbar-color: transparent transparent; /* thumb and track color */
  scrollbar-width: 0px;
}

*::-webkit-scrollbar {
  width: 0;
}

*::-webkit-scrollbar-track {
  background: transparent;
}

*::-webkit-scrollbar-thumb {
  background: transparent;
  border: none;
}

* {
  -ms-overflow-style: none;
}

ol, li {
  list-style: none;
  margin: 0;
  padding: 0;
}

.carousel {
  position: relative;
  padding-top: 75%;
  filter: drop-shadow(0 0 10px #0003);
  perspective: 100px;
}

.carousel__viewport {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  display: flex;
  overflow-x: scroll;
  counter-reset: item;
  scroll-behavior: smooth;
  scroll-snap-type: x mandatory;
}

.carousel__slide {
  position: relative;
  flex: 0 0 100%;
  width: 100%;
  background-color: ;
  counter-increment: item;
}

.carousel__slide:nth-child(even) {
  background-color: ;
}

.carousel__slide:before {
  content: counter(item);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate3d(-50%,-40%,70px);
  color: #fff;
  font-size: 2em;
}

.carousel__snapper {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  scroll-snap-align: center;
}

@media (hover: hover) {
  .carousel__snapper {
    animation-name: tonext, snap;
    animation-timing-function: ease;
    animation-duration: 4s;
    animation-iteration-count: infinite;
  }

  .carousel__slide:last-child .carousel__snapper {
    animation-name: tostart, snap;
  }
}

@media (prefers-reduced-motion: reduce) {
  .carousel__snapper {
    animation-name: none;
  }
}

.carousel:hover .carousel__snapper,
.carousel:focus-within .carousel__snapper {
  animation-name: none;
}

.carousel__navigation {
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  text-align: center;
}

.carousel__navigation-list,
.carousel__navigation-item {
  display: inline-block;
}

.carousel__navigation-button {
  display: inline-block;
  width: 1.5rem;
  height: 1.5rem;
  background-color: #333;
  background-clip: content-box;
  border: 0.25rem solid transparent;
  border-radius: 50%;
  font-size: 0;
  transition: transform 0.1s;
}

.carousel::before,
.carousel::after,
.carousel__prev,
.carousel__next {
  position: absolute;
  top: 0;
  margin-top: 37.5%;
  width: 4rem;
  height: 4rem;
  transform: translateY(-50%);
  border-radius: 50%;
  font-size: 0;
  outline: 0;
}

.carousel::before,
.carousel__prev {
  left: -1rem;
}

.carousel::after,
.carousel__next {
  right: -1rem;
}

.carousel::before,
.carousel::after {
  content: '';
  z-index: 1;
  background-color: #333;
  background-size: 1.5rem 1.5rem;
  background-repeat: no-repeat;
  background-position: center center;
  color: #fff;
  font-size: 2.5rem;
  line-height: 4rem;
  text-align: center;
  pointer-events: none;
}

.carousel::before {
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='0,50 80,100 80,0' fill='%23fff'/%3E%3C/svg%3E");
}

.carousel::after {
  background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='100,50 20,100 20,0' fill='%23fff'/%3E%3C/svg%3E");
}
</style>


<section class="carousel" aria-label="Gallery">
  <ol class="carousel__viewport">
    <li id="carousel__slide1"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper">
      <p><img src="biogum.png"></p>
        <a href="#carousel__slide4"
           class="carousel__prev">Go to last slide</a>
        <a href="#carousel__slide2"
           class="carousel__next">Go to next slide</a>
      </div>
    </li>
    <li id="carousel__slide2"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper">
      <p><img src="chervi.png"></p>
      </div>
      <a href="#carousel__slide1"
         class="carousel__prev">Go to previous slide</a>
      <a href="#carousel__slide3"
         class="carousel__next">Go to next slide</a>
    </li>
    <li id="carousel__slide3"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper">
      <p><img src="chervi2.png"></p>
      </div>
      <a href="#carousel__slide2"
         class="carousel__prev">Go to previous slide</a>
      <a href="#carousel__slide4"
         class="carousel__next">Go to next slide</a>
    </li>
    <li id="carousel__slide4"
        tabindex="0"
        class="carousel__slide">
      <div class="carousel__snapper">
      <p><img src="trava.png"></p>
      </div>
      <a href="#carousel__slide3"
         class="carousel__prev">Go to previous slide</a>
      <a href="#carousel__slide1"
         class="carousel__next">Go to first slide</a>
    </li>
  </ol>
  <aside class="carousel__navigation">
    <ol class="carousel__navigation-list">
      <li class="carousel__navigation-item">
        <a href="#carousel__slide1"
           class="carousel__navigation-button">Go to slide 1</a>
      </li>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide2"
           class="carousel__navigation-button">Go to slide 2</a>
      </li>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide3"
           class="carousel__navigation-button">Go to slide 3</a>
      </li>
      <li class="carousel__navigation-item">
        <a href="#carousel__slide4"
           class="carousel__navigation-button">Go to slide 4</a>
      </li>
    </ol>
  </aside>
</section>
<span>
    <h2>
<p><a href="#foo">КАК СОБИРАЕМ ЗАКАЗ </a></p>
<p><a href="#foobar">О ЧЕРВЯХ</a></p>
<p><a href="#foo2">БИОДИН ЧТО ЭТО</a></p>
<p><a href="#foo3">РАССАДА ОБАЛДЕЕТ </a></p>
<p><a href="#foo4">ЦЕНЫ </a></p>
</h2>
<div id="foo">
<h1>КАК СОБИРАЕМ ЗАКАЗ</h1>
<p><img src="chervi2.png"></p>
<div id="foo">
    <h2>Как мы собираем очередной заказ? 
    Просто считаем взрослых особей вручную. 
    3500 штук взрослых особей это 1 семья. 
    Далее берем плотно заселенный субстрат с 
    огромным количеством коконов, молодняка.
    Там обитают и взрослые черви. 
    Их в большом количестве кладем в подарок. 
    Итого покупатель получает гарантированно 
    3500 штук + 30 000 щт молодняка и коконов. 
    Выгодно клиенту? Конечно! Поэтому мы более 20 
    лет занимаемся разведением и продажей калифорнийцев!</h2></div>
    <div id="foobar">
    <h1>О ЧЕРВЯХ</h1>
<h2>Производим БИОГУМУС из 
    конского навоза и разводим КАЛИФОРНИЙСКИХ червей. 
    Калифорнийские черви являются непревзойдёнными по 
    продуктивности - их плодовитость достигает двух тысяч 
    особей в год от каждой особи маточного поголовья. 
 Это означает, что если мы возьмём сейчас 6000 особей для 
 разведения и будем их содержать при определённых условиях, 
 то через год у нас будет уже 12000000 особей, которые смогут 
 ежедневно выдавать "на гора" более 7 ТОНН БИОГУМУСА ! Такие 
 прекрасные результаты вполне достижимы и ограничиваются 
 только количеством органики, доставляемой червям, и 
 соблюдением условий содержания</h2></div>
 <h1>БИОДИН ЧТО ЭТО</h1>
 <div id="foo2">
 <p><img src="trava.png"></p>
<h2>БИОГУМУС фермерского хозяйства БИОДИН - это 
    природный продукт активной и глубокой гумификации 
    подстилочного КОНСКОГО навозного субстрата высокоплотными 
    популяциями агро-полезных микробов и КРАСНЫХ КАЛИФОРНИЙСКИХ
     ЧЕРВЕЙ . 
- повышает урожайность, улучшает вкусовые и товарные качества 
выращиваемой продукции; 
- укрепляет природный иммунитет и стимулирует обменные ростовые
 процессы в растениях; 
- сокращает сроки произрастания семян и саженцев, 
сроки созревания плодов и ягод; 
- увеличивает содержание витаминов в растениях; 
- усиливает интенсивность окраски газонной травы, листьев деревьев и цветов; 
- обеспечивает максимальную приживаемость деревьев и кустарников при пересадке. 
Высокое качество по ценам агропроизводителя. 
НАШ БИОГУМУС ПРИОБРЕТАЮТ ТОРФОПЕРЕРАБАТЫВАЮЩИЕ ПРЕДПРИЯТИЯ , 
ЧТОБЫ ОБЛАГОРОДИТЬ ТОРФОСМЕСИ! 
Фасовка - в мешках по 30л = 20к</h2></div>

<div id="foo3">
    <h1>РАССАДА ОБАЛДЕЕТ</h2>
<p><img src="biogum.png"></p>
<h2>Всё для Ваших любимых Цветов, для Сада, 
    для рассады и для дома!😊 
За такое натуральное и высококачественное удобрение у 
нас одна из самых низких цен по региону!😊
Добавляйте Биогумус при пикировании и пересадке - Ваша 
рассада просто ОБАЛДЕЕТ!😊 И на следующих стадиях роста 
Вы получите ВЕЛИКОЛЕПНЫЕ саженцы и растения!😊</h2></div>
<div id="foo4">
    <h1>ЦЕНЫ</h2>
<p><img src="chervi.png"></p>
<h2>Фермерское Хозяйство реализует калифорнийских червей 
    породистых. Вермиферма включает в себя 3500 штук 
    взрослых особей, отсчитанных вручную плюс коконы и 
    молодняк.
Самовывоз из Калужской области. Возможна доставка в г. 
Обнинск, Калугу, Москву.
Доставка транспортной компанией в любую точку России. 
Возможна доставка транспортной СДЭК Услуги курьера по 
доставке до транспортной компании 300 руб. Доставку 
СДЭК покупатель оплачивает самостоятельно. За границу 
возможна отправка коконов.</h2>
<h1>Мы разводим червей с 1993 года.</h1>
<h2>
РАЗВЕДЕНИЕ ЧЕРВЕЙ НА ПРИУСАДЕБНОМ УЧАСТКЕ.
Найдите место в тени деревьев, под навесом, в 
сарае, в подвале и т.д. В ящике, в старой ванне, 
 на земле положите слой компоста толщиной 40-50 см 
 в виде насыпной грядки. Хорошо увлажните. Влажность 
 достаточна, если из комка компоста, сжатого в кулак, 
 можно выжать 1-2 капли влаги. Размер червятника не 
 должен быть большим, достаточно 2 кв. метра. Увлажненный 
 субстрат закройте мешковиной или соломой и дайте выстояться 
 5-7 суток, для удаления остатков амм</h2></div>

</span>