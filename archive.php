<?php 
/*
* This is Archive Template
*/


/*This template from header.php*/
get_header(); 
?> 

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-9">


                    <div class='achive-posts'>
                        <sapn> <b style="font-size: 40px;">Catetory :</b></sapn>
                        <?php 
                            the_archive_title('<h1 style="color: red; display: inline;"' , '</h1>');
                            the_author_description();
                             ?>
                    </div>
                    <?php 
                    /*Blog part*/
                    ?>
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
