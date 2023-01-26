<?php
// isset($layout) ? "": $layout = "list";
// isset($selected_category_id) ? "": $selected_category_id = "all";
// isset($selected_level) ? "": $selected_level = "all";
// isset($selected_language) ? "": $selected_language = "all";
// isset($selected_rating) ? "": $selected_rating = "all";
// isset($selected_price) ? "": $selected_price = "all";
// echo $selected_category_id.'-'.$selected_level.'-'.$selected_language.'-'.$selected_rating.'-'.$selected_price;
// $number_of_visible_categories = 10;
if (isset($homework_id)) {
    $homeworks = $this->crud_model->get_homeworks($homework_id = "", $instructor_id = 0)->row_array();
    $homework_details = $this->crud_model->get_homeworks_by_id($homework_id = "")->row_array();
    $title = $homework_details['title'];
    $description = $homework_details['description'];
    $due_date = $homework_details['due_date'];
    $quiz_url = $homework_details['quiz_url'];

//     $course_details = $this->get_course_by_id($course_id)->row_array();
//     $sub_category_details = $this->crud_model->get_category_details_by_id($sub_category_id)->row_array();
//     $category_details     = $this->crud_model->get_categories($sub_category_details['parent'])->row_array();
//     $category_name        = $category_details['name'];
//     $sub_category_name    = $sub_category_details['name'];
}
?>

<section class="category-header-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo site_url('home'); ?>"><i class="fas fa-home"></i></a></li>
                        <li class="breadcrumb-item">
                            <a href="#">
                                <?php echo $page_title;; ?>
                            </a>
                        </li>
                    </ol>
                </nav>
                <h1 class="category-name">
                    <?php echo $page_title; ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="page-title"> <i class="mdi mdi-apple-keyboard-command title_icon"></i> <?php echo get_phrase('Homework_and_Quizzes'); ?></h4>
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>

<style>

main .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

main .price {
  color: grey;
  font-size: 22px;
}

main .card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

main .card button:hover {
  opacity: 0.7;
}
</style>

<section class="homework-list-area">
    <div class="container">
        <main>
            <?php while($row = count($homeworks)) { ?>
            <div class="card">
                <img src="../uploads/system/favicon.png" alt="">
                    <h3><?php echo $title ?></h3>
                    <p class="description"><?php echo $description ?></p>
                    <p class="due-date"><?php echo $due_date ?></p>
                    <p><button class="show" a href=<?php echo $quiz_url?>>Show homework</button></p>
            </div>
            <?php } ?>
        </main>
    </div> <!-- end container-->       
</section>

<div class="container-fluid">
        <div class="wrapper">
            <!-- BEGIN CONTENT -->
            <!-- SIDEBAR -->
            <?php include $logged_in_user_role.'/'.'navigation.php' ?>
            <!-- PAGE CONTAINER-->
            <div class="content-page">
                <div class="content">
                    <!-- BEGIN PlACE PAGE CONTENT HERE -->
                    <?php include $logged_in_user_role.'/'.$page_name.'.php';?>
                    <!-- END PLACE PAGE CONTENT HERE -->
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
</div>
