<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <!-- LINK BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <!-- DIV VUE -->
    <div id="app">
        <div id="header" class="d-flex align-items-center">
            <div class="container">
                <h1 class="text-light">Spotify</h1>
            </div>
        </div>
        <div id="body">
            
            <div class="container d-flex">
                <div class="row text-center justify-content-center">
                    <div class="card m-3 text-light" v-for="(elem, index) in album" :key="index">
                        <img :src="elem.poster" class="card-img-top" :alt="elem.title">
                        <div class="card-body">
                            <a href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><h4 class="card-title my-4">{{elem.title}}</h4></a>
                            <!-- <p class="card-text">{{elem.author}}</p>
                            <h5 class="card-text">{{elem.year}}</h5> -->

                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img :src="elem.poster" class="card-img-top" :alt="elem.title">
                                            <div>
                                                <h4 class="card-title">{{elem.title}}</h4>
                                                <p class="card-text">{{elem.author}}</p>
                                                <h5 class="card-text">{{elem.year}}</h5>
                                                <p class="card-text">{{elem.genre}}</p>
                                            </div>
                                            <button type="button" class="btn-close my-4" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>    
                </div>
                
            </div>
            
        </div>
    </div>

    <!-- LINK AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- LINK VUE -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- LINK JS -->
    <script src="./assets/js/main.js"></script>
</body>
</html>