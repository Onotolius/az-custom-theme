<?php get_header() ?>
    <header class="header">
      <div class="container">
        <div class="header__inner">
          <div class="header__logo">
            <?php echo az_img('logo.svg', 'Logo', 'header__logo-img'); ?>
          </div>
          <nav class="header__nav">
            <ul class="header__nav-list">
              <li class="header__nav-item">
                <a class="header__nav-link" href="#">Home</a>
              </li>
              <li class="header__nav-item">
                <a class="header__nav-link" href="#">About</a>
              </li>
              <li class="header__nav-item">
                <a class="header__nav-link" href="#">Journal</a>
              </li>
              <li class="header__nav-item">
                <a class="header__nav-link" href="#">Shop</a>
              </li>
              <li class="header__nav-item">
                <a class="header__nav-link" href="#">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="header__actions">
            <button class="header__button">Buy template</button>
            <div class="header__actions-icons">
              <a class="header__cart-button" href="#">
                <?php echo az_img('cart.svg', 'Card', 'header__logo-icon'); ?>
              </a>
              <div class="header__cart-count">
                <?php echo az_img('cart_count.svg', 'Count', "header__cart-count--img"); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="page">
      <section class="hero">
        <div class="container">
          <div class="hero__inner">
            <div class="hero__info">
              <h1 class="hero__title">
                Shop hundreds of enamel pins from artists.
              </h1>
              <div class="hero__buttons">
                <button class="hero__button hero__button-primary">
                  Shop everything
                </button>
                <button class="hero__button hero__button-ghost">
                  Browse collections
                </button>
              </div>
            </div>
            <div class="hero__image">
              <?php echo az_img('hero-img.png', 'Hero'); ?>
            </div>
          </div>
        </div>
      </section>
      <section class="features">
        <div class="container">
          <div class="features__inner">
            <h3 class="features__label">Ready, Set, Go</h3>
            <p class="features__subtitle">
              Shop hundreds of enamel pins from artists. The best cool pin
              badges to decorate your backpack, denim jean jacket, lapel, and
              festival hat for sale in our online store.
            </p>
            <ul class="features__list">
              <li class="features__item">
                <img class="features__icon" src="/imgs/feat-1.svg" alt="" />
                <h3 class="features__item-title">Free Artwork</h3>
                <p class="features__item-text">
                  Free digital proofs and best design advice
                </p>
              </li>
              <li class="features__item">
                <img class="features__icon" src="/imgs/feat2.svg" alt="" />
                <h3 class="features__item-title">Lower Minimum</h3>
                <p class="features__item-text">
                  You can always start with 50 pcs here
                </p>
              </li>
              <li class="features__item">
                <img class="features__icon" src="/imgs/feat3.svg" alt="" />
                <h3 class="features__item-title">100% Guarantee</h3>
                <p class="features__item-text">
                  Get excellent pins or have your money back
                </p>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="products">
        <div class="container">
          <div class="products__inner">
            <ul class="products__grid">
              <li class="product__card">
                <?php echo az_img('product_egg.png', 'Egg', 'product__card-img'); ?>
                <div class="product__card-info">
                  <p class="product__price">Hard BOILED Egg and Avocado</p>
                  <p class="product__price">$ 7.99 USD</p>
                </div>
              </li>
              <li class="product__card">
                <?php echo az_img('product__bomb.png', 'Bomb', 'product__card-img'); ?>
                <div class="product__card-info">
                  <p class="product__price">BOMB! Enamel Pin</p>
                  <p class="product__price">$ 7.12 USD</p>
                </div>
              </li>
              <li class="product__card">
                <?php echo az_img('product__pineapple.png', 'Pineapple', 'product__card-img'); ?>
                <div class="product__card-info">
                  <p class="product__price">Pineapple Charm Pendant</p>
                  <p class="product__price">$ 9.99 USD</p>
                </div>
              </li>
            </ul>
            <div class="products__photos">
                <?php echo az_img('product1.png', 'Person'); ?>
                <?php echo az_img('product2.png', 'Person'); ?>
            </div>
          </div>
        </div>
      </section>
      <section class="story">
        <div class="container">
          <div class="story__inner">
            <h2 class="story__title">Get the rest of the story</h2>
            <div class="story__content">
              <div class="story__image">
                <?php echo az_img('sponsors.png', 'sponsor'); ?>
              </div>
              <div class="story__quote">
                <p class="story__quote-text">
                  “Best templates and support out there! They are always happy
                  to help with any issues you may be having or even just showing
                  how to edit things.”
                </p>
                <p class="story__quote-author">Sam (Trustpilot)</p>
              </div>
            </div>
            <ul class="story__brands">
              <li class="story__brand">
                <?php echo az_img('cleo_logo.png', 'CleoLogo', 'story__brand__logo'); ?>
                <p class="story__brand-text">
                  “Great communication and help from him. Thank you.”
                </p>
              </li>
              <li class="story__brand">
                <?php echo az_img('arial_logo.png', 'ArialLogo', 'story__brand__logo'); ?>
                <p class="story__brand-text">
                  "Best templates & support out there!"
                </p>
              </li>
              <li class="story__brand">
                <?php echo az_img('walden__logo.png', 'WaldenLogo', 'story__brand__logo'); ?>
                <p class="story__brand-text">
                  “Fantastic designer and web developer... but above all great
                  people"
                </p>
              </li>
              <li class="story__brand">
                <?php echo az_img('petsplay.png', 'Petsplay', 'story__brand__logo'); ?>
                <p class="story__brand-text">
                  “Great communication with detailed screen shots.”
                </p>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="journal">
        <div class="container">
          <div class="journal__inner">
            <div class="journal__left">
                <?php echo az_img('journal-main.png', 'Journal'); ?>
              <div class="journal__header">
                <p class="journal__title">February 26, 2022</p>
                <h4 class="journal__subtitle">
                  14 Common Misconceptions About Web Design
                </h4>
                <p class="journal__text">
                  Laboriosam et a quis. Ut quae rem consequatur omnis autem
                  incidunt vitae. Recusandae voluptatem
                </p>
                <a class="journal__link" href="#">Read more</a>
              </div>
            </div>
            <div class="journal__right">
              <div class="journal__right-info">
                <h2 class="journal__right-title">Journal</h2>
                <a class="journal__right-subtitle" href="#">Read the latest</a>
              </div>
              <ul class="journal__list">
                <li class="card">
                  <?php echo az_img('journal1.png', 'Man'); ?>
                  <div class="card__info">
                    <p class="card__date">February 26, 2022</p>
                    <p class="card__label">
                      What Will Website Be Like In 100 Years?
                    </p>
                    <p class="card__text">
                      Ut aut natus consectetur est quam assumenda porro ut. Sit
                      blanditiis et.
                    </p>
                  </div>
                </li>
                <li class="card">
                  <?php echo az_img('journal2.png', 'Man'); ?>
                  <div class="card__info">
                    <p class="card__date">February 26, 2022</p>
                    <p class="card__label">
                      7 of the Best Examples of Beautiful Blog Design
                    </p>
                    <p class="card__text">
                      Ea in ad impedit repellat. Est iure iure et quis aut enim.
                      Ipsam temporibus culpa
                    </p>
                  </div>
                </li>
                <li class="card">
                  <?php echo az_img('journal3.png', 'Man'); ?>
                  <div class="card__info">
                    <p class="card__date">February 26, 2022</p>
                    <p class="card__label">
                      7 Things About Web Design Your Boss Wants To Know
                    </p>
                    <p class="card__text">
                      Dignissimos iste voluptas reprehenderit mollitia nemo
                      distinctio assumenda sequi
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
</main>
<?php get_footer() ?>
