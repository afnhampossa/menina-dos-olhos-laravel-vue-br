@extends('layouts.app')

@section('content')
    <section id="contact">
        <div class="view">
            <img alt class="bg" src="/front/images/bg/pexels/art-brush-colors-3112.jpg" />
            <img alt class="bg" src="/front/images/bg/picjumbo/picjumbo.com_IMG_4563.jpg" />
            <img alt class="bg" src="/front/images/bg/picjumbo/picjumbo.com_HNCK1805.jpg" />
            <div class="content full-size colors-h">
                <div class="container">
                <br>
                    <h2>Seja uma parceira</h2>
                    
                    <form action="{{ route('store.supplier') }}" method="get">
                    {{-- {!! csrf_field() !!} --}}
                    <div class="row">
                       @if ($msg == 'success')
                            <div class="alert alert-success" role="alert">
                                Os dados foram enviados com sucesso!
                            </div>
                            @elseif ($msg == 'error')
                                <div class="alert alert-danger" role="alert">
                                    Houve erro ao enviar os dados!
                                </div>
                            @elseif ($msg == 'existe')
                                <div class="alert alert-danger" role="alert">
                                    Este E-mail já foi usado para cadastro!
                                </div>
                        @endif

                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-md-6 control-group">
                                    <label for="name" class="">Digite seu nome</label>
                                    <input name="name" id="name" id type="text" placeholder="Digite seu nome" required>

                                </div>
                                <div class="col-md-6 control-group">
                                    <label for="email" class="">Digite seu e-mail</label>
                                    <input name="email" id="email" type="email"required placeholder="Digite seu e-mail">

                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6 control-group">
                                    <label for="document" class="">CCCCPF/RG</label>
                                    <input name="document" id="document" type="text" required data-mask="'###.###.###-##'" ata-mask-selectonfocus="true" placeholder="CCCCCCPF/RG">
                                </div>

                                <div class="col-md-6 control-group">
                                    <label for="date_of_birth" class="">Data de Nascimento</label>
                                    <input name="date_of_birth" id="date_of_birth" type="date" placeholder="Data de Nascimento">

                                </div>
                                <div class="col-md-6 control-group">
                                    <label for="phone" class="">Telefone</label>
                                    <input name="phone" id="phone" type="text" required data-mask="'(##) #.####.####'" ata-mask-selectonfocus="true" placeholder="Telefone">

                                </div>
                                
                                <div class="col-md-6 control-group">
                                    <label for="whatsapp" class="">Whatsapp</label>
                                    <input name="whatsapp" id="whatsapp" type="text" required data-mask="'(##) #.####.####'" ata-mask-selectonfocus="true" placeholder="Whatsapp">

                                </div>
                                 <div class="col-md-6 control-group">
                                    <label for="zipcode" class="">CEP</label>
                                     <input type="text" name="zipcode" id="zipcode" placeholder="Digite o seu CEP" required value=""  onchange="cepp($(this).val());" onkeyup="this.onchange();" onpaste="this.onchange();" oninput="this.onchange();"/>
                                    <span id="error"></span>
                                </div>
                                <div class="col-md-6 control-group">
                                    <label for="number_builder" class="">Número</label>
                                    <input name="number_builder" required id="number_builder" type="text" placeholder="Número">

                                </div>
                                
                                <div class="col-md-4 control-group">
                                    <label for="address" class="">Endereço</label>
                                    <input name="address" id="address" required type="text" placeholder="Endereço">
                                    
                                </div>
                               
                                <div class="col-md-4 control-group">
                                    <label for="city" class="">Cidade</label>
                                    <input name="city" id="city" type="text"  placeholder="Cidade">
                                </div>
                                <div class="col-md-4 control-group">
                                    <label for="state" class="">Estado</label>
                                    <input name="state" id="state"   type="text"  placeholder="Estado">
                                </div>
                                <hr>

                                <div class="col-md-4 control-group">
                                    <label for="schooling" class="">Escolaridade</label>
                                    <input name="schooling" type="text"  placeholder="Escolaridade">
                                </div>
                                <div class="col-md-4 control-group">
                                    <label for="specialty" class="">Especialidade</label>
                                    <input name="specialty"  type="text" placeholder="Especialidade">
                                </div>
                                <div class="col-md-4 control-group">
                                    <label for="professional_document" class="">Registro Profissional</label>
                                    <input name="professional_document"  type="text"  placeholder="Registro Profissional">
                                </div>

                                <div class="col-md-4 control-group">
                                    <label for="facebook" class="">Facebook</label>
                                    <input name="facebook" type="text"  placeholder="Facebook">
                                </div>
                                <div class="col-md-4 control-group">
                                    <label for="instagram" class="">Instagram</label>
                                    <input name="instagram" type="text"  placeholder="Instagram">
                                </div>
                                <div class="col-md-4 control-group">
                                    <label for="youtube" class="">Youtube</label>
                                    <input name="youtube" type="text" placeholder="Youtube">
                                </div>
                                <div class="col-md-4 control-group">
                                    <label for="linkedin" class="">Linkedin</label>
                                    <input name="linkedin" type="text"  placeholder="Linkedin">
                                </div>
                                <div class="col-md-4 control-group">
                                    <label for="why" class="">Porque fazer parte da rede</label>
                                    <input name="why" type="text"  placeholder="Porque fazer parte da rede">
                                </div>
                                <div class="col-md-4 control-group">
                                    <label for="bank" class="">Qual seu banco</label>
                                    <input name="bank" type="text"  placeholder="Qual seu banco">
                                </div>
                                <div class="col-md-4 control-group">
                                    <label for="bank_agency" class="">Qual sua agência?</label>
                                    <input name="bank_agency" type="text"  placeholder="Qual sua agência?">
                                </div>
                                <div class="col-md-4 control-group">
                                    <label for="bank_account" class="">Qual sua Conta Corrente?</label>
                                    <input name="bank_account" type="text"  placeholder="Qual sua Conta Corrente?">
                                
                                </div>
                                <br>
                                <div class="col-md-12 form-actions my-3">
                                    <a href="/" class="btn btn-menina"><i class="fas fa-arrow-back"></i>Voltar</a>
                                    <button class="btn btn-menina float-right" onclick="alert_()"><i class="fas fa-check"></i> Salvar</button>
                                </div>


                            </div>
                        </div>

                        {{-- <supplier-create></supplier-create> --}}
                    </div>
                    </form>

                </div>
            </div>
        </div>

        <script type="text/javascript">
            function alert_() {
                if(document.getElementById("name").value != '' 
                    && document.getElementById("email").value != '' 
                    && document.getElementById("date_of_birth").value != ''
                    && document.getElementById("document").value != ''
                    && document.getElementById("phone").value != ''
                    && document.getElementById("whatsapp").value != ''
                    && document.getElementById("zipcode").value != ''
                    && document.getElementById("address").value != ''
                    && document.getElementById("number_builder").value != ''
                ){
                    swal({
                        title: "Sucesso!",
                        text: "Aguarde o processamento...",
                        type: "success",
                        showCancelButton: false,
                        reverseButtons: !0
                    })
                }
            }
        </script>
        <script>

			function cepp(cep){
                var error = document.getElementById("error")

                if(cep.length != 8){
                    error.textContent = "CEP inválido, tente novamente!"
                    error.style.color = "red"
				}
				
				var url = "https://viacep.com.br/ws/"+cep+"/json/";
				$.getJSON(url, function(dadosRetorno){
					try{
						$("#address").val(dadosRetorno.logradouro);
						//$("#complement").val(dadosRetorno.complemento);
						$("#city").val(dadosRetorno.localidade);
						$("#state").val(dadosRetorno.localidade);
					}catch(ex){}
				});

                if(document.getElementById("address").value != '' && document.getElementById("state").value != '' && document.getElementById("city").value != ''){
                    error.textContent = ""
                }else{
                    error.textContent = "CEP inválido, tente novamente!"
                    error.style.color = "red"
                }
			}
		</script>
        
    </section>
@endsection
