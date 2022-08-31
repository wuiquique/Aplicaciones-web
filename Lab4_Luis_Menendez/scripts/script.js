new Vue({
  el: "#app",
  vuetify: new Vuetify(),
  data() {
    return {
      min: 10,
      max: 99,
      dialog: false,
      items: ["Male", "Female", "Other"],
      firstname: "",
      lastname: "",
      gender: "",
      age: 18,
      phone: "",
      email: "",
      message: "",
      titulod: "",
      textod: "",
      lista: [],
      headers: [
        {
          text: "First Name",
          align: "start",
          sortable: false,
          value: "firstname",
        },
        { text: "Last Name", value: "lastname" },
        { text: "Gender", value: "gender" },
        { text: "Age", value: "age" },
        { text: "Phone Number", value: "phone" },
        { text: "E-mail", value: "email" },
        { text: "Message", value: "message" },
      ],
    };
  },
  methods: {
    edad() {
      if (this.age < 18) {
        this.dialog = true;
        this.titulod = "Oops...";
        this.textod = "You can't use this functionality if you are underaged.";
      } else {
        this.dialog = true;
        this.titulod = "Nice!";
        this.textod =
          "Your information has been sent. Espect a reply as soon as possible.";
        this.lista.push({
          firstname: this.firstname,
          lastname: this.lastname,
          gender: this.gender,
          age: this.age,
          phone: '+502' + this.phone,
          email: this.email,
          message: this.message,
        });
        this.firstname = "";
        this.lastname = "";
        this.gender = "";
        this.age = 18;
        this.phone = "";
        this.email = "";
        this.message = "";
        this.$refs.form.resetValidation()
      }
    },
    getColor(edad) {
      if (edad < 35) return "light-blue";
      else return "grey";
    },
  },
});
