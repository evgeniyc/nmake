<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>


    <div class="row">
		<div class="col-12 content-title">
			<h1>Congratulations!</h1>

			<p class="lead">You have successfully created your Yii-powered application.</p>

			<p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
		</div>
    </div>

	<div class="row">
		<?php for($i=0; $i<50; $i++): ?>
			<div class="col-6 col-sm-4 col-md-3 col-lg-2">
				<div class="part">
					<div class="part-title">Soome title</div>
					<div class="part-img"><?php echo Html::img('@web/images/sunny.jpg', ['class'=>'img-fluid']); ?></div>
					<div class="part-info"></div>
					<div class="part-price"></div>
					<div class="part-button"></div>
				</div>
			</div>
		<?php endfor; ?>	
	</div>
		

   

