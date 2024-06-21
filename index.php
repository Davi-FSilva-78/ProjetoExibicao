<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Painel de informações</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<header> 
  <?php 
  session_start();
  if(isset($_SESSION['acesso'])==true) {
   include("modelos/headerLog.php");
    
  } else{
    include("modelos/header.php");
  }

  
  ?> 
</header>

<section>
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    
  <div class="carousel-inner" >
        <div class="carousel-item active" >
        <img src="img/xadrez-camargo.jpg" class="d-block w-100" alt="..." height="750px">
        </div>
        <div class="carousel-item">
        <img src="img/vestibular-fatec.jpg" class="d-block w-100" alt="..." height="750px" >
        </div>
      <div class="carousel-item">
        <img src="img/titulo-eleitor.jpg" class="d-block w-100" a lt="..."  height="750px">
    </div>

    </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>
<br>
<br>
<h1>Eventos</h1>
<section class="eventos">
<div class="convite">
  <h2>Venha celebrar conosco na Festa Junina da Etec Camargo Aranha!</h2>
  <img src="img/sao_joao.jpg" class="sao_joao" alt="">      
        <p>Estamos organizando uma festa junina incrível para celebrar nossa cultura e tradição. Anote na sua agenda: 15 de junho de 2024.</p>
        <p>Não perca essa oportunidade de se divertir com comidas típicas, danças e muita animação!</p>
        <a href="https://www.instagram.com/eteccamargoaranha/?hl=pt-br" class="botao">Saiba mais</a>
  </div>
    <br>
    <br>
  <div class="convite">
    <h2>Convite para Apresentação de Pré-TCC</h2>
      <img src="img/apresentacao.jpg" alt="" class="apresentacao">
        <p>Você é nosso convidado especial para a apresentação de pré-Trabalho de Conclusão de Curso (pré-TCC) dos alunos da turma de Análise e Desenvolvimento de Sistemas, 2º módulo, da Etec Camargo Aranha.</p>
        <p>A apresentação será realizada no dia 18 de junho de 2024, a partir das 19 horas, no auditório da escola.</p>
        <p>Não perca a oportunidade de conhecer os projetos inovadores que nossos alunos têm desenvolvido! Sua presença é muito importante para eles.</p>
        <a href="https://www.instagram.com/n3rds.ca/?igsh=MWwwMW5taWwydDdrOA%3D%3D" class="botao">Saiba mais</a>
    </div>
    <div class="convite">
        <h2>Participe do Curso de Análise e Desenvolvimento de Sistemas na Etec Camargo Aranha!</h2>
        <img src="img/alunos.jpg" alt="" class="alunos">
        <p>Venha fazer parte do nosso curso de Análise e Desenvolvimento de Sistemas na Etec Camargo Aranha. Prepare-se para uma carreira promissora na área de tecnologia!</p>
        <p>Inscreva-se no Vestibulinho Etec para concorrer a uma vaga. Não perca essa oportunidade de estudar em uma das melhores escolas técnicas do estado!</p>
        <a href="http://www.vestibulinhoetec.com.br/" class="botao" target="_blank">Inscreva-se</a>
    </div>
    <br>
    <br>
</section>

<footer> 
  <?php include("modelos/footer.php") ?> 
</footer>

</body>
</html>