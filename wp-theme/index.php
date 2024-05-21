<?php get_header(); ?>

<main>
      <section class="content-block">
        <div class="content-block__wrap info-section">
          <div class="info-section__block">
            <h1 class="content-block__title content-block__title--main">
              Криптовалютный рынок
            </h1>
            <p class="content-block__text info-section__text">
              Торгуйте криптовалютами на мировом финансовом рынке на
              конкурентоспособных условиях.
            </p>
            <button class="button hover-effect">Открыть счет</button>
          </div>
          <img
            class="info-section__img"
            src="assets/images/bitcoin.png"
            alt="bitcoin"
          />
        </div>
      </section>

      <section class="content-block">
        <div class="content-block__wrap advantages-head">
          <!--<h2 class="content-block__title advantages-head__title">
            Преимущества торговли с «United Brokers»
          </h2>-->
          <div class="advantages">
            <h2 class="content-block__title advantages-head__title">
              Преимущества торговли с «United Brokers»
            </h2>
            <ul class="advantages__list advantages-section">
              <li class="advantages__item advantages__item--main">
                <div class="advantages-section__block">
                  <i class="advantages__icon advantages__icon--v5"></i>
                  <h4 class="advantages__title">Типы счетов</h4>
                  <p class="advantages__text">
                    Возможность торговать Mini, Standard, Classic и ProInvest
                    счетами с одного устройства
                  </p>
                </div>
                <img
                  class="advantages__img"
                  src="assets/images/Surface-Studio-Mockup-1 1.png"
                  alt="surface"
                />
              </li>
              <li class="advantages__item">
                <i class="advantages__icon advantages__icon--v1"> </i>
                <h4 class="advantages__title">
                  Сверхбыстрое исполнение и высокая ликвидность
                </h4>
                <p class="advantages__text">
                  Низкие комиссии, мгновенное исполнение сделок и максимальная
                  ликвидность
                </p>
              </li>
              <li class="advantages__item">
                <i class="advantages__icon advantages__icon--v2"></i>
                <h4 class="advantages__title">
                  Высокоскоростная инфраструктура
                </h4>
                <p class="advantages__text">
                  Наша ультрасовременная 100G сеть охватывает Европу, Америку,
                  Азию и Россию, позволяя максимально увеличить скорость
                  исполнения заявок
                </p>
              </li>
              <li class="advantages__item">
                <i class="advantages__icon advantages__icon--v3"> </i>
                <h4 class="advantages__title">Поддержка 24/7</h4>
                <p class="advantages__text">
                  Индивидуальный подход к каждому клиенту
                </p>
              </li>
              <li class="advantages__item">
                <i class="advantages__icon advantages__icon--v4"> </i>
                <h4 class="advantages__title">
                  Профессиональная аналитическая поддержка
                </h4>
                <p class="advantages__text">
                  Качественная аналитика: охватываем все финансовые рынки и
                  инструменты
                </p>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class="content-block">
        <div class="content-block__wrap platform-section">
          <div class="platform-section__block">
            <h2 class="content-block__title">Выберите свою платформу</h2>
            <p class="content-block__text platform-section__text">
              Переходите на новый уровень трейдинга с профессионально оснащенной
              платформой «United Brokers». Доступны версии для ПК, веб и
              смартфонов.
            </p>
            <button class="button hover-effect">Подробнее</button>
          </div>
          <img
            class="platform-section__img"
            src="assets/images/Group 2415.png"
            alt="Group2415"
          />
        </div>
      </section>

      <section class="content-block">
        <div class="content-block__wrap">
          <h2 class="content-block__title content-block__title--big">
            Вопросы и ответы
          </h2>

          <ul class="quest-card">
            <li class="quest-card__item">
              <div class="quest-card__head">
                <h3 class="content-block__title quest-card__title">
                  Что такое криптовалюты?
                </h3>
                <button id="trigger1" class="quest-card__btn hover-effect">
                  Открыть
                </button>
              </div>
              <p id="window1" class="quest-card__text">
                <b>Криптовалюты</b> – относительно недавно возникшее явление в
                финансовом мире, стремительно набирающее популярность. Это
                цифровые деньги, в основе которых лежит децентрализованная
                открытая база – блокчейн, функционирующая на основе
                криптографических методов. Криптовалюты не имеют физического
                облика, они существуют лишь в электронном виде.
              </p>
            </li>

            <li class="quest-card__item quest-card__item--close">
              <div class="quest-card__head">
                <h3 class="content-block__title quest-card__title">
                  Основные преимущества криптовалют
                </h3>
                <button
                  id="trigger2"
                  class="quest-card__btn quest-card__btn--plus hover-effect"
                >
                  Открыть
                </button>
              </div>

              <p id="window2" class="quest-card__text">
                <b>Криптовалюты</b> – относительно недавно возникшее явление в
                финансовом мире, стремительно набирающее популярность. Это
                цифровые деньги, в основе которых лежит децентрализованная
                открытая база – блокчейн, функционирующая на основе
                криптографических методов. Криптовалюты не имеют физического
                облика, они существуют лишь в электронном виде.
              </p>
            </li>
          </ul>
          <button class="button hover-effect quest-card__footer">
            Начать торговать
          </button>
        </div>
      </section>
    </main>

<?php get_footer( ); ?>
