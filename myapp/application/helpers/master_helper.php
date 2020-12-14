<?php


function show_tags($tags){
  foreach($tags as $key2 =>$tag) {
    echo form_checkbox('tags[]',$tag['id']).$tag['name'];
  }
}
function show_ctg($ctgs){
  foreach($ctgs as $key2 =>$ctg) {
    echo form_checkbox('category[]',$ctg['id']).$ctg['name'];
  }
}


function dd($param){

   echo "<pre>";
   var_dump($param);
   exit;

}


?>
