<?php 
include("includes/header.php");
include("helpers/Parser.php");

$course_id = $_GET['course_id'];
$item_id = $_GET['item_id'];
$course_fetch_existing_item_query = mysqli_query($con, "SELECT * FROM course_items WHERE course_id='$course_id' AND item_id='$item_id'");
$course_fetch_num_rows = mysqli_num_rows($course_fetch_existing_item_query);

$course = mysqli_fetch_array($course_fetch_existing_item_query);
$title = $course['title'];
$description = $course['description'];
$content = $course['content'];
$type = $course['type'];
$parsedContent = $type == 'lesson' ? parseLesson($content) : parseQuiz($content);

// if course item doesn't exist, go back to index.
if(!($course_fetch_num_rows > 0)) {
  header("Location: index.php");
}

?>

<div class="container">
  <h1 class="title"><?php echo $title ?></h1>
  <div class="parsed-content">
    <p style="text-align: center;">Note: hover over the black rectangles to see the correct answer</p>
    <?php
      echo $parsedContent;
    ?>
  </div>
</div>