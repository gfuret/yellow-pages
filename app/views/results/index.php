<?php include '../app/views/template/partials/header.php'; ?>
    <!-- Jumbotron -->
    <div class="jumbotron">
    	<div class="container">
    		<h1><?php lang::test('search_result', $lang); ?></h1>
    	</div>
    </div><!-- End Jumbotron -->
    <div class="container">
	    <section>
		    <article>
		    	<ul>
		    		<?php foreach ($data as $company) { ?>
		    		<li>
		    			<a href="/directory/public/companies/<?php echo $company->slug; ?>">
		    				<h2><?php echo (stripslashes($company->company)); ?></h2>
		    			</a>
		    			<h3><?php echo $company->category; ?></h3>
		    			<p><?php echo $company->county . ', ' . 
		    			$company->city . ', ' . $company->street 
		    			. ' '. $company->housenumber; ?></p>
		    		</li>
		    		<?php } ?>
		    		<h1><?php if(!$data) { lang::test('nothing_found', $lang); } ?></h1>

		    		
		    	</ul>
		    </article>
		</section>
	</div>
<?php include '../app/views/template/partials/footer.php'; ?>