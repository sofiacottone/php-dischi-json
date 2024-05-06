<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- axios  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- vue  -->
    <script src="https://unpkg.com/vue@3"></script>
    <!-- bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi</title>
</head>

<body>
    <div id="app">
        <header class="position-sticky top-0 start-0 w-100 z-3">
            <div class="container-fluid bg-dark">
                <img class="m-2" width="30" height="30" src="https://img.icons8.com/external-tal-revivo-color-tal-revivo/24/external-spotify-a-swedish-audio-streaming-platform-that-provides-drm-protected-logo-color-tal-revivo.png" alt="external-spotify-a-swedish-audio-streaming-platform-that-provides-drm-protected-logo-color-tal-revivo" />
            </div>
        </header>
        <main>
            <div class="container-lg">
                <div class="row justify-content-center p-4">
                    <template v-for="disc in discs">
                        <div @click="openOverlay()" class="card col-4 col-md-3 col-lg-2 p-3 pb-2 m-3">
                            <img :src="disc.poster" class="card-img-top" alt="">
                            <div class="card-body pb-0 text-center">
                                <div class="card-text fw-bold">{{ disc.title }}</div>
                                <div class="card-text">{{ disc.author }}</div>
                                <div class="card-text fw-bold">{{ disc.year }}</div>
                            </div>
                        </div>
                    </template>
                    <div :class="[isOverlayOpen ? 'd-flex' : 'd-none']" class="ms-overlay vstack rounded-5 text-white">
                        <div class="d-flex justify-content-end p-3">
                            <div @click="closeOverlay()" class="border rounded-3 px-3 py-2 text-center" role="button">X</div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="card col-4 col-md-3 col-lg-2 p-3 pb-2 m-3">
                                <img src="disc.poster" class="card-img-top" alt="">
                                <div class="card-body pb-0 text-center">
                                    <div class="card-text fw-bold">disc.title</div>
                                    <div class="card-text">disc.author</div>
                                    <div class="card-text fw-bold">disc.year</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>
    </main>


    </div>

    <!-- my script  -->
    <script src="js/main.js"></script>
</body>

</html>