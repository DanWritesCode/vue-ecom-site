<template>
  <div class="row">
    <div v-if="!noImage" class="col-4 col-sm-4 col-md-4 text-left align-middle">
      <n-link :to="`/product/`+productId" v-if="productId"><img class="cart-image" :src="`/assets/thumb/` + productId + `.png`"/></n-link>
    </div>
    <div class="col-8 col-sm-8 cart-line-item my-auto align-middle" v-bind:class="getMyClasses()" style="color: #000;">
      <span @click="deleteMe"><X v-if="!noRemove"></X></span>
      <h3 class="align-middle mb-0"><n-link v-if="!noRemove" :to="`/product/`+productId">{{name}}</n-link><span v-if="noRemove">{{name}}</span></h3>
      <p v-if="variant !== `` && variant !== `undefined - undefined`" class="mb-1 cart-item-variant">{{variant}}</p>
      <h5>${{price}}</h5>
    </div>
  </div>
</template>
<style>
.cart-image {
  max-width: 120px !important;
}
.cart-item-variant {
  color: #757575;
}
</style>
<script>
import X from "@/components/icons/x";

export default {
  props: ['productId', 'name', 'price', 'noRemove', 'noImage', 'isTotal', 'variant'],
  components: {X},
  methods: {
    deleteMe() {
      let myCart = JSON.parse(localStorage.getItem("cart"));
      let index = 0;
      for (let key in myCart) {
        let cartItem = myCart[key];
        if (cartItem.productId === this.productId  && cartItem.variant === this.variant  && cartItem.price === this.price){
          myCart.splice(index, 1);
          break;
        }
        index++;
      }

      //myCart.splice(myCart.indexOf(this.productId), 1);
      localStorage.setItem("cart", JSON.stringify(myCart));
      window.$nuxt.$emit('removeFromCart', {
        productId: this.productId,
      });
    },
    getMyClasses() {
      if(this.noImage && this.isTotal)
        return "text-right col-12 col-sm-12 col-md-12";
      else if(this.noImage)
        return "col-12 col-sm-12 col-md-12";
      else if(this.noImage && !this.isTotal)
        return "text-left";
      return "text-right";
    }
  },
  data() {
    return {

    }
  }
}
</script>