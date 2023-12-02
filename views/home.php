<?php
$dados= [
    [
        "title" => "curso de programção php",
        "description" => "o melhor curso do brasil",
        "img" => "banner1.jpeg",
        "mobile" => "banner2.jpeg"
    ],
    [
        "title" => "curso logica de programção",
        "description" => "muita coisa legal vai encontrar",
        "img" => "banner6.avif",
        "mobile" => "banner3.jpeg"
    ]
];
?>
<div id="carouselExampleCaptions" class="carousel slide">
  
  <div class="carousel-inner">
    <?php foreach($dados as $ch => $b){
        $active  = ($ch == 0)? 'active' : '';
        $img = ($isMobile) ? $b['mobile'] : $b['img'];
    ?>
    <div class="carousel-item <?php echo $active?>">
      <img src="<?php echo URL_SITE."img/".$img?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5 class="bg-dark"><?php echo $b['title']?></h5>
        <p class="bg-dark"><?php echo $b['description']?></p> -->
        <a href="#" class="btn btn-danger">ASSINE JÁ</a>
      </div>
    </div>
    <?php }?>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- STACKS -->
<?php
$stacks = [
    [
        "title" => "PHP",
        "description" => "18 anos sem experiência",
        "img" => "php.png",
        "btnAction" => "https://google.com",
        "btnLabel" => "Visitar Site"
    ],
    [
        "title" => "MYSQL",
        "description" => "experiência",
        "img" => "mysql.png",
        "btnAction" => "https://google.com",
        "btnLabel" => "Visitar Site"
    ],
    [
        "title" => "JAVASCRIPT",
        "description" => "anos de sem experiência",
        "img" => "javascript.png",
        "btnAction" => "https://google.com",
        "btnLabel" => "Visitar Site"
    ],
    [
        "title" => "NODE JS",
        "description" => "sem experiência",
        "img" => "nodejs.png",
        "btnAction" => "https://google.com",
        "btnLabel" => "Visitar Site"
    ]
];
?>
<div class="container">
    <div class="row">
        <?php
        foreach($stacks as $stack){
            $url_site = URL_SITE;
            echo <<<HTML
            <div class="col col-sm-12 col-md-3">
            <div class="card">
                <img src="{$url_site}img/{$stack['img']}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{$stack['title']}</h5>
                    <p class="card-text">{$stack['description']}</p>
                    <a href="{$stack['btnAction']}" class="btn btn-primary">{$stack['btnLabel']}</a>
                </div>
            </div>
            </div>
            HTML;
        }
        ?>
    </div>
</div>