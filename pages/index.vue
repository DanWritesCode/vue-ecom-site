<template>

  <div>
    <Header></Header>
    <div id="banner" class="herobanner"></div>
    <div class="container">
      <div id="description" class="text-center mt-4">
        <h5>Welcome to the -name of store-!</h5>
        <p>Insert description here</p>
      </div>
      <hr/>
      <div id="featured" class="text-center mt-4">
        <h3>Featured Product</h3>
        <div class="col-sm-12 col-md-4 offset-md-4 mt-4">
          <n-link to="/product/featured-product"><img style="border-radius: 15px;" src="~/assets/product/featured-product/thumb.jpg"/></n-link>
        </div>
        <h3 class="mb-0 mt-3"><n-link to="/product/featured-product">Product Name Here</n-link></h3>
        <h5>Starting at $</h5>
      </div>
      <hr/>
      <div id="other" class="text-center mt-4">
        <h3 class="mb-0 mt-3">View our full selection of products</h3>
        <n-link to="shop" class="btn btn-success mt-3">Browse Store</n-link>
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

.herobanner {
  height: 100vh;
  width: 100%;
  object-fit: cover;
  margin: 0;
  border: none;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  color: #FFF;
  animation: fadeIn 1s cubic-bezier(.44,.13,.48,.87);
  background-image: url("~@/assets/greenwall.jpg");
}

@media (max-width:1025px) {
  .memewall {
    background-image: url("~@/assets/mini_banner.jpg");
  }
}


.memewall > h1, .memewall > h2, .memewall > h3, .memewall > h4, .memewall > h5 {
  color: #FFF;
}

</style>
<script>
import Header from "~/components/header";
import Footer from "~/components/footer";


export default {
  components: {Header, Footer},
}
</script>