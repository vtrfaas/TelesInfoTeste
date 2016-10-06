<?php include("cabecalho.php"); ?>

        <!-- Uso do Carrousel do bootstrap, para deixar a página inicial com algum contéudo -->

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/banner1.jpg" alt="banner Teles hair solution">
                        </div>
                        <div class="item">
                            <img src="img/banner2.jpg" alt="banner Teles gerenciador mobile">
                        </div>
                        <div class="item">
                            <img src="img/banner3.jpg" alt="banner Teles conte conosco">
                        </div>
                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                  </div>
        </div>
<?php include("rodape.php"); ?>