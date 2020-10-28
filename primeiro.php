
<HTML>
    <head>
         <meta charset="utf-8">
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <style>
		::-webkit-scrollbar {
			   width: 0px;
		}

		body{
			background-image: url("background pt5.jpg");
			color: white;
		}
        .b{
           background-color:#4B0082;
        
        }


	</style>
    </head>

    <body>

 <div class container-fluid>
      <div class="row mt-2">
         <div class="offset-3 col-6 b border border-primary text-center shadow-lg p-3  rounded">
             <h1 mt-2>JoStore</h1>
         </div>
     </div>

     <div class="row mt-4">
         <div class="offset-2 col-8 b border border-primary border-bottom-0 text-center shadow-lg p-3  rounded ">
            <h5>Esse site pode conter conteudo que o publico juvenil em geral não esta acostumado, então bote sua data de nascimento para que possamos nos adequar :</h5>
           </div>
         </div>

  <form action="index.php" method="POST" enctype="multipart/form-data">

    <div class="row">
        <div class="offset-2 col-8 b border border-primary border-top-0 text-center shadow-lg p-3  rounded">
            <input type="date" name="data_de_nasc" value="" require><br>
            <button type="submit" class="btn btn-dark  mt-2 btn-12" value="enviar">Enviar</button>
        </div>
    </div>
 </form>

  <div class="row b mb-0 fixed-bottom position-absolute "style="height: 50px;">
         <div class=" col-12 b ml-5 mt-1 h-25 d-inline-block ">
             <h3>JoStore</h3>
         <div class=" col-12 b mr-5 mt-1 h-25 d-inline-block float-left">
             <h3>JoStore</h3>
         </div>
         </div>
     </div>
</div>

<?PHP
    $nome = 'Otabio';
    $sobrenome = '-kun';
 
    $nome_completo = $nome;
    $nome_completo .= $sobrenome;
        //echo $nome_completo;
        date_default_timezone_set('America/Sao_Paulo');

        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        
//if(isset($_POST['data_de_nasc'])) {
            $dt = $_POST['data_de_nasc'];

            $_SESSION['dt'] = $dt;

            echo !empty($dt) ? foi() : '<script>alert("Não pode responder o MegaQuiz sem ")</script>';   
        }

        function foi(){
            header("Location:index.php");
        }
    

?>

    </body>

</HTML>
