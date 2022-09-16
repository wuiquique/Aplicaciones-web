<template>
  <div>
    <v-data-table
      v-model="selected"
      :headers="headers"
      :items="estudiante"
      :single-select="singleSelect"
      item-key="name"
      show-select
      class="elevation-1"
    >
    </v-data-table>
    <v-data-table
      :headers="headers2"
      :items="selected"
      :items-per-page="5"
      class="elevation-1"
    ></v-data-table>
  </div>
</template>

<script>
var selec = [];
var estudiantes = [
  {
    id: 1,
    nombre: "Luis",
    apellido: "Menendez",
    edad: 22,
    dpi: 121213131414,
    telefono: 55555555,
    correo: "luis.enrique@gmail.com",
    carrera: "ISCC",
    facultad: "ingenieria",
    mark: false
  },
  {
    id: 2,
    nombre: "Diego",
    apellido: "Vallejo",
    edad: 19,
    dpi: 222223232424,
    telefono: 66666666,
    correo: "diego.vallejo@gmail.com",
    carrera: "ISCC",
    facultad: "ingenieria",
    mark: false
  },
  {
    id: 3,
    nombre: "Juan",
    apellido: "Berganza",
    edad: 20,
    dpi: 323233333434,
    telefono: 77777777,
    correo: "juan.berganza@gmail.com",
    carrera: "ISCC",
    facultad: "ingenieria",
    mark: false
  },
  {
    id: 4,
    nombre: "Gabriel",
    apellido: "Cua",
    edad: 19,
    dpi: 4242434344,
    telefono: 88888888,
    correo: "gabruel.cua@gmail.com",
    carrera: "IET",
    facultad: "ingenieria",
    mark: false
  },
  {
    id: 5,
    nombre: "Chritopher",
    apellido: "Garcia",
    edad: 21,
    dpi: 525253535454,
    telefono: 99999999,
    correo: "chris.garcia@gmail.com",
    carrera: "IET",
    facultad: "ingenieria",
    mark: false
  },
];

export default {
  name: "Lista",

  data() {
    return {
      singleSelect: true,
      selected: [],
      items: estudiantes,
      headers: [
        {
          text: "Nombre",
          align: "start",
          sortable: false,
          value: "name",
        },
        { text: "Dpi", value: "dpi" },
        { text: "Carrera", value: "carrera" },
      ],
      headers2: [
      {
          text: "Nombre",
          align: "start",
          sortable: false,
          value: "name",
        },
        { text: "Apellido", value: "apellido" },
        { text: "Edad", value: "edad" },
        { text: "Dpi", value: "dpi" },
        { text: "Telefono", value: "telefono" },
        { text: "Correo", value: "correo" },
        { text: "Carrera", value: "carrera" },
        { text: "Facultad", value: "facultad" },
      ],
      estudiante: [
        {
          name: estudiantes[0].nombre,
          apellido: estudiantes[0].apellido,
          edad: estudiantes[0].edad,
          dpi: estudiantes[0].dpi,
          telefono: estudiantes[0].telefono,
          correo: estudiantes[0].correo,
          carrera: estudiantes[0].carrera,
          facultad: estudiantes[0].facultad
        },
        {
            name: estudiantes[1].nombre,
          apellido: estudiantes[1].apellido,
          edad: estudiantes[1].edad,
          dpi: estudiantes[1].dpi,
          telefono: estudiantes[1].telefono,
          correo: estudiantes[1].correo,
          carrera: estudiantes[1].carrera,
          facultad: estudiantes[1].facultad
        },
        {
            name: estudiantes[2].nombre,
          apellido: estudiantes[2].apellido,
          edad: estudiantes[2].edad,
          dpi: estudiantes[2].dpi,
          telefono: estudiantes[2].telefono,
          correo: estudiantes[2].correo,
          carrera: estudiantes[2].carrera,
          facultad: estudiantes[2].facultad
        },
        {
            name: estudiantes[3].nombre,
          apellido: estudiantes[3].apellido,
          edad: estudiantes[3].edad,
          dpi: estudiantes[3].dpi,
          telefono: estudiantes[3].telefono,
          correo: estudiantes[3].correo,
          carrera: estudiantes[3].carrera,
          facultad: estudiantes[3].facultad
        },
        {
            name: estudiantes[4].nombre,
          apellido: estudiantes[4].apellido,
          edad: estudiantes[4].edad,
          dpi: estudiantes[4].dpi,
          telefono: estudiantes[4].telefono,
          correo: estudiantes[4].correo,
          carrera: estudiantes[4].carrera,
          facultad: estudiantes[4].facultad
        },
      ],
    };
  },
  methods: {
    info() {
        if (this.selected[0] === 'Luis') {
            selec[0] = estudiantes[0]
        }
    }
  }
};
</script>
