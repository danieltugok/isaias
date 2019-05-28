<?php include('includes/header.php'); ?>


<section class="portfolio-presentation">

    <div class="container back">
        <a href="index.php">Voltar</a>
    </div>


    <div class="headerportfolio">

    </div>
    <article class="container">
        <div class="portfolioShowroom">

            <!-- 1 -->
            <?php if (isset($_GET['portfolio']) && $_GET['portfolio'] == '1') :  ?>
                <h2>No Quintal do Nicolau</h2>          

                <img src="assets/img/portfolio/quintaldonicolau/1.png" alt="">
                <img src="assets/img/portfolio/quintaldonicolau/2.png" alt="">

                <a href="#" class="btn-portfolio inactive">Ver site</a>
            <!-- FIM 1 --> 


            <!-- 2 -->
            <?php elseif (isset($_GET['portfolio']) && $_GET['portfolio'] == '2') : ?>
            
                <h2>PIRU</h2>          

                <img src="assets/img/portfolio/quintaldonicolau/1.png" alt="">
                <img src="assets/img/portfolio/quintaldonicolau/2.png" alt="">

                <a href="#" class="btn-portfolio inactive">Ver site</a>
            <!-- FIM 2 --> 


            <!-- 3 -->
            <?php elseif (isset($_GET['portfolio']) && $_GET['portfolio'] == '3') : ?>
            
                <h2>PIRU</h2>          

                <img src="assets/img/portfolio/quintaldonicolau/1.png" alt="">
                <img src="assets/img/portfolio/quintaldonicolau/2.png" alt="">

                <a href="#" class="btn-portfolio inactive">Ver site</a> 
            <!-- FIM 3 --> 

            
            <!-- 4 -->
            <?php elseif (isset($_GET['portfolio']) && $_GET['portfolio'] == '4') : ?>
            
                <h2>OURIÇO</h2>          

                <img src="assets/img/portfolio/quintaldonicolau/1.png" alt="">
                <img src="assets/img/portfolio/quintaldonicolau/2.png" alt="">

                <a href="#" class="btn-portfolio inactive">Ver site</a> 
            <!-- FIM 4 -->    


            <?php endif; ?>




        </div>




    </article>  
</section>



<?php include('includes/footer.php'); ?>