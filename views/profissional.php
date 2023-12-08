<div class="row pt-5">
    <div class="col-sm-12 col-md-4">
        <img src="<?php echo URL_SITE?>img/eujoao2.jpg" class="img-fluid">
    </div>
    <div class="col-sm-12 col-md-8">
        <h2>Joao Eger</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit asperiores, magni quo ut quisquam, delectus harum adipisci repellendus est amet voluptate, optio debitis enim corrupti saepe voluptatem at recusandae ea!</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illo provident, fugit porro beatae dolor perferendis a obcaecati exercitationem eum dicta voluptas ea eligendi fuga aspernatur pariatur repudiandae commodi, molestiae voluptates?</p>
    </div>
</div>
<?php
$atuacao = [
    [
        "titulo" => "PHP", 
        "icone" => "bi-filetype-php", 
        "texto" => "18 anos de curso visse nego"
    ],
    [
        "titulo" => "MYSQL", 
        "icone" => "bi-filetype-sql", 
        "texto" => "armazena tudo cara se acredita?"
    ],
    [
        "titulo" => "JQUERY", 
        "icone" => "bi-filetype-js", 
        "texto" => "tudo de bom e do melhor"
    ],
    [
        "titulo" => "JAVA", 
        "icone" => "bi-filetype-java", 
        "texto" => "melhor linguagem certeza"
    ],
];
?>
<div class="row pt-5">
    <?php
    foreach($atuacao as $area){
        echo <<<HTML
        <div class="col-sm-12 col-md-3">
            <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi {$area['icone']} fs-1"></i>
                    <h3>{$area['titulo']}</h3>
                    <p>{$area['texto']}</p>
                </div>
            </div>
        </div>
        HTML;
    }
    
    ?>
</div>