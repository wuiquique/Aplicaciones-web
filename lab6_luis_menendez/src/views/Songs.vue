<template>
    <div class="songs">
        <Header></Header>
        <div class="row mx-2">
            <div id="right-menu" class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <h4 class="titulos">Keep your good taste</h4>
                <nav class="nav flex-column">
                    <a class="nav-link" id="boton-play" href="https://open.spotify.com/user/12172567366/playlists">Cool
                        Playlists</a>
                    <a class="nav-link disabled" href="#">More Soon</a>
                </nav>
            </div>
            <div class="my-3 col-sm-12 col-md-9 col-lg-9 col-xl-9">
                <h1 class="titulos">Songs for U</h1>
                <div class="row">
                    <iframe id="cancion-frame"
                        src="https://open.spotify.com/embed/track/3F5CgOj3wFlRv51JsHbxhe?utm_source=generator"
                        class="col-sm-12 col-md-12 col-lg-4 col-xl-4" height="380" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    <iframe id="cancion-frame"
                        src="https://open.spotify.com/embed/track/3k3NWokhRRkEPhCzPmV8TW?utm_source=generator"
                        class="col-sm-12 col-md-12 col-lg-4 col-xl-4" height="380" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    <iframe id="cancion-frame"
                        src="https://open.spotify.com/embed/track/6EOtXcUQza8Ct4R2gyLWFl?utm_source=generator"
                        class="col-sm-12 col-md-12 col-lg-4 col-xl-4" height="380" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                </div>
                <div class="row">
                    <iframe id="cancion-frame"
                        src="https://open.spotify.com/embed/track/3uJsg8xIH7OpWHxuJaMLJX?utm_source=generator"
                        class="col-sm-12 col-md-12 col-lg-4 col-xl-4" height="380" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    <iframe id="cancion-frame"
                        src="https://open.spotify.com/embed/track/4K9Jh6jnw0P4FZUwrG6Keb?utm_source=generator"
                        class="col-sm-12 col-md-12 col-lg-4 col-xl-4" height="380" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                    <iframe id="cancion-frame"
                        src="https://open.spotify.com/embed/track/2JgbGCxtzRp6wL5H1DgxV7?utm_source=generator"
                        class="col-sm-12 col-md-12 col-lg-4 col-xl-4" height="380" frameBorder="0" allowfullscreen=""
                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
                </div>
            </div>
        </div>
        <Footer></Footer>
    </div>
</template>

<style>
.titulos {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 28px;
    font-weight: bold;
}

#right-menu {
    border-right: solid;
    border-right-width: 1px;
    border-bottom: solid;
    border-bottom-width: 1px;
}

#cancion-frame {
    border-radius: 12px
}
</style>

<script>

import Header from '../components/Header.vue'
import Footer from '../components/Footer.vue'

export default {
    name: 'Songs',
    components: {
        Header,
        Footer
    }
}
</script>