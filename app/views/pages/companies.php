[
<?php  
     foreach ($data as $value) {
          echo '{ "name": "' . (isset($value->name) ? ($value->name) : NULL) .'" },';  
          echo '{ "name": "' . (isset($value->category) ? ($value->category) : NULL) .'" },';         
     }
?>
          { "name": "" }
]
