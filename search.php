<?php 
/*
* This is Search Template
*/


/*Displaying the serch*/
get_header(); 
?> 

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9">


                    <div class='search-title'>
                        <h1> <?php printf( __('Serch Result For: %s' , 'anirban'), get_search_query()); ?></h1>
                    </div>
                    <?php get_template_part( 'template/post_setup'); ?>

                    <div class="pagination">
                        <?php if('post_pagenav') { post_pagenav();} else {?>
                            <?php next_posts_link(); ?>
                            <?php previours_posts_link(); ?>
                        <?php } ?>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="sidebar">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>

        </div>
    </section>
</main>

<?php 
/*This template from footer.php*/
get_footer(); 
?> 
