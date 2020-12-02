<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Adicionando fonts google -->
    <link href = "https://fonts.googleapis.com/css2? family = Roboto: wght @ 100 & display = swap" rel = "stylesheet">
    
    <title>thema danki</title>
</head>
<body>
    <!-- Area do cabeçalho (menu) -->
   <section class="topo"> 
         <!-- classe para centralizar o conteudo -->  
        <div class="center">  
                  <header class="logo"> <img src="img/logo.png" alt=""></header>
                <!-- menu  desktop-->
                   <ul class="menu-desktop">
                       <li> <a href="http://">Home</a></li>
                       <li> <a href="http://">Sobre</a></li>
                       <li> <a href="http://">Contato</a></li>
                   </ul>
                <!-- menu mobile -->
                   <div class="menu-mobile">  <!-- icone do menu responsivel -->
                   <i class="fas fa-align-right"></i>
                        <ul>
                            <li> <a href="http://">Home</a></li>
                             <li> <a href="http://">Sobre</a></li>
                             <li> <a href="http://">Contato</a></li>
                        </ul>
                   </div>
                   <div class="clear"></div>
                <!-- conteudo no cabeçalho -->
                   <div class="conteudo-topo">
                       <h2>Melhore a comunicação com o seu cliente e time</h2>
                       <p>Consultoria especializada em startup, empresas, principalmente, pessoas.</p>
                       <a href="https://google.com">Ver demonstração</a>
                   </div>
                <!-- imagem do cabeçalho -->
                    <div class="imagem-topo"> 
                        <img src="img/ilustracao.png" >
                     </div>
                <div class="clear"></div>
        </div>
    </section>
    <!-- classe do icone divisão do conteudo principal e o corpo da pagina -->
    <div class="circle"><i class="fas fa-angle-down"></i></div>

    <section class="slides">
        <div style="max-width: 600px;margin: 40px auto;overflow: hidden; " class="conterner-slider">
            <img src="img/amazon.png" alt="">
            <img src="img/costco.png" alt="">
            <img src="img/dominos.png" alt="">
            <img src="img/uber.png" alt="">
            <img src="img/walmart.png" alt="">
            <img src="img/amazon.png" alt="">
            <img src="img/costco.png" alt="">
            <img src="img/dominos.png" alt="">
            <img src="img/uber.png" alt="">
            <img src="img/walmart.png" alt="">
        </div>
    </section>
<!-- seção de diferenciais da pagina -->
<section class="diferenciais">
    <div class=" center">
        <h2>Contribuímos de ponto a ponta</h2>
        <div class="img-diferenciais">
            <div class="img01">
                <img src="img/ilustracao-01.png" alt="">
                <h3>Ambiente Mible</h3>
                <p> Lorem ipsum,<br> dolor sit amet consectetur adipisicing elit. Dolor sit amet consectetur adipisicing elit</p>
            </div>
            <div class="img01">
                <img src="img/ilustracao-02.png" alt="">
                <h3>Ambiente Mible</h3>
                <p> Lorem ipsum,<br> dolor sit amet consectetur adipisicing elit. Dolor sit amet consectetur adipisicing elit</p>
            </div>
            <div class="img01">
                <img src="img/ilustracao-03.png" alt="">
                <h3>Ambiente Mible</h3>
                <p> Lorem ipsum,<br> dolor sit amet consectetur adipisicing elit. Dolor sit amet consectetur adipisicing elit</p>
            </div>

        </div>
    </div>
</section>
<!-- seção de descrição do time. -->
<section class="descricao-time">
    <div class="center">
         
           <div class="time">
               <h2>Um time experinte, comunicador e coeso.</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                        Voluptates numquam in aut eius ipsam voluptatum fugit nihil autem <br> nesciunt asperiores itaque,
                        vel officia reprehenderit laboriosam alias ratione tenetur debitis quisquam?
                    </p>
            <img src="img/ilustracao-04.png" alt="">
        </div>
       <div class="clear"></div>
    </div>
</section>

<!--seção de Depoimentos  -->
<section class="depoimentos">
    <div class="center">
         <h2>Depoimentos</h2>
             <div class="box-depoimentos">
                <div class="campo-depoimentos">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Id sequi saepe ipsam cumque amet, omnis atque numquam, perspiciatis facere porro deleniti!
                      Aperiam odit placeat sapiente eligendi, reprehenderit cum iste delectus?
                    </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sunt totam reiciendis.
                       Hic et odit minima sint modi laudantium voluptatem inventore id? Saepe ipsa cum facilis perspiciatis quia dolore possimus.
                    </p>
                </div>
            </div> 
    </div>

</section>

<!-- script para a adicionar o icone  de fica na divisão do conteudo principal e o corpo da pagina  -->
<script src="https://kit.fontawesome.com/f71bd11240.js" crossorigin="anonymous"></script>
<!-- script e bibliptecas Slick's -->
<script src="js/jquery.js"></script>
<script src="js/slick.min.js"></script>
<!-- ativando o menu responsivel -->
<!-- pode ser feito aqui no index ou feito em arquivo deferente -->
<script>
    $('.menu-mobile i').click(function() {
        $('.menu-mobile').find('ul').slideToggle();
    })
</script>
<script type="text/javascript">
	$('section.slides .conterner-slider').slick({
    dots: true,
    arrows:false,
    infinite: false,
    centerMode: false,
    speed:1000,
    slidesToShow: 4,
    autoplay: true,
    autoplaySpeed: 3000,
    pauseOnHover:false
});
</script>
</body>
</html>