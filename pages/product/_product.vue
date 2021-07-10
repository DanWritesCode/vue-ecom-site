<template>

  <div>
    <Header></Header>
    <div class="container product-container">
      <!--<h1>Product is {{productName}}</h1>-->
      <div class="row mt-md-4">
        <div class="col-sm-12 col-md-6">
          <b-carousel
              id="carousel-fade"
              ref="productCarousel"
              style="text-shadow: 0px 0px 2px #000"
              fade
              controls
              :interval=0
              indicators
              img-width="1024"
              img-height="480"
          >
            <b-carousel-slide
                :img-src="require('@/assets/product/'+productName+'/thumb.jpg')"
            ></b-carousel-slide>
          </b-carousel>
        </div>
          <div class="text-center product-info offset-md-1 col-md-4">
            <p class="mb-0">{{ brandName }}</p>
            <h2>{{niceName}}</h2>
            <p><review-star :stars=5></review-star> 4.9 (127 reviews)</p>
            <h4>${{price}}</h4>
            <hr/>
              <input type="hidden" name="form_type" value="product">

              <div class="radio-wrapper js product-form__item">
                <label class="single-option-radio__label" for="ProductSelect-option-0">
                  Customizable Options
                </label>

                <fieldset class="single-option-radio" id="ProductSelect-option-0">
                  <input type="radio" checked="checked" value="Option 1" name="option1" class="single-option-selector__radio" id="ProductSelect-option1" @click="">
                  <label for="ProductSelect-option1">Option 1</label>

                  <input type="radio" value="Option 2" name="option1" class="single-option-selector__radio" id="ProductSelect-option2" @click="">
                  <label for="ProductSelect-option2">Option 2</label>
                </fieldset>
              </div>

              <div class="product-single__add-to-cart product-single__add-to-cart--full-width">
                <button class="btn btn--add-to-cart btn-lg" @click="addToCart">
                    <span class="btn__text">
                        Add to Cart
                    </span>
                </button>
              </div>
          </div>
        </div>
        <div class="container product-description text-center">
         <div>Description Here</div>
         <div>
            <p><span>✅ Point Here</span> <br> <span>✅ Point Here</span></p>
            <p></p>
          </div>
         <div>🌼 Point 1<br>🍓 Point 2<br>🛠️ Point 3<br><span data-mce-fragment="1">💪</span>Point 4<br>🚿&nbsp;Point 5<br></div>
          <div><br></div>
          <ul></ul>
         <div></div>
         <div>Description Here</div>
         <div></div>
         <div>Description Here</div>
         <div></div>
        </div>
        <hr/>
      <div id="vitals-end-section">
        <h1>Reviews</h1>
        <div class="vtl-pr-main-widget">
          <div class="vtl-pr-main-widget__summary">
            <div class="vtl-pr-main-widget__summary-stars">
              <div class="vtl-pr-review-stars-snippet" style=" text-align: center; margin: 8px 0 14px 0; line-height: 19px; font-size: 19px; color: #000; cursor: pointer; ">
                <div class="vtl-pr-review-stars-snippet__stars"> <span class="vtl-pr-review-stars-snippet__empty-icons"> <span class="vtl-pr-review-stars-snippet__full-icons" style="width: 98.4%;"></span> </span> </div>
                4.9 (127  reviews)
              </div>
            </div>
          </div>
          <div class="vtl-pr-review-form">
            <div class="vtl-pr-review-form__share-experience"> Share your experience </div>
            <div class="vtl-pr-review-form__form">
              <input class="vtl-pr-review-form__input vtl-pr-review-form__input--stars" type="hidden" name="product_review[stars]" value="5">
              <div class="vtl-pr-review-form__rating-box">
                <div class="vtl-pr-review-form__label">Rating</div>
                <div class="vtl-pr-review-stars-snippet__stars vtl-pr-review-form__stars-snippet"> <span class="vtl-pr-review-stars-snippet__empty-icons"> <span class="vtl-pr-review-stars-snippet__full-icons" style="width: 100%;"></span> </span> </div>
              </div>
              <div>
                <div class="vtl-pr-review-form__label vtl-pr-review-form__label--name"> Name* </div>
                <input class="vtl-pr-review-form__input" type="text" name="product_review[name]" value="">
              </div>
              <div>
                <div class="vtl-pr-review-form__label vtl-pr-review-form__label--email"> E-mail </div>
                <input class="vtl-pr-review-form__input" type="email" name="product_review[email]" value="">
              </div>
              <div>
                <div class="vtl-pr-review-form__label">Review</div>
                <textarea class="vtl-pr-review-form__input" name="product_review[review]" rows="4"></textarea>
              </div>
              <div>
                <div class="vtl-pr-review-form__label"> We'd love to see a picture </div>
                <input class="vtl-pr-review-form__file-input" type="file" accept="image/*" name="product_review[image]">
              </div>
              <div class="vtl-pr-review-form__error vtl-pr-review-form__error--file-type" style="display: none;"> Only image file types are supported for upload </div>
              <div class="vtl-pr-review-form__error vtl-pr-review-form__error--add-review" style="display: none;"> The review could not be added. If the problem persists, please contact us. </div>
              <div class="vtl-pr-review-form__actions"> <button class="vtl-pr-review-form__button vtl-pr-review-form__button--add" name="product_review[submit]"> Submit Review </button> <a href="#" class="vtl-pr-review-form__cancel-button"> cancel </a> </div>
            </div>
          </div>
          <div class="vtl-pr-main-widget__cards">
            <div class="vtl-pr-review-card">
              <div class="vtl-pr-review-card__content">
                <div class="vtl-pr-review-card__details" style="padding: 10px">
                  <div class="vtl-pr-review-card__review-author"> John Smith  </div>
                  <div style="clear: both;"></div>
                  <div class="vtl-pr-review-stars-snippet__stars"> <span class="vtl-pr-review-stars-snippet__empty-icons"> <span class="vtl-pr-review-stars-snippet__full-icons" style="width: 100%;"></span> </span> </div>
                  <div>
                    <div class="vtl-pr-review-card__review-date">2021-06-02</div>
                  </div>
                  <div class="vtl-pr-review-card__review-text">Review Contents Here</div>
                </div>
                <div class="vtl-pr-review-card__photos"></div>
              </div>
            </div>
          </div>
          <div class="vtl-pr-main-widget__show-more"> <button v-if="!showMoreReviews" class="vtl-pr-main-widget__show-more-button" @click="showMoreReviews=true; lazyLoad()"> See more reviews </button> </div>
          <div class="vtl-pr-review-modal" overlay-hidden="true">
            <div class="vtl-pr-review-modal__content">
              <div class="vtl-pr-review-modal__slider">
                <div class="vtl-pr-review-modal__slider-arrow--prev vitals-slider-prev"></div>
                <div class="vitals-mobile-header">
                  <span class="vtl-pr-review-modal__close-button vitals-mobile-back"></span>
                  <p class="vtl-pr-review-modal__product-title">{{niceName}}</p>
                </div>
                <div class="vtl-pr-review-modal__main-photo" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></div>
                <div class="vtl-pr-review-modal__description">
                  <span class="vtl-pr-review-modal__close-button vitals-desktop-back"></span>
                  <div class="vtl-pr-review-modal__review-author"></div>
                  <div class="vtl-pr-review-modal__review-stars"></div>
                  <div class="vtl-pr-review-modal__review-date"></div>
                  <div class="vtl-pr-review-modal__review-text"></div>
                  <div class="vtl-pr-review-modal__reply-from-shop"></div>
                </div>
                <div class="vtl-pr-review-modal__slider-arrow--next vitals-slider-next"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <Footer></Footer>
  </div>
</template>

<script>
import Header from "~/components/header";
import Footer from "~/components/footer";
import ReviewStar from "@/components/icons/review-star";

export default {
  data() {
    return {
      productName: this.$route.params.product,
      price: 9.99,
      brandName: "Brand Name",
      niceName: "Product Name",
      showMoreReviews: false,
    }
  },
  methods: {
    addToCart() {
      if(!localStorage.hasOwnProperty("cart") || localStorage.getItem("cart") === null || localStorage.getItem("cart") === "")
        localStorage.setItem("cart", "[]");
      let myCart = JSON.parse(localStorage.getItem("cart"));
      myCart.push({"productName": this.niceName, "productId": this.productName, "price": this.price, "variant": ""});
      localStorage.setItem("cart", JSON.stringify(myCart));
      let parent = this;
      this.$swal({title: 'Added to cart!', text: 'Added product to cart', icon: 'success'}).then(function() {
        parent.$router.push('/cart');
      });
    },
    lazyLoad() {
      let lazyClasses = document.getElementsByClassName('vt-lazy');
      for (let k = 0; k < lazyClasses.length; k++) {
        if(lazyClasses[k].hasAttribute('data-src')) {
          lazyClasses[k].src = lazyClasses[k].getAttribute('data-src');

        }
      }
    }
  },
  components: {Header, Footer, ReviewStar}
}
</script>

<style>
@media (max-width:1025px) {
  .product-container {
    width: 100% !important;
    padding-left: 0;
    padding-right: 0;
  }
}

body {
  color: #565656;
}
.product-description {
  margin-top: 50px;
  text-align: center;
}
.product-info {
  margin-top: 20px;
}
.product-info p {
  color: #000000;
}

.product-info hr {
  text-align: center;
  max-width: 50px;
  background-color: #75bb43;
  margin-left: auto;
  margin-right: auto;
}

.single-option-radio__label {
  color: #000000;
}

.single-option-radio label {
  font-family: Roboto,sans-serif;
  font-weight: 700;
  font-style: normal;
  letter-spacing: .1em;
  text-transform: uppercase;
  position: relative;
  display: inline-block;
  line-height: 1;
  padding: 9px 11px;
  margin: 3px 4px 7px 3px;
  font-size: .76471em;
  background-color: #fff;
  border: 1px solid #fff;
  color: #416427;
}
.single-option-radio input[type=radio]:checked+label {
  border-color: #416427;
}

.single-option-radio input {
  clip: rect(0 0 0 0);
  clip: rect(0,0,0,0);
  overflow: hidden;
  position: absolute;
  height: 1px;
  width: 1px;
}
input[type=radio] {
  -webkit-appearance: radio;
  -moz-appearance: radio;
}
input[type=checkbox], input[type=radio] {
  margin: 0 10px 0 0;
  padding: 0;
  width: auto;
}

.btn--add-to-cart {
  margin-top: 10px;
  -webkit-transition: background-color .15s ease-out;
  -moz-transition: background-color .15s ease-out;
  -ms-transition: background-color .15s ease-out;
  -o-transition: background-color .15s ease-out;
  transition: background-color .15s ease-out;
  background-color: #96cb71;
  color: #fff;
  width: 300px;
}

@font-face {
  font-family: 'Bahnschrift SemiBold SemiCondensed';
  src: url('assets/Bahnschrift.woff2') format('woff2'),
  url('assets/Bahnschrift.woff') format('woff');
  font-weight: normal;
  font-style: normal;
  font-display: swap;
}


.title {
  display: block;
  font-weight: 300;
  font-size: 100px;
  color: #35495e;
  letter-spacing: 1px;
}

.subtitle {
  font-weight: 300;
  font-size: 42px;
  color: #526488;
  word-spacing: 5px;
  padding-bottom: 15px;
}

.links {
  padding-top: 15px;
}
</style>
