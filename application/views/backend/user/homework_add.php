<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <title>jQuery UI Datepicker - Default functionality</title> -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#duedatepicker" ).datepicker();
  } );
  </script>
</head>

<div class="row ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo get_phrase('add_new_homework'); ?></h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">

                <h4 class="header-title mb-3"><?php echo get_phrase('add_homework_form'); ?>
                    <a href="<?php echo site_url('user/homeworks'); ?>" class="alignToTitle btn btn-outline-secondary btn-rounded btn-sm"> <i class=" mdi mdi-keyboard-backspace"></i> <?php echo get_phrase('back_to_homework_list'); ?></a>
                </h4>

                <div class="row">
                    <div class="col-xl-12">
                        <form class="required-form" action="<?php echo site_url('user/homework_actions/add'); ?>" method="post" enctype="multipart/form-data">
                            <div id="basicwizard">

                                <ul class="nav nav-pills nav-justified form-wizard-header mb-3">
                                    <li class="nav-item">
                                        <a href="#basic" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="mdi mdi-fountain-pen-tip mr-1"></i>
                                            <span class="d-none d-sm-inline"><?php echo get_phrase('basic'); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#duedate" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="mdi mdi-camera-control mr-1"></i>
                                            <span class="d-none d-sm-inline"><?php echo get_phrase('due_date'); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#media" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="mdi mdi-library-video mr-1"></i>
                                            <span class="d-none d-sm-inline"><?php echo get_phrase('media'); ?></span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#finish" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2">
                                            <i class="mdi mdi-checkbox-marked-circle-outline mr-1"></i>
                                            <span class="d-none d-sm-inline"><?php echo get_phrase('finish'); ?></span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content b-0 mb-0">
                                    <div class="tab-pane" id="basic">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-8">

                                                <div class="form-group row mb-3">
                                                    <label class="col-md-2 col-form-label" for="course_title"><?php echo get_phrase('homework_title'); ?> <span class="required">*</span> </label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" id="course_title" name = "title" placeholder="<?php echo get_phrase('enter_homework_title'); ?>" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-3">
                                                    <label class="col-md-2 col-form-label" for="description"><?php echo get_phrase('description'); ?></label>
                                                    <div class="col-md-10">
                                                        <textarea name="description" id = "description" class="form-control"></textarea>
                                                    </div>
                                                </div> 

                                            </div>  <!--end col -->
                                        </div>   <!--end row -->  
                                    </div> <!--end tab pane -->
                                

                                <div class="tab-pane" id="duedate">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-8">
                                            <div class="form-group row mb-3">
                                                <label class="col-md-2 col-form-label" for="due_date"><?php echo get_phrase('due_date'); ?></label>
                                                <div class="col-md-10">
                                                    <div id = "due_date">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" name="due_date" id="duedatepicker" placeholder="<?php echo get_phrase('provide_due_date'); ?>">
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div> <!--end col -->
                                    </div> <!--end row -->
                                </div> <!--end tab pane -->

                                <div class="tab-pane" id="media">
                                    <div class="row justify-content-center">

                                        <div class="col-xl-8">
                                            <div class="form-group row mb-3">
                                                <label class="col-md-2 col-form-label" for="homework_platform"><?php echo get_phrase('homework_platform'); ?></label>
                                                <div class="col-md-10">
                                                    <select class="form-control select2" data-toggle="select2" name="homework_platform" id="homework_platform">
                                                        <option value="google_form"><?php echo get_phrase('google_form'); ?></option>
                                                        <option value="google_classrom"><?php echo get_phrase('google_classrom'); ?></option>
                                                        <option value="youtube"><?php echo get_phrase('youtube'); ?></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-xl-8">
                                            <div class="form-group row mb-3">
                                                <label class="col-md-2 col-form-label" for="quiz_url"><?php echo get_phrase('homework_url'); ?></label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control" name="quiz_url" id="quiz_url" placeholder="E.g: https://www.youtube.com/watch?v=oBtf8Yglw2w">
                                                </div>
                                            </div>
                                        </div> <!-- end col -->

                                        <div class="col-xl-8">
                                            <div class="form-group row mb-3">
                                                <label class="col-md-2 col-form-label" for="homework_thumbnail_label"><?php echo get_phrase('homework_thumbnail'); ?></label>
                                                <div class="col-md-10">
                                                    <div class="wrapper-image-preview" style="margin-left: -6px;">
                                                        <div class="box" style="width: 250px;">
                                                            <div class="js--image-preview" style="background-image: url(<?php echo base_url('uploads/thumbnails/course_thumbnails/course-thumbnail.png'); ?>); background-color: #F5F5F5;"></div>
                                                            <div class="upload-options">
                                                                <label for="homework_thumbnail" class="btn"> <i class="mdi mdi-camera"></i> <?php echo get_phrase('homework_thumbnail'); ?> <br> <small>(600 X 600)</small> </label>
                                                                <input id="homework_thumbnail" style="visibility:hidden;" type="file" class="image-upload" name="homework_thumbnail" accept="image/*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>
                                <div class="tab-pane" id="seo">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-8">
                                            <div class="form-group row mb-3">
                                                <label class="col-md-2 col-form-label" for="website_keywords"><?php echo get_phrase('meta_keywords'); ?></label>
                                                <div class="col-md-10">
                                                    <input type="text" class="form-control bootstrap-tag-input" id = "meta_keywords" name="meta_keywords" data-role="tagsinput" style="width: 100%;"/>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-xl-8">
                                            <div class="form-group row mb-3">
                                                <label class="col-md-2 col-form-label" for="meta_description"><?php echo get_phrase('meta_description'); ?></label>
                                                <div class="col-md-10">
                                                    <textarea name="meta_description" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>
                                <div class="tab-pane" id="finish">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="text-center">
                                                <h2 class="mt-0"><i class="mdi mdi-check-all"></i></h2>
                                                <h3 class="mt-0"><?php echo get_phrase("thank_you"); ?> !</h3>

                                                <p class="w-75 mb-2 mx-auto"><?php echo get_phrase('you_are_just_one_click_away'); ?></p>

                                                <div class="mb-3 mt-3">
                                                    <button type="button" class="btn btn-primary text-center" onclick="checkRequiredFields()"><?php echo get_phrase('submit'); ?></button>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row -->
                                </div>

                                <ul class="list-inline mb-0 wizard text-center">
                                    <li class="previous list-inline-item">
                                        <a href="javascript::" class="btn btn-info"> <i class="mdi mdi-arrow-left-bold"></i> </a>
                                    </li>
                                    <li class="next list-inline-item">
                                        <a href="javascript::" class="btn btn-info"> <i class="mdi mdi-arrow-right-bold"></i> </a>
                                    </li>
                                </ul>

                            </div> <!-- tab-content -->
                        </div> <!-- end #progressbarwizard-->
                    </form>
                </div>
            </div><!-- end row-->
        </div> <!-- end card-body-->
    </div> <!-- end card-->
</div>
</div>


<script type="text/javascript">
  $(document).ready(function () {
    initSummerNote(['#description']);
  });
</script>

<script type="text/javascript">
var blank_outcome = jQuery('#blank_outcome_field').html();
var blank_requirement = jQuery('#blank_requirement_field').html();
jQuery(document).ready(function() {
  jQuery('#blank_outcome_field').hide();
  jQuery('#blank_requirement_field').hide();
});
function appendOutcome() {
  jQuery('#outcomes_area').append(blank_outcome);
}
function removeOutcome(outcomeElem) {
  jQuery(outcomeElem).parent().parent().remove();
}

function appendRequirement() {
  jQuery('#requirement_area').append(blank_requirement);
}
function removeRequirement(requirementElem) {
  jQuery(requirementElem).parent().parent().remove();
}

function priceChecked(elem){
  if (jQuery('#discountCheckbox').is(':checked')) {

    jQuery('#discountCheckbox').prop( "checked", false );
  }else {

    jQuery('#discountCheckbox').prop( "checked", true );
  }
}

function topCourseChecked(elem){
  if (jQuery('#isTopCourseCheckbox').is(':checked')) {

    jQuery('#isTopCourseCheckbox').prop( "checked", false );
  }else {

    jQuery('#isTopCourseCheckbox').prop( "checked", true );
  }
}

function isFreeCourseChecked(elem) {

  if (jQuery('#'+elem.id).is(':checked')) {
    $('#price').prop('required',false);
  }else {
    $('#price').prop('required',true);
  }
}

function calculateDiscountPercentage(discounted_price) {
  if (discounted_price > 0) {
    var actualPrice = jQuery('#price').val();
    if ( actualPrice > 0) {
      var reducedPrice = actualPrice - discounted_price;
      var discountedPercentage = (reducedPrice / actualPrice) * 100;
      if (discountedPercentage > 0) {
        jQuery('#discounted_percentage').text(discountedPercentage.toFixed(2)+'%');

      }else {
        jQuery('#discounted_percentage').text('<?php echo '0%'; ?>');
      }
    }
  }
}
</script>

<style media="screen">
body {
  overflow-x: hidden;
}
</style>

