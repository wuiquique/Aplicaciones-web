<template></template>
<v-data-table
  :headers="headers"
  :items="desserts"
  :items-per-page="5"
  class="elevation-1"
></v-data-table>
<script>

var store = new Vuex.Store({
  state: {},
  mutations: {
    information(state, item) {
      state.selec.push(item);
    },
  },
});
</script>
