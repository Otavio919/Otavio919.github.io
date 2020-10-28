<HTML>
    <head>
         <meta charset="utf-8">
  <script type="text/javascript">
        
        var idade = 25
   </script>

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
      <style  type="text/css">
          ::-webkit-scrollbar {
              width: 0px;
          }

          body{
            background-image: url("754787.png");
          
            width:100%;
            height:100%;
            border-radius: 10px;
            color: yellow;
            background-color:black;
             }
             
          .b{
             background-color:#1B025D;

             }

          .r{
            text-align: right;
            }

          .a{ 
            height: 13vh;
            }

          .ab{
            height:5vh;
            font-size: 2vh;
            }
          .abc{
                height:70vh;
            }
          .p{
              height:8vh;
              color: yellow;
            }
          .r{
              border-radius: 12px;
            }
        .n{
              white-space: nowrap;
            }
        .f{
                font-size: 35px;
            }
         .t{
             height:15vh;
         }
         .dr{
            background-color:#4B0082;
         }


        </style>
    
     </head>

    <body>

 <div class container-fluid>
 <div class="d-flex flex-row  mb-3">
  <div class="col-md-8 b  "><a class="navbar-brand" href="index.php"> <img src="JoJostorelogo.png" alt="some text" width=170 height=90 class=""></a></div>
  <div class="col-md-3 b p-3  "><input type="input" name="pesquisa" value="" style="height:5vh" class="mt-2 offset-6" require><br></div>
     <div class="col-md-1 b p-3 "><button type="submit" name="botaodepesquisa"class="btn mt-2 dr" style="" value="6">🔍</button><br></div>
 
  <div class="col-md-2 dr  offset-3  "style="height:10vh "></div>
    
  

 </div>
 
 <div class="d-flex flex-row  mb-3">
  <div class=" b offset position-fixed  flex-column abc rounded-right">
  <div class="col-md-1 b p-1 text-nowrap p"><button type="submit" class="btn b p-1 p " style="width:30vh" value="1">Melhores Stands Principais</button><br></div>
  <div class="col-md-1 b p-1 text-nowrap p"><button type="submit" class="btn b p-1 p " style="width:30vh" value="2">Punch Boy Stand</button><br></div>
  <div class="col-md-1 b p-1 text-nowrap p"><button type="submit" class="btn b p-1 p " style="width:30vh" value="3">Long Range Stand</button><br></div>
  <div class="col-md-1 b p-1 text-nowrap p"><button type="submit" class="btn b p-1 p " style="width:30vh" value="4">Class S Stand</button><br></div>
  <div class="col-md-1 b p-1 text-nowrap p"><button type="submit" class="btn b p-1 p " style="width:30vh" value="5">Animal Stand User</button><br></div>
  <div class="col-md-1 b p-1 text-nowrap p"><button type="submit" class="btn b p-1 p " style="width:30vh" value="6">Main Stands</button><br></div>
  <div class="col-md-1 b p-1 text-nowrap p"><button type="submit" class="btn b p-1 p " style="width:30vh" value="61">Villain Stand</button><br></div>
  <div class="col-md-1 b p-1 text-nowrap p"><button type="submit" class="btn b p-1 p " style="width:30vh" value="62">Items</button><br></div>
  </div>
        
     

  <div class="col-md-3 b  offset-3 n   border  border-dark rounded-left border-right-0" style="height:77vh ">
    <img src="zipperman.png" alt="some text" width=315vh height=400vh class="mt-3">

     <div class="col-md-5 b p-1 f p">

        <button type="submit" class="btn b p-1 p text-nowrap font-size f  dr mt-3" style="" value="">Comprar</button>

      
    </div>
  </div>
  
  <div class="col-md-5 b  "style="height:77vh">
   
      <div class="col-md-10 b p-1 p" >
        <p class="h1">Sticky Fingers</p>
        <p class="h6 offset-1"> Sticky Fingers (スティッキィ・フィンガーズ Sutikkyi Fingāzu), às vezes encurtado para Sticky F (スティッキィー・Ｆ) é a Stand de Bruno Buccellati, destacada em Vento Aureo.<br>
        Sticky Fingers possui o poder de colocar zíperes em qualquer coisa que toque. Isso permite a ele colocar zíperes em paredes para atravessá-las, separar partes de objetos ou mesmo recolocar partes arrancadas.</p>
        <button type="submit" class="btn b  p text-nowrap dr offset-8 " style="" value="11">-</button>estoque
        <button type="submit" class="btn b  p text-nowrap dr mt-6" style="" value="12">+</button>
        <p class="h1 margin-top-2">$  20,00 </p>
        <p class="h6 margin-top-2 text-al">ou R$  200,00 </p>

      </div>
  </div>

  


     
<div class="d-flex flex-row ab fixed-bottom position-fixed margin-top-10">
  <div class="col-md-6 b p-1 ">JoStore</div>
  <div class="col-md-6 b  p-1  ">made by: Duarte & Otavio</div>
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
        
        if(isset($_POST['data_de_nasc'])) {
            $dt = $_POST['data_de_nasc'];

            $_SESSION['dt'] = $dt;

            echo !empty($dt) ? foi() : '<script>alert("Não pode responder o MegaQuiz sem ")</script>';   
        }

        function foi(){
            header("Location: per1.php");
        }
    

?>

    </body>

</HTML>

