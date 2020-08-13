<?php 
include("includes/header.php");
include("helpers/Parser.php");

$first_name = $user['first_name'];
$user = $user['email'];

if(isset($_POST['remove_course'])) {
  $courseID = $_POST['course_id'];
  $itemID = $_POST['item_id'];
  $remove_selected_item_query = mysqli_query($con, "DELETE FROM selected_courses WHERE course_id='$courseID' AND item_id='$itemID' AND email='$user'");
}

?>

<div class="container">

  <h1 class="title">My Courses</h1>
  <?php 
      $all_courses_query = mysqli_query($con, "SELECT * FROM selected_courses WHERE email='$user'");
      $all_courses_row_count = mysqli_num_rows($all_courses_query);
      $all_courses_html = '<div class="courses">';

      if($all_courses_row_count > 0) {
        while($row = mysqli_fetch_array($all_courses_query)) {
          $courseID = $row['course_id'];
          $courseTitle = $row['course_title'];
          $itemID = $row['item_id'];
          $itemTitle = $row['item_title'];
          $courseURL = "./course.php?course_id=$courseID&item_id=$itemID";

          $all_courses_html .= "
            <div class='course-container'>
              <a class='course-title' href=$courseURL>$courseTitle: $itemTitle</a>
              <form action='index.php' class='delete-course-form' method='POST'>
                <input type='number' name='course_id' value='$courseID' class='form-hide' />
                <input type='number' name='item_id' value='$itemID' class='form-hide' />
                <input type='text' name='course_title' value='$courseTitle' class='form-hide' />
                <input type='text' name='title' value='$itemTitle' class='form-hide' />
                <input type='submit' name='remove_course' class='remove-course-btn' id='remove-course' value='Remove Course'/>
              </form>
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