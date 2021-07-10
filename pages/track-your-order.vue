<template>

  <div>
    <Header></Header>
    <div class="container mt-5">
      <div class="col-sm-11 col-md-8 offset-md-2 text-center">
        <div style="text-align: center;">
          <p>See where your package currently is using the link below:</p>
          <h4 style="margin-top: 10px;"><a href="https://www.17track.net/en" target="_blank" rel="noopener noreferrer" class="text-link">https://www.17track.net/en</a></h4>
        </div>
      </div>
    </div>
    <Footer></Footer>
  </div>
</template>

<script>
import Header from "~/components/header";
import Footer from "~/components/footer";

export default {
  components: {Header, Footer}
}
</script>