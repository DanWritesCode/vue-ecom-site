<template>

  <div>
    <Header></Header>
    <div class="container mt-5">
      <div class="col-sm-11 col-md-8 offset-md-2 text-center">
        <h1 class="mb-4">Checkout Complete!</h1>
        <p>Your order has now been sent for processing.</p>
        <p>If you have any further questions, please don't hesitate to <n-link to="contact-us">contact us</n-link>.</p>
        <p>You will shortly receive an email from PayPal. The transaction ID contained within that email is your order ID. Please provide it if you contact us.</p>
        <p>When we ship your order, we will attach the tracking number to your PayPal transaction. PayPal will then notify you that the tracking number is available.</p>
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
}
</script>