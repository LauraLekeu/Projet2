<template>
  <div>

    <MenuSidebar />

    <Header />

  
    <!-- MAIN --- start ------------------------------------- -->
    <div class="main">

        <div class="container">
            
            <div class="section-fields responsive-tab">
                <div id="field-form-title" class=" fields-form" type="text" name="titre-note" placeholder="Titre*">
                    Nom du cours</div>
            </div>

            <div class="sections large-section reverse-order">

                <div class="section-fields responsive-pc">
                    <div id="field-form-title" class=" fields-form" type="text" name="titre-note" placeholder="Titre*">
                        Nom du cours</div>
                </div>


                <div class="list-cards">

                    <div class="todo-container">
                        <!-- star card -->
                        <div class="card-style-2  cards-hover">
                            <div class="texts-content">
                                <div style="display: flex; align-items: center; margin-top:1em;">
                                    <div class="icon-circle ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                            class="bi bi-app" viewBox="0 0 16 16">
                                            <path
                                                d="M11 2a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3h6zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4H5z" />
                                        </svg>
                                    </div>
                                    <p class="text-title" style="margin:0 0 0 1em;"> <strong>Date</strong></p>
                                </div>
                                <p class="text-content">La tâche consectetur incidunt culpa at 
                                    Temporibus, recusandae! </p>
                            </div>
                        </div>
                        <!-- end card -->
                       

                    </div>

                    



                    <!-- star card -->
                    <div class="card-style-1 cards-hover page-cours">
                        <a href="detail.html" class="card-link">
                            <div class="double-titre">
                                <div class="card-titre">Titre de la note </div>
                                <div class="text-separation">|</div>
                                <div class="card-date">Date création</div>
                            </div>

                            <div class="card-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                                nulla eum, deleniti quas inventore nam molestiae, nesciunt laborum, deserunt laboriosam
                                culpa aut cum sapiente voluptatem nihil dolores quibusdam repudiandae autem! Explicabo
                                officiis ex id esse, temporibus laboriosam nisi harum eligendi beatae</div>
                        </a>
                        <div class="card-icons">
                            <div class=" icons-container">
                                <a href="" class="icon-edit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="currentColor"
                                        class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end card -->

                    
                    

                </div>
            </div>

            <div class="sections small-section reverse-order" style="padding-top: 0em;">
                <div class="section-container">

                    <div class="section-add">
                        <div class="add-container display-non">
                            <form class="card-add edit-cours">

                                <input type="text" name="coursname" class="field-add" value="Nom du cours à modifier">
                                <button class="icon-plus">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg>
                                </button>
                            </form>
                        </div>



                        <div class="section-total page-cours">
                            <div class="total-container">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" fill="currentColor"
                                    class="bi bi-file-text-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z" />
                                </svg>
                                <span> 3 </span>
                            </div>



                            <div class="total-container" style="margin-top: 1em;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor"
                                    class="bi bi-list-ul" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm-3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 4a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                </svg>
                                <span> 2 </span>
                            </div>
                        </div>




                        <div class="content-separation"></div>

                    </div>



                </div>
            </div>

            <br />
        </div>

        <br />

    </div>

  </div>
</template>


<script>
  // @ is an alias to /src
  import MenuSidebar from '@/components/MenuSidebar.vue';
  import Header from '@/components/Header.vue';

  export default {
    name: 'Todos',
    components: {
        MenuSidebar,
        Header
    },
  }
</script>
