<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package emad-alsheikh
 */

get_header();
?>

<div class="container">
    <div class="row justify-content-end">
        <div class="col mt-5 single-post-body pb-3">
            <h1 class="my-3"><?php the_title() ?></h1>
            <div class="single-post-content">
                <div class="d-flex justify-content-start">
                    <i class="far fa-calendar-alt mt-1 mx-1"></i>
                    <span class="ml-3"><?php the_time('F j,Y') ?></span>
                    <i class="fas fa-comments mt-1"></i>
                    <span class="mr-1 ml-3"><?php comments_popup_link( '0 comment', '1 comment', '% comments') ?></span>
                    <i class="fas fa-edit mt-1"></i>
                    <?php edit_post_link('Edit') ?>
                </div>
                <div class="mt-3">
                    <?php the_post_thumbnail('', ['class'=>'img-responsive single-post-img mx-auto my-3']) ;
                        the_content();
                    ?>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between mt-5 next-prev">
            <?php
                if(get_next_post_link()){
                    next_post_link( '%link', '%title <i class="fas fa-caret-right"></i>',true );
                }else{
                    echo '<p class="d-inline" title="there is no next post">التالى</p>';
                }

                if(get_previous_post_link()){
                    previous_post_link( '%link', '<i class="fas fa-caret-left"></i> %title',true );
                }else{
                    echo '<p class="d-inline" title="there is no previous post">السابق</p>';
                }
            

            ?>
        </div>
    </div>
</div>

<?php
// get_sidebar();
get_footer();
