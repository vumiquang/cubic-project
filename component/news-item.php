<?php 
$link = "#";
$img = "./assets/images/posts/post1.jpg";
$type = "News";
$desc = "Binh dinh";

if(isset($news_link))
    $link = $news_link;
if(isset($news_img))
    $link = $news_img;
if(isset($news_type))
    $link = $news_type;
if(isset($news_desc))
    $link = $news_desc;

?>


<div class="post">
            <a href="<?php echo $link;?>">
              <img class="post-img" src="<?php echo $img;?>" />
              <h4 class="post-type"><?php echo $type;?></h4>
              <p class="post-desc"><?php echo $desc;?></p>
            </a>
          </div>