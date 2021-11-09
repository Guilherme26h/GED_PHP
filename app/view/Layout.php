<!DOCTYPE html>
<html lang="pt-br">
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
        <!-- Links -->
        <ul class="menu">
            <li>Menu</li>
            <ul>
                <li><a href="<?php echo DIRPAGE; ?>">Home</a></li>
                <li><a href="<?php echo DIRPAGE.'financeiro'; ?>">Financeiro</a></li>
                <li><a href="<?php echo DIRPAGE.'contabilidade'; ?>">Contabilidade</a></li>
                <li><a href="<?php echo DIRPAGE.'estoque'; ?>">Estoque</a></li>
                <li><a href="<?php echo DIRPAGE.'administrativo'; ?>">Administrativo</a></li>
            </ul>
        </ul>
    </nav>
    <div>
        <?php
            $bread = new \Src\Classes\classBreadCrumb();
            $bread->addBreadcrumb();
        ?>
    </div>
     



    <!-------------------------- Main ------------------------->
    <main>
        <?php echo $this->addMain(); ?>
    </main>

    <!------------------------- Footer ------------------------>
    <footer>
        <h1 class="contato">Contato:</h1>
        <div class='container-footer'>
            <div class="github">
                <figure></figure>
            </div>
            <div class="linkedin">
                <figure></figure>
            </div>
        </div>
        <?php echo $this->addFooter(); ?>
    </footer>
    
    
</body>
</html>