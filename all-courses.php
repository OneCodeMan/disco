<?php 
include("includes/header.php");
include("helpers/Parser.php");

$first_name = $user['first_name'];
$user = $user['email'];
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
            <a href='path/to/add/course>
              <button class='add-course-btn'>Save Course</button>
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