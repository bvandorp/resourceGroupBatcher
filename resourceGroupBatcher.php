<?php
/*	
	This snippet updates all resources to join the given resourceGroup
	In my example "AllDocs", change this value to use your own resourceGroup
	
	Usage: [[!resourceGroupBatcher]]
	
*/
	
if ($collection = $modx->getCollection('modResource')){
    foreach ($collection as $resource){
        $resource->joinGroup('AllDocs');
		$resource->save();
		echo $resource->get('id').' updated<br/>';
    } 
}
?>