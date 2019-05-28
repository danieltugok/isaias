<header>

        <div class="barra-init container-fluid">

            <!-- <a href="?lang=en">English</a>
            <a href="?lang=pt-br">Português</a>
            <a href="?lang=es">Español</a>
            <hr/> -->
            <!-- Linguagem Definida: 
            <?php 
            // echo $lang->getLanguage(); 

            ?>

            
            <hr/>
            <button>
            <?php 
            // $lang->get('BUY');
            ?>
            </button> -->
            
            <ul>
                <li><a href="?lang=pt-br" <?php if( $lang->getLanguage() == "pt-br" ){ echo 'class=" active "'; } ?>>Pt</a></li>
                <li><a href="?lang=en" <?php if( $lang->getLanguage()== "en" ){ echo 'class=" active "'; } ?>>En</a></li>
            </ul>
        </div>


        <div class="header-hamburguer">
            <div class="item-hamburguer">
                <svg class="ham hamRotate ham4" viewBox="0 0 100 100" width="60" onclick="this.classList.toggle('active')">
                <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20"></path>
                <path class="line middle" d="m 70,50 h -40"></path>
                <path class="line bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20"></path>
                </svg>
            </div>
        </div>

            <div class="container">
                <div class="header-menu">    
                    <h1 class="site-title animated fadeInUpBig"> &lt;/&gt; <span>Daniel.Kogut</span> </h1>

                    <nav>
                        <ul class="main-menu">
                            <li class="menu-item animated fadeInUp "><a href="#sobre"> <?php $lang->get('SOBRE'); ?> </a></li>
                            <li class="menu-item animated fadeInUp delay-30ms "><a href="#servicos"> <?php $lang->get('SERVICOS'); ?> </a></li>
                            <li class="menu-item animated fadeInUp delay-50ms "><a href="#portfolio"> <?php $lang->get('PORTFOLIO'); ?> </a></li>
                            <li class="menu-item animated fadeInUp delay-70ms "><a href="#contato"><?php $lang->get('CONTATO'); ?>  </a></li>
                        </ul>
                    </nav>
                </div>
            </div>




   
        
        

    </header>








<!--=========== BEGIN HEADER SECTION ================-->
    <section class="home">
	<article>
		<!-- SLIDER PRINCIPAL -->
		<div class="container">
			<img src="assets/img/mf-avatar.svg" alt="">
			<div class="sliper-princ" >
				<p><?php $lang->get('TextoPrincipal') ?><span id="typed"></span>.</p>
			</div>



		</div>
		
		<!-- <div  id="animationSandbox" class="exemplo">Example</div>
		<div class="btn btn-primary animacao">TESTE</div> -->

	</article>
</section>


<section id="sobre" class="sobre container-fluid">
	<article>
		<!-- SLIDER PRINCIPAL -->
		<div class="container">
			<h2><?php $lang->get('SOBRE'); ?> </h2>

			<div class="sobre-txt">
				<p><?php $lang->get('Sobre-txt'); ?></p>

				<button class="button hvr-icon-grow-rotate"><?php $lang->get('CV'); ?> <i class="fas fa-briefcase hvr-icon"></i> </button>
			</div>
			

		</div>
		
	</article>
</section>


<section  id="portfolio" class="teethUL container-fluid">

	<div class="clouds">
		<div class="cloud"></div>
		<div class="cloud2"></div>
	</div>

	<article>

	
	<div class="container">
		<h2><?php $lang->get('PORTFOLIO'); ?> </h2>

		
		<ul class="filter">
			<li class="filter-item">
				<a data-filter="all" href="#"><?php $lang->get('TODOS'); ?></a>
			</li>
			<li class="filter-item">
				<a data-filter="web" href="#"><?php $lang->get('WEB'); ?></a>
			</li>
			<li class="filter-item">
				<a data-filter="app" href="#"><?php $lang->get('APP'); ?></a>
			</li>
			<li class="filter-item">
				<a data-filter="graphic" href="#"><?php $lang->get('GRAPHIC'); ?></a>
			</li>
		</ul>
	
	
	</div>



		
		<!-- SLIDER PRINCIPAL -->
		<ul class="portfolio-list">

			<li class="portfolio-item item web graphic">
				<div class="child bg-1">
					<a href="#">
						<h4><?php $lang->get('ourico'); ?></h4>
						<i>🌵</i>
						<p><?php $lang->get('ouricotxt'); ?></p>
					</a>
				</div>				
			</li>

			<li class="portfolio-item item form1-2 app">
			<div class="child bg-2">
					<a href="#">
						<h4><?php $lang->get('job1'); ?></h4>
						<i>🌵</i>
						<p><?php $lang->get('job1txt'); ?></p>
					</a>
				</div>				
			</li>

			<li class="portfolio-item item form1-2 web">
			<div class="child bg-3">
					<a href="#">
						<h4><?php $lang->get('job2'); ?></h4>
						<i>🌵 🍰 💪</i>
						<p><?php $lang->get('job2txt'); ?></p>
					</a>
				</div>				
			</li>

			<li class="portfolio-item item web">
			<div class="child bg-4">
					<a href="#">
						<h4><?php $lang->get('job1'); ?></h4>
						<i>🌵</i>
						<p><?php $lang->get('job1txt'); ?></p>
					</a>
				</div>				
			</li>

			<li class="portfolio-item item form2-1 graphic">
			<div class="child bg-5">
					<a href="#">
						<h4><?php $lang->get('job1'); ?></h4>
						<i>🌵</i>
						<p><?php $lang->get('job1txt'); ?></p>
					</a>
				</div>				
			</li>

			<li class="portfolio-item item web">
			<div class="child bg-6">
					<a href="#">
						<h4><?php $lang->get('job1'); ?></h4>
						<i>🌵</i>
						<p><?php $lang->get('job1txt'); ?></p>
					</a>
				</div>				
			</li>


			<li class="portfolio-item item form1-2 graphic">
			<div class="child bg-3">
					<a href="#">
						<h4><?php $lang->get('job1'); ?></h4>
						<i>🌵 🍰 💪</i>
						<p><?php $lang->get('job1txt'); ?></p>
					</a>
				</div>				
			</li>

			<li class="portfolio-item form2-2 app">
			<div class="child bg-4">
					<a href="#">
						<h4><?php $lang->get('job1'); ?></h4>
						<i>🌵</i>
						<p><?php $lang->get('job1txt'); ?></p>
					</a>
				</div>				
			</li>

		</ul>

		
	</article>
</section>





<div class="start-a-project container">
	<h4 class="center"><?php $lang->get('StartProject') ?></h4>
	<p class="center"><?php $lang->get('TextProject') ?></p>
	<a href="#contato" class="center btn btn-primary"><?php $lang->get('LetsGo') ?></a>
</div>




<section id="servicos" class="container-fluid">
	<article>
		<!-- SLIDER PRINCIPAL -->
		<div class="container">
		<h2><?php $lang->get('SERVICOS'); ?></h2>
			

		</div>
		
	</article>
</section>




<section id="contato" class="container-fluid space">
	<article>
		<!-- SLIDER PRINCIPAL -->
		<div class="container">
		<h2><?php $lang->get('CONTATO'); ?></h2>


		<div class="contato">
			<div class="dados">
				<ul>
					<li><a href="tel:+5521981873374"><i class="fas fa-phone"></i>+55 (21) 98187.3374</li></a>
					<li><a href="mailto:danielkogut@gmail.com"><i class="fas fa-envelope"></i>danielkogut@gmail.com</li></a>
				</ul>

				<div class="msg-email">
					<?php 
					// echo $_SESSION['message']; 

					if (isset($_GET['msg']) && !empty($_GET['msg'])) {
						echo $_GET['msg'];
					}
					?>
				</div>
			</div>

			<div class="contato-form">
				<form action="contact.class.php" method="post">

					<label for="input-name">Nome</label><br>
					<input type="text" name="nome" id="input-name">


					<label for="input-email">E-mail</label><br>
					<input type="email" name="email" required id="input-email">
					<label for="input-assunto">Assunto</label><br>
					<input type="text" name="assunto"  id="input-assunto">
					<label for="input-msg">Mensagem</label><br>
					<textarea name="msg"  id="input-msg" cols="30" rows="10"></textarea>

					<input type="submit" value="Enviar" name="enviar">

				</form>
			</div>			
		</div>

		<img src="assets/img/hero.png" alt="Hero" class="hero">
			

		</div>
		
	</article>
</section>