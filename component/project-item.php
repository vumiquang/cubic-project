<?php 
$class = "project-item";
$style = "";
$radius = 0;
$none = "";
$title = "";
$addr = "";
$filter = "";
if(isset($item_zoom) && $item_zoom ==false)
    $class = $class.' no-zoom';
if(isset($item_border))
    $style = $style.'border:'.$item_border.'px solid #fff;';
if(isset($item_radius))
    $radius = ' border-radius: '.$item_radius.'px;';
if(isset($item_info) && $item_info == false)
    $none = 'display:none';
if(isset($item_title))
    $title = $item_title;
if(isset($item_address))
    $addr = $item_address;
if(isset($item_no_filter) && $item_filter == false)
  $filter = '-webkit-filter: unset; filter: unset;';

    
echo '<div class="'.$class.'" style="'.$style.'">';
?>
          <a
            href="#"
            style="background-image: url('./assets/images/posts/post2.jpg'); <?php echo $radius;echo $filter;?>"
          >
            <div class="project-info" style="<?php echo $radius;echo $none;?>">
              <div class="project-name"><?php echo $item_title; ?></div>
              <div class="project-addr"><?php echo $addr; ?></div>
            </div>
          </a>
</div>