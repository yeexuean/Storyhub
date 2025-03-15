<?php
  require '../app/views/layouts/header.php';
?>

  <!-- body -->
  <div class="hero-container">
    <div class="trending-content">
      <h2>
        <span class="pink-text">Trending</span>
        <span class="green-text">Titles</span>
      </h2>
      <p>Top reads currently</p>
      <button class="buy-btn">Buy now !</button>
    </div>

    <div class="harrypotter-container">
      <img
        src="bookcover/HPbook1.jpg"
        alt="Harry Potter Book 1"
        class="small-book"
      />
      <img
        src="bookcover/HPbook2.jpg"
        alt="Harry Potter Book 2"
        class="large-book"
      />
      <img
        src="bookcover/HPbook3.jpg"
        alt="Harry Potter Book 3"
        class="small-book"
      />
    </div>
  </div>

  <!--Top seller-->
  <div class="top-seller">
    <h1 class="top10-heading">
      <span class="green-text">TOP 10</span>
      <span class="brown-text">BOOKS</span>
    </h1>

    <div class="book-container">
      <!--book 1 - check & mate-->
      <div class="book">
        <div class="circle"></div>
        <img
          src="bookcover/checkmate.jpg"
          alt="Check & Mate"
          class="book-cover"
        />
        <div class="stars-ratings">
          <img src="icon/star-solid.svg" alt="star-solid" />
          <img src="icon/star-solid.svg" alt="star-solid" />
          <img src="icon/star-solid.svg" alt="star-solid" />
          <img src="icon/star-border.svg" alt="star-border" />
          <img src="icon/star-border.svg" alt="star-border" />
        </div>

        <h3 class="book-name">Check & Mate</h3>

        <p class="book-author">Ali Hazelwood</p>

        <div class="checkout-info">
          <button class="book-price">£5.90</button>

          <div class="cart-btn">
            <img src="icon/cart.svg" alt="shopping-cart" class="cart-icon" />
          </div>
        </div>
      </div>

      <!--book 2 - twisted love-->
      <div class="book">
        <div class="circle"></div>
        <a>
          <img
            src="bookcover/twisted-love.png"
            alt="twisted-love"
            class="book-cover"
          />
        </a>
        <div class="stars-ratings">
          <img src="icon/star-solid.svg" alt="star-solid" />
          <img src="icon/star-solid.svg" alt="star-solid" />
          <img src="icon/star-solid.svg" alt="star-solid" />
          <img src="icon/star-solid.svg" alt="star-solid" />
          <img src="icon/star-solid.svg" alt="star-solid" />
        </div>

        <h3 class="book-name">Twisted Love</h3>

        <p class="book-author">Ana Huang</p>

        <div class="checkout-info">
          <button class="book-price">£8.90</button>

          <div class="cart-btn">
            <img src="icon/cart.svg" alt="shopping-cart" class="cart-icon" />
          </div>
        </div>
      </div>

      <!--book 3 - powerless -->
      <div class="book">
        <div class="circle"></div>
        <a href="book-info.html"
          ><img
            src="bookcover/powerless-1.png"
            alt="powerless book"
            class="book-cover"
        /></a>
        <div class="stars-ratings">
          <img src="icon/star-solid.svg" alt="star-solid" />
          <img src="icon/star-solid.svg" alt="star-solid" />
          <img src="icon/star-solid.svg" alt="star-solid" />
          <img src="icon/star-border.svg" alt="star-border" />
          <img src="icon/star-border.svg" alt="star-border" />
        </div>

        <h3 class="book-name">Powerlesss</h3>

        <p class="book-author">Lauren Roberts</p>

        <div class="checkout-info">
          <button class="book-price">£5.90</button>

          <div class="cart-btn">
            <img src="icon/cart.svg" alt="shopping-cart" class="cart-icon" />
          </div>
        </div>
      </div>

      <!--book 4 - reckless-->
      <div class="book">
        <div class="circle"></div>
        <img src="bookcover/reckless.jpg" alt="reckless" class="book-cover" />
        <div class="stars-ratings">
          <img src="icon/star-solid.svg" alt="star-solid" />
          <img src="icon/star-solid.svg" alt="star-solid" />
          <img src="icon/star-solid.svg" alt="star-solid" />
          <img src="icon/star-border.svg" alt="star-border" />
          <img src="icon/star-border.svg" alt="star-border" />
        </div>

        <h3 class="book-name">Reckless</h3>

        <p class="book-author">Lauren Roberts</p>

        <div class="checkout-info">
          <button class="book-price">£5.90</button>

          <div class="cart-btn">
            <img src="icon/cart.svg" alt="shopping-cart" class="cart-icon" />
          </div>
        </div>
      </div>

      <!--book 5 - never lie-->
      <div class="book">
        <div class="circle"></div>
        <img
          src="bookcover/never-lie.jpg"
          alt="never-lie"
          class="book-cover"
        />
        <div class="stars-ratings">
          <img src="icon/star-solid.svg" alt="star-solid" />
          <img src="icon/star-solid.svg" alt="star-solid" />
          <img src="icon/star-solid.svg" alt="star-solid" />
          <img src="icon/star-border.svg" alt="star-border" />
          <img src="icon/star-border.svg" alt="star-border" />
        </div>

        <h3 class="book-name">Never Lie</h3>

        <p class="book-author">Freida McFadden</p>

        <div class="checkout-info">
          <button class="book-price">£4.90</button>

          <div class="cart-btn">
            <img src="icon/cart.svg" alt="shopping-cart" class="cart-icon" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Genre section-->
  <h1 class="genre-heading">
    <span class="brown-text">SHOP BY </span>
    <span class="green-text">GENRES</span>
  </h1>

  <div class="genres-container">
    <div class="genres-grid">
      <!-- <div class="genres-content"> -->
        <!--4 by 4 genres-->
        <div class="genres-category">
          <div class="circle">
            <img src="icon/romance.svg" alt="romance" class="genre-icon" />
          </div>
          <p>Romance</p>
        </div>

        <div class="genres-category">
          <div class="circle">
            <img src="icon/mystery.svg" alt="mystery" class="genre-icon" />
          </div>
          <p>Mystery</p>
        </div>

        <div class="genres-category">
          <div class="circle">
            <img
              src="icon/thriller.svg"
              alt="thriller"
              class="genre-icon"
            />
          </div>
          <p>Thriller</p>
        </div>

        <div class="genres-category">
          <div class="circle">
            <img src="icon/horror.svg" alt="horror" class="genre-icon" />
          </div>
          <p>Horror</p>
        </div>

        <div class="genres-category">
          <div class="circle">
            <img src="icon/comedy.svg" alt="comedy" class="genre-icon" />
          </div>
          <p>Comedy</p>
        </div>

        <div class="genres-category">
          <div class="circle">
            <img src="icon/sci-fi.svg" alt="sci-fi" class="genre-icon" />
          </div>
          <p>Sci-Fi</p>
        </div>

        <div class="genres-category">
          <div class="circle">
            <img
              src="icon/children.svg"
              alt="children"
              class="genre-icon"
            />
          </div>
          <p>Children</p>
        </div>

        <div class="genres-category">
          <div class="circle">
            <img
              src="icon/psychology.svg"
              alt="psychology"
              class="genre-icon"
            />
          </div>
          <p>Psychology</p>
        </div>
      </div>
    </div>

    <div class="genres-btn">
      <button class="browse-btn">Browse more &gt</button>
    </div>
  </div>

  <!--A story for every world animation-->
  <div class="pink-bg">
    <h1 class="story-text">A Story For Every World</h1>
  </div>

  <!--Monthly Top Author-->
  <div class="top-authors">
    <h1 class="top-authors-heading">
      <span class="green-text">MONTHLY</span>
      <span class="brown-text">TOP</span>
      <span class="green-text">AUTHORS</span>
    </h1>

    <div class="authors-container">
      <div class="author-profile" style="background-color: #e8e9ff">
        <div class="author-info">
          <p class="author-name">Richard Anderson</p>
          <p class="author-book">7 books</p>
        </div>
        <img src="icon/profile1.svg" alt="Richard Anderson" />
      </div>

      <div class="author-profile" style="background-color: #ffdec3">
        <div class="author-info">
          <p class="author-name">Anastasia Julie</p>
          <p class="author-book">16books</p>
        </div>
        <img src="icon/profile2.svg" alt="Anastasia Julie" />
      </div>

      <div class="author-profile" style="background-color: #fffbe4">
        <div class="author-info">
          <p class="author-name">Clementine Iwan</p>
          <p class="author-book">3books</p>
        </div>
        <img src="icon/profile3.svg" alt="Anastasia Julie" />
      </div>
    </div>
  </div>

  <!--Reviews-->
  <h1 class="reviews-heading">
    <span class="brown-text">WHAT</span>
    <span class="green-text">READER</span>
    <span class="brown-text">SAY</span>
  </h1>

  <!--review container-->
  <div class="review-container">
    <button class="left-click">
      <img src="icon/left-icon.svg" alt="left-icon" class="left-button" />
    </button>

    <!--review 1-->
    <div class="review-card">
      <div class="client-profile">
        <img src="icon/profile4.svg" alt="profile-4" />
        <p class="reviewer-name">Yusof</p>
      </div>

      <p class="review-text">
        An excellent online book store offering diverse genres, user-friendly
        navigation, and quick, reliable delivery service.
      </p>

      <div class="client-stars-rating">
        <img src="icon/star-solid.svg" alt="star-solid" />
        <img src="icon/star-solid.svg" alt="star-solid" />
        <img src="icon/star-solid.svg" alt="star-solid" />
        <img src="icon/star-solid.svg" alt="star-solid" />
        <img src="icon/star-solid.svg" alt="star-solid" />
      </div>
    </div>

    <!--review 2-->
    <div class="review-card">
      <div class="client-profile">
        <img src="icon/profile5.svg" alt="profile-5" />
        <p class="reviewer-name">Adrian</p>
      </div>

      <p class="review-text">
        A reader's paradise with affordable prices, detailed descriptions ,
        and an easy-to-use checkout system.
      </p>

      <div class="client-stars-rating">
        <img src="icon/star-solid.svg" alt="star-solid" />
        <img src="icon/star-solid.svg" alt="star-solid" />
        <img src="icon/star-solid.svg" alt="star-solid" />
        <img src="icon/star-solid.svg" alt="star-solid" />
        <img src="icon/star-solid.svg" alt="star-solid" />
      </div>
    </div>

    <!--review 3-->
    <div class="review-card">
      <div class="client-profile">
        <img src="icon/profile6.svg" alt="profile-6" />
        <p class="reviewer-name">Heather</p>
      </div>

      <p class="review-text">
        Impressive collection of boooks, well-organised categories, and
        responsive customer support for a seamless shopping experiences.
      </p>

      <div class="client-stars-rating">
        <img src="icon/star-solid.svg" alt="star-solid" />
        <img src="icon/star-solid.svg" alt="star-solid" />
        <img src="icon/star-solid.svg" alt="star-solid" />
        <img src="icon/star-solid.svg" alt="star-solid" />
        <img src="icon/star-solid.svg" alt="star-solid" />
      </div>
    </div>

    <button class="right-click">
      <img src="icon/right-icon.svg" alt="right-icon" class="right-button" />
    </button>
  </div>

  <!--website advantage-->
  <div class="advantage-container">
    <div class="advantage-card">
      <i class="fa fa-stopwatch"></i>
      <h3>Quick Delivery</h3>
      <p>
        Experiencing lightning fast delivery on all orders,bringing your next
        read to you in time.
      </p>
    </div>

    <div class="advantage-card">
      <i class="fa fa-credit-card"></i>
      <h3>Secure Payment</h3>
      <p>
        Protected transactions with top-tier encryption, so you can shop
        safely every time.
      </p>
    </div>

    <div class="advantage-card">
      <i class="fa fa-award"></i>
      <h3>Best Quality</h3>
      <p>
        High standards on every book - deivered pristing, for your reading
        pleasure.
      </p>
    </div>

    <div class="advantage-card">
      <i class="fa fa-crown"></i>
      <h3>Return Guarantee</h3>
      <p>
        Easy returns for worry-free shopping. We are committed to your
        satisfaction every time.
      </p>
    </div>
  </div>

  <!--subscribe-->
  <div class="subscribe-container">
    <img src="icon/community.svg" alt="community" class="community-pic" />

    <div class="subscribe-info">
      <h2>JOIN THE COMMUNITY</h2>
      <p>
        Be the first to know about our new releases, special editions and
        latest offers.
      </p>

      <div class="subscribe-btn-div">
        <button class="email-btn">Your email address</button>

        <button class="subscribe-btn">
          Subscribe
          <img
            src="icon/right-icon.svg"
            alt="icon-right"
            class="icon-right"
          />
        </button>
      </div>
    </div>
  </div>


<?php
  require '../app/views/layouts/footer.php';
?>