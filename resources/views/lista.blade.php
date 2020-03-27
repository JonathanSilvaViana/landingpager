<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Backend</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
  <link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">
  <style>
      .mensagem-row{
            display: block;
            width: 110px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
  </style>
</head>
<body>
  
   <div class="navbar-fixed">
       <nav class="green accent-2" role="navigation">
    <div class="nav-wrapper container">
    <a id="logo-container" href="#" class="brand-logo">
        <i id="logo-container-font" class="large material-icons">chrome_reader_mode</i>
    </a>
      <ul class="right hide-on-med-and-down">
        
        <li>
        <a href="mailto:jonathansilva@daum.com?Subject=Support%20CMS" target="_blank">
          <strong>
           Support
          </strong>                
        </a>
        </li>
        
        <li>
            <a href="#">
               <strong>
                Logout
               </strong>
            </a>
        </li>
        
      </ul>

      <ul id="nav-mobile" class="sidenav">
        
        <li>
        <a href="mailto:jonathansilva@daum.com?Subject=Support%20CMS" target="_blank">
          <strong>
           Support
          </strong>                
        </a>
        </li>
        
        <li>
            <a href="#">
               <strong>
                Logout
               </strong>
            </a>
        </li>
        
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
   </div>
   
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      
      <br><br>
      
      <h3 class="header center green-text text-accent-2 software-template-name">
       Relação de cadastrados    
      </h3>
      

      
      <form>
      
      <div class="row center" id="data-table-content">
      
      <div id="filter-container" class="panel panel-default col-md-12" style="padding:20px;">
			<div class="input-field col md8 s12">
				<input type="search" class="validate search" id="filter">
				<label id="enunciado-localizar" for="filter" class="enunciado-localizar">
                    <span class="material-icons">
                        search
                    </span>
                    Localize interessados pelo telefone
                </label>
                <label class="esconde-localizar" for="filter">
                    <span class="material-icons">
                        search
                    </span>
                </label>
			</div>
     
      <table class="table table-striped user-table table-inverse highlight centered responsive-table striped green accent-2" id='students' style="width:100%;">
                <!-- Table Headings -->
                 <thead>
                   <tr class="white-text">
                       <th>&nbsp;</th>
                       <th>ID</th>
                       <th>Nome</th>
                       <th>Whatsapp</th>
                       <th>E-mail</th>
                       <th>Mensagem</th>
                       <th>Nível</th>
                   </tr>
                 </thead>
                 
                 <tbody>
                    @foreach($contatos as $row)           
          <tr class="linha-table-{{ $row->id }}" id="linha-table-{{ $row->id }}">
            <td>
                <p>
                  <label>
                    <input type="checkbox"/>
                    <span>&nbsp;</span>
                  </label>
                </p>
            </td>
            <th scope="">{{ $row->id }}</th>
            <td class="nome">{{ $row->nome }} {{ $row->sobrenome }}</td>
        <td class="filter-cell whatsapp-{{$row->whatsapp}}">
                {{ $row->whatsapp }}
                <br>
                <a class="waves-effect waves-light btn-small green"
                href="https://api.whatsapp.com/send?phone={{ studly_case($row->whatsapp) }}&text=Ol%C3%A1%2C%20recebemos%20sua%20mensagem.%20Vamos%20estudar%20coreano%3F%20%F0%9F%98%84" 
                target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </td>
            <td class="email-{{ $row->email }}">{{ $row->email }}</td>
            <td class="mensagem-row tooltipped" data-position="bottom" data-tooltip="{{ $row->textarea }}">
                {{ $row->textarea }}
            
            </td>
            <td>

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
          </tr>

          @endforeach
        </tbody>
                 
			</table>
       </div>
        
      </div> 
      
      
      <div class="row center">
        
        

        <!-- Modal para imprimir -->
<div id="modalPrint" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Relação de estudantes</h4>
    <p>A bunch of text</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
  </div>
</div>
        
        
      </div>
      
      </form>

      <div class="fixed-action-btn">
        <a class="btn-floating btn-large green accent-2">
          <i class="large material-icons green-text">menu</i>
        </a>
        <ul>
          <li><a class="btn-floating red"><i class="fa-lg fas fa-trash"></i></a></li>
          <li><a href="#modalPrint" class="btn-floating green modal-trigger"><i class="fa-lg fas fa-file-excel"></i></a></li>
        </ul>
      </div>
      
      <br><br>

    </div>
  </div>




  <footer class="page-footer green accent-2">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text software-template-name">Micro Oliva Template</h5>
          
             <p class="grey-text text-lighten-4">
             
                 <strong>
             
                    Simple CMS template made por <a class="white-text" href="faceboook.com/qiao.jonathan">Jonathan</a> using many badass frontend frameworks!!!
                    
                </strong>    
                
             </p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">
              Options
          </h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
            <li><a class="white-text" href="#!">Link 5</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">
              Links
          </h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
            <li><a class="white-text" href="#!">Link 5</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
          <strong>
              See on 
                 <a class="white-text text-lighten-3" href="http://materializecss.com">
                     GitHub 
                 </a>
         </strong>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="{{ asset('/js/lista.js') }}"></script>
  <script src="{{ asset('/js/tableFilter.js') }}"></script>
  		<script>
			//search filtering for table of students
			$(document).ready(function(){
                //$('.tooltipped').tooltip();
                $('#filter-container').tableFilter({tableID: '#students', autofocus: true});
                $('.modal').modal();
            });
            
            //remove o placeholder junto do label em pesquisar
            $('#enunciado-localizar').click(function() {
            $(this).addClass('esconde');
            });

		</script>
    

  </body>
</html>
