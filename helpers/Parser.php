<?php 

// general 

function parseItem($text, $pattern, $replacement) {
  return preg_replace($pattern, $replacement, $text);
}

// function parseImage($text, $pattern, $replacement) {
//   return parseItem($pattern, "<image>(.+?)</image>", "<img src=\"(\"");
// }

// for lessons

function parseHeading($text) {
  return parseItem($text, "/mainTitle>/i", "h1>");
}

function parseSection($text) {
  return parseItem($text, "/section>/i", "div>");
}

function parseSectionTitle($text) {
  return parseItem($text, "/title>/i", "h2>");
}

function parseSectionHeading($text) {
  return parseItem($text, "/heading>/i", "h3>");
}

function parseSectionText($text) {
  return parseItem($text, "/text>/i", "p>");
}

function parseSectionCode($text) {
  return parseItem($text, "/code>/i", "pre>");
}

function parseSectionList($text) {
  return parseItem($text, "/list>/i", "ul>");
}

function parseSectionListItem($text) {
  return parseItem($text, "/listitem>/i", "li>");
}

// what needs to actually be called
function parseLesson($text) {
  $text = parseHeading($text);
  $text = parseSection($text);
  $text = parseSectionTitle($text);
  $text = parseSectionHeading($text);
  $text = parseSectionText($text);
  $text = parseSectionCode($text);
  $text = parseSectionList($text);
  $text = parseSectionListItem($text);
  return $text;
}

// for quizzes
function parseQuizTitle($text) {
  return parseItem($text, "/quizTitle>/i", "h1>");
}

function parseQuizContent($text) {
  return parseItem($text, "/content>/i", "div>");
}

function parseQuizItem($text) {
  return parseItem($text, "/quizItem>/i", "div>");
}

function parseQuizQuestion($text) {
  return parseItem($text, "/question>/i", "h4>");
}

function parseQuizAnswer($text) {
  $replacement = "
  <label>
    <input type='radio' name='question' value='test'>
  </label>
  ";
  $pattern = "/<answer>/i";
  return parseItem($text, $pattern, $replacement);
}

function parseQuizCorrectAnswer($text) {
  return parseItem($text, "/correctAnswer>/i", "li>");
}

// WHAT NEEDS TO BE CALLED
function parseQuiz($text) {
  $text = parseQuizTitle($text);
  $text = parseQuizContent($text);
  $text = parseQuizItem($text);
  $text = parseQuizQuestion($text);
  $text = parseQuizAnswer($text);
  $text = parseQuizCorrectAnswer($text);
  return $text;
}

?>