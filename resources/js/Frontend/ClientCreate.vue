<template>

    <div class="col-md-12">
        <div v-if="errors" class="bg-red-500 text-white py-2 px-4 pr-0 rounded font-bold mb-4 shadow-lg">
            <div v-for="(v, k) in errors" :key="k">
                <p v-for="error in v" :key="error" class="text-sm">
                    {{ error }}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 control-group">
                <label for="name" class="">Digite seu nome----------------</label>
                <input id="name" type="text" v-model="form.name" placeholder="Digite seu nome" required>
            </div>
            <div class="col-md-6 control-group">
                <label for="email" class="">Digite seu e-mail</label>
                <input id="email" type="email" v-model="form.email" placeholder="Digite seu e-mail">


            </div>
        </div>
        <div class="row">

            <div class="col-md-6 control-group">
                <label for="document" class="">CPF/RG</label>
                <input id="document" type="text"  v-mask="'###.###.###-##'" v-model="form.document" placeholder="CPF/RG">


            </div>

            <div class="col-md-6 control-group">
                <label for="date_of_birth" class="">Data de Nascimento</label>
                <input id="date_of_birth" type="date" v-model="form.date_of_birth" placeholder="Data de Nascimento">


            </div>
            <div class="col-md-6 control-group">
                <label for="phone" class="">Telefone</label>
                <input id="phone" type="text"  v-mask="'(##) #.####.####'" v-model="form.phone" placeholder="Telefone">


            </div>
            <div class="col-md-6 control-group">
                <label for="whatsapp" class="">Whatsapp</label>
                <input id="whatsapp" type="text" v-mask="'(##) #.####.####'" v-model="form.whatsapp" placeholder="Whatsapp">


            </div>
            <div class="col-md-3 control-group">
                <label for="zipcode" class="">CEP</label>
                <input id="zipcode" v-mask="'##.###-###'" type="text" v-model="form.zipcode" @keyup="searchCep()"  placeholder="CEP">

            </div>
            <div class="col-md-6 control-group">
                <label for="address" class="">Endereço</label>
                <input id="address" type="text" v-model="form.address" placeholder="Endereço">


            </div>
            <div class="col-md-3 control-group">
                <label for="number_builder" class="">Número</label>
                <input id="number_builder" type="text" v-model="form.number_builder" placeholder="Número">

            </div>

            <div class="col-md-4 control-group">
                <label for="complement" class="">Complemento</label>
                <input id="complement" type="text" v-model="form.complement" placeholder="Complemento">


            </div>
            <div class="col-md-4 control-group">
                <label for="city" class="">Cidade</label>
                <input id="city" type="text" v-model="form.city" placeholder="Cidade">


            </div>
            <div class="col-md-4 control-group">
                <label for="state" class="">Estado</label>
                <input id="state" type="text" v-model="form.state" placeholder="Estado">


            </div>
            <div class="col-md-6 control-group">
                <label for="has_children" class="">Tem Filhos?</label>
                <select class="form-control" name="has_children" id="has_children" v-model="form.has_children">
                    <option value="" disabled hidden>Selecione uma opção</option>
                    <option value="1">SIM</option>
                    <option value="0">NÃO</option>
                </select>


            </div>
            <div class="col-md-6 control-group">
                <label for="marital_status" class="">Estado civil?</label>
                <select class="form-control" name="marital_status" id="marital_status" v-model="form.marital_status">
                    <option>Selecione uma opção</option>
                    <option value="Em uma relação estável">Em uma relação estável</option>
                    <option value="Em processo de separação">Em processo de separação</option>
                    <option value="Separada">Separada</option>
                    <option value="Divorciada">Divorciada</option>
                    <option value="Viúva">Viúva</option>
                </select>


            </div>
            <div class="col-md-6 control-group">
                <label for="working" class="">Exerce alguma atividade remunerada no momento?</label>
                <select  class="form-control" name="working" id="working" v-model="form.working" placeholder="Exerce alguma atividade remunerada no momento?">
                    <option>Selecione uma opção</option>
                    <option value="Sim">Sim</option>
                    <option value="Não, sem previsão">Não, sem previsão</option>
                    <option value="Não, mas desejo retornar logo ao mercado">Não, mas desejo retornar logo ao mercado</option>
                    <option value="Não e não desejo retornar ao mercado">Não e não desejo retornar ao mercado</option>
                    <option value="Não e desejo empreender">Não e desejo empreender</option>
                </select>


            </div>
            <div class="col-md-6 control-group">
                <label for="has_interest" class="">Tem interesse em algum dos nossos serviços?</label>
                <select class="form-control" name="has_interest" id="has_interest" v-model="form.has_interest" placeholder="Exerce alguma atividade remunerada no momento?">
                    <option>Selecione uma opção</option>
                    <option value="Sim">Sim</option>
                    <option value="Não, sem previsão">Não, sem previsão</option>
                    <option value="Não, mas desejo retornar logo ao mercado">Não, mas desejo retornar logo ao mercado</option>
                    <option value="Não e não desejo retornar ao mercado">Não e não desejo retornar ao mercado</option>
                    <option value="Não e desejo empreender">Não e desejo empreender</option>
                </select>


            </div>
            <div class="col-md-12 form-actions my-3">
                <a href="/" class="btn btn-menina"><i class="fas fa-arrow-back"></i>Voltar</a>
                <button class="btn btn-menina float-right"  @click='submit' > <i class="fas fa-check"></i> Salvar</button>
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
    name: "ClientCreate",
    components: {mask},
    data(){
        return {
            errors: null,
            form: {
                    name:null,
                    email:null,
                    document:null,
                    date_of_birth:this.getNow(),
                    phone:null,
                    whatsapp:null,
                    address:null,
                    number_builder:null,
                    zipcode:null,
                    complement:null,
                    city:null,
                    state:null,
                    has_children:1,
                    marital_status:'Em uma relação estável',
                    working:'Sim',
                    has_interest:'Sim',
            },
            isLoading: false,
        }
    },
    methods:{
        getNow: function() {
            return new Date().toISOString().slice(0,10);
        },
        submit(){
           axios.post("api/sejacliente",this.form, {
               headers:{
                   "accepts": "application/json"
               }
           }).catch((error)=>{
               Swal.fire('Oops...', 'Algo deu errado', 'error');
               this.errors = error.response.data.errors;

           }).then((response)=>{
                   Swal.fire('Sucesso', response.data.message, 'success');
                   this.resetForm();
            })

        },
        resetForm() {
            var self = this;
            Object.keys(this.form).forEach(function(key,index) {
                self.form[key] = null;
            });
        },

        searchCep () {
			if(this.cep.length == 8) {
				axios.get(`https://viacep.com.br/ws/${ this.form.zipcode }/json/`)
				.then( response => this.form.address = response.data.logradouro )
				.catch( error => Swal.fire('Oops...', error,'error') )
			}else{
                
               Swal.fire('Oops...', 'CEP não encontrado!', 'error');
            }
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
