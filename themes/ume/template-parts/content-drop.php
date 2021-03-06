<article class="game-dropdown"  data-id="<?php the_ID(); ?>">         
    <div class="title">    
        <h3>
            <a href="<?php echo esc_url( get_the_permalink()); ?>" class="play">
                <?php echo get_the_title(); ?>
            </a>
        </h3>
    </div><!-- end of title -->
    <div class="meta">
	    <h4> 
            By: <?php echo CFS()->get ( 'game_author' ); ?> 
        </h4>
	    <h4> 
            <?php echo CFS()->get ( 'game_location' ); ?> 
        </h4>
    </div><!-- end of meta -->
    <div class="program">
	    <h4>
            <a href="https://ume.academy/programs/"><?php echo CFS()->get ( 'game_program' ); ?> 
                Program
            </a>
        </h4>
    </div><!-- end of program -->
    <div class="view-design">
        <?php $game_design = CFS()->get ( 'game_design' ); ?>
        <?php if (is_array($game_design)) : ?>
        <a href="<?php echo get_permalink($game_design[0]); ?>">
            View Design Process
        </a>
        <?php endif; ?>
    </div><!-- end of view-design -->
    <div class="coins">
	    <h4> 
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/coin.png" alt="coin"> <?php echo CFS()->get ( 'game_coins' ); ?> 
        </h4>
    </div><!-- end of coins -->
    <div class="buttons">
        <p class="download">
            <a href="./download?id=<?php the_ID(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/download-icon.png" alt="Download"/>
            </a>
        </p>
        <p class="play-game">
            <a href="<?php echo esc_url( get_the_permalink()); ?>" class="play">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/play-button.png" alt="Play">
            </a>
        </p> 
        <p class="share">
            <a href="<?php echo esc_url( get_the_permalink()); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Share-Icon.png" alt="Share">
            </a>
            <input type="text" class="hidden-copy" value="<?php echo get_the_permalink() ?>">
        </p> 
    </div><!-- end of buttons -->
    <div class="thumbnail">
        <a href="<?php echo esc_url( get_the_permalink()); ?>" class="play">
            <?php the_post_thumbnail( 'thumbnail');?>
        </a>
    </div><!-- end of thumbnail -->
    <div class="gem">
        <h4>
            Prizes Earned: 
        </h4>
        <div>
            <?php $gems =  ume_get_icons ( CFS()->get ( 'game_coins' ))?>
            <?php foreach($gems as $gem): 
                echo $gem;
            endforeach; ?> 
        </div><!-- end of foreach div -->
    </div><!-- end of gem -->
</article>