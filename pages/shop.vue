<template>

  <div>
    <Header></Header>
    <div id="banner" class="minimemewall" :style="{'background-image': `url(${require('assets/mini_banner.jpg')})`}"></div>
    <div class="container">
      <div id="store" class="text-center mt-4 mb-5">
        <h3>Our Products</h3>
        <hr/>
        <div id="items" class="row">
          <div class="col-sm-12 col-md-3 mt-5 mt-md-3">
            <n-link to="/product/featured-product"><img style="border-radius: 15px;" src="~assets/product/featured-product/thumb.jpg"/></n-link>
            <n-link to="/product/featured-product"><h3 class="mb-0 mt-3">Featured Product Name</h3></n-link>
            <h5>Starting at $9.99</h5>
          </div>
        </div>


      </div>
    </div>
    <Footer></Footer>
  </div>
</template>
<style>
img {
  max-width: 100%;
  max-height: 100%;
}

.minimemewall {
  height: 30vh;
  width: 100%;
  object-fit: cover;
  margin: 0;
  border: none;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  color: #FFF;
  animation: fadeIn 1s cubic-bezier(.44,.13,.48,.87);
}

.memewall > h1, .memewall > h2, .memewall > h3, .memewall > h4, .memewall > h5 {
  color: #FFF;
}

</style>
<script>
import Header from "~/components/header";
import Footer from "~/components/footer";

export default {
  components: {Header, Footer}
}
</script>