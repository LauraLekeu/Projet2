<template>
  <div>
      
    <MenuSidebar />

    <Header />

    <!-- MAIN --- start ------------------------------------- -->
    <div class="main">
        <form action="">

            <div class="container">

                <div class="sections large-section">
                    <div class="section-fields">
                        <select id="field-form-title" class=" fields-form" type="text" name="cours"
                            placeholder="Titre" style="appearance: none;">
                            <option selected> Sélectionner un cours *</option>
                            <option value="a">Valeur 2</option>
                            <option value="b">Valeur 3</option>
                        </select>

                        <textarea id="field-form-text" class="fields-form" name=" content-note"
                            placeholder="Texte *"></textarea>
                    </div>
                </div>

                <div class="sections small-section ">
                    <div class="section-container card-add-new">

                        
                        <div class="add-container">
                            <div class="card-add">
                                <form class="">
                                    <input type="text" name="coursname" class=" field-new"
                                        placeholder="Ajouter un cours" style="width: 80%;">
                                    <button class="icon-plus">
                                        <svg fill="currentColor" width="30" height="30" viewBox="0 0 448 448"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="m408 184h-136c-4.417969 0-8-3.582031-8-8v-136c0-22.089844-17.910156-40-40-40s-40 17.910156-40 40v136c0 4.417969-3.582031 8-8 8h-136c-22.089844 0-40 17.910156-40 40s17.910156 40 40 40h136c4.417969 0 8 3.582031 8 8v136c0 22.089844 17.910156 40 40 40s40-17.910156 40-40v-136c0-4.417969 3.582031-8 8-8h136c22.089844 0 40-17.910156 40-40s-17.910156-40-40-40zm0 0" />
                                        </svg>
                                
                                    </button>
                                </form>
                            </div>

                            <div class="content-separation" style="width: 100%;margin-top: 1em;"></div>

                            <div class="options-add-form">    
                                <label for="date" style="margin-bottom: 1em;margin-left: .5em;">À terminer pour le *
                                </label>
                                <input name="date" type="date" id="date-todo" value="2021-06-01">
                            </div>
                        </div>

                        <button id="btn-todo" class="active">Ajouter</button>
                    </div>


                    <br />
                </div>
            </div>
        </form>
    </div> 

  </div>
</template>


<script>
  // @ is an alias to /src
  import MenuSidebar from '@/components/MenuSidebar.vue';
  import Header from '@/components/Header.vue';

  export default {
    name: 'Note',
    components: {
        MenuSidebar,
        Header
    },
  }
</script>
