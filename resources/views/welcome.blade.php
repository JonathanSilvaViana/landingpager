<!doctype html>
<!--<html lang="{{ app()->getLocale() }}">-->
<html lang="pt-br">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <!-- <meta name="viewport" content="width=device-width, initial-scale=1">-->

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta content="Aulas de coreano on-line ao vivo" description="Aulas de coreano on-line"/>
        <meta name="keywords" content="aula de coreano, aula, skype, on-line, aula ao vivo, Dona Lisa, coreano on-line"/>
        <meta name="robots" content="index, follow">
        <meta charset="utf-8">

        <title>Aula Coreana</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" media="screen,projection">

        <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" />

        <link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">

    </head>
    <body>
        <!--<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>-->

        <div class="navbar-fixed">
            <nav class="light-blue lighten-2" role="navigation">
                <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo">Aula coreana</a>
                    <ul class="right hide-on-med-and-down link-menu-site">
                        <li class="sidenav-close"><a class="menu-options-landing-page-wp" href="https://www.kpopstation.com.br">Kpopstation</a></li>
                        <li class="sidenav-close"><a class="menu-options-landing-page-wp" href="#footer">Materiais</a></li>
                    </ul>

                    <ul id="nav-mobile" class="sidenav">
                        <li class="sidenav-close"><a class="menu-options-landing-page-wp" href="https://www.kpopstation.com.br">Kpopstation</a></li>
                        <li class="sidenav-close"><a class="menu-options-landing-page-wp bt-materiais" href="#footer">Materiais</a></li>
                    </ul>
                    <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                </div>
            </nav>
        </div>

        <div class="section no-pad-bot" id="index-banner">
            <div class="container">

                @if (count($errors) > 0)
        <div class="red">
            <ul class="white text">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


                <div class="hide-on-small-only">

                    <img class="responsive-img banner-desk-and-tablet" src="{{ asset('/img/aulas%20de%20coreano%20no%20Brasil.png') }}" width="70%" height="auto">

                    <br><br><br><br><br><br><br>

                    <h2 class="header center titulo-pagina sombra-texto animated pulse delay-1s faster">Inscreva-se para aprender coreano!<br><br></h2>

                </div>

                <div class="show-on-small hide-on-med-and-up center-align banner-mobile-only-wordpress animated pulse delay-1s faster">

                    <br><br><br>

                    <h2 class="header center titulo-pagina sombra-texto center-align">Inscreva-se para aprender coreano!<br><br></h2>

                </div>



                <div class="row white">
                    <div class="row center white">
                        <h5 class="header col s12 light">Venha estudar coreano divertidamente com os melhores instrutores, começe inscrevendo-se abaixo:</h5>
                    </div>
                    <form class="col s12" method="post" action="/enviar">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="input-field col l6 s12">
                                <i class="material-icons prefix">account_circle</i>
                                <input id="first_name" name="nome" type="text" class="validate" required="true">
                                <label for="first_name">Nome</label>
                                <span class="helper-text" data-error="Algo errado aqui" data-success=":)">&nbsp;</span>
                            </div>
                            <div class="input-field col l6 s12">
                                <i class="fas fa-users prefix"></i>
                                <input id="last_name" name="sobrenome" type="text" class="validate" required="true">
                                <label for="last_name">Sobrenome</label>
                                <span class="helper-text" data-error="Algo errado aqui" data-success=":)">&nbsp;</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col l6 s12">
                                <i class="fab fa-whatsapp prefix"></i>
                                <input id="whatsapp" name="whatsapp" type="text" class="validate" required="true">
                                <!--<input id="whatsapp" name="whatsapp" type="text" class="validate" required="true" data-mask="(99)9999-9999" pattern="\(\d{2}\)\d{4}-\d{4}">-->
                                <!--<script type="text/javascript">$("#whatsapp").mask("(99)9999-9999");</script>-->
                                <label for="whatsapp">Whatsapp ou celular sem o 9</label>
                                <span class="helper-text" data-error="Algo errado aqui, tente sem o 9" data-success=":)">&nbsp;</span>
                            </div>

                            <div class="input-field col l6 s12">
                                <i class="fas fa-at prefix"></i>
                                <input id="email" name="email" type="email" class="validate" required="true">
                                <label for="email">E-mail</label>
                                <span class="helper-text" data-error="Algo errado aqui" data-success=":)">&nbsp;</span>
                            </div>
                        </div>


                        <div class="row">
                            <div class="input-field col l12 s12">
                                <div class="input-field col s12">
                                 <i class="material-icons prefix">record_voice_over</i>
                                    
                                    <select id="nivel_id" name="nivel_id" class="form-control" required="true">
                                        <option value="null" disabled selected>Selecione uma opção</option>
                                        @foreach (SistemaLaravel\Nivel::all() as $nivel)
                                        <option class="light-blue lighten-2" value="{{ $nivel->id }}">{{ $nivel->nome }}</option>
                                        @endforeach
                                    </select>

                                </div>         
                            </div>
                        </div>


                        <div class="row">
                            <div class="input-field col l12 s12">
                                <i class="material-icons prefix">mode_edit</i>
                                <textarea id="textarea" name="textarea" class="materialize-textarea" maxlength="100" data-length="100" required="true"></textarea>
                                <label for="textarea">Mensagem</label>
                                <span class="helper-text" data-error="Algo errado aqui" data-success=":)">&nbsp;</span>
                            </div>
                        </div>

                        <div class="row center">
                            <button type="submit" name="inscrever" href="" id="download-button" class="btn-large waves-effect waves-light red accent-4 pequeno_titulo">
                                inscrever-se
                            </button>
                        </div>

                    </form>
                </div>



                <br><br>

            </div>
        </div>

        <div class="container">
            <div class="section">

                <!--   Icon Section   -->
                <div class="row">

                    <h5 class="center pequeno_titulo">Por que aprender coreano?</h5>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="fas fa-language"></i></h2>
                            <h5 class="center pequeno_titulo">Mais do que um novo idioma</h5>
                            <hr>

                            <p class="light">O coreano é atualmente considerado o sistema de escrita mais lógico do mundo.
                                O alfabeto coreano, o Hangul, não evoluiu lentamente como demais sistemas alfabéticos. Foi criado para ser propositalmente facilitado de falar, ler e escrever.</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="fas fa-business-time"></i></h2>
                            <h5 class="center pequeno_titulo">Um preparo para o futuro</h5>
                            <hr>

                            <p class="light">
                                Aprender o idioma coreano é certamente uma boa definição de investimento financeiro. Isso poderia ajudar a tornar sua carreira ou negócio mais relevante no futuro. A Coréia já é uma das economias mais fortes da Ásia e, se as tendências continuarem, aprender coreano pode ser tão importante quanto aprender Mandarim ou Inglês para os negócios e perspectivas de carreira.</p>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="fab fa-fort-awesome"></i></h2>
                            <h5 class="center pequeno_titulo">Novas experiências e contatos</h5>
                            <hr>

                            <p class="light">Para quem gosta de conhecer novos países, a Coréia é um lugar cheio de belas paisagens e nativos dispostos a ajudar visitantes, mas para uma viagem o idioma coreano pode ser uma ferramenta indispensável para melhor interagir em estabelecimentos e ter um experiência mais vivída possível.</p>
                        </div>
                    </div>
                </div>

            </div>
            <br><br>
        </div>

        <footer class="page-footer light-blue lighten-2" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text pequeno_titulo">Sobre as aulas</h5>
                        <p class="grey-text text-lighten-4 texto-baixo">As aulas de coreano são on-line em modalidade EAD onde docentes lecionam idioma coreano tais como alfabeto, gramática, expressões diárias e afins. Os modelos de aulas seguem um padrão colaborativo entre docentes e alunos, onde cada um pode interagir e sugerir assuntos relacionados aos temas abordados.</p>
                    </div>

                    <div class="col l6 s12">
                        <h5 class="white-text pequeno_titulo oqvcprecisa">O que vc precisa</h5>
                        <ul>
                            <li><a class="white-text texto-baixo" href="#!"><i class="fab fa-2x fa-skype"></i>&nbsp;&nbsp;Skype</a></li>
                            <li><a class="white-text texto-baixo" href="#!"><i class="fab fa-2x fa-evernote green-text darken-1"></i>&nbsp;&nbsp;Evernote</a></li>
                            <li><a class="white-text texto-baixo" href="#!"><i class="fab fa-2x fa-facebook-square blue-text darken-4"></i>&nbsp;&nbsp;Facebook</a></li>
                            <li><a class="white-text texto-baixo" href="#!"><i class="fas fa-2x fa-ethernet yellow-text accent-4"></i>&nbsp;&nbsp;Rede cabeada</a></li>
                            <li><a class="white-text texto-baixo" href="#!"><i class="fab fa-2x fa-google-drive teal-text darken-4"></i>&nbsp;&nbsp;Google Drive</a></li>
                            <li><a class="white-text texto-baixo" href="#!"><i class="fas fa-2x fa-cloud indigo-text accent-4"></i>&nbsp;&nbsp;OneDrive</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <strong>
                        Feito por: </strong>
                    <a class="white-text" href="facebook.com/qiao.jonathan">Jonathan Silva</a>
                </div>
            </div>
        </footer>

        <!--JavaScript at end of body for optimized loading-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://materializecss.com/templates/starter-template/js/init.js"></script>
        <script src="{{asset('js/initier.js')}}"></script>
        <script src="{{asset('js/maskedinput.js')}}"></script>
        <script language="javascript">
            function ApplyCelular94Digits(campo)
            {
                campo.focusout(function(){
                    var phone, element;
                    element = jQuery(this);
                    jQuery.mask.definitions['~'] = $.mask.definitions['*'];
                    delete $.mask.definitions['*'];
                    element.unmask();
                    element.mask("99 99999-9999");
                }).trigger('focusout');
            }
        </script>
        <script>
            ApplyCelular94Digits(jQuery('#whatsapp'));
        </script>

        <div class="drag-target"></div>
        <div class="sidenav-overlay"></div>

    </body>
</html>
