<template>
  <div id="nav">
    <b-navbar toggleable="lg" type="dark" variant="dark">
      <b-navbar-brand href="#" class="logo">
        <img :src="require('../assets/logo_transparent.png')"/>
      </b-navbar-brand>

      <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

      <b-collapse id="nav-collapse" is-nav>
        <!-- Right aligned nav items -->
        <b-navbar-nav class="ml-auto">
          <n-link to="/">Home</n-link>
          <n-link to="/shop">Shop</n-link>
          <n-link to="/contact-us">Contact Us</n-link>
          <n-link to="/track-your-order">Track your Order</n-link>
          <n-link to="/policies/refund-policy">Refund Policy</n-link>
          <n-link to="/cart">Shopping Cart</n-link>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
  </div>
</template>
<script>
export default {
}
</script>
<style>
.logo, .logo img {
  width: 200px;
}
h1, h2, h3, h4, h5 {
  color: #416427;
  font-family: 'Bahnschrift';
}
.navbar.navbar-dark.bg-dark{
  background-color: #75bb43 !important;
}
#nav {
  color: #FFF;
  font-family: 'Bahnschrift';

}
#nav a {
  display: block;
  padding: 0.5rem 0.5rem;
  color: #FFF;
}
</style>
