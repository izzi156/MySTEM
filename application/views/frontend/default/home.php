<section class="home-banner-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <div class="home-banner-wrap">
                    <h2><?php echo "Virtual Lab"; ?></h2>
                    <p><?php echo "Try out exciting experiments on your own.<br>You are going to have so much fun!"; ?></p>
                    <style>
                    .button {
                    border: none;
                    color: white;
                    padding: 16px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    transition-duration: 0.4s;
                    cursor: pointer;
                    }

                    .button1 {
                    background-color: #0acf97;
                    color: white;
                    border: 2px #0acf97;
                    }

                    .button1:hover {
                    background-color: white;
                    color: black;
                   
                    }
                    </style>
                    <a href="<?php echo site_url('home/virtual_lab'); ?>">
                    <button class="button button1" type=submit>Try experiment</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-fact-area">
    <div class="container-lg">
        <div class="row">
            <?php $courses = $this->crud_model->get_courses(); ?>
            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                    <i class="fas fa-bullseye float-left"></i>
                    <div class="text-box">
                        <h4><?php
                        $status_wise_courses = $this->crud_model->get_status_wise_courses();
                        $number_of_courses = $status_wise_courses['active']->num_rows();
                        echo $number_of_courses.' '.get_phrase('online_courses'); ?></h4>
                        <p><?php echo get_phrase('explore_a_variety_of_fresh_topics'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                    <i class="fa fa-check float-left"></i>
                    <div class="text-box">
                        <h4><?php echo get_phrase('expert_instruction'); ?></h4>
                        <p><?php echo get_phrase('find_the_right_course_for_you'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="home-fact-box mr-md-auto ml-auto mr-auto">
                    <i class="fa fa-clock float-left"></i>
                    <div class="text-box">
                        <h4><?php echo get_phrase('lifetime_access'); ?></h4>
                        <p><?php echo get_phrase('learn_on_your_schedule'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="activity-menu-area">
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <div class="card">
                <div class="card-body">
                <h2 class="activity-menu-title"><?php echo "MySTEM Activity Menu"; ?></h2><hr>
                <style>
                div.gallery {
                margin: 5px;
                border: 1px solid #ccc;
                float: left;
                width: 300px;
                height: 350px;
                }

                div.gallery:hover {
                border: 1px solid #777;
                }

                div.gallery img {
                width: 100%;
                height: auto;
                }

                div.desc {
                padding: 15px;
                text-align: center;
                }
                </style>
                <div class="gallery">
                    <a href=<?php echo site_url('home/courses');?>>
                        <img src="assets/frontend/default/img/learn-module.jpg" alt="" width="600" height="400">
                    </a>
                    <div class="desc">Learning Modules</div>
                </div>
                <div class="gallery">
                    <a href=<?php echo site_url('home/homework');?>>
                        <img src="assets/frontend/default/img/learn-module.jpg" alt="" width="600" height="400">
                    </a>
                    <div class="desc">Homeworks and Quizzes</div>
                </div>
                <div class="gallery">
                    <a href=<?php echo site_url('home/forum');?>>
                        <img src="assets/frontend/default/img/learn-module.jpg" alt="" width="600" height="400">
                    </a>
                    <div class="desc">Forum</div>
                </div>
                <div class="gallery">
                    <a target="_blank" href="https://www.storyjumper.com/">
                        <img src="assets/frontend/default/img/learn-module.jpg" alt="" width="600" height="400">
                    </a>
                    <div class="desc">Story Telling</div>
                </div>
                </div> <!-- end card body-->
                </div> <!-- end of card -->
                
            </div>
        </div>
    </div> 
</section>
<br>

<script type="text/javascript">
function handleWishList(elem) {

    $.ajax({
        url: '<?php echo site_url('home/handleWishList');?>',
        type : 'POST',
        data : {course_id : elem.id},
        success: function(response)
        {
            if (!response) {
                window.location.replace("<?php echo site_url('login'); ?>");
            }else {
                if ($(elem).hasClass('active')) {
                    $(elem).removeClass('active')
                }else {
                    $(elem).addClass('active')
                }
                $('#wishlist_items').html(response);
            }
        }
    });
}

function handleCartItems(elem) {
    url1 = '<?php echo site_url('home/handleCartItems');?>';
    url2 = '<?php echo site_url('home/refreshWishList');?>';
    $.ajax({
        url: url1,
        type : 'POST',
        data : {course_id : elem.id},
        success: function(response)
        {
            $('#cart_items').html(response);
            if ($(elem).hasClass('addedToCart')) {
                $('.big-cart-button-'+elem.id).removeClass('addedToCart')
                $('.big-cart-button-'+elem.id).text("<?php echo get_phrase('add_to_cart'); ?>");
            }else {
                $('.big-cart-button-'+elem.id).addClass('addedToCart')
                $('.big-cart-button-'+elem.id).text("<?php echo get_phrase('added_to_cart'); ?>");
            }
            $.ajax({
                url: url2,
                type : 'POST',
                success: function(response)
                {
                    $('#wishlist_items').html(response);
                }
            });
        }
    });
}

function handleEnrolledButton() {
    $.ajax({
        url: '<?php echo site_url('home/isLoggedIn');?>',
        success: function(response)
        {
            if (!response) {
                window.location.replace("<?php echo site_url('login'); ?>");
            }
        }
    });
}
</script>
