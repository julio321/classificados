<?php require 'pages/header.php'; ?>
 <?php
 require 'classes/anuncios.class.php';
 require 'classes/usuarios.cllass.php';

 $a = new Anuncios();
 $u = new Usuarios();

 if(isset($_GET['id']) && !empty($_GET['id'])){
    $id = addslashes($_GET['id']);
}else{
	?>
	<script type="text/javascript">window.location.href="index.php";</script>
	<?php
	exit;
}


 $info = $a->getAnuncio($id);

 
 ?>

	<div class="container-fluid">
		
	<div class="row">
		<div class="col-sm-4">
			<div class="carousel slide" data-ride="carousel" id="meuCarousel">
				<div class="carousel-inner" role="listbox">
					<?php foreach($info['fotos'] as $chave => $foto): ?>
						<div class="item <?php echo ($chave=='0')?'active':''; ?>">
							<img src="assets/images/anuncios/<?php echo $foto['url']; ?>">
						</div>
					<?php endforeach; ?>
					
				</div>
				<a class="left carousel-control" href="#meuCarousel" role="button" data-slide="prev"><span><</span></a>
				<a class="rigth carousel-control" href="#meuCarousel" role="button" data-slide="next"><span>></span></a>

				
			</div>
		</div>
		<div class="col-sm-8" >
			
			

		</div>
	</div>

		
	</div>
	<?php require 'pages/footer.php'; ?>
			
		
