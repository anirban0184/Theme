<?php
                        if(have_posts()) :
                            while(have_posts()) : the_post(); 
                    ?>

                    <div class="blog-area">
                        <div class="post-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo the_post_thumbnail( 'post-thumbnails' ); ?>
                            </a>
                        </div>
                        <div class="content">
                            <h1>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h1>
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <?php  endwhile; else :
                        echo ('There has no post');
                            
                        endif;
                    ?>