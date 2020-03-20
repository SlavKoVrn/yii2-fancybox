<?php 
$first=true;
foreach($images as $image){
    if ($group){
        $rel_group = 'rel="group"';
        if ($first){
            $first=false;
            $vid='';
        }else{
            $vid='style="display:none"';
        }
    } else {
        $vid='';
        $rel_group = '';
    }
	?>
    <a <?= $rel_group ?> class="<?= $class ?> img-thumbnail" href="<?= $image['src'] ?>" <?= $vid ?> >
        <img height="<?= $height ?>" width="<?= $width ?>" src="<?= $image['src'] ?>" alt="<?= $image['title'] ?>" />
	</a>
<?php } ?>
    
