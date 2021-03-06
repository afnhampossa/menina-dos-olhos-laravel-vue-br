@extends('layouts.app')
@section('css')
<style>
    .notifyjs-corner{
        width: 100% !important;
    }
    .notifyjs-foo-base {
        width: 97%;
        background: rgba(102, 0, 51, .85);
        padding: 5px;
        border-radius: 10px;
        margin-left:15px;
        margin-right:15px;
    }

    .notifyjs-foo-base .title-notify {
        width: 80%;
        float: left;
        color:white;
        font-weight: 400;
        line-height: 20px;

    }

    .notifyjs-foo-base .buttons-notify {
        width: 20%;
        float: right;
        /*font-size: 9px;*/
        /*padding: 5px;*/
        /*margin: 2px;*/
    }

    .notifyjs-foo-base button {
        float:right;
        font-weight: 400;
        line-height: 20px;
        text-align: center;
        width: auto;
        text-decoration: none;
        text-transform: uppercase;
        display: inline-block;
        background-color: transparent;
        border: 1px solid hsla(0,0%,100%,.6);
        outline-color: hsla(0,0%,93.7%,0);
        color: #cb875f;
        padding: 8px 40px;
    }
</style>
@endsection
@section('content')
<ul id="dot-scroll" class="colors-e background-solid"></ul>
<div class="overlay-window gallery-overlay colors-f background-95-f" data-overlay-zoom="#work .content">
<div class="overlay-control background-85-d">
    <a class="previos" href="/#"></a>
    <a class="next" href="/#"></a>
    <a class="cross" href="/#"></a>
</div>
<div class="overlay-view"></div>
<ul class="loader">
    <li class="background-100-d"></li>
    <li class="background-100-d"></li>
    <li class="background-100-d"></li>
</ul>
</div>
<div class="overlay-window map-overlay colors-f background-95-f">
<div class="overlay-control background-90-f">
    <a class="cross" href="/#"></a>
</div>
<div class="overlay-view">
    <div class="map-canvas" data-latitude="42.487606" data-longitude="-71.115661" data-zoom="14">
        <div class="map-marker" data-latitude="42.487606" data-longitude="-71.115661" data-text="Our awesome location"></div>
        <div class="map-marker" data-latitude="42.485100" data-longitude="-71.113256" data-text="Our sales office"></div>
    </div>
</div>
</div>
<div class="overlay-window credits-overlay colors-g background-95-g">
<div class="overlay-control background-85-d">
    <a class="cross" href="/#"></a>
</div>
<div class="overlay-view">
    <div class="content-container">
    </div>
</div>
</div>
<div class="gate colors-e background-solid">
<div class="gate-bar background-highlight-e"></div>
<ul class="loader">
    <li class="background-100-g"></li>
    <li class="background-90-c"></li>
    <li class="background-100-f"></li>
</ul>
</div>
<!-- BEGIN: Page content -->
<section id="home">
<div class="view">
    <img alt class="bg" src="front/images/bg/THOR/b1.png" /><img alt class="bg" src="front/images/bg/THOR/b2.png" />
    <div class="content home-alice full-size colors-a background-transparent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <div class="text-right textillate heading  hidden-xs hidden-sm" data-textillate-options="{loop:true, in:{effect:'flipInY', reverse:true}, out:{effect:'flipOutY', reverse:true}}">
                        <ul class="texts">
                            <li>Menina dos olhos</li>
                            <li>N??s somos supera????o</li>
                            <li>N??s somos for??a</li>
                            <li>N??s somos respeito</li>
                            <li>N??s somos apoio</li>
                        </ul>
                    </div>
                    <h1 class="heading text-right">SOBRE N??S</h1>
                    <p class="text-right title">
                        Ser uma rede referencial para mulheres em fase de
                        reconstru????o de vida.
{{--                                    Ser uma rede referencial para mulheres em fase de--}}
{{--                                    reconstru????o de vida.--}}
{{--                                    Ser uma rede referencial para mulheres em fase de --}}
{{--                                    reconstru????o de vida.--}}
                    </p>
                    <p class="text-right">
{{--								<a href="/#about" class="button background-60-d heading-d">Entre</a>--}}
                    <a href="{{route("front.client.create")}}" class="button background-60-f heading-f">Cadastre-se</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section id="about">
    <div class="view">
        <img alt class="bg" src="front/images/bg/picjumbo/picjumbo.com_IMG_5790.jpg" />
        <div class="content pane">
            <div class="container-fluid">
                <div class="row hidden-xs hidden-sm">
                    <div class="col-md-4 colors-b">
                        <div class="row">
                            <div class="col-xs-12 banner-cell">
                                <h3 class="light-font-weight">Apoio</h3>
                                <p class="title">para voc??</p>
                            </div>
                            <div class="col-xs-12 success heading-b banner-cell">
                                Estamos aqui por voc??

                                <br /> e para voc??!
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 colors-c">
                        <div class="row">
                            <div class="col-xs-12 banner-cell">
                                <h3 class="light-font-weight">Reconstru????o</h3>
                                <p class="title">por voc??</p>
                            </div>
                            <div class="col-xs-12 warning heading-c banner-cell">
                                Ajuda dia ap??s dia,
                                <br /> peda??o por peda??o.
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 colors-d">
                        <div class="row">
                            <div class="col-xs-12 banner-cell">
                                <h3 class="light-font-weight">Empatia</h3>
                                <p class="title">com voc??</p>
                            </div>
                            <div class="col-xs-12 info heading-d banner-cell">
                                N??o vamos sentir por voc??,
                                <br /> mas vamos sentir com voc??.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="view">
    <img alt class="bg" src="front/images/bg/pexels/autumn-avenue-path-946.jpg" /><img alt class="bg" src="front/images/bg/pexels/autumn-avenue-path-946.jpg" />
    <div class="content colors-e">
        <div class="container">
            <h2>Sobre</h2>
            <p class="header-details"><span class="highlight">Nosso</span> Prop??sito</p>
            <p class="lead">A <span class="highlight">Menina dos Olhos</span> tem o prop??sito de ser uma rede referencial para mulheres em fase de
            reconstru????o da vida.</p>
            <div class="row">
                <div class="col-md-4 col-sm-12 my-4">
                    <div class="col-icon">
                        <i class="li_t-shirt"></i>
                    </div>
                    <div class="col-content">
                        <h4>Nossa <span class="highlight">Miss??o</span></h4>
                        <p>Cuidar de Mulheres como a Menina dos seus Olhos.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 my-4">
                    <div class="col-icon">
                        <i class="li_eye"></i>
                    </div>
                    <div class="col-content">
                        <h4>Nossa <span class="highlight">Vis??o</span></h4>
                        <p>Ser a primeira escolha para Mulheres que querem
                        reconstruir suas vidas.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 my-4">
                    <div class="col-icon">
                        <i class="li_megaphone"></i>
                    </div>
                    <div class="col-content">
                        <h4>Nossos <span class="highlight">Valores</span></h4>

                        <ul class="simple">
                            <li>Prioriza????o e valoriza????o da Mulher</li>
                            <li>Transpar??ncia</li>
                            <li>Excel??ncia</li>
                            <li>Entusiasmo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section id="pupils">
    <div class="view">
        <img alt class="bg" src="front/images/bg/picjumbo/picjumbo.com_IMG_7432.jpg" /><img alt class="bg" src="front/images/bg/pexels/coffee-coffee-machine-cup-3042.jpg" />
        <div class="content colors-h">
            <div class="container">
                <h3><span class="highlight">Seja</span> uma pupila</h3>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p class="text-center">A Menina dos Olhos tem servi??os voltados para voc?? mulher, que quer e precisa reconstruir sua vida ap??s uma separa????o ou div??rcio. No ??mbito Jur??dico, de Recoloca????o Profissional e Apoio Psicol??gico.</p>
                    </div>
                </div>
                <div class="row icon-set">
                    <div class="col-md-3 text-center">
                        <p>
                            <i class="li_eye circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
                        </p>
                        <p class="title">
                            <span class="underline-text">
                                <a style="color: white !important" href="{{ route('front.client.create') }}">Cadastre-se</a>
                            </span></p>
                        <p>Queremos te conhecer, fa??a seu Cadastro aqui, ?? rapidinhho!
                            N??o disponibilizamos seus dados para terceiros, al??m da nossa plataforma.</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <p>
                            <i class="li_like circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
                        </p>
                        <p class="title">
                            <span class="underline-text">
                                <a style="color: white !important" href="{{ route('front.client.create') }}">Conecte-se</a>
                            </span>
                        </p>
                        <p>Nossas profissionais, entenda melhor quais solu????es s??o mais adequadas para sua necessidade!
                            Ap??s a escolha dos servi??os e profissionais, fa??a seu agendamento!</p>
                    </div>
                    <div class="col-md-3 text-center">
                        <p>
                            <i class="li_lab circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
                        </p>
                        <p class="title">
                            <span class="underline-text">
                                <a style="color: white !important" href="{{ route('front.client.create') }}">Fa??a parte</a>
                            </span>
                        </p>
                        <p>
                            Monte seu combo, escolha as profissionais, agende seu atendimento e acompanhe sua evolu????o. ?? simples!
                        </p>
                    </div>
                    <div class="col-md-3 text-center">
                        <p>
                            <i class="li_paperplane circle scroll-in-animation background-20 heading" data-animation="fadeInUp"></i>
                        </p>
                        <p class="title"><span class="underline-text">
                                                                <a style="color: white !important" href="{{ route('front.client.create') }}">Compartilhe</a>
                            </span></p>
                        <p>Se voc?? conhece mulheres que precisam de ajuda, de mais conex??es consigo mesmas e com outras mulheres, espalha a not??cia!

                            PRIORIZE-SE!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<section id="partners">
    <div class="view">
    <img alt class="bg" src="front/images/bg/pexels/art-brush-colors-3112.jpg" /><img alt class="bg" src="front/images/bg/pexels/art-brush-colors-3112.jpg" />
    <div class="content colors-e">
        <div class="container">
            <h2>Seja uma <span class="highlight">Parceira</span></h2>
            <p class="lead">Quer fazer parte de uma rede de apoio, trazendo prop??sito a sua atividade e gerando impacto na vida de milhares de mulheres? Junte-se a n??s!</p>
            <div class="process">
                <div class="row process-row">
                    <div class="col-md-4 process-step">
                        <div class="process-box"><i class="li_search heading"></i></div>
                        <p class="title">Psic??logas e terapeutas:</p>
                        <p class="text-center">
                            Gerar impacto na vida de outras mulheres
                            ?? o que te move?
                            Fa??a seu cadastro conosco e tenha acesso a
                            um universo de mulheres que desejam reconstruir
                            suas vidas e ressignificar dores em vit??rias.

                        </p>
                    </div>
                    <div class="col-md-4 process-step">
                        <div class="process-box"><i class="li_pen heading"></i></div>
                        <p class="title">Advogadas</p>
                        <p class="text-center">
                            Se voc?? se identifica com a nossa miss??o,
                            fa??a seu cadastro e vamos juntas contribuir
                            para a garantia de direitos de muitas mulheres e seus filhos,
                            trazendo mais bem???estar e qualidade nas suas rela????es familiares.
                        </p>
                    </div>
                    <div class="col-md-4 process-step">
                        <div class="process-box"><i class="li_settings heading"></i></div>
                        <p class="title">Headhunters/recoloca????o profissional/empreendedorismo.</p>
                        <p class="text-center">
                            Gerar renda e autonomia para mulheres que est??o em processo de div??rcio e separa????o,
                            atrav??s da recoloca????o profissional e empreendedorismo,
                            faz sentido para voc???
                            Ent??o junte-se a n??s e vamos movimentar a economia com a for??a feminina.
                        </p>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="{{route("front.supplier.create")}}" class="button background-60-d heading-d float-right">Seja uma parceira</a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section id="numbers">
    <div class="view">
        <img alt class="bg" src="front/images/bg/picjumbo/picjumbo.com_IMG_7432.jpg" /><img alt class="bg" src="front/images/bg/pexels/coffee-coffee-machine-cup-3042.jpg" />
        <div class="content half-size colors-h">
            <div class="container-fluid">
                <h3>Nossos <span class="highlight">N??meros</span></h3>
                <p class="title"><span class="highlight">Nos ajude </span> a somar</p>
                <div class="row counters">
                    <div class="col-md-3 counter background-25-b">
                        <div class="count player row heading background-10-light">21</div>
                        <div class="caption">Parceiros</div>
                    </div>
                    <div class="col-md-3 counter background-35-h">
                        <div class="count player row heading background-10-light">120</div>
                        <div class="caption">Pupilas</div>
                    </div>
                    <div class="col-md-3 counter background-25-b">
                        <div class="count player row heading background-10-light">590</div>
                        <div class="caption">Seguidores</div>
                    </div>
                    <div class="col-md-3 counter background-35-h">
                        <div class="count player row heading background-10-light">1</div>
                        <div class="caption">Anos</div>
                    </div>
                </div>
            </div>
            <div class="container">
                <p class="text-center "></p>
            </div>
        </div>
    </div>
</section>
<section id="team">
    <div class="view">



    <div class="content colors-e">
        <div class="container">
            <h2>Nosso Time</h2>
            <p class="header-details"><span class="highlight">Mulheres fortes </span>Como voc??</p>
            <p class="lead">Voc?? n??o est?? sozinha,  <strong class="highlight">h?? sempre, </strong>uma palavra de confian??a e algu??m que ir?? entend??-la de verdade. Seja uma menina dos olhos, priorize-se, forme uma rede "de apoio".</p>
            <div class="row">
                <div class="col-md-4 col-sm-12  col-xs-12">
                    <div class="hover-overlay">
                        <img alt="Mike Johnson" src="/front/images/our-team/timealana.jpg" title="Mike Johnson" class="fluid-width">
                        <div class="overlay background-90-b">
                            <div>
                                <p class="text-center text-uppercase heading-b">
                                    Advogada, Mestra em Direito e Empreendedora. M??e de 2. Divorciada.
                                </p>
                                <div class="separator-small"></div>
                                <p class="text-center">
                                    <a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook heading-b"></i></a>
                                    <a target="_blank" href="http://www.youtube.com/"><i class="fa fa-youtube heading-b"></i></a>
                                    <a target="_blank" href="https://github.com/"><i class="fa fa-github heading-b"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="caption">
                        <p>
                            <span class="title">Alana</span>
                            <br/>
                            <span class="highlight">CSO</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12  col-xs-12">
                    <div class="hover-overlay">
                        <img alt="Jessica Specter" src="/front/images/our-team/timealyne.jpg" title="Jessica Specter" class="fluid-width">
                        <div class="overlay background-90-b">
                            <div>
                                <p class="text-center text-uppercase heading-b">
                                    Gestora de projetos, m??e de dois meninos, divorciada. Adora viagens, livros e m??sica boa.
                                </p>
                                <div class="separator-small"></div>
                                <p class="text-center">
                                    <a target="_blank" href="https://twitter.com/"><i class="fa fa-twitter heading-b"></i></a>
                                    <a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin heading-b"></i></a>
                                    <a target="_blank" href="https://plus.google.com/"><i class="fa fa-google-plus heading-b"></i></a>
                                    <a target="_blank" href="https://vimeo.com/"><i class="fa fa-vimeo-square heading-b"></i></a>
                                    <a target="_blank" href="https://www.tumblr.com/"><i class="fa fa-tumblr heading-b"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="caption">
                        <p>
                            <span class="title">Alyne</span>
                            <br/>
                            <span class="highlight">CEO</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12  col-xs-12">
                    <div class="hover-overlay">
                        <img alt="Lynda Smith" src="/front/images/our-team/timemisia.jpg" title="Lynda Smith" class="fluid-width">
                        <div class="overlay background-90-b">
                            <div>
                                <p class="text-center text-uppercase heading-b">
                                    Contadora,
                                    Especialista em Finan??as e em Controladoria,
                                    Consultora de Neg??cios,
                                    Divorciada,
                                    Filha,
                                    Irm??,
                                    M??e de um garoto,
                                    Menina dos Olhos de Deus.
                                </p>
                                <div class="separator-small"></div>
                                <p class="text-center">
                                    <a target="_blank" href="https://www.flickr.com/"><i class="fa fa-flickr heading-b"></i></a>
                                    <a target="_blank" href="https://www.dropbox.com/"><i class="fa fa-dropbox heading-b"></i></a>
                                    <a target="_blank" href="https://www.xing.com/"><i class="fa fa-xing heading-b"></i></a>
                                    <a target="_blank" href="http://vk.com/"><i class="fa fa-vk heading-b"></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="caption">
                        <p>
                            <span class="title">Misia</span>
                            <br/>
                            <span class="highlight">CFO</span>
                        </p>
                    </div>
                </div>
                
                
                <h3><span class="highlight">N??s queremos mudar</span><br/>a vida das pessoas</h3>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <p class="text-center">Depoimentos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
    <section id="deposition">
    <div class="view">
        <div class="content pane">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 stretch-height pane">
                        <div class="view fluid-height">
                            <img alt class="bg" src="front/images/bg/JimLukach/depalana.png" />
                        </div>
                    </div>
                    <div class="col-md-6 pane">
                        <div class="view fluid-height">
                            <div class="content incut colors-e background-solid">
                                <div class="position-middle-center">
                                    <h3 class="text-left"><span class="highlight">Pupila</span> Alana</h3>
                                    <p class="subtitle highlight"><strong>O fim de uma rela????o ?? um luto e comigo n??o foi diferente. Eu, que sempre fui ???fam??lia???, vivia agora a dor da separa????o. E continuo vivendo os ??nus (e b??nus) das escolhas que fiz. </strong></p>
                                    <p>F??cil nunca foi. Nenhuma decis??o de recome??ar ??, mas sou feliz todos os dias, pois isso tamb??m ?? uma escolha. Ao longo da minha rela????o mantive minhas amizades, rela????es individuais e o bom-humor. Tudo isso foi muito importante na reconstru????o, como toda a rede de apoio que tive.
                                    </p>
                                    <p>Hoje, aqui, colocando os tijolos no muro que me representa, me sinto mais fortalecida e mais feliz. Esse ?? um espa??o de gente como a gente: que sofre e  chora, mas sorri e se levanta, porque aqui a gente aprende a ser a Menina dos nossos Olhos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6  stretch-height pane">
                        <div class="view fluid-height">
                            <div class="content incut colors-e background-solid">
                                <div class="position-middle-center-left">
                                    <h3 class="text-left"><span class="highlight">Pupila</span> Alyne</h3>
                                    <p class="subtitle highlight"><strong>Eu vinha de um relacionamento desgastado por anos (empurrando com a barriga mesmo), n??o havia brigas, mas o clima era cada vez pior, at?? que um dia ele falou que ia sair de casa.</strong></p>
                                    <p>
                                        Precisei me reencontrar, viver o luto, chorar e expurgar tudo.
                                        Analisei o que havia acontecido, onde tinha errado e como tratar as
                                        m??goas e ressentimentos,
                                        dessa forma a rede de apoio ?? fundamental nessa fase,
                                        seja uma rede profissional, de amigos ou familiares,
                                        com isso, a Menina dos Olhos surgiu,
                                        da dor sentida na pr??pria carne e do desejo de
                                        auxiliar outras mulheres a superarem esse momento. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-height pane">
                        <div class="view fluid-height">
                            <img alt class="bg" src="front/images/bg/JimLukach/depalyne.png" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 stretch-height pane">
                        <div class="view fluid-height">
                            <img alt class="bg" src="front/images/bg/JimLukach/depmisia.png" />
                        </div>
                    </div>
                    <div class="col-md-6  stretch-height pane">
                        <div class="view fluid-height">
                            <div class="content incut colors-e background-solid">
                                <div class="position-middle-center">
                                    <h3 class="text-left"><span class="highlight">Pupila</span> Misia</h3>
                                    <p class="subtitle highlight"><strong>Duas semanas ap??s o meu ex-marido sair de casa, assumiu seu novo amor no Facebook.</strong></p>
                                    <p>Eu estava em casa, arrasada, sozinha, desempregada (e j?? sem grana!). Bateu aquele desespero sabe?! Como ia passar por aquilo tudo sozinha?
                                        Ent??o fiz a ??nica coisa que me restava: chamei as Amigas! Amigas profissionais que me indicaram a um novo trabalho; amigas espirituais que me apoiaram emocionalmente; amigas maduras que me orientaram em rela????o ao meu filho, a vida e ao amor a mim mesma. Nossa, aprendi muito!
                                        Foi duro! Mas passou! E tive outra grande li????o: tudo passa!

                                    </p>
                                    <p>A Menina dos Olhos tem a mesma inten????o. Acredita, e simplesmente vem! Priorize-se!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="divider">
    <div class="view">
        <img alt class="bg" src="front/images/bg/pexels/art-brush-colors-3112.jpg" /><img alt class="bg" src="front/images/bg/picjumbo/picjumbo.com_IMG_4563.jpg" /><img alt class="bg" src="front/images/bg/picjumbo/picjumbo.com_HNCK1805.jpg" />
        <div class="content half-size colors-h">
            <div class="container">
                <div class="show-list slogan">
                    <div class="show-item">N??s Somos Mulheres</div>
                    <div class="show-item">N??s Somos Supera????o</div>
                    <div class="show-item">N??s Somos For??a</div>
                    <div class="show-item">N??s Somos Respeito</div>
                    <div class="show-item">N??s Somos Apoio</div>
                </div>
                <div class="separator"></div>
                <p class="text-center big-font">
                    <em>Cuidar de Mulheres como a Menina dos seus Olhos.</em>
                </p>
            </div>
        </div>
    </div>
</section>
<section id="services" >
    <div class="view">
    <img alt class="bg" src="front/images/bg/pexels/coffee-coffee-machine-cup-3042.jpg" /><img alt class="bg" src="front/images/bg/pexels/coffee-coffee-machine-cup-3042.jpg" />
    <div class="content colors-e">
        <div class="container">
            <h2>Servi??os</h2>
            <p class="header-details"><span class="highlight">Confira os servi??os</span> Para Voc??</p>
            <p class="lead">?? t??o divicil percorrer a jornada de uma separa????o ou div??rcio sozinha; n??o sabemos porque vivemos na pele.
                Por isso estruturamos nosso apoio em tr??s grandes ??reas: Jur??dico, Recoloca????o Profissional e Apoio Psicol??ico.
                Escolha uma, duas ou as tres ??reas (o combo completo tem um desconto especial!)
                para ter o apoio que precisa! Voc?? ?? nossa prioridade! Seja a sua tamb??m!</p>
            <div class="row">
                <div class="col-md-4 top-line">
                    <h4>Solu????es<br />Jur??dicas</h4>
                    <p class="highlight">
                        Oferecer solu????es em servi??os jur??dicos,
                        como separa????o judicial,
                        guarda dos filhos,
                        pens??o aliment??cia,
                        programa????o de visitas,
                        aliena????o parental;
                        entre outros.</p>
                </div>
                <div class="col-md-4 top-line">
                    <h4>Recoloca????o<br />Profissional</h4>
                    <p class="highlight">
                        Assistir a mulher no seu ingresso ou retorno ??s atividades profissionais,
                        no empreendedorismo consciente,
                        de acordo com curr??culo e perfil de cada uma.</p>
                </div>
                <div class="col-md-4 top-line">
                    <h4>Apoio<br />Psicol??gico</h4>
                    <p class="highlight">
                        Disponibilizar servi??os de apoio psicol??gico e/ou terapia,
                        rodas de conversas, encaminhamento a psiquiatria, e outros servi??os.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section id="contact">
<div class="view">
    <img alt class="bg" src="front/images/bg/pexels/art-brush-colors-3112.jpg" /><img alt class="bg" src="front/images/bg/picjumbo/picjumbo.com_IMG_4563.jpg" /><img alt class="bg" src="front/images/bg/picjumbo/picjumbo.com_HNCK1805.jpg" />
    <div class="content full-size colors-h">
        <div class="container">
            <h2>Contato</h2>
            <p class="header-details">Fale com a gente</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="text-right scroll-in-animation" data-animation="fadeInLeft">
                        <p class="big-font uppercase">
{{--										Tel: <strong class="highlight">+7 (781) 503-1810</strong>--}}
                        </p>
                        <p class="big-font">
                            <b>
                        <a href="mailto:info@ouraddress.com">contato@ameninadosolhos.com.br</a><br/>
                        <a href="http://www.ouraddress.com">www.ameninadosolhos.com.br</a>
                    </b>
                        </p>
                        <p class="big-font">
                            <a target="_blank" href="https://instagram.com/meninadosolhos.startup?igshid=36jl2hq5npwq">
                                <span class="fa-stack">
                                    <i class="fas fa-circle fa-stack-2x heading"></i>
                                    <i class="fab fa-instagram fa-stack-1x text-background"></i>
                                </span>
                            </a>
                            <a target="_blank" href="https://www.linkedin.com/in/menina-dos-olhos-7773531a3">
                                <span class="fa-stack">
                                    <i class="fas fa-circle fa-stack-2x heading"></i>
                                    <i class="fab fa-linkedin fa-stack-1x text-background"></i>
                                </span>
                            </a>
                            <a target="_blank" href="https://www.facebook.com/meninadosolhos.startup/">
                                <span class="fa-stack">
                                    <i class="fas fa-circle fa-stack-2x heading"></i>
                                    <i class="fab fa-facebook fa-stack-1x text-background"></i>
                                </span>
                            </a>
                            <a target="_blank" href="https://youtu.be/dnJWY48ruS4">
                                <span class="fa-stack">
                                    <i class="fas fa-circle fa-stack-2x heading"></i>
                                    <i class="fab fa-youtube fa-stack-1x text-background"></i>
                                </span>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-left scroll-in-animation" data-animation="fadeInRight">
                       <form action="{{ route('store.sendContact') }}" method="get">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6 control-group">
                                        <label for="name" class="">Digite seu nome</label>
                                        <input name="name" id="name"  type="text"  placeholder="Digite seu nome" required>

                                    </div>
                                    <div class="col-md-6 control-group">
                                        <label for="email" class="">Digite seu e-mail</label>
                                        <input name="email" id="email" type="email"  required placeholder="Digite seu e-mail">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 control-group">
                                        <label for="message" class="">Digite sua mensagem</label>
                                        <textarea name="message"  id="message" required placeholder="Digite sua mensagem"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 form-actions my-3">
                                    <button class="btn btn-menina float-right"  onclick="alerta()"> <i class="fas fa-check"></i> Enviar</button>
                                </div>
                            </div>
                        </form>
                        {{-- <form-contact></form-contact> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript">
        function alerta() {
            if(document.getElementById("name").value != '' 
                && document.getElementById("email").value != '' 
                && document.getElementById("message").value != ''
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
</section>
<!-- END: Page content -->

@endsection
@section('js')
    <script>


        $("document").ready(function(){
            $.notify.addStyle('foo', {
                html:
                    "<div>" +
                    "<div class='clearfix'>" +
                    "<div class='title-notify' data-notify-html='title'/>" +
                    "<div class='buttons-notify'>" +
                    "<button class='yes' data-notify-text='button'></button>" +
                    "</div>" +
                    "</div>" +
                    "</div>"
            });
            $.notify({
                title: `Usamos cookies para ajudar a personalizar conte??do, adaptar e medir an??ncios,
                 e oferecer uma experi??ncia mais segura para voc??.
                 Ao usar o site, voc?? concorda com a utiliza????o de cookies para
                 coletar informa????es dentro e fora da Menina dos olhos.
                 Leia nossa <a href="/politica-privacidade">Pol??tica de cookies e privacidade</a> para saber mais ou acesse as ???Prefer??ncias de cookies??? no seu navegador para gerenciar suas configura????es.`,
                button: 'Aceito'
            }, {
                style: 'foo',
                autoHide: false,
                clickToHide: false,
                position:"bottom"
            });
        });
        //listen for click events from this style
        $(document).on('click', '.notifyjs-foo-base .no', function() {
            //programmatically trigger propogating hide event
            $(this).trigger('notify-hide');
        });
        $(document).on('click', '.notifyjs-foo-base .yes', function() {
            //show button text
            //hide notification
            $(this).trigger('notify-hide');
        });

    </script>
@endsection
