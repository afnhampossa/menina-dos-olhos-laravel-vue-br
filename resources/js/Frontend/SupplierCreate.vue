<template>

    <div class="col-md-12">

        <div class="row">
            <div class="col-md-6 control-group">
                <label for="name" class="">Digite seu nome</label>
                <input id="name" type="text" v-model="form.name" placeholder="Digite seu nome" required>
                <div class="invalid-feedback text-danger" v-if="errors.name.length>0" v-text="errors.name[0]"></div>

            </div>
            <div class="col-md-6 control-group">
                <label for="email" class="">Digite seu e-mail</label>
                <input id="email" type="email" v-model="form.email" placeholder="Digite seu e-mail">
                <div class="invalid-feedback text-danger" v-if="errors.email.length>0" v-text="errors.email[0]"></div>

            </div>
        </div>
        <div class="row">

            <div class="col-md-6 control-group">
                <label for="document" class="">CCCCPF/RG</label>
                <input id="document" type="text" v-mask="'###.###.###-##'" v-model="form.document" placeholder="CCCCCCPF/RG">
                <div class="invalid-feedback text-danger" v-if="errors.document.length>0"
                     v-text="errors.document[0]"></div>

            </div>

            <div class="col-md-6 control-group">
                <label for="date_of_birth" class="">Data de Nascimento</label>
                <input id="date_of_birth" type="date" v-model="form.date_of_birth" placeholder="Data de Nascimento">
                <div class="invalid-feedback text-danger" v-if="errors.date_of_birth.length>0"
                     v-text="errors.date_of_birth[0]"></div>

            </div>
            <div class="col-md-6 control-group">
                <label for="phone" class="">Telefone</label>
                <input id="phone" type="text" v-mask="'(##) #.####.####'" v-model="form.phone" placeholder="Telefone">
                <div class="invalid-feedback text-danger" v-if="errors.phone.length>0" v-text="errors.phone[0]"></div>

            </div>
            <div class="col-md-6 control-group">
                <label for="whatsapp" class="">Whatsapp</label>
                <input id="whatsapp" type="text" v-mask="'(##) #.####.####'" v-model="form.whatsapp"
                       placeholder="Whatsapp">
                <div class="invalid-feedback text-danger" v-if="errors.whatsapp.length>0"
                     v-text="errors.whatsapp[0]"></div>

            </div>
            <div class="col-md-6 control-group">
                <label for="address" class="">Endereço</label>
                <input id="address" type="text" v-model="form.address" placeholder="Endereço">
                <div class="invalid-feedback text-danger" v-if="errors.address.length>0"
                     v-text="errors.address[0]"></div>

            </div>
            <div class="col-md-6 control-group">
                <label for="number_builder" class="">Número</label>
                <input id="number_builder" type="text" v-model="form.number_builder" placeholder="Número">
                <div class="invalid-feedback text-danger" v-if="errors.number_builder.length > 0"
                     v-text="errors.number_builder[0]"></div>

            </div>
            <div class="col-md-4 control-group">
                <label for="zipcode" class="">CEP</label>
                <input id="zipcode" v-mask="'##.###-###'" type="text" v-model="form.zipcode" placeholder="CEP">
                <div class="invalid-feedback text-danger"
                     v-if="errors.zipcode.length>0"
                     v-text="errors.zipcode[0]">
                </div>

            </div>
            <div class="col-md-4 control-group">
                <label for="city" class="">Cidade</label>
                <input id="city" type="text" v-model="form.city" placeholder="Cidade">
                <div class="invalid-feedback text-danger" v-if="errors.city.length>0" v-text="errors.city[0]"></div>

            </div>
            <div class="col-md-4 control-group">
                <label for="state" class="">Estado</label>
                <input id="state" type="text" v-model="form.state" placeholder="Estado">
                <div class="invalid-feedback text-danger" v-if="errors.state.length>0" v-text="errors.state[0]"></div>

            </div>
            <hr>

            <div class="col-md-4 control-group">
                <label for="schooling" class="">Escolaridade</label>
                <input id="schooling" type="text" v-model="form.schooling" placeholder="Escolaridade">
                <div class="invalid-feedback text-danger" v-if="errors.schooling.length>0"
                     v-text="errors.schooling[0]"></div>
            </div>
            <div class="col-md-4 control-group">
                <label for="specialty" class="">Especialidade</label>
                <input id="specialty" required type="text" v-model="form.specialty" placeholder="Especialidade">
                <div class="invalid-feedback text-danger" v-if="errors.specialty.length>0"
                     v-text="errors.specialty[0]"></div>
            </div>
            <div class="col-md-4 control-group">
                <label for="professional_document" class="">Registro Profissional</label>
                <input id="professional_document" required type="text" v-model="form.professional_document"
                       placeholder="Registro Profissional">
                <div class="invalid-feedback text-danger" v-if="errors.professional_document.length>0"
                     v-text="errors.professional_document[0]"></div>
            </div>

            <div class="col-md-4 control-group">
                <label for="facebook" class="">Facebook</label>
                <input id="facebook" type="text" v-model="form.facebook" placeholder="Facebook">
                <div class="invalid-feedback text-danger" v-if="errors.facebook.length>0"
                     v-text="errors.facebook[0]"></div>
            </div>
            <div class="col-md-4 control-group">
                <label for="instagram" class="">Instagram</label>
                <input id="instagram" type="text" v-model="form.instagram" placeholder="Instagram">
                <div class="invalid-feedback text-danger" v-if="errors.instagram.length>0"
                     v-text="errors.instagram[0]"></div>
            </div>
            <div class="col-md-4 control-group">
                <label for="youtube" class="">Youtube</label>
                <input id="youtube" type="text" v-model="form.youtube" placeholder="Youtube">
                <div class="invalid-feedback text-danger" v-if="errors.youtube.length>0"
                     v-text="errors.youtube[0]"></div>
            </div>
            <div class="col-md-4 control-group">
                <label for="linkedin" class="">Linkedin</label>
                <input id="linkedin" type="text" v-model="form.linkedin" placeholder="Linkedin">
                <div class="invalid-feedback text-danger" v-if="errors.linkedin.length>0"
                     v-text="errors.linkedin[0]"></div>
            </div>
            <div class="col-md-4 control-group">
                <label for="why" class="">Porque fazer parte da rede</label>
                <input id="why" type="text" v-model="form.why" placeholder="Porque fazer parte da rede">
                <div class="invalid-feedback text-danger" v-if="errors.why.length>0" v-text="errors.why[0]"></div>
            </div>
            <div class="col-md-4 control-group">
                <label for="bank" class="">Qual seu banco</label>
                <input id="bank" type="text" v-model="form.bank" placeholder="Qual seu banco">
                <div class="invalid-feedback text-danger" v-if="errors.bank.length>0" v-text="errors.bank[0]"></div>
            </div>
            <div class="col-md-4 control-group">
                <label for="bank_agency" class="">Qual sua agência?</label>
                <input id="bank_agency" type="text" v-model="form.bank_agency" placeholder="Qual sua agência?">
                <div class="invalid-feedback text-danger" v-if="errors.bank_agency.length>0"
                     v-text="errors.bank_agency[0]"></div>
            </div>
            <div class="col-md-4 control-group">
                <label for="bank_account" class="">Qual sua Conta Corrente?</label>
                <input id="bank_account" type="text" v-model="form.bank_account" placeholder="Qual sua Conta Corrente?">
                <div class="invalid-feedback text-danger" v-if="errors.bank_account.length>0"
                     v-text="errors.bank_account[0]"></div>
            </div>
            <div class="col-md-12 form-actions my-3">
                <a href="/" class="btn btn-menina"><i class="fas fa-arrow-back"></i>Voltar</a>
                <button class="btn btn-menina float-right" @click='submit'><i class="fas fa-check"></i> Salvar</button>
            </div>


        </div>
    </div>
</template>

<script>
import axios from "axios";
import form from 'vuejs-form';
import Swal from 'sweetalert2';
import {mask} from 'vue-the-mask'

export default {
    name: "SupplierCreate.vue",
    components: {mask},
    data() {
        return {
            errors: {
                name: [],
                email: [],
                document: [],
                date_of_birth: [],
                phone: [],
                whatsapp: [],
                address: [],
                number_builder: [],
                zipcode: [],
                city: [],
                state: [],
                schooling: [],
                specialty: [],
                professional_document: [],
                facebook: [],
                instagram: [],
                youtube: [],
                linkedin: [],
                photo: [],
                curriculum: [],
                why: [],
                bank_account: [],
                bank_agency: [],
                bank: [],
            },
            form:
                {
                    name: null,
                    email: null,
                    document: null,
                    date_of_birth: null,
                    phone: null,
                    whatsapp: null,
                    address: null,
                    number_builder: null,
                    zipcode: null,
                    city: null,
                    state: null,
                    schooling: null,
                    specialty: null,
                    professional_document: null,
                    facebook: null,
                    instagram: null,
                    youtube: null,
                    linkedin: null,
                    photo: null,
                    curriculum: null,
                    why: null,
                    bank_account: null,
                    bank_agency: null,
                    bank: null
                },
            isLoading: false,
        }
    },

    methods: {
        submit() {

            axios.post("api/sejaparceiro", this.form, {
                headers: {
                    "Content-Type": "application/json",
                    "accepts": "application/json"
                }
            }).catch((error) => {
                this.errors = error.response.data.errors;
                Swal.fire('Oops...', 'Algo deu errado: ' + error, 'error')

            })
                .then((response) => {
                    Swal.fire('Sucesso', response.data.message, 'success');
                    this.resetForm();
                })

        },
        resetForm() {

            var self = this; //you need this because *this* will refer to Object.keys below`
            Object.keys(this.form).forEach(function (key, index) {
                self.form[key] = null;
            });
        }

    }
}
</script>

<style scoped>

.btn-menina {
    font-weight: 400;
    line-height: 30px;
    text-align: center;
    width: auto;
    text-decoration: none;
    text-transform: uppercase;
    display: inline-block;
    border-style: solid;
    border-width: 1px;
    background-color: transparent;
    border-color: rgba(255, 255, 255, .6);
    outline-color: rgba(239, 239, 239, 0);
    color: #cb875f;
    padding: 8px 40px;
}

.btn-menina:hover {
    color: #fff;
    font-weight: 500;
}

</style>
