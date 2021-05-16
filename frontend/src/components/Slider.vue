<template>
  <swiper class="swiper" :options="swiperOption">

    <swiper-slide> 
      <div class="slider-container">
          <div class="infos-acceuil">
              <div class="icon-infos">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" width="30"
                      height="30" class="bi bi-house-fill" viewBox="0 0 16 16">
                      <path fill-rule="evenodd"
                          d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                      <path fill-rule="evenodd"
                          d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                  </svg>
              </div>
              <h3 class="sous-titre-site">Profitez d'un <strong> espace de travail
                      personnel</strong> </h3>
          </div>
          <img class="" src="../assets/images/index.png" alt="">
      </div>
    </swiper-slide>

    <div class="swiper-pagination" slot="pagination"></div>
    <!-- <div class="swiper-button-prev" slot="button-prev"></div>
    <div class="swiper-button-next" slot="button-next"></div> -->
  </swiper>
</template>

<script>
import  { Swiper, SwiperSlide } from 'vue-awesome-swiper';
import 'swiper/swiper-bundle.css'

  export default {
    name: 'Slider',
    title: 'Autoplay',
    components: {
      Swiper,
      SwiperSlide,
    },
   data() {
      return {
        swiperOption: {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
          }
        }
      }
    },
  
   
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>


