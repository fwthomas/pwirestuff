<?php
// a snippet that could go into a Page field custom PHP page selector field, to show unpublished pages of a certain template type

$possibles = $pages->find('template=project,include=all');
//$this->message($possibles->count());

foreach($possibles as $pg){
   //$this->message($pg->name . "status: " . $pg->status);
   if($pg->is(Page::statusUnpublished))
      $possibles->remove($pg);
}

return $possibles;

?>