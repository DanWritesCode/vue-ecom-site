<template>

  <div>
    <Header></Header>
    <div class="container mt-5">
      <div class="col-sm-11 col-md-8 offset-md-2 text-center">
        <h1 class="mb-4">Shipping Policy</h1>
        <p>All orders sold on this shop are shipped with the default "Economy Shipping" option, which is in many cases available for free.&nbsp;</p>
        <p>Upon receipt of your order, we will determine the fastest method of shipping available from our warehouses to your shipping address. In all cases, this shipping method comes with a tracking number.</p>
        <p>Once the item is shipped, you will be provided with this tracking number via e-mail. If you don't receive the tracking number for some reason, please <a :href="`mailto:`+email" class="text-link">email us</a> (or use the "Contact Us" form on our website) and ask for your tracking number. When doing so, please provide your order number, and we'll be happy to get back to you with your tracking number and answer any other questions you may have.</p>
        <p>In some (very rare) cases, an order may be placed outside of our shipping zone / the countries we are able to ship to. In this case, we are not able to provide economical shipping for the price that we promised, and will have no choice but to cancel the order and provide you with a full refund.</p>
      </div>
    </div>
    <Footer></Footer>
  </div>
</template>

<script>
import Header from "~/components/header";
import Footer from "~/components/footer";

export default {
  components: {Header, Footer},
  data() {
    return {
      brandName: "MyBrand, LLC",
      website: "mybrand.com",
      email: "email@example.com"
    }
  }
}
</script>