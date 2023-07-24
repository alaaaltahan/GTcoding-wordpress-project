    <?php get_header();
        while(have_posts()) {
            the_post();
        
    
    ?>

    <h2 class="page-heading"><?php the_title(); ?></h2>
    <div id="post-container">
      <section id="blogpost">
        <div class="card">
          <div class="card-meta-blogpost">
              posted by <?php the_author(); ?> on <?php the_time('F j,y') ?> 
              <?php if(get_post_type()=='post'){ ?>
                in <a href="#"><?php echo get_the_category_list(',') ?></a>
              <?php } ?>
             
          </div>
          <?php the_content(); ?>
        </div>

        <div id="comments-section">
          <?php comment_form();
          
          $comment_number= get_comments_number();
          if($comment_number != 0){
            ?>

            <div class="comments">
                <h3>what others say</h3>
                <ol class="all_comments">
                    <?php 
                    $comments= get_comments(array(
                        'post_id' => $post->ID,
                        'status'  => 'approve'
                    ));
                    wp_list_comments(array(
                        'per-page' => 15
                    ), $comments);
                    ?>
                </ol>
            </div>

            <?php
                }  
            ?>
        </div>
      </section>

      <?php }?>  

      <aside id="sidebar">
        <?php 
        dynamic_sidebar('main_sidebar');
        ?>
      </aside>
    </div>

    <?php get_footer(); ?>