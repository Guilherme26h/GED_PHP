<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" describe="Guilherme Henrique de Sousa Jesus">
    <meta name="description" content="<?php echo $this->getDescription();?>">
    <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
    <title><?php echo $this->getTitle(); ?></title>
    <link rel="stylesheet" href="<?php echo DIRCSS.'Style.css' ?>">
    <?php echo $this->addHead();?>
</head>
<body>
    
    <!---------------------------Header------------------------>
    <header>
        <figure class="header-fixed">
            <img class="Banner" src="<?php echo DIRIMG.'Banner.png'?>" alt="Banner GED">
        </figure>
        <?php echo $this->addHeader(); ?> 
    </header>

    <!--------------------------- NAV -------------------------->
    <nav>
        <a href="<?php echo DIRPAGE; ?>">Home</a>
        <a href="<?php echo DIRPAGE; ?>">Financeiro</a>
        <a href="<?php echo DIRPAGE; ?>">Contabilidade</a>
        <a href="<?php echo DIRPAGE; ?>">Estoque</a>
        <a href="<?php echo DIRPAGE; ?>">Administrativo</a>
    </nav>



    <!-------------------------- Main ------------------------->
    <main>
        <?php echo $this->addMain(); ?>
    </main>

    <!------------------------- Footer ------------------------>
    <footer>
    
       <div class= "icones">
        <p class="contato">Contatos:</p>
           
            <figure class="github">

            </figure>

            <figure class="linkedin">

            </figure>
       </div>
       <div class="developer">
           <picture class="picture-programador">
                <img src="<?php echo DIRIMG.'img_programador_site.png' ?>" alt="imagem do programador do site">
            </picture>
           <p class= "apresentacao">GED desenvovido por Guilherme Henrique de Sousa Jesus <br> Analista e Desenvolvedor de Sistemas</p>
                    
       </div>
        <?php echo $this->addFooter(); ?>
    </footer>
    
    
</body>
</html>