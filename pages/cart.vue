<template>

  <div>
    <Header></Header>
    <div class="container mt-5">
      <div class="col-sm-12 col-md-10 offset-md-1 text-center">
          <div class="section-header text-center">
            <h1>Shopping Cart</h1>
            <hr class="hr--small">
          </div>

          <div class="grid" v-for="key in cartItems()">
            <cart-item :name="key.productName" :price="key.price" :productId="key.productId" :variant="getVariant(key)"></cart-item>
          </div>
          <div v-if="cartItems().length > 0" style="display: flow-root;"><n-link to="/checkout" class="btn btn-success float-right mt-3">Checkout</n-link></div>
          <div v-if="cartItems().length === 0" class="text-center mb-5">There are currently no items in your shopping cart. Why don't you add some?</div>
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

.cart-line-item > h1, .cart-line-item > h2, .cart-line-item > h3, .cart-line-item > h4, .cart-line-item > h5 {
  color: #565656;
}

.row {
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
  padding-bottom: 1rem;
  margin-top: 1rem;
}

.flow-right {
  display: flow-root;
}
</style>
<script>
import Header from "~/components/header";
import Footer from "~/components/footer";
import CartItem from "@/components/cart-item";

export default {
  components: {CartItem, Header, Footer},
  methods: {
    cartItems() {
      let localCart = localStorage.getItem("cart");
      if(localCart == null || localCart === '')
        return [];
      return JSON.parse(localCart);
    },
    getVariant(key) {
      if(key.hasOwnProperty("variant")) {
        return key.variant;
      }
      return "";
    },
  },
  async mounted() {
    window.$nuxt.$on('removeFromCart', (e) => {
      this.$forceUpdate()
    })
  }
}
</script>