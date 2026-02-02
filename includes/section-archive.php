<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        //
?>
        <div class="card">
            <!-- <img class="card-img-top" src="holder.js/100x180/" alt=""> -->
            <div class="card-body">
                <h4 class="card-title"><?php the_title(); ?></h4>
                <p class="card-text"><?php the_excerpt(); ?></p>
            </div>
        </div>
        <div class="card-footer">   
            <a class="btn btn-outline-success" href="<?php the_permalink()?>">Xem thêm</a>
        </div>
<?php
        // Post Content here\
    } // end while
} // end if
