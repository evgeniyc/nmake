<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Товары';
?>

	<div class="body-content container">
    <div class="row">
		<div class="col-2 sitebar">
			<h2>Категории:</h2>
			<ul>
				<li><a href="#">Электроника</a></li>
				<li><a href="#">Бытовая техника</a></li>
				<li><a href="#">Стройматериалы</a></li>
				<li><a href="#">Все для рыбалки</a></li>
				<li><a href="#">Туризм</a></li>
				<li><a href="#">Спорт</a></li>
			</ul>
		</div>
		<div class="col-10 main-part">
		<div class="content-title">
			<h1>Электроника</h1>

			<p class="lead">Товары категории: Электроника</p>

			
		</div>
    

	<div class="row no-gutters">
		<?php for($i=0; $i<50; $i++): ?>
			<div class="col-6 col-sm-4 col-md-3 col-lg-2">
				<div class="part">
					<div class="part-title">Электроника</div>
					<div class="part-img"><?php echo Html::img('@web/images/sunny.jpg', ['class'=>'img-fluid']); ?></div>
					<div class="part-info"></div>
					<div class="part-price">Цена: 2500грн.</div>
					<div class="part-button"></div>
				</div>
			</div>
		<?php endfor; ?>	
	</div>
	</div>	
	</div>
	</div>
   

