<?php 
/*
* This is 404 Page Template
*/


/*Displaying the error page when url is wrong*/
get_header(); 
?> 

<main>
    <section>
        <div class="container">
            <div class="row">
              <div class="col">
                <h1> You are searcing something wrong</h1>
                <div>
                  <?php get_search_form() ?>
                  <a href="<?php echo home_url() ?>">Click Here</a>
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
