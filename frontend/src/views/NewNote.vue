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
                        <input id="field-form-title" class="fields-form" type="text" name="titre-note"
                            placeholder="Titre*">
                        <textarea id="field-form-text" class="fields-form" name="content-note"
                            placeholder="Texte"></textarea>
                    </div>
                </div>

                <div class="sections small-section">
                    <div class="section-container card-add-new">

                        <div class="responsive">
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
                            </div>

                            <form action="">
                                <input class="" name="newtag" type="text" id="newtag" placeholder="Ajouter un tag">
                            </form>


                            <div class="content-separation"></div>

                            <div>
                                <select name="cours" id="menu-options">
                                    <option selected> Sélectionner un cours *</option>
                                    <option value="a">Valeur 2</option>
                                    <option value="b">Valeur 3</option>
                                </select>
                                <label for="cours" id="fleche-menu-options">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-caret-down-fill" viewBox="0 0 16 16" >
                                        <path
                                            d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
                                    </svg>
                                </label>
                            </div>

                            <div class="tags">
                                <div class="tag-note hover">HTML</div>
                                <div class="tag-note selected">Illustrator</div>
                                <div class="tag-note hover">XD</div>
                                <div class="tag-note hover">Photoshop</div>
                                <div class="tag-note hover">tag</div>
                                <div class="tag-note hover">CSS</div>
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
