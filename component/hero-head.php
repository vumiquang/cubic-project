<?php 
$title = "Project";
if(isset($hero_title))
    $title = $hero_title;

?>


<section class="hero-head">
        <div class="head-logo"><a href="index.php"><img src="./assets/images/cubic_logo_dark_glow_2.png" alt="logo"></a></div>
        <h1 class="hero-head-title"><?php echo $title; ?></h1>
        <div class="hero-head-filter">
            <div class="filter">
                <div class="filter-type">
                    <div class="filter-name">Type</div>
                    <div class="filter-select">
                        <span class="filter-item active">
                            <span class="icon"><i class="fas fa-plus"></i></span><span>Master plan</span>
                        </span>
                        <span class="filter-item">
                            <span class="icon"><i class="fas fa-plus"></i></span><span>Master plan</span>
                        </span>
                        <span class="filter-item">
                            <span class="icon"><i class="fas fa-plus"></i></span><span>Master plan</span>
                        </span>
                        <span class="filter-item">
                            <span class="icon"><i class="fas fa-plus"></i></span><span>Master plan</span>
                        </span>
                        <span class="filter-item">
                            <span class="icon"><i class="fas fa-plus"></i></span><span>Master plan</span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="search"><form action="#" method="get"><input class="text" placeholder="Search..."></input></form></div>
        </div>
    </section>