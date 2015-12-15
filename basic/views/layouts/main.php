<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>"> <!-- modifica el idioma de la pagina-->
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../web/font-awesome/css/font-awesome.min.css">
    
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div id="barsub" class="conteiner-fluid"> <!--el class= conteiner-fluid hace que se adapte el contenido a moviles-->

        
    <?php
    NavBar::begin([
        'brandLabel' => 'Open Marchante',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-fixed',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Inicio', 'url' => ['/site/index']],
            ['label' => 'Usuario', 'url' => ['/site/usuario']],
            ['label' => 'Deseos', 'url' => ['/site/deseos']],
            ['label' => 'Carrito', 'url' => ['/site/carito']],
            
            Yii::$app->user->isGuest ?
                ['label' => 'Login', 'url' => ['/site/login']] :
                [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],
        ],
    ]);
    NavBar::end();
    ?>
    <div class="nadivvbar"> <!-- boton y menu para display mobiles-->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><!--data-colapser= se modifica a movil,-->   
                                <span class="sr-only"> Esto solo aparece si el navagador no soprta menus </span>
                                <span class="icon-bar"></span> <!--! 1ra linea del boton para mobiles-->
                                <span class="icon-bar"></span> <!--! 2ra linea del boton para mobiles-->
                                <span class="icon-bar"></span> <!--! 3ra linea del boton para mobiles-->
                                                                                
                        </button>
                        
    </div>
</div>   <!--considerar éste encabezado como barra de estado superior-->
         
      <aside>
        <header id="cabezal">
            <href="index.php"><img src="../web/img/logo.png" alt="logo"/></a>
            
            <aside id="carStatus">
                <i class="fa fa-shopping-basket"></i> 0 item(s) $0.00
            </aside>
            <form action="index.html" method="get">
                <input type="text" name="palabras" required placeholder="busqueda" id="busqueda"><button type="submit" id="submit"><i class="fa fa-search"></i></button>
            </form>
        </header>
<div class="wrap">
    <article>
                       
        <?php
        NavBar::begin([
            'brandLabel' => '',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-nav navbar-fixed ',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-center '],
            'items' => [
                ['label' => 'Bicicletas', 'url' => ['/site/bicicletas']],
                ['label' => 'Cascos', 'url' => ['/site/cascos']],
                ['label' => 'Refacciones', 'url' => ['/site/refacciones']],
                ['label' => 'Accesorios', 'url' => ['/site/accesorios']],
                
                
            ],
        ]);
        NavBar::end();
        ?>
       

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= $content ?>
            
        </div>
    </div>
    </article>
</div>   

<footer class="footer">

    <section>
        <aside>
            <a href=""><h3>Información</h3></a>
                <ul>
                    <li>Acerca de</li>
                    <li>Información de envio</li>
                    <li>Políticas de privacidad</li>
                    <li>Terminos y condiciones</li>
                </ul>

        </aside>
        <aside>
            <a href=""><h3>Servicio al cliente</h3></a></a>
                <ul>
                    <li>Contacto </li>
                    <li>Devoluciones</li>
                    
                </ul>

        </aside>
        <aside>
            <a href=""><h3>Extras</h3></a>
                <ul>
                    <li>Marca</li>
                    <li>Sugerencias</li>
                    <li>Afiliados</li>
                    <li>Especiales</li>
                </ul>

        </aside>
            <aside class="ultimo">
            <a href=""><h3>Mi Cuenta</h3></a>
                <ul>
                    <li>Mi cuenta</li>
                    <li>Historial de ordenes</li>
                    <li>Lista de deseos</li>
                    <li>Noticias</li>
                </ul>

            </aside>

        
        <div class="reset"></div>
        <hr>
        
        <p>Power by open marchante <br/>
            Your Store 2015
        </p>
        </section>
        

    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
