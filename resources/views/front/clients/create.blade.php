@extends('layouts.app')

@section('content')
    <section id="contact">
        <div class="view">
            <img alt class="bg" src="/front/images/bg/pexels/art-brush-colors-3112.jpg" />
            <img alt class="bg" src="/front/images/bg/picjumbo/picjumbo.com_IMG_4563.jpg" />
            <img alt class="bg" src="/front/images/bg/picjumbo/picjumbo.com_HNCK1805.jpg" />
            <div class="content full-size colors-h">
                <div class="container">
                    <h2>Seja uma pupila</h2>

                    <form action="{{ route('store.cliente') }}" method="get">

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

                            <div class="col-sm-12">
                                <label>Digite o seu nome</label>
                                <input type="text" name="name" id="name"  placeholder="Digite o seu nome" required value="" />
                            </div>

                            <div class="col-sm-12">
                                <label>Digite o seu e-mail</label>
                                 <input type="email" name="email" id="email" placeholder="Digite o seu e-mail" required value="" />
                            </div>

                        </div>

                        {{-- <div class="row">

                            <div class="col-sm-6">
                                <label>CPF/RG</label>
                                 <input type="text" name="document" id="document" placeholder="Digite o seu CPF/RG" required value="" />
                            </div>

                            <div class="col-sm-6">
                                <label>Data de Nascimento</label>
                                 <input type="date" name="date_of_birth" id="date_of_birth" placeholder="Data de Nascimento" required value="" />
                            </div>

                        </div> --}}

                        <div class="row">

                            <div class="col-sm-12">
                                <label>Telefone</label>
                                 <input type="text" name="phone"  id="phone" placeholder="Digite o seu Telefone" required value="" />
                            </div>

                            {{-- <div class="col-sm-6">
                                <label>Digite o seu Whatsapp</label>
                                 <input type="text" name="whatsapp" id="whatsapp" placeholder="Digite o seu Whatsapp" required value="" />
                            </div> --}}

                        </div>
{{-- 
                        <div class="row">

                            <div class="col-sm-4">
                                <label>Digite o seu CEP</label>
                                 <input type="text" name="zipcode" id="zipcode" placeholder="Digite o seu CEP" required value=""  onchange="cepp($(this).val());" onkeyup="this.onchange();" onpaste="this.onchange();" oninput="this.onchange();"/>
                                 <span id="error"></span>
                            </div>

                              <div class="col-sm-4">
                                <label>Digite o seu Endereço</label>
                                 <input type="text" name="address" id="address" placeholder="Digite o seu Endereço" required value="" />
                            </div>

                            <div class="col-sm-4">
                                <label>Digite o seu Número</label>
                                 <input type="text" name="number_builder" id="number_builder" placeholder="Digite o seu Número" required value="" />
                            </div>
                          

                        </div>
                        {{--  --}}
                        {{-- <div class="row">

                           <div class="col-sm-4">
                                <label>Digite o seu Complemento</label>
                                 <input type="text" name="complement"  id="complement" required placeholder="Digite o seu Complemento"  value="" />
                            </div>
                            <div class="col-sm-4">
                                <label>Digite a sua Cidade</label>
                                 <input type="text" name="city" id="city" required placeholder="Cidade"  value="" />
                            </div>

                            <div class="col-sm-4">
                                <label>Digite o seu Estado</label>
                                 <input type="text" name="state" id="state" required placeholder="Digite o seu Estado"  value="" />
                            </div>

                        </div>  --}}

                        {{-- <div class = "row">
                            <div class="col-md-6 control-group">
                                <label for="has_children" class="">Tem Filhos?</label>
                                <select class="form-control" name="has_children" id="has_children" >
                                    <option value="" disabled hidden>Selecione uma opção</option>
                                    <option value="1">SIM</option>
                                    <option value="0">NÃO</option>
                                </select>
                            </div>
                            <div class="col-md-6 control-group">
                                <label for="marital_status" class="">Estado civil?</label>
                                <select class="form-control" name="marital_status" id="marital_status" >
                                    <option>Selecione uma opção</option>
                                    <option value="Em uma relação estável">Em uma relação estável</option>
                                    <option value="Em processo de separação">Em processo de separação</option>
                                    <option value="Separada">Separada</option>
                                    <option value="Divorciada">Divorciada</option>
                                    <option value="Viúva">Viúva</option>
                                </select>
                            </div>
                        </div> --}}

                        {{-- <div class = "row">
                            <div class="col-md-6 control-group">
                                <label for="working" class="">Exerce alguma atividade remunerada no momento?</label>
                                <select  class="form-control" name="working" id="working" placeholder="Exerce alguma atividade remunerada no momento?">
                                    <option>Selecione uma opção</option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não, sem previsão">Não, sem previsão</option>
                                    <option value="Não, mas desejo retornar logo ao mercado">Não, mas desejo retornar logo ao mercado</option>
                                    <option value="Não e não desejo retornar ao mercado">Não e não desejo retornar ao mercado</option>
                                    <option value="Não e desejo empreender">Não e desejo empreender</option>
                                </select>
                            </div> --}}
                            {{-- <div class="col-md-6 control-group">
                                <label for="has_interest" class="">Tem interesse em algum dos nossos serviços?</label>
                                <select class="form-control" name="has_interest" id="has_interest"  placeholder="Exerce alguma atividade remunerada no momento?">
                                    <option>Selecione uma opção</option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não, sem previsão">Não, sem previsão</option>
                                    <option value="Não, mas desejo retornar logo ao mercado">Não, mas desejo retornar logo ao mercado</option>
                                    <option value="Não e não desejo retornar ao mercado">Não e não desejo retornar ao mercado</option>
                                    <option value="Não e desejo empreender">Não e desejo empreender</option>
                                </select>
                            </div> --}}
                            <br><br>

                             <div class="col-md-6 control-group">
                                <a href="/"  class="btn btn-menina"><i class="fas fa-arrow-back"></i>Voltar</a>
                                <button 
                                class="btn btn-menina float-right" onclick="alerta_()">  <i class="fas fa-check"></i> Salvar</button>
                            </div>

                        </div>
	

                    </form>


                    {{-- <div class="row">
                        <client-create></client-create>
                    </div> --}}

                </div>
            </div>
        </div>

          <script type="text/javascript">
            function alerta_() {
                if(document.getElementById("name").value != '' 
                    && document.getElementById("email").value != '' 
                    //&& document.getElementById("date_of_birth").value != ''
                    //&& document.getElementById("document").value != ''
                    && document.getElementById("phone").value != ''
                    //&& document.getElementById("whatsapp").value != ''
                   //&& document.getElementById("zipcode").value != ''
                   // && document.getElementById("address").value != ''
                    //&& document.getElementById("complement").value != ''
                   // && document.getElementById("city").value != ''
                    //&& document.getElementById("state").value != ''
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
		
		
		{{-- <script>

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
						$("#complement").val(dadosRetorno.complemento);
						$("#city").val(dadosRetorno.localidade);
						$("#state").val(dadosRetorno.localidade);
					}catch(ex){}
				});

                if(document.getElementById("address").value != '' && document.getElementById("complement").value != '' && document.getElementById("city").value != ''){
                    error.textContent = ""
                }else{
                    error.textContent = "CEP inválido, tente novamente!"
                    error.style.color = "red"
                }
			}
		</script> --}}
        
    </section>
@endsection
