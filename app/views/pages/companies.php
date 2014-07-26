[
<?php  
     foreach ($data as $value) {
          echo '{ "name": "' . (isset($value->name) ? utf8_encode($value->name) : NULL) .'" },';  
          echo '{ "name": "' . (isset($value->category) ? utf8_encode($value->category) : NULL) .'" },';         
     }
?>
          { "name": "" }
]
