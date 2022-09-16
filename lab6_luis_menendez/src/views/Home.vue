<template>
  <div class="home">
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
      <div class="mt-3 col-sm-12 col-md-9 col-lg-9 col-xl-9">
        <h1 class="titulos">Home</h1>
        <p>In this page I'll be sharing some music I like, so you can get to know some new cool stuf. <br> :) <br> Feel
          free to visit this page for weekly updates (joke)<br><br><br></p>
        <img src="../assets/flork.jpg" class="col-sm-12 col-md-12 col-lg-12 col-xl-12" id="flork">
      </div>
    </div>
    <br>
    <Footer></Footer>
  </div>
</template>

<style>
#flork {
  width: 400px;
}

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
// @ is an alias to /src
import Header from '../components/Header.vue'
import Footer from '../components/Footer.vue'

export default {
  name: 'Home',
  components: {
    Header,
    Footer
  }
}
</script>
