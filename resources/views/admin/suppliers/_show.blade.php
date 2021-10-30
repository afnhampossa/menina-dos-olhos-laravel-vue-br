<div class="row">
    <div class="col-md-12">
        <dl>
            <dt>Nome</dt>
            <dd>{{ $supplier->user->name }}</dd>

            <dt>E-mail</dt>
            <dd>{{ $supplier->user->email }}</dd>

            <dt>CPF</dt>
            <dd>{{ $supplier->document }}</dd>

            <dt>Data Aniversário</dt>
            <dd>{{ $supplier->date_of_birth }}</dd>


            <dt>Telefone</dt>
            <dd>{{ $supplier->phone }}</dd>


            <dt>Whatsapp</dt>
            <dd>{{ $supplier->whatsapp }}</dd>

            <dt>Endereço</dt>
            <dd>{{ $supplier->address }},
                {{ $supplier->number_builder }}
                - {{ $supplier->city }}, {{ $supplier->state }}
            </dd>

            <dt>CEP</dt>
            <dd>{{ $supplier->zipcode }}</dd>

            <dt>Escolaridade</dt>
            <dd>{{ $supplier->schooling }}</dd>

            <dt>Especialidade</dt>
            <dd>{{ $supplier->specialty }}</dd>

            <dt>Registro Profissional</dt>
            <dd>{{ $supplier->professional_document }}</dd>

            <dt>Facebook</dt>
            <dd>{{ $supplier->facebook }}</dd>

            <dt>Instagram</dt>
            <dd>{{ $supplier->instagram }}</dd>

            <dt>Youtube</dt>
            <dd>{{ $supplier->youtube }}</dd>

            <dt>Linkedin</dt>
            <dd>{{ $supplier->linkedin }}</dd>

            <dt>Qual interesse</dt>
            <dd>{{ $supplier->why }}</dd>

            <dt>Dados Bancários</dt>
            <dd>{{ $supplier->bank_account }}</dd>


        </dl>
    </div>
</div>
