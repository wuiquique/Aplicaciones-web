<template>
    <nav class="navbar navbar-expand-lg navbar-expand-md navbar-dark bg-dark" id="navbar">
        <div class="container-fluid">
            <img src="../assets/logo.png" id="logo">
            <div id="navbar-but">
                <div class="navbar-nav" id="botones-nav">
                    <router-link to="/" class="nav-link buton-canciones">Home</router-link>
                    <router-link to="/songos" class="nav-link buton-canciones">Besto Songs</router-link>
                    <router-link to="/contact" class="nav-link buton-canciones">Contact</router-link>
                </div>
            </div>
        </div>
    </nav>
</template>

<style>
#navbar {
    height: 200px;
}

#logo {
    width: 250px;
}

a.buton-canciones {
    color: white;
}

a.buton-canciones:hover {
    color: rgb(158, 79, 232);
}
</style>

<script>

</script>