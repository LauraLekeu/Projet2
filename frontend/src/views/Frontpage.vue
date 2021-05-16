<template>
  <div>
    <header>
        <div class="menu-burger">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
            </svg>
        </div>
        <div id="logo">Logo du site</div>
        <Connexion />
    </header>
    <div class="menu-open">
        <Connexion />
    </div>

    <div class="main site">
        <div class="container">
            <div class="sections large-section site" style="background: none; box-shadow: none;">
              <Slider />
            </div>
            <div class="sections small-section site" style="background: none; box-shadow: none;">
              <Inscription />
            </div>
        </div>
    </div>

    <footer>
            <div> &#169; 2021 Laura Lekeu</div>
    </footer>
  </div>
</template>

<script>
  // @ is an alias to /src
  import Slider from '@/components/Slider.vue';
  import Inscription from '../components/Inscription.vue';
  import Connexion from '@/components/Connexion.vue';

  export default {
    name: 'Frontpage',
    components: {
      Slider,
      Inscription,
      Connexion
    },
  }
</script>