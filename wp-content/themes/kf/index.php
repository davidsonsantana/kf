<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<!-- Carousel ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner02.jpg" alt="First slide">
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/banner01.jpg" alt="Second slide">
        </div>
      </div>
    </div><!-- /.carousel -->

    <div class="diagonal">&nbsp;</div>

    <div class="container">
    	<div class="row sobre">
    		<div class="col-md-5">
	    		<div class="image"><img class="img-responsive" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/img-sobre.png"></div>
    		</div>
    		<div class="col-md-7">
    			<h2><span>Sobre a</span>KF Soluções de Engenharia</h2>
    			<p>A KF Soluções de Engenharia Ltda é uma empresa jovem e moderna, porém bastante experiente. De origem pernambucana, com sede na cidade do Recife, possui em seu portfólio clientes e projetos de vários Estados do Nordeste.</p>
				<p>Atuamos na elaboração de projetos de engenharia, tendo como foco principal os projetos de rodovias e ferrovias. Além dessas atividades, a KF oferece ainda treinamentos para profissionais da área, em softwares de projeto.</p>
				<p>Utilize o menu acima para navegar pelas demais seções de nosso site e conheça melhor a KF Soluções de Engenharia, bem como os serviços que temos para oferecer à sua instituição.</p>
    		</div>
    	</div>
    	<div class="row">
    		<h2>Vídeos <a class="more" href="<?php echo esc_url( home_url( '/' ) ); ?>index.php/videos">Ver todos</a></h2>
    		<div class="col-md-3 col-sm-6">
    			<div class="image"><a href="#"><img class="img-responsive" class="img-responsive" src="http://www.placehold.it/400x200"></a></div>
    			<h3>Título do vídeo</h3>
    		</div>
    		<div class="col-md-3 col-sm-6">
    			<div class="image"><a href="#"><img class="img-responsive" class="img-responsive" src="http://www.placehold.it/400x200"></a></div>
    			<h3>Título do vídeo</h3>
    		</div>
    		<div class="col-md-3 col-sm-6">
    			<div class="image"><a href="#"><img class="img-responsive" class="img-responsive" src="http://www.placehold.it/400x200"></a></div>
    			<h3>Título do vídeo</h3>
    		</div>
    		<div class="col-md-3 col-sm-6">
    			<div class="image"><a href="#"><img class="img-responsive" class="img-responsive" src="http://www.placehold.it/400x200"></a></div>
    			<h3>Título do vídeo</h3>
    		</div>
    	</div>
    </div>

<?php get_footer(); ?>
