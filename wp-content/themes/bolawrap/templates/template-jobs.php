<?php 
/* 
    Template Name: Page Jobs
*/ 
?>

<?php get_header(); ?>

<section class="img-slider">
    <div class="container">
        <div class="inner-slider-title text-center">
            <?php 
            $hero = (get_field('hero')) ? get_field('hero') : '' ;
            ?>
            <?php if ($hero['content'] != ''): ?>
                <?php echo $hero['content']; ?>
            <?php endif ?>
        </div>
    </div>          
</section>

<section class="global-section global-clone" style="background-image: url('<?php echo get_site_url() ?>/wp-content/uploads/2020/02/global-bg.jpg')">
    <div class="container">
        <?php 
        $jobs = (get_field('jobs')) ? get_field('jobs') : '' ;
        ?>
        <?php foreach ($jobs['item_jobs'] as $item): ?>
            <div class="box-job">
                <p class="first-sec"><?php echo $item['career'] ?></p>
                <div class="job-ri">
                    <p class="last-p"><?php echo $item['location'] ?></p>
                    <img src="<?php echo get_site_url() ?>/wp-content/themes/bolawrap/assets/images/caret.png" alt="">
                </div>
                <a href="<?php echo $item['link_job']['url'] ?>" taget="<?php echo $item['link_job']['target'] ?>"></a>
            </div>
        <?php endforeach ?>
    </div>
</section>

<section class="case-study" style="display: none;">
        <div class="container">
            <div class="case-study-wrapper">
                <div class="case-study-text">                 
                    <?php 
                    $pre_footer = (get_field('pre_footer')) ? get_field('pre_footer') : '' ;
                    ?>
                    <?php if ($pre_footer['content'] != ''): ?>
                        <?php echo $pre_footer['content']; ?>
                    <?php endif ?>    
                    <div class="btn-group"> 
                        <a href="<?php echo $pre_footer['button']['url'] ?>" class="btn" taget="<?php echo $pre_footer['button']['target'] ?>"><?php echo $pre_footer['button']['title'] ?></a>    
                    </div>                                   
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>