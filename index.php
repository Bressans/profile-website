<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="description" content="Descrição do meu website">
    <title>Project 01</title>
    <link rel="stylesheet" href="estilo/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo/style.css">
</head>
<body>
    
    <header>
        <div class="center">
            <div class="logo left">Logomarca</div><!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="button-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div><!--center-->
    </header>

    <section class="banner-principal">
        <div class="overlay"></div><!--overlay-->      
        <div class="center">
            <form>
                <h2>Qual seu e-mail?</h2>
                <input type="email" name="email" required>
                <input type="submit" name="acao" value="Cadastrar">
            </form>
        </div>
    </section><!--section_principal-->

    <section class="descricao-autor">
        <div class="center">        
            <div class="w50 left">
                <h2>João Pedro Bressan</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut lacinia metus. Ut elit arcu, ultrices in tortor sed, viverra tincidunt nibh. Pellentesque viverra et felis ut laoreet. Integer feugiat risus eu lorem tristique tincidunt. Donec placerat commodo egestas. Etiam pellentesque dui eget orci finibus, sit amet hendrerit elit tincidunt. Donec iaculis quam at varius tristique. Cras vestibulum sodales tortor, id ullamcorper velit porta et. In hac habitasse platea dictumst. Integer maximus egestas lacinia.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut lacinia metus. Ut elit arcu, ultrices in tortor sed, viverra tincidunt nibh. Pellentesque viverra et felis ut laoreet. Integer feugiat risus eu lorem tristique tincidunt. Donec placerat commodo egestas. Etiam pellentesque dui eget orci finibus, sit amet hendrerit elit tincidunt. Donec iaculis quam at varius tristique. Cras vestibulum sodales tortor, id ullamcorper velit porta et. In hac habitasse platea dictumst. Integer maximus egestas lacinia.</p>
            </div><!--w50-->
            <div class="w50 left">
                <img class="right" src="images/penguins.jpg" alt="">    
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--descricao-autor-->

    <section class="especialidades">
        <div class="center">
            <h2 class="title">Especialidades</h2>
            <div class="w33 left box-especialidade">
                <h3><i class="fa fa-css3" aria-hidden="true"></i></h3>
                <h4>CSS3</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut lacinia metus. Ut elit arcu, ultrices in tortor sed, viverra tincidunt nibh. Pellentesque viverra et felis ut laoreet. Integer feugiat risus eu lorem tristique tincidunt. Donec placerat commodo egestas. Etiam pellentesque dui eget orci finibus, sit amet hendrerit elit tincidunt. Donec iaculis quam at varius tristique. Cras vestibulum sodales tortor, id ullamcorper velit porta et. In hac habitasse platea dictumst. Integer maximus egestas lacinia.</p>
            </div><!--box-especialidade-->
            <div class="w33 left box-especialidade">
                <h3><i class="fa fa-html5" aria-hidden="true"></i></h3>
                <h4>HTML5</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut lacinia metus. Ut elit arcu, ultrices in tortor sed, viverra tincidunt nibh. Pellentesque viverra et felis ut laoreet. Integer feugiat risus eu lorem tristique tincidunt. Donec placerat commodo egestas. Etiam pellentesque dui eget orci finibus, sit amet hendrerit elit tincidunt. Donec iaculis quam at varius tristique. Cras vestibulum sodales tortor, id ullamcorper velit porta et. In hac habitasse platea dictumst. Integer maximus egestas lacinia.</p>
            </div><!--box-especialidade-->
            <div class="w33 left box-especialidade">
                <h3><i class="fa fa-gg-circle" aria-hidden="true"></i></h3>
                <h4>JavaScript</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut lacinia metus. Ut elit arcu, ultrices in tortor sed, viverra tincidunt nibh. Pellentesque viverra et felis ut laoreet. Integer feugiat risus eu lorem tristique tincidunt. Donec placerat commodo egestas. Etiam pellentesque dui eget orci finibus, sit amet hendrerit elit tincidunt. Donec iaculis quam at varius tristique. Cras vestibulum sodales tortor, id ullamcorper velit porta et. In hac habitasse platea dictumst. Integer maximus egestas lacinia.</p>
            </div><!--box-especialidade-->
            <div class="clear"></div><!--clear-->
        </div><!--center-->
    </section><!--especialidades-->

    <section class="others">
        <div class="center">
            <div class="w50 left depoimentos-container">
                <h2 class="title">Depoimentos</h2>
                <div class="depoimento-single">
                    <p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut lacinia metus. Ut elit arcu, ultrices in tortor sed, viverra tincidunt nibh. Pellentesque viverra et felis ut laoreet. Integer feugiat risus eu lorem tristique tincidunt. Donec placerat commodo egestas. Etiam pellentesque dui eget orci finibus, sit amet hendrerit elit tincidunt. Donec iaculis quam at varius tristique. Cras vestibulum sodales tortor, id ullamcorper velit porta et. In hac habitasse platea dictumst. Integer maximus egestas lacinia."</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut lacinia metus. Ut elit arcu, ultrices in tortor sed, viverra tincidunt nibh. Pellentesque viverra et felis ut laoreet. Integer feugiat risus eu lorem tristique tincidunt. Donec placerat commodo egestas. Etiam pellentesque dui eget orci finibus, sit amet hendrerit elit tincidunt. Donec iaculis quam at varius tristique. Cras vestibulum sodales tortor, id ullamcorper velit porta et. In hac habitasse platea dictumst. Integer maximus egestas lacinia."</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
                <div class="depoimento-single">
                    <p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut lacinia metus. Ut elit arcu, ultrices in tortor sed, viverra tincidunt nibh. Pellentesque viverra et felis ut laoreet. Integer feugiat risus eu lorem tristique tincidunt. Donec placerat commodo egestas. Etiam pellentesque dui eget orci finibus, sit amet hendrerit elit tincidunt. Donec iaculis quam at varius tristique. Cras vestibulum sodales tortor, id ullamcorper velit porta et. In hac habitasse platea dictumst. Integer maximus egestas lacinia."</p>
                    <p class="nome-autor">Lorem Ipsum</p>
                </div><!--depoimento-single-->
            </div><!--w50-->
            <div class="w50 left servicos-container">
                <h2 class="title">Serviços</h2>
                <div class="servicos">
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut lacinia metus. Ut elit arcu, ultrices in tortor sed, viverra tincidunt nibh. Pellentesque viverra et felis ut laoreet. Integer feugiat risus eu lorem tristique tincidunt. Donec placerat commodo egestas. Etiam pellentesque dui eget orci finibus, sit amet hendrerit elit tincidunt. Donec iaculis quam at varius tristique. Cras vestibulum sodales tortor, id ullamcorper velit porta et. In hac habitasse platea dictumst. Integer maximus egestas lacinia.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut lacinia metus. Ut elit arcu, ultrices in tortor sed, viverra tincidunt nibh. Pellentesque viverra et felis ut laoreet. Integer feugiat risus eu lorem tristique tincidunt. Donec placerat commodo egestas. Etiam pellentesque dui eget orci finibus, sit amet hendrerit elit tincidunt. Donec iaculis quam at varius tristique. Cras vestibulum sodales tortor, id ullamcorper velit porta et. In hac habitasse platea dictumst. Integer maximus egestas lacinia.</li>
                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ut lacinia metus. Ut elit arcu, ultrices in tortor sed, viverra tincidunt nibh. Pellentesque viverra et felis ut laoreet. Integer feugiat risus eu lorem tristique tincidunt. Donec placerat commodo egestas. Etiam pellentesque dui eget orci finibus, sit amet hendrerit elit tincidunt. Donec iaculis quam at varius tristique. Cras vestibulum sodales tortor, id ullamcorper velit porta et. In hac habitasse platea dictumst. Integer maximus egestas lacinia.</li>
                    </ul>
                </div><!--servicos-->
            </div><!--w50-->
            <div class="clear"></div>
        </div><!--center-->
    </section><!--others-->

    <footer>
        <div class="center">
            <p>Todos os direitos reservados</p>
        </div>        
    </footer>

</body>
</html>