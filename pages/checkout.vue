<template>

  <div>
    <Header></Header>
    <div class="container mt-5">
      <div class="col-sm-12 col-md-10 offset-md-1">
          <div class="section-header text-center">
            <h1>Checkout</h1>
            <hr class="hr--small">
          </div>
          <div class="col-sm-12 col-md-12 d-inline-block" v-for="key in cartItems()">
            <cart-item :name="key.productName" :price="key.price" :productId="key.productId" :variant="getVariant(key)" :no-remove=true :no-image="true" style="border-bottom: 1px solid rgba(0, 0, 0, 0.1);"></cart-item>
          </div>
          <div class="section-header text-center mt-4">
            <h2>Shipping Information</h2>
            <hr class="hr--small">
          </div>
          <div class="form-vertical text-center col-12">
              <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form">
                <div class="input-group mb-2">
                  <div class="col-6 pl-0 pr-1">
                    <input type="text" class="input-full" placeholder="Full Name" autocapitalize="words" value="" v-model="shipping.name" required>
                  </div>

                  <div class="col-6 pl-1 pr-0">
                    <input type="email" class="input-full" placeholder="Email" autocorrect="off" autocapitalize="off" value="" v-model="shipping.email" required>
                  </div>
                </div>
                <div class="input-group mb-2">
                  <div class="col-6 pl-0 pr-1">
                    <input type="text" class="input-full" placeholder="Address Line 1" autocapitalize="words" value="" v-model="shipping.addressLine1" required>
                  </div>

                  <div class="col-6 pl-1 pr-0">
                    <input type="text" class="input-full" placeholder="Address Line 2" autocorrect="off" autocapitalize="off" value="" v-model="shipping.addressLine2">
                  </div>
                </div>
                <div class="input-group mb-4 mt-4">
                  <div class="col-4 pl-0 pr-1">
                    <input type="text" class="input-full" placeholder="City" autocapitalize="words" value="" v-model="shipping.city" required>
                  </div>
                  <div class="col-4 pl-1 pr-0">
                    <input type="text" class="input-full" placeholder="ZIP/Postal Code" autocorrect="off" autocapitalize="off" value="" v-model="shipping.zip">
                  </div>
                  <div class="col-4 pl-1 pr-0">
                    <input type="tel" class="input-full" name="contact[Phone Number]" placeholder="Phone Number (Optional)" pattern="[0-9\-]*" value="" v-model="shipping.phone">
                  </div>
                </div>
                <div class="input-group mb-2">
                  <div class="col-6 pl-0 pr-1">
                    <country-select :country="shipping.country" v-model="shipping.country" topCountry="US" class="input-full" autocomplete="" />
                  </div>
                  <div class="col-6 pl-0 pr-1">
                    <region-select :country="shipping.country" :region="shipping.region" v-model="shipping.region"  class="input-full" autocomplete="address-level1" />
                  </div>
                </div>
              </form>
            </div>
          <div class="section-header text-center mt-4">
            <h2>Payment</h2>
            <hr class="hr--small">
            <div id="paypal-button-container" v-bind:style="[ paypalOrderId==='' ? {display: 'inherit'} : {display: 'none'}]"></div>
            <p v-if="paypalOrderId!==''"><b>Your payment has been authorized by PayPal! To complete this purchase, simply press the "Checkout" button below.</b></p>

          </div>
        <div class="section-header text-center mt-4">
          <h2>Purchase</h2>
          <hr class="hr--small">
          <button class="btn btn-primary btn-lg text-right" :disabled="paypalOrderId===''||disablePurchase" @click="purchaseProcess">Checkout</button>
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

.cart-line-item > h1, .cart-line-item > h2, .cart-line-item > h3, .cart-line-item > h4, .cart-line-item > h5 {
  color: #565656;
}

.row {

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
import { loadScript } from '@paypal/paypal-js';
import cart from "@/pages/cart";
import vueCountryRegionSelect from 'vue-country-region-select'

export default {
  components: {CartItem, Header, Footer, vueCountryRegionSelect},
  data() {
    return {
      apiUrl: 'api.example.com',
      paypalOrderId: '',
      disablePurchase: false,
      shipping: {
        name: "",
        email: "",
        addressLine1: "",
        addressLine2: "",
        city: "",
        region: "",
        zip: "",
        country: "",
        phone: "",
      }
    }
  },
  methods: {
    cartItems() {
      return JSON.parse(localStorage.getItem("cart"));
    },
    getVariant(key) {
      if(key.hasOwnProperty("variant")) {
        return key.variant;
      }
      return "";
    },
    cartToPaypal() {
      let paypalOrders = [];
      let paypalOrder = {"amount":{"currency_code":"USD"}};
      paypalOrder.items = [];

      let totalCost = 0.00;
      let cartItems = this.cartItems();
      for(let cartItemKey in cartItems) {
        let cartItem = cartItems[cartItemKey];
        //console.log(JSON.stringify(cartItem))

        let item = {};
        item.name = cartItem.productName;
        item.category = "PHYSICAL_GOODS";
        item.quantity = "1";
        item.unit_amount = {};
        item.unit_amount.currency_code = "USD";
        item.unit_amount.value = cartItem.price.toString();
        item.currency = "USD";
        item.price = cartItem.price.toString();
        totalCost += cartItem.price;
        paypalOrder.items.push(item);
      }

      //paypalOrder.reference_id = "gu91gh9gag098";
      paypalOrder.amount.value = totalCost.toString();
      paypalOrder.amount.currency_code = "USD";
      paypalOrder.amount.breakdown = {};
      paypalOrder.amount.breakdown.item_total = {};
      paypalOrder.amount.breakdown.item_total.value = totalCost.toString();
      paypalOrder.amount.breakdown.item_total.currency_code = "USD";

      paypalOrder.shipping = {};
      paypalOrder.shipping.name = {full_name: this.shipping.name};
      paypalOrder.shipping.type = "SHIPPING";
      paypalOrder.shipping.address = {};
      paypalOrder.shipping.address.address_line_1 = this.shipping.addressLine1;
      paypalOrder.shipping.address.address_line_2 = this.shipping.addressLine2;
      paypalOrder.shipping.address.postal_code = this.shipping.zip;
      paypalOrder.shipping.address.admin_area_1 = this.shipping.region;
      paypalOrder.shipping.address.admin_area_2 = this.shipping.city;
      paypalOrder.shipping.address.country_code = this.shipping.country;

      paypalOrders.push(paypalOrder);

      return paypalOrders;
    },
    async purchaseProcess() {
      let parent = this;
      parent.disablePurchase = true;
      this.shipping.phone.replace('-', '');
      await this.$axios({
        url: parent.apiUrl,
        method: "POST",
        data: {paypalOrderId: this.paypalOrderId, cart: localStorage.getItem("cart"), shipping: this.shipping}
      }).then((res) => {
        this.$swal({title: 'Checkout complete!', text: 'Successfully completed checkout!', icon: 'success'}).then(function() {
          parent.$router.push('/checkout-complete');
          localStorage.setItem("cart", "[]");
          this.close();
        });
      }).catch((e) => {
        if(e.response.status === 400)
          this.$swal({title: 'Checkout failed!', text: 'We were unable to complete the order :( Refer to the following error: ' + e.response.data.message, icon: 'error'}).then(function() {
            parent.paypalOrderId = "";
            parent.disablePurchase = false;
            this.close();
          });
        else
          this.$swal({title: 'Checkout failed!', text: 'We were unable to complete the order :(', icon: 'error'}).then(function() {
            parent.paypalOrderId = "";
            parent.disablePurchase = false;
            this.close();
          });
      })
    },
  },
  //
  async mounted() {
    let parent = this;
    //console.log(JSON.stringify(parent.cartToPaypal()))
    //console.log({"intent": "CAPTURE", "purchase_units": parent.cartToPaypal()})
    const paypalSdk = await loadScript({
      'client-id': 'AS2hjAnHfUyVIKTpLfrpFPW_ahfGRdZqY6Li3UcYL5EPPZDE2yo5XpIxPugobevoUzO3ZHCzbZp3wKDK',
      currency: 'USD',
    });
    await paypalSdk.Buttons({
      createOrder: function(data, actions) {
        return actions.order.create({"intent": "CAPTURE", "purchase_units": parent.cartToPaypal()});
      },
      onApprove: function(data, actions) {
        parent.paypalOrderId = data.orderID;
      }
    }).render('#paypal-button-container');
  }
}
</script>