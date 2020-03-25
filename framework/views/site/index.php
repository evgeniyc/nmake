<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Товары';
?>

	<div class="body-content container">
    <div class="row">
		<div class="col-12 content-title">
			<h1>Товары:</h1>

			<p class="lead">Список товаров категории: Some title</p>

			
		</div>
    </div>

	<div class="row no-gutters">
		<?php for($i=0; $i<50; $i++): ?>
			<div class="col-6 col-sm-4 col-md-3 col-lg-2">
				<div class="part">
					<div class="part-title">Soome title</div>
					<div class="part-img"><?php echo Html::img('@web/images/sunny.jpg', ['class'=>'img-fluid']); ?></div>
					<div class="part-info"></div>
					<div class="part-price">Цена: 2500грн.</div>
					<div class="part-button"></div>
				</div>
			</div>
		<?php endfor; ?>	
	</div>
	</div>	

   

