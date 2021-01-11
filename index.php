<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="img/house.png" type="image/x-icon">
    <link rel="stylesheet" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Adicionando fonts google -->
    <link href = "https://fonts.googleapis.com/css2? family = Roboto: wght @ 100 & display = swap" rel = "stylesheet">
    
    <title>thema</title>
</head>
<body>
    <!-- Area do cabeçalho (menu) -->
   <section class="topo"> 
         <!-- classe para centralizar o conteudo -->  
        <div class="center">  
                  <header class="logo"> <img src="img/logo01.png" alt=""></header>
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
             <div class="box-depoimentos"> <!-- NESTA CLASSE VC REFERENCIA NO SLIDER..!!!!! -->
                <div class="campo-depoimentos"> 
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Voluptatem alias quae amet beatae magni sunt vero libero eveniet, similique distinctio illo animi exercitationem impedit! Iure cupiditate natus sit eos omnis.
                    </p>
                    <p> Felipe Assis de Jesus </p>
                    <img src="img/autor2.jpg" alt=""> 
                </div>
                <div class="campo-depoimentos">
                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Voluptatem alias quae amet beatae magni sunt vero libero eveniet, similique distinctio illo animi exercitationem impedit! Iure cupiditate natus sit eos omnis.
                    </p>
                    <p> Felipe Assis de Jesus </p>
                    <img src="img/autor2.jpg" alt="">
                </div>
            </div>  
    </div>
</section>
<footer>
<!-- seção metodologia -->
    <section class="metodologia">
        <div class="center">
            <h2>Conheça nossa metodologia</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, quos.</p>
            <a href="http://">Entrar em Contato</a>
        </div>
    </section>

<!-- Roda pé  -->
        <div class="center">
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">FAQ</a>
                <a href="">contato</a>
            </div>
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">FAQ</a>
                <a href="">Contato</a>
            </div>
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">FAQ</a>
                <a href="">contato</a>
            </div>
            <div style="width:40%; text-align:right;" class="col-footer">   
                <img src="img/logo-dummy.png" alt="">
            </div>
        </div>
</footer>

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
<!-- slider parceiros -->
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

<!-- slider dos depoimentos -->
<script type="text/javascript">
	$('section.depoimentos .box-depoimentos').slick({
    dots: true,
    arrows:false,
    infinite: true,
    speed:1000,
    slidesToShow: 1,
    autoplaySpeed: 3000,
});
</script>
</body>
</html>