<?php 


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $what = (!empty($_POST['what']) ? $_POST['what'] : 'all');
        $where= (!empty($_POST['where']) ? $_POST['where'] : 'all');

        $search_issues = array(' ','%20','Ä','ä','Õ','õ','Ö','ö','Ü','ü','Š','š','Ž','ž');
        $search_fix = array('_','_','?','?','?','?','?','?','?','?','?','?','?','?');

        // $name = str_replace(array(' ','%20'), "_", htmlspecialchars(trim($what)));
        // $location = str_replace(array(' ','%20'), "_", htmlspecialchars(trim($where)));     
        $name = str_replace($search_issues, $search_fix, htmlspecialchars(trim($what)));
        $location = str_replace($search_issues, $search_fix, htmlspecialchars(trim($where)));

        header('Location: /directory/public/results/' . $name . '/' . $location);
    }
    include '../app/views/template/partials/header.php'; 
?>
    <!-- Jumbotron -->
    <div class="jumbotron">
    	<div class="container">
    		<h1><?php lang::test('company_name', $lang); ?></h1>
    		<p><?php lang::test('invite_to_search', $lang); ?></p>
            <p>
            
            </p>
    	</div>
    </div><!-- End Jumbotron -->
    <div class="container">
	    <section>
		    <article>
		    	<form method="post" action="">
                    <div id="errorMessage"></div>
                    <div class="field">
                        <label for="what"><?php lang::test('what', $lang); ?></label>
                        <input type="text" name="what" id="what" value="" 
                        autocomplete="off"  placeholder="GF Media">
                    </div>
                    <div class="field">
                        <label for="Where"><?php lang::test('where', $lang); ?></label>
                        <input type="text" name="where" id="where" value="" 
                        autocomplete="off" placeholder="Santo Domingo">
                    </div>
                    <input class="btn search" type="submit" name="submit" value="<?php lang::test('search', $lang); ?>" >

                </form>
		    </article>
		</section>
	</div>
<?php include '../app/views/template/partials/footer.php'; ?>