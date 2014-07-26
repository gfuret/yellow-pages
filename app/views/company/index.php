<?php include '../app/views/template/partials/header.php'; ?>

<script src="/directory/public/js/map.js"></script>
    <div class="container">
	    <section>
		    <article class="row ft">
		    	<div class="col-sm-12 ft-copy">
		    		<h1><?php echo $data->name;?></h1>
		    		<h3><?php echo $data->category; ?></h3>
		        </div>
		    	<div class="col-sm-6 ft-copy">
	    			
			    	<p><?php echo $data->county . ', ' . $data->city . ', ' . $data->street . ' '. $data->housenumber; ?></p>
			    	<p><?php lang::test('phone', $lang); ?>:
			    		<?php echo $data->phone;?></p>
			    	<p><?php lang::test('Fax', $lang); ?>:
			    		<?php echo $data->fax;?></p>
			    	<p><?php lang::test('Email', $lang); ?>:
			    		<?php echo $data->email;?></p>
			    	<p><?php echo $data->www;?></p>
			    	<p><?php echo $data->extraphone;?></p>
			    	<p><?php lang::test('keywords', $lang); ?>:
			    		<?php echo $data->keywords;?></p>
			    	<p><?php lang::test('description', $lang); ?>:
			    		<?php echo $data->description;?></p>
			    	<p><?php lang::test('trademarks', $lang); ?>:
			    		<?php echo $data->trademarks ;?></p>
			    	<p><?php lang::test('working_hours', $lang); ?>:
			    		<?php echo $data->hours;?></p>
		    	</div>

				<!-- SPACES FOR Y AND X COORDINATES data names are xcoord ycoord-->
				<input type="hidden" value="<?php echo $data->xcoord;?>" id="xcoord" name="xcoord">
				<input type="hidden" value="<?php echo $data->ycoord;?>" id="ycoord" name="ycoord">
				<div class="col-sm-6 ft-copy">
					<div id="map_canvas"></div>
				</div>
		    </article>
		</section>
	</div>
<?php include '../app/views/template/partials/footer.php'; ?>