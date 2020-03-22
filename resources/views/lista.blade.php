<!DOCTYPE html>
<html>
<head>
    
    <title>backend</title>

    <!-- Latest compiled and minified CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">

    <style>
        .texto-branco{
            color: #fff;
            font-weight: bolder;
        }

        .texto-branco:hover{
            color: #fff !important;
        }

        .mensagem-row{
            display: block;
            width: 110px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        .my-custom-scrollbar {
            position: relative;
            height: 200px;
            overflow: auto;
        }
        .table-wrapper-scroll-y {
            display: block;
        }
    </style>

</head>
<body>

<div class="container">

    <h1>Lista de mensagens</h1>

    <hr />

    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Whatsapp</th>
            <th>E-mail</th>
            <th>Mensagem</th>
            <th>Nível</th>
            <th>Ver +</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contatos as $row)

                <tr>

                <th scope="row">{{ $row->id }}</th>
                <td>{{ $row->nome }} {{ $row->sobrenome }}</td>
                <td>{{ $row->whatsapp }}</td>
                <td>{{ $row->email }}</td>
                <td class="mensagem-row">{{ $row->textarea }}</td>
                <td alt="completar no bd nivel-{{ $row->nivel_id }}" title="completar no bd nivel-{{ $row->nivel_id }}">
                
                    @if($row->nivel_id == 1)
                    
                        Iniciante

                    @elseif($row->nivel_id == 2)

                        Básico

                    @elseif($row->nivel_id == 3)

                        Intermediário
                        
                    @elseif($row->nivel_id == 4)

                        Avançado

                    @elseif($row->nivel_id == 5)

                        TOPIK   

                    @else

                        404

                    @endif

                </td>

                <td alt="completar no bd">
                    <div class="btn-group">
                        <a class="text-center texto-branco" href="#" data-toggle="modal" data-target="#alunocadastradado{{ $row->id }}">
                            <button type="button" class="btn btn-info">
                                <i class="far fa-address-card"></i>
                            </button>
                        </a>
                    </div>
                </td>

                <!--modal de cada aluno-->

                <div class="modal fade" id="alunocadastradado{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Aluno id: {{ $row->id }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <ul class="list-group list-group-flush">

                                    <li class="list-group-item">Nome: {{ $row->nome }} {{ $row->sobrenome }}</li>

                                    <br>

                                    <li class="list-group-item">Whatsapp: {{ $row->whatsapp }}</li>

                                    <br>

                                    <li class="list-group-item">E-mail: {{ $row->email }}</li>

                                    <br>

                                    <li class="list-group-item">Mensagem: {{ $row->textarea }}</li>

                                    <br>

                                    <li class="list-group-item">Nível:

                                        @if($row->nivel_id == 1)
                    
                        Iniciante

                    @elseif($row->nivel_id == 2)

                        Básico

                    @elseif($row->nivel_id == 3)

                        Intermediário
                        
                    @elseif($row->nivel_id == 4)

                        Avançado

                    @elseif($row->nivel_id == 5)

                        TOPIK   

                    @else

                        404

                    @endif

                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>



            </tr>


        @endforeach
        </tbody>
    </table>

</div>


<!-- modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>
