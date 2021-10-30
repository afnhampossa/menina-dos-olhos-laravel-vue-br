@component('mail::message')
Recebemos um novo contato pelo site.

@component('mail::table')
    | NOME          | EMAIL         | MENSAGEM  |
    | :-------------: |:-------------:| :-------------:|
    | {{$data['name']}} | {{$data['email']}} | {{$data['message']}} |
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
