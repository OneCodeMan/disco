<?php 

// general function for replacing regexp. easier to read than 'preg_replace'
function parseItem($text, $pattern, $replacement) {
  return preg_replace($pattern, $replacement, $text);
}

// for lessons

// parses all <mainTitle> tags to <h1>
function parseHeading($text) {
  return parseItem($text, "/mainTitle>/i", "h1>");
}

// parses all <section> tags to <div>
function parseSection($text) {
  return parseItem($text, "/section>/i", "div>");
}

// parses all <title> tags to <h2>
function parseSectionTitle($text) {
  return parseItem($text, "/title>/i", "h2>");
}

// parses all <heading> tags to <h3>
function parseSectionHeading($text) {
  return parseItem($text, "/heading>/i", "h3>");
}

// parses all <text> tags to <p>
function parseSectionText($text) {
  return parseItem($text, "/text>/i", "p>");
}

// parses all <code> tags to <pre>
function parseSectionCode($text) {
  return parseItem($text, "/code>/i", "pre>");
}

// parses all <list> tags to <ul>
function parseSectionList($text) {
  return parseItem($text, "/list>/i", "ul>");
}

// parses all <listItem> tags to <li>
function parseSectionListItem($text) {
  return parseItem($text, "/listItem>/i", "li>");
}

// what needs to actually be called
// parses all tags from EML to equivalent HTML tags
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

// parses all <quizTitle> tags to <h1>
function parseQuizTitle($text) {
  return parseItem($text, "/quizTitle>/i", "h1>");
}

// parses all <content> tags to <div>
function parseQuizContent($text) {
  return parseItem($text, "/content>/i", "div>");
}

// parses all <quizItem> tags to <div>
function parseQuizItem($text) {
  return parseItem($text, "/quizItem>/i", "div>");
}

// parses all <question> tags to <h4>
function parseQuizQuestion($text) {
  return parseItem($text, "/question>/i", "h4>");
}

// parses all <answer> tags to <li>
function parseQuizAnswer($text) {
  return parseItem($text, "/answer>/i", "li>");
}

// parses all <correctAnswer> tags to <p> with a class of 'correct-answer'
function parseQuizCorrectAnswer($text) {
  $replacement = "<p class='correct-answer'>Correct Answer: ";
  $text = parseItem($text, "/<correctAnswer>/i", $replacement);
  return parseItem($text, "/correctAnswer>/i", "p>");
}

// WHAT NEEDS TO BE CALLED
// parses all tags from EML to equivalent HTML tags
function parseQuiz($text) {
  $text = parseQuizTitle($text);
  $text = parseQuizContent($text);
  $text = parseQuizItem($text);
  $text = parseQuizQuestion($text);
  $text = parseQuizCorrectAnswer($text);
  $text = parseQuizAnswer($text);
  return $text;
}

?>