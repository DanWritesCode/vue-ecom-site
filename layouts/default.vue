<template>
  <div>
    <Nuxt />
  </div>
</template>



<style>
html {
  font-family:
    'Source Sans Pro',
    -apple-system,
    BlinkMacSystemFont,
    'Segoe UI',
    Roboto,
    'Helvetica Neue',
    Arial,
    sans-serif;
  font-size: 16px;
  word-spacing: 1px;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  box-sizing: border-box;
}

*,
*::before,
*::after {
  box-sizing: border-box;
  margin: 0;
}

.button--green {
  display: inline-block;
  border-radius: 4px;
  border: 1px solid #3b8070;
  color: #3b8070;
  text-decoration: none;
  padding: 10px 30px;
}

.button--green:hover {
  color: #fff;
  background-color: #3b8070;
}

.button--grey {
  display: inline-block;
  border-radius: 4px;
  border: 1px solid #35495e;
  color: #35495e;
  text-decoration: none;
  padding: 10px 30px;
  margin-left: 15px;
}

.button--grey:hover {
  color: #fff;
  background-color: #35495e;
}
/* width */
::-webkit-scrollbar {
  width: 7px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #416427;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #75bb43;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #ffffff;
}

/* Forms */
.input-full {
  width: 100%;
  background-color: #f6f6f6;
  border-style: solid;
  border-color: #75bb44;
  border-width: 1px;
  border-radius: 10px;
  padding: 8px 10px;
}


/* REVIEW MEMES */
/*! CSS Used from: https://cdn.shopify.com/s/files/1/0567/8861/5319/t/4/assets/timber.scss.css?v=10438394021572239733 ; media=all */
@media all{
  *,:after,:before,input{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
  button,input,textarea{font-size:17px;line-height:1.6;font-family:Roboto,sans-serif;color:#565656;font-weight:400;font-style:normal;-webkit-font-smoothing:antialiased;-webkit-text-size-adjust:100%;text-rendering:optimizeLegibility;}
  p{margin:0 0 15px 0;text-rendering:optimizeLegibility;}
  a{color:#058677;text-decoration:none;background:0 0;}
  a:hover{color:#75bb44;}
  button{overflow:visible;}
  img{border:0 none;}
  svg:not(:root){overflow:hidden;}
  img{max-width:100%;}
  @media screen and (max-width:768px){
    input,textarea{font-size:16px;}
  }
  button,input,textarea{-webkit-appearance:none;-moz-appearance:none;}
  button{background:0 0;border:none;display:inline-block;cursor:pointer;}
  button{cursor:pointer;}
  input,textarea{border:1px solid #75bb44;max-width:100%;padding:8px 10px;border-radius:0;}
  textarea{min-height:100px;}
}
/*! CSS Used from: https://cdn.shopify.com/s/files/1/0567/8861/5319/t/4/assets/theme.scss.css?v=12322648075512405887 ; media=all */
@media all{
  button::-moz-focus-inner{padding:0;border:0;}
  button,input,textarea{line-height:1.563;}
  ::-webkit-input-placeholder{color:#565656;opacity:.6;}
  :-moz-placeholder{color:#565656;opacity:.6;}
  :-ms-input-placeholder{color:#565656;opacity:.6;}
  ::-ms-input-placeholder{color:#565656;opacity:1;}
  input,textarea{font-size:1.05882em;border-color:transparent;background-color:#f6f6f6;color:#1c1d1d;-webkit-transition:opacity .4s ease-out;-moz-transition:opacity .4s ease-out;-ms-transition:opacity .4s ease-out;-o-transition:opacity .4s ease-out;transition:opacity .4s ease-out;}
  input:hover,textarea:hover{-webkit-transition:opacity .15s ease-out;-moz-transition:opacity .15s ease-out;-ms-transition:opacity .15s ease-out;-o-transition:opacity .15s ease-out;transition:opacity .15s ease-out;opacity:.9;}
  input:active,input:focus,textarea:active,textarea:focus{opacity:1;}
  a{color:#565656;text-decoration:none;background:0 0;}
  a:hover{color:#565656;}
}
/*! CSS Used from: Embedded */
#vitals-end-section{max-width:1200px;margin:0 auto;}
.vitals-mobile-header{display:flex;align-items:center;justify-content:space-between;width:100%;padding:5px 20px;height:50px;}
.vitals-mobile-back{top:0;left:0;z-index:3;background-color:#fff;width:40px;height:40px;display:flex;cursor:pointer;background-image:url(https://appsolve.io/asset/apps/vitals/img/mobile_back_button-modal.svg);background-repeat:no-repeat;background-position:left;}
.vitals-desktop-back{background-image:url(https://appsolve.io/asset/apps/vitals/img/close_button-modal.svg);background-repeat:no-repeat;background-position:center;height:40px;width:40px;cursor:pointer;position:absolute;top:-40px;right:0;text-decoration:none;z-index:2;font-family:sans-serif;line-height:1;}
.vitals-desktop-back:hover{color:#fff;opacity:0.6;text-decoration:none;}
.vitals-slider-prev,.vitals-slider-next{cursor:pointer;-webkit-user-select:none;-ms-user-select:none;user-select:none;position:absolute;top:calc(50% - 20px);background-repeat:no-repeat;background-position:center;width:40px;height:40px;}
.vitals-slider-prev{background-image:url(https://appsolve.io/asset/apps/vitals/img/arrow_left-modal.svg);}
.vitals-slider-next{background-image:url(https://appsolve.io/asset/apps/vitals/img/arrow_right-modal.svg);}
.vtl-pr-review-card__photos{display:none;}
.vtl-pr-review-card__photos-count{background:rgba(255,255,255,0.5);position:absolute;right:10px;top:10px;color:#333;border-radius:3px;padding:3px 6px;font-size:12px;line-height:1;display:flex;align-items:center;box-shadow:2px 2px 6px rgba(0,0,0,0.2);}
.vtl-pr-review-card__photos-count svg{margin-left:3px;fill:#333;}
.vtl-pr-review-card__content{position:relative;display:inline-block;height:auto;width:99%;break-inside:avoid;page-break-inside:avoid;margin-bottom:3.5px;margin-top:20px;border-radius:5px!important;}
.vtl-pr-review-card__main-photo{width:100%;height:auto;margin:0;border-top-left-radius:5px;border-top-right-radius:5px;}
.vtl-pr-review-card__review-author{font-weight:bold;font-size:16px;line-height:1;margin-bottom:3px;color:#222;display:flex;align-items:center;}
.vtl-pr-review-card__review-date{font-size:11px;line-height:1;color:#8f8f8f;margin-bottom:10px;text-align:left;}
.vtl-pr-review-card__review-text{width:100%;font-size:14px;line-height:19px;word-wrap:break-word;text-align:left;}
.vtl-pr-review-card__content img{cursor:zoom-in;}
.vtl-pr-review-card__details{display:flex;flex-direction:column;align-items:flex-start;}
.vtl-pr-review-form{margin:20px 0 20px 0;padding:20px;display:none;}
.vtl-pr-review-form__share-experience{font-size:20px;line-height:1;font-weight:bold;margin-bottom:15px;text-align:left;}
.vtl-pr-review-form__error{color:#bf0711;font-size:12px;}
.vtl-pr-review-form__button--add{margin-right:20px;}
.vtl-pr-review-form__button{border:1px solid #000;padding:5px 10px;background-color:#000;color:#fff!important;text-transform:uppercase;font-size:14px;border-radius:5px;cursor:pointer;max-width:200px!important;text-align:center;justify-content:center;}
.vtl-pr-review-form__button--write{display:inline-block;margin-top:10px;}
.vtl-pr-review-form input[type='text'],.vtl-pr-review-form input[type='email'],.vtl-pr-review-form input[type='file'],.vtl-pr-review-form textarea{margin:0 0 20px 0;width:100%;}
.vtl-pr-review-form input[type='file']{display:flex;align-items:flex-start;margin:1rem 0;background-color:#ffffff;font-size:16px;}
.vtl-pr-review-form__rating-box{display:flex;flex-direction:column;align-items:flex-start;justify-content:flex-start;margin-bottom:20px;}
.vtl-pr-review-form__actions{display:flex;align-items:center;margin:1.5rem 0 0 0;}
.vtl-pr-review-form__label{text-transform:uppercase;font-size:14px;line-height:1;margin-bottom:5px;text-align:left;}
.vtl-pr-review-form__stars-snippet span{cursor:pointer;}
.vtl-pr-review-form{padding:1.25rem;margin-top:1.25rem;margin-bottom:1.25rem;border:1px solid #eee;border-left-width:0.25rem;border-left-color:#f8b301;border-radius:0.25rem;}
.vtl-pr-review-form__input{display:block;width:100%;height:calc(2.25rem + 2px);padding:0.375rem 0.75rem;font-size:1rem;line-height:1.5;color:#495057;background-color:#fff;background-clip:padding-box;border:1px solid #ced4da;border-radius:0.25rem;transition:border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;}
.vtl-pr-review-form__file-input{border:0;padding-left:0;}
@media (min-width: 425px){
  .vtl-pr-review-form input[type='text'],.vtl-pr-review-form input[type='email'],.vtl-pr-review-form input[type='file'],.vtl-pr-review-form textarea{width:100%;}
}
@media (min-width: 768px){
  .vtl-pr-review-form input[type='text'],.vtl-pr-review-form input[type='email'],.vtl-pr-review-form input[type='file'],.vtl-pr-review-form textarea{width:80%;}
}
@media (max-width: 770px){
  .vtl-pr-review-form__button--write{display:flex;align-items:center;margin:10px auto;}
}
.vtl-pr-review-form__button--write{text-decoration:none;}
[overlay-hidden='true']{width:100vw;z-index:-1;display:none;}
.vtl-pr-review-modal{position:fixed;overflow-y:scroll;top:0;right:0;bottom:0;left:0;background:rgba(40,40,40,0.75);}
.vtl-pr-review-modal__description{background-color:rgba(255,255,255,0.2);border-radius:10px;}
.vtl-pr-review-modal__main-photo{margin-right:10px!important;max-width:600px;padding:0;border-radius:5px;width:60%;position:relative;}
.vtl-pr-review-modal__description{background-color:#fff;border-radius:5px;width:40%;color:black;position:relative;padding:20px;}
.vtl-pr-review-modal__content{display:flex;align-items:center;height:100%;}
.vtl-pr-review-modal__slider{display:flex;justify-content:center;margin:10vh auto;width:1000px;position:relative;max-height:600px;}
.vtl-pr-review-modal__review-author{padding:0!important;margin:0!important;font-family:unset;font-weight:bold;font-size:20px;}
.vtl-pr-review-modal__review-text,.vtl-pr-review-modal__reply-from-shop{padding:20px 0 0 0!important;font-size:15px;font-family:Arial, Helvetica, sans-serif;color:black;}
.vtl-pr-review-modal__review-stars,.vtl-pr-review-modal__review-date,.vtl-pr-review-stars-snippet__stars{padding:0!important;margin:0!important;}
.vtl-pr-review-modal__review-date{font-size:11px;line-height:1;color:#8f8f8f;margin-bottom:10px;text-align:left;}
.vtl-pr-review-modal .vitals-mobile-header{display:none;background:#fff;}
.vtl-pr-review-modal .vtl-pr-review-modal__slider-arrow--prev{left:-40px;}
.vtl-pr-review-modal .vtl-pr-review-modal__slider-arrow--next{right:-40px;}
.vtl-pr-review-modal__product-title{color:#3b3b3b;margin:0;font-size:12px;max-width:75%;text-align:right;line-height:14px;}
@media (max-width: 1440px) and (min-width: 771px){
  .vtl-pr-review-modal__slider{width:800px;max-height:500px;margin:7vh auto;}
}
@media (max-width: 1024px){
  .vtl-pr-review-modal__slider{width:650px;}
}
@media (max-width: 770px){
  .vtl-pr-review-modal__slider{margin:0;padding:50px 10%;width:100%;flex-direction:column;justify-content:flex-start;max-height:none;}
  .vtl-pr-review-modal .vitals-mobile-header{display:flex;margin:0;padding:5px 20px;border-radius:5px 5px 0 0;}
  .vtl-pr-review-modal__description{margin:-1px 0 0;padding:15px 30px;border-radius:0 0 5px 5px;}
  .vtl-pr-review-modal__description{width:100%;}
  .vtl-pr-review-modal__main-photo{width:100%;display:block;background:#fff;max-width:100%;}
  .vtl-pr-review-modal__review-text{margin-bottom:35px!important;padding:0!important;}
  .vtl-pr-review-modal .vitals-desktop-back,.vtl-pr-review-modal__slider-arrow--next,.vtl-pr-review-modal__slider-arrow--prev{display:none;}
  .vtl-pr-review-modal__content{height:auto;}
}
@media (max-width: 500px){
  .vtl-pr-review-modal__slider{padding:0;}
  .vtl-pr-review-modal{background:#fff;}
  .vtl-pr-review-modal .vitals-mobile-header,.vtl-pr-review-modal__description{border-radius:0;}
}
.vtl-pr-review-stars-snippet__stars{position:relative;background-repeat:repeat-x;display:inline-block;white-space:nowrap;padding-right:4px;}
.vtl-pr-review-stars-snippet__stars span{background-repeat:repeat-x;display:inline-block;overflow:hidden;text-align:left;}
.vtl-pr-review-stars-snippet__stars{padding:0;margin:0;}
.vtl-pr-review-stars-snippet{clear:both;}
.vtl-pr-main-widget{display:block!important;max-width:1200px;margin:4rem auto 2rem auto;padding:0 5px;box-sizing:border-box;position:relative;overflow:hidden;clear:both;}
.vtl-pr-main-widget *,.vtl-pr-main-widget *:before,.vtl-pr-main-widget *:after{box-sizing:inherit;}
.vtl-pr-main-widget__cards{margin:0 auto;max-width:1200px;width:98%;position:relative;}
.vtl-pr-main-widget__summary{border-bottom:1px solid #eaeaea;margin-bottom:20px;padding-bottom:20px;display:flex;align-items:flex-start;flex-direction:column;justify-content:flex-start;}
.vtl-pr-main-widget__summary-stars{flex:1 0 auto;font-size:25px;line-height:1;}
.vtl-pr-main-widget__summary-stars .vtl-pr-review-stars-snippet{position:relative;display:inline-block;margin-bottom:10px;}
.vtl-pr-main-widget__summary-stars .vtl-pr-review-stars-snippet__stars{top:1px!important;}
.vtl-pr-main-widget__show-more-button{border:1px solid #505050;padding:10px;border-radius:5px;background-color:#ffffff;color:#505050;}
.vtl-pr-main-widget__show-more-button:hover{border:1px solid #000000;color:#000000;}
.vtl-pr-main-widget__summary .vtl-pr-review-stars-snippet{font-size:22px!important;line-height:22px!important;display:flex;}
.vtl-pr-main-widget__summary .vtl-pr-review-stars-snippet__stars span{background-size:24px!important;height:24px!important;margin-right:10px;}
.vtl-pr-main-widget__summary .vtl-pr-review-stars-snippet__empty-icons{width:120px!important;}
.vtl-pr-main-widget__show-more{margin:50px auto;text-align:center;}
.vtl-pr-review-card,.vtl-pr-review-modal__slider{animation:vtl-pr-keyframes__fade-in 0.65s;}
@media (max-width: 770px){
  .vtl-pr-main-widget__summary div{display:flex;flex-direction:column;margin:10px auto;align-items:center;}
}
.vtl-pr-review-stars-snippet__stars .vtl-pr-review-stars-snippet__empty-icons{background-image:url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nNzAnIGhlaWdodD0nNzAnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Zyc+PGc+PHJlY3QgZmlsbD0nbm9uZScgaWQ9J2NhbnZhc19iYWNrZ3JvdW5kJyBoZWlnaHQ9JzQwMicgd2lkdGg9JzU4MicgeT0nLTEnIHg9Jy0xJy8+PC9nPjxnPjxwYXRoIHN0cm9rZT0nI0NDQ0NDQycgZmlsbD0nI0NDQ0NDQycgZmlsbC1ydWxlPSdub256ZXJvJyBzdHJva2Utd2lkdGg9JzUuNjA0ODM2JyBzdHJva2UtbGluZWpvaW49J3JvdW5kJyBzdHJva2UtbWl0ZXJsaW1pdD0nNCcgaWQ9J3BhdGg0Mzk0JyBkPSdtNTMuMTQ4MDMyLDYyLjU2MTA0NGwtMTguNDQ1NjYzLC05LjUwNzA4N2wtMTguMjg4ODgzLDkuODA1MzJsMy4zNDE3OTgsLTIwLjQ4MDczOWwtMTQuOTc3MDIyLC0xNC4zNjM2NTRsMjAuNTExMDE1LC0zLjE1MDY4bDkuMDMyNTcxLC0xOC42ODI2NTdsOS4zMzQ2OTcsMTguNTMzNTRsMjAuNTU5NDYzLDIuODE3MTk0bC0xNC43NDE4NDcsMTQuNjA1MDVsMy42NzM4NywyMC40MjM3MTN6Jy8+PC9nPjwvc3ZnPg==);}
.vtl-pr-review-stars-snippet__stars .vtl-pr-review-stars-snippet__empty-icons .vtl-pr-review-stars-snippet__full-icons{background-image:url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nNzAnIGhlaWdodD0nNzAnIHhtbG5zPSdodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2Zyc+PGc+PHJlY3QgZmlsbD0nbm9uZScgaWQ9J2NhbnZhc19iYWNrZ3JvdW5kJyBoZWlnaHQ9JzQwMicgd2lkdGg9JzU4MicgeT0nLTEnIHg9Jy0xJy8+PC9nPjxnPjxwYXRoIHN0cm9rZT0nIzc1YmI0NCcgZmlsbD0nIzc1YmI0NCcgZmlsbC1ydWxlPSdub256ZXJvJyBzdHJva2Utd2lkdGg9JzUuNjA0ODM2JyBzdHJva2UtbGluZWpvaW49J3JvdW5kJyBzdHJva2UtbWl0ZXJsaW1pdD0nNCcgaWQ9J3BhdGg0Mzk0JyBkPSdtNTMuMTQ4MDMyLDYyLjU2MTA0NGwtMTguNDQ1NjYzLC05LjUwNzA4N2wtMTguMjg4ODgzLDkuODA1MzJsMy4zNDE3OTgsLTIwLjQ4MDczOWwtMTQuOTc3MDIyLC0xNC4zNjM2NTRsMjAuNTExMDE1LC0zLjE1MDY4bDkuMDMyNTcxLC0xOC42ODI2NTdsOS4zMzQ2OTcsMTguNTMzNTRsMjAuNTU5NDYzLDIuODE3MTk0bC0xNC43NDE4NDcsMTQuNjA1MDVsMy42NzM4NywyMC40MjM3MTN6Jy8+PC9nPjwvc3ZnPg==);}
.vtl-pr-main-widget__cards{column-gap:6px;column-count:1;}
.vtl-pr-review-card__content{padding:0;background-color:#ffffff;box-shadow:1px 1px 5px #eaeaea;}
.vtl-pr-review-form{background-color:#ffffff;}
.vtl-pr-review-stars-snippet__stars span{line-height:19px;background-size:19px 19px;height:19px;}
.vtl-pr-review-stars-snippet__empty-icons{width:95px;}
/*! CSS Used keyframes */
@keyframes vtl-pr-keyframes__fade-in{0%{opacity:0;}100%{opacity:1;}}
</style>
