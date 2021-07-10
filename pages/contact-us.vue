<template>

  <div>
    <Header></Header>
    <div class="container mt-5">
      <div class="col-sm-12 col-md-8 offset-md-2 text-center">
          <div class="section-header text-center">
            <h1>Contact Us</h1>
            <hr class="hr--small">
          </div>

          <div class="grid">
              <div class="form-vertical">
                <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="contact-form">
                  <div class="row input-group mr-0 ml-0 mt-2 mb-2">
                    <div class="col-sm-12 col-md-6 pl-0 pr-1">
                      <input type="text" id="ContactFormName" class="input-full" name="contact[Name]" placeholder="Name" autocapitalize="words" value="">
                    </div>

                    <div class="col-sm-12 col-md-6 pl-1 pr-0">
                      <input type="email" id="ContactFormEmail" class="input-full" name="contact[email]" placeholder="Email" autocorrect="off" autocapitalize="off" value="">
                    </div>
                  </div>

                  <input type="tel" id="ContactFormPhone" class="input-full mb-2" name="contact[Phone Number]" placeholder="Phone Number" pattern="[0-9\-]*" value="">
                  <textarea rows="10" id="ContactFormMessage" class="input-full" name="contact[Message]" placeholder="Message"></textarea>
                  <div style="display: flow-root;"><input type="submit" class="btn btn-success float-right mt-2" value="Send"></div>
                </form>

              </div>
          </div>
      </div>
    </div>
    <Footer></Footer>
  </div>
</template>
<style>

</style>
<script>
import Header from "~/components/header";
import Footer from "~/components/footer";

export default {
  components: {Header, Footer}
}
</script>