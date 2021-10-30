<div class="row">
    <div class="col-md-12">
        <dl>
            <dt>Nome</dt>
            <dd>{{ $client->user->name }}</dd>

            <dt>E-mail</dt>
            <dd>{{ $client->user->email }}</dd>

            <dt>CPF</dt>
            <dd>{{ $client->document }}</dd>

            <dt>Data Aniversário</dt>
            <dd>{{ $client->date_of_birth }}</dd>


            <dt>Telefone</dt>
            <dd>{{ $client->phone }}</dd>


            <dt>Whatsapp</dt>
            <dd>{{ $client->whatsapp }}</dd>

            <dt>Endereço</dt>
            <dd>{{ $client->address }},
                {{ $client->number_builder }}
                - {{ $client->city }}, {{ $client->state }}
            </dd>

            <dt>CEP</dt>
            <dd>{{ $client->zipcode }}</dd>

            <dt>Tem Criança</dt>
            <dd>{{ $client->has_children }}</dd>

            <dt>Estado Civil</dt>
            <dd>{{ $client->marital_status }}</dd>

            <dt>Trabalha</dt>
            <dd>{{ $client->working }}</dd>

            <dt>Tem interesse nos serviços</dt>
            <dd>{{ $client->has_interest }}</dd>

        </dl>
    </div>
</div>
