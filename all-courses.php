<?php 
include("includes/header.php");
include("helpers/Parser.php");

$first_name = $user['first_name'];
$user = $user['email'];

if(isset($_POST['save_course'])) {
  $courseID = $_POST['course_id'];
  $courseTitle = $_POST['course_title'];
  $itemID = $_POST['item_id'];
  $title = $_POST['title'];

  // check if course is saved already
  $check_course_saved_query = mysqli_query($con, "SELECT * FROM selected_courses WHERE course_id='$courseID' AND item_id='$itemID' AND email='$user'");
  $check_course_saved_query_num_rows = mysqli_num_rows($check_course_saved_query);

  if(!($check_course_saved_query_num_rows > 0)) {
    $save_course_query = mysqli_query($con, "INSERT INTO selected_courses VALUES(null, '$user', '$courseID', '$courseTitle', '$itemID', '$title')");
  } else {
    // user already saved course
  }

}
?>

<div class="container">
  <h1 class="title">All Courses</h1>
  <?php 
    $all_courses_query = mysqli_query($con, "SELECT * FROM course_items");
    $all_courses_row_count = mysqli_num_rows($all_courses_query);
    $all_courses_html = '<div class="courses">';

    if($all_courses_row_count > 0) {
      while($row = mysqli_fetch_array($all_courses_query)) {
        $courseId = $row['course_id'];
        $courseTitle = $row['course_title'];
        $itemId = $row['item_id'];
        $title = $row['title'];
        $description = $row['description'];
        $content = $row['content'];
        $courseURL = "./course.php?course_id=$courseId&item_id=$itemId";

        $all_courses_html .= "
          <div class='course-container'>
            <a class='course-title' href=$courseURL>$courseTitle: $title</a>
            <p class='description'>$description</p>
            <form action='all-courses.php' class='save-course-form' method='POST'>
              <input type='number' name='course_id' value='$courseId' class='form-hide' />
              <input type='number' name='item_id' value='$itemId' class='form-hide' />
              <input type='text' name='course_title' value='$courseTitle' class='form-hide' />
              <input type='text' name='title' value='$title' class='form-hide' />
              <input type='submit' name='save_course' class='add-course-btn' id='add-course' value='Save Course'/>
            </a>
          </div>
          <hr>
        ";
      }
    }

  $all_courses_html .= "</div>";
  echo $all_courses_html;

  ?>
</div>