<?php 
/**
 *
 * Template Name: Template News
 * 
 */

  get_header();

  while(have_posts()): the_post();
    ?>
    <style>
        .blogList.iksScribleSec{
            background-image: url(<?=wp_get_attachment_url( get_post_thumbnail_id()); ?>);
            background-size: cover;
            min-height: 700px;
            display: flex;
            align-items: center;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #f6f6f6;
            position: relative;
        }
        .BlogSelect .blgSelect select:focus{
            border-color: #86b7fe00;
            outline: 0;
            box-shadow: none;
        }
        .BlogSelect .blgSelect{position: relative;}
        .BlogSelect .blgSelect:after{
            position: absolute;
            content: '';
            top: 15px;
            right: 15px;
            border-bottom: 1px solid #fff;
            border-left: 1px solid #fff;
            height: 12px;
            width: 12px;
            transform: rotate(135deg);
        }
        .BlogSelect .blgSelect:before{
            position: absolute;
            content: '';
            top: 75%;
            right: 15px;
            border-bottom: 1px solid #fff;
            border-left: 1px solid #fff;
            height: 12px;
            width: 12px;
            transform: translate(0, -100%) rotate(-45deg);
            z-index: 9;
        }
        .BlogSelect {
            position: static;
            display: flex;
            width: 100%;
            justify-content: center;
        }
        @media (max-width: 1600px){
            .blogList.iksScribleSec{min-height: 500px;}
        }
        @media (max-width: 991px){
            .blogList.iksScribleSec{min-height: auto;}
        }
    </style>
    <section class="iksScribleSec ScribleMain blogList  py-5" id="IKSScribble">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 pe-lg-5">
                    <div class="bnrHead">
                        <div class="f50 cl-fff fw-bold"> 
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blgDtl py-5 my-5">
        <div class="container">
            <div class="tabDivmain text-center mb-5 findBlog">
                <?php if(get_field('snews_heading')): ?>
                    <h2 class="cl-60 mb-4 pos-rel subHead f50"><?php the_field('snews_heading'); ?></h2>
                <?php endif; ?>

                <?php if(get_field('ssub_heading')): ?>
                    <p class="cl-60 f36 mb-4"><?php the_field('ssub_heading'); ?></p>
                <?php endif; ?>
                <div class="BlogSelect">
                    <?php   
                        $author_list = get_users();
                        $get_categories = get_terms([
                            'taxonomy' => 'news-category',
                            'hide_empty' => false,
                        ]);

                        $fyears = array_combine(range(date("Y"), 2019), range(date("Y"), 2019));

                    ?>
                    <form method="post" style="display:flex;">
                        <div class="blgSelect">
                            <select name="author-name" class="form-control" style="font-size: 22px;color: #ffffff;border-radius: 0px;background-color: #81a53c;padding: 10px 20px;min-width: 200px;display: inline-block;text-align: start;position: relative;cursor: pointer;">
                                <option value="" selected><?php esc_html_e('Select Author', 'iks'); ?></option>  
                                <?php foreach($author_list as $key=>$atVal): ?>
                                    <option value="<?=base64_encode($atVal->ID); ?>"><?php echo $atVal->display_name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="blgSelect">
                            <select name="category" class="form-control" style="font-size: 22px;color: #ffffff;border-radius: 0px;background-color: #81a53c;padding: 10px 20px;min-width: 200px;display: inline-block;text-align: start;position: relative;cursor: pointer;">
                                <option value="" selected><?php esc_html_e('Select Category', 'iks'); ?></option>  

                                <?php foreach($get_categories as $key=>$catVal): ?>
                                    <option value="<?=base64_encode($catVal->term_id); ?>"><?php echo $catVal->name ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="blgSelect">
                            <select name="fyear" class="form-control" style="font-size: 22px;color: #ffffff;border-radius: 0px;background-color: #81a53c;padding: 10px 20px;min-width: 200px;display: inline-block;text-align: start;position: relative;cursor: pointer;">
                                <option value="" selected><?php esc_html_e('Year', 'iks'); ?></option>  
                                <?php foreach($fyears as $key=>$yeVal): ?>
                                    <option value="<?=base64_encode($yeVal); ?>"><?php echo $yeVal; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="blgSelect">
                            <select name="fmonth" class="form-control" style="font-size: 22px;color: #ffffff;border-radius: 0px;background-color: #81a53c;padding: 10px 20px;min-width: 200px;display: inline-block;text-align: start;position: relative;cursor: pointer;">
                                <option value="" selected><?php esc_html_e('Month', 'iks'); ?></option>  
                                <?php 
                                    for($fm=1; $fm<=12; $fm++): 
                                        $fmonth = date('F', mktime(0,0,0,$fm, 1, date('Y'))); 
                                        ?>
                                        <option value="<?=base64_encode($fm); ?>"><?php echo $fmonth; ?></option>
                                        <?php 
                                    endfor; 
                                ?>

                            </select>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row newsaList">
                <?php 
                    
                    $getNews = new WP_Query(array(
                        'post_type'=> 'news',
                        'post_status'=> 'publish',
                        'posts_per_page' => 6,
                    ));

                    while($getNews->have_posts()): $getNews->the_post();

                      // get template content
                      get_template_part('template-parts/content/loop/content');

                    endwhile; 

                    wp_reset_postdata();

                ?>
            </div>
        </div>
    </section>

    <?php 
  endwhile;

  get_footer();

?>
<script>
    jQuery(document).ready(function(){
        jQuery('select[name="author-name"]').on('change', function(){
            var fid = jQuery(this).val();
            var cid = jQuery('select[name="category"]').val();
            var yid = jQuery('select[name="fyear"]').val();
            var mid = jQuery('select[name="fyear"]').val();
            var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';

            var data = {
                'action': 'news_fliter',
                'aid': fid,
                'cid': cid,
                'yid': yid,
                'mid': mid
            };

            jQuery.post(ajaxurl, data, function(response) {
                jQuery('.newsaList').empty();
                jQuery('.newsaList').append(response);
            });
        });

        jQuery('select[name="category"]').on('change', function(){
            var cid = jQuery(this).val();
            var aid = jQuery('select[name="author-name"]').val();
            var yid = jQuery('select[name="fyear"]').val();
            var mid = jQuery('select[name="fmonth"]').val();
            var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';

            var data = {
                'action': 'news_fliter',
                'aid': aid,
                'cid': cid,
                'yid': yid,
                'mid': mid
            }

            jQuery.post(ajaxurl, data, function(response) {
                jQuery('.newsaList').empty();
                jQuery('.newsaList').append(response);
            }); 
        });

        jQuery('select[name="fyear"]').on('change', function(){
            var cid = jQuery('select[name="category"]').val();
            var aid = jQuery('select[name="author-name"]').val();
            var yid = jQuery(this).val();
            var mid = jQuery('select[name="fmonth"]').val();
            var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';

            var data = {
                'action': 'news_fliter',
                'aid': aid,
                'cid': cid,
                'yid': yid,
                'mid': mid
            }

            jQuery.post(ajaxurl, data, function(response) {
                jQuery('.newsaList').empty();
                jQuery('.newsaList').append(response);
            }); 
        });

        jQuery('select[name="fmonth"]').on('change', function(){
            var cid = jQuery('select[name="category"]').val();
            var aid = jQuery('select[name="author-name"]').val();
            var yid = jQuery('select[name="fyear"]').val();
            var mid = jQuery(this).val();
            var ajaxurl = '<?php echo admin_url( 'admin-ajax.php' ); ?>';

            var data = {
                'action': 'news_fliter',
                'aid': aid,
                'cid': cid,
                'yid': yid,
                'mid': mid
            }

            jQuery.post(ajaxurl, data, function(response) {
                jQuery('.newsaList').empty();
                jQuery('.newsaList').append(response);
            }); 
        });
    });
</script>