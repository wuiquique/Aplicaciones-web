<template>
    <div>
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
            <div id="app" class="mt-3 col-sm-12 col-md-9 col-lg-9 col-xl-9">
                <v-app>
                    <v-main>
                        <v-form ref="form">
                            <v-text-field v-model="firstname" :rules="[value=>!!value || '*Required']"
                                label="First Name">
                            </v-text-field>
                            <v-text-field v-model="lastname" :rules="[value=>!!value || '*Required']" label="Last Name">
                            </v-text-field>
                            <v-select v-model="gender" :items="items" :rules="[value=>!!value || '*Required']"
                                label="Gender">
                            </v-select>
                            <v-slider v-model="age" class="align-center" :max="max" :min="min" hide-details label="Age">
                                <template v-slot:append>
                                    <v-text-field v-model="age" class="mt-0 pt-0" hide-details single-line type="number"
                                        style="width: 60px"></v-text-field>
                                </template>
                            </v-slider>
                            <v-text-field v-model="phone" :rules="[value=>!!value || '*Required']" label="Phone number"
                                maxlength="8" prefix="+502"></v-text-field>
                            <v-text-field v-model="email"
                                :rules="[value=>!!value || '*Required', value=>value.match(/.+@.+\..+/) || '*Invalid e-mail']"
                                label="E-mail"></v-text-field>
                            <v-textarea v-model="message" :rules="[value=>!!value || '*Required']" name="input-7-1"
                                label="Message">
                            </v-textarea>

                            <v-btn color="primary" dark @click="edad()">
                                Summit
                            </v-btn>

                            <v-dialog v-model="dialog" persistent max-width="290">
                                <v-card>
                                    <v-card-title class="text-h5">
                                        {{titulod}}
                                    </v-card-title>
                                    <v-card-text>
                                        {{textod}}
                                    </v-card-text>
                                    <v-card-actions>
                                        <v-spacer></v-spacer>
                                        <v-btn color="green darken-1" text @click="dialog = false">
                                            Ok!
                                        </v-btn>
                                    </v-card-actions>
                                </v-card>
                            </v-dialog>

                            <v-data-table :headers="headers" :items="lista" :items-per-page="5" class="elevation-1">
                                <template v-slot:item.age="{ item }">
                                    <v-chip :color="getColor(item.age)" dark>
                                        {{ item.age }}
                                    </v-chip>
                                </template>
                            </v-data-table>

                        </v-form>
                    </v-main>
                </v-app>
            </div>
        </div>

        <br>

        <Footer></Footer>
    </div>
</template>

<script>
import Header from '../components/Header.vue'
import Footer from '../components/Footer.vue'
export default {
    name: 'Contact',
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
    components: {
        Header,
        Footer
    }
}
</script>