<template>
    <div class="col-md-12">
        <div v-if="form.errors().any()" v-for="(message, key) in form.errors().list()" :key="`${key}.error`">
            {{ message }}
        </div>
        <div class="row">
            <div class="col-md-6 control-group">
                <label for="name" class="">Digite seu nome</label>
                <input id="name" type="text" v-model="form.name" placeholder="Digite seu nome" required>
                <div class="invalid-feedback text-danger" v-if="form.errors().has('name')" v-text="form.errors().get('name')"></div>

            </div>
            <div class="col-md-6 control-group">
                <label for="email" class="">Digite seu e-mail</label>
                <input id="email" type="email" v-model="form.email" placeholder="Digite seu e-mail">
                <div class="invalid-feedback text-danger" v-if="form.errors().has('email')" v-text="form.errors().get('email')"></div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 control-group">
                <label for="message" class="">Digite sua mensagem</label>
                <textarea id="message"  v-model="form.message" placeholder="Digite sua mensagem"></textarea>
                <div class="invalid-feedback text-danger" v-if="form.errors().has('message')" v-text="form.errors().get('message')"></div>
            </div>
        </div>
        <div class="col-md-12 form-actions my-3">
            <button class="btn btn-menina float-right" :disabled='form.empty()'  @click='submit' > <i class="fas fa-check"></i> Enviar</button>
        </div>

    </div>
</template>

<script>
import form from "vuejs-form";
import axios from "axios";
import Swal from "sweetalert2";

export default {
name: "FormContact.vue",
    data(){
        return {
            errors: null,
            form: form(
                {
                    name:'',
                    email:'',
                    message:'',

                }
            ).rules({
                name: 'required',
                email:'email|min:5|required',
                message:  'required',
            })
                .messages({
                    'email.email': 'Digite um e-mail válido',
                    'email.required': 'Oops, :attribute é obrigatório',
                    'name.required': 'Oops, nome é obrigatório',
                    'message.required': 'Oops, a mensagem é obrigatório',
                }),
            isLoading: false,
        }
    },
    watch: {
        // ['form.data']: {
        //     deep: false,
        //     immediate: false,
        //     handler: (now, old) => { this.form.validate(); },
        // }
    },
    methods:{
        submit(){
            this.form.validate();
            if (this.form.validate().errors().any()) return;

            axios.post("api/sendcontact",this.form.all(), {
                headers:{
                    "accepts": "application/json"
                }
            }).catch((error)=>{
                Swal.fire('Oops...', 'Algo deu errado: '+error.message, 'error')

            }).then((response)=>{
                Swal.fire('Sucesso', response.data.message, 'success');
                this.resetForm();
            })
        },
        resetForm() {
            var self = this; //you need this because *this* will refer to Object.keys below`

            //Iterate through each object field, key is name of the object field`
            Object.keys(this.form).forEach(function(key,index) {
                self.form[key] = null;
            });
        }

    }
}
</script>

<style scoped>

.btn-menina{
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
