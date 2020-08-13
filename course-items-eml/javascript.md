<mainTitle>Lesson 1 - JavaScript</mainTitle>

<section>
  <title>What is JavaScript?</title>
  <text>
    JavaScript was first intended to be a browser-only language, but now it has many other use cases.
    JavaScript is a scripting language used to enhance functionality and appearance of web pages.
    The programs in JavaScript are referred to as scripts. 
    Scripts can be written right in a web page’s HTML and run automatically as the page loads.
    Scripts do not need special preparation or compilation to run. 
    Just like CSS, JavaScript can be written between a `script` tag within an HTML file, 
    or it can be an external file, which is preferred.
  </text>
</section>

<section>
  <title>JS and HTML</title>
  <text>
    JavaScript can use the `script` tag to be entered in an HTML document.
    The following code gets executed when the browser processes the tag.
  </text>
  <code>
    &lt;script&gt;
      alert('Hallo Welt!');
    &lt;/script&gt;
  </code>
  <text>
    For external scripts, we use the `script` tag but with the `src` attribute. Note that 
    multiple scripts can be attached.
  </text>
  <code>
    &lt;script src="/path/to/script/.js"&gt;&lt;/script&gt;
  </code>
  <text>
    Please note that if src is declared, then any code between the script tags will be ignored.
    For example, this won't work:
  </text>
  <code>
    &lt;script src="/path/to/script/.js"&gt;
      alert('hi');
    &lt;/script&gt;
  </code>
</section>

<section>
  <title>Basics</title>
  <heading>Statements</heading>
  <text>
    Statements are code constructs that perform actions. 
    In JavaScript, statements can be separated with a semicolon.
    To promote readbility however, statements are written on separate
    lines.
    For example:
  </text>
  <code>
    // BAD
    alert('Hello'); alert('Hello');

    // GOOD
    alert('Hello');
    alert('Hello');
  </code>
  <text>
    JavaScript is capable of automatic semicolon insertion. 
    It implies newlines (in certain contexts) to be a semicolon.
  </text>
  <code>
    // THIS WOULD WORK
    alert('Hello')
    alert('Hello');
  </code>
  <heading>
    Comments
  </heading>
  <text>
    One-line comments start with two forward slash characters `//`.
    Multi-line comments start with a forward slash and asterisk `/*`, end with an asterisk and forward slash `*/`.
  </text>
  <code>
    // This is a single line comment
    /*
      This is a much larger 
      multi-line comment that 
      takes up quite a lot of lines
    */
  </code>

  <heading>
    Variables
  </heading>
  <text>
    Variables are used to store information that our applications would need to work with.
    A variable is a "named storage" for data. Imagine a variable as a "box" for data, 
    with a unique label on it to identify that box.
    
    We use the `let` keyword to create variables.
  </text>
  <code>
    let message = 'Hallo!'; // store value in variable
    alert(message); // show variable's value
  </code>
  <text>
    One-line variables are also possible.
  </text>
  <code>
    let user = 'Hans', alt = 32, message ='Hallo!';
  </code>
  <text>
    Variables can be changed. When done, the old data is removed from the variable.
  </text>
  <code>
    let message = 'Hallo';
    message = 'Auf Wiedersehen!';
  </code>
  <text>
    There are two rules associated with naming variables:
  </text>
  <list>
    <listItem>Name can only have letters, digits, or the symbols `$` and `_`</listItem>
    <listItem>First character can not be a digit</listItem>
  </list>
  <text>
    For example,
  </text>
  <code>
    let 99luftballoons; // invalid, can't start with a digit
    let mein-kuchen; // can't have hyphens
  </code>
  <text>
    More information:
  </text>
  <list>
    <listItem>Variables are case-sensitive. `name` and `naME` are two different variables.</listItem>
    <listItem>Some names are reserved and can not be variable names, such as `let`, `class`</listItem>
    <listItem>By using `const` instead of `let`, a variable can be immutable. They can not be reassigned.</listItem>
    <listItem>A variable name should have an obvious meaning that clearly describes the data it stores</listItem>
  </list>
  
  <heading>
    Data Types
  </heading>
  <text> 
    Everything in JavaScript has a type. There are 8 basic data types in JavaScript.
    A variable can be of any type and can even change types. This means that JavaScript 
    is dynamically typed.
    For example, this would be possible:
  </text>
  <code>
    let x = 'Hallo';
    x = 3112;
  </code>
  <text>
    The `number` type represents integers and floats. 
    Basic arithmetic operations can be done with `number` types.
  </text>
  <code>
    let x = 2;
    let y = 5;
    alert(x + y);
    alert(x - y);
    alert(x * y);
    alert(x / y);
  </code>
  <text>
    There are special values such as Infinity and NaN.
    Infinity is a special value greater than any number.
    It can be referenced directly or by dividing by zero.
  </text>
  <code>
    alert(Infinity);
    alert(1 / 0);
  </code>
  <text>
    NaN is a computational error due to an incorrect/undefined 
    operation.
  </text>
  <code>
    alert("Hello" / 2); // not possible to compute
  </code>
  <text>
    The max value for the number type is 2^53-1, the min value -(2^53-1).
    It's a technical limitation due to how they're presented internally. 
    When we need large numbers for cryptography or microsecond-precision 
    timestmaps, we'll use `BigInt`, a data type to represent numbers of
    arbitrary length.
  </text>
  <text>
    Strings in JavaScripts are surrounded by quotes. 
    Double and single quotes are "simple" quotes and there's no difference between them.
    Backticks provide extended functionality, such as embedding variables/expressions by wrapping them in `${...}`
  </text>
  <code>
    let name = 'Hans';
    let alt = 23;
    alert(`Hallo ${name}, du bist ${alt}!`);
    alert(`Nachstes Jahr wirst du ${alt + 1}`);
  </code>
  <text>
    The Boolean type has two values: `true` and `false`.
    `true` means "yes, correct"` and `false` means "no, incorrect".
    They can be explicitly declared or be as a result of comparisons.
  </text>
  <code>
    let buttonClicked = true; // true
    let isLesser = 22 < 2; // false
  </code>
  <text>
    Arrays let us store ordered collections of data.
    Two ways to create an empty array.
  </text>
  <code>
    let arr = new Array();
    let arr = [];
  </code>
  <text>
    Array elements can be accessed by their indices, which start at 0.
  </text>
  <code>
    let hobbys = ['Kampfkunst', 'programmieren', 'spielen'];
    alert(hobbys[0]); // Kampfkunst
  </code>
  <text>
    We can replace an element or add a new element to an array
  </text>
  <code>
    hobbys[1] = 'Deutsch'; // ['Kampfkunst', 'Deutsch', 'spielen'];
    hobbys[3] = 'Meditation'; // ['Kampfkunst', 'Deutsch', 'spielen', 'Meditation'];
  </code>
  <text>
    Here are some array methods:
  </text>
  <code>
    let hobbys = ['Kampfkunst', 'programmieren', 'spielen'];
    hobbys.pop(); // removes last element of array and returns it
    hobbys.push('schlafen'); // adds element to end of array
    hobbys.shift(); // removes first element of array and returns it
    hobbys.unshift('wissenschaft'); // adds element to beginning of array
  </code>
  <text>
    Looping over arrays is a common thing to do with them.
  </text>
  <code>
    let hobbys = ['Kampfkunst', 'programmieren', 'spielen'];
    for(let idx in hobbys) {
      alert(hobbys[idx]);
    }
  </code>
  <text>
    Multi-dimensional arrays are possible, like for example when we want
    to create matrices.
  </text>
  <code>
    let matrix = [
      [1, 2, 3],
      [4, 5, 6],
      [7, 8, 9]
    ];
  </code>
  <text>
    The `null` value is its own type, to represent nothingness, emptiness, or unknown value.
  </text>
  <text>
    The `undefined` value means value not assigned.
  </text>
  <text>
    Objects are a special type, not primitive. The `object` type is used to store
    collections of data, more complex entities in general.
  </text>

  <heading>
    Basic Operators
  </heading>
  <text>
    Here are some basic operators that can be done with numbers.
  </text>
  <code>
  alert(5 + 3);
  alert(5 - 3);
  alert(5 * 3);
  alert(5 / 3);
  alert(5 % 3); // modulo
  alert(5 ** 3); // exp
  </code>
  <text>
    Strings can be concatenated with the binary operator `+`.
    If one of the operands is a string, the result becomes a string.
  </text>
  <code>
    let s = "Meine letzte " + "Zigarette";
    alert(s); // Meine letzte Zigarette
  </code>
  
  <heading>
    Comparison Operators
  </heading>
  <text>
    For comparison operators, we have:
  </text>
  <code>
    let a = 5;
    let b = 18;
    // greater/less than: a > b, a < b
    // greater/less than or equals: a >= b, a <= b
    // equals WITH type conversion: a == b
    // equals WITHOUT type conversion (strict equality): a === b
    // not equals: a != b
  </code>
  <text>
    The result of comparison operators is boolean values.
    For strings, they are compared letter-by-letter.
    When comparing different types, the values are converted to numbers.
  </text>
  <code>
    alert('5' > 4); // true, '5' becomes 5.
    alert(true == 1); // true, 1 becomes true 
    alert(false == 0); // true, false becomes 0
  </code>
  <text>
    Strict equality is more secure.
    The values `null` and `undefined` equal each other and do not equal
    any other value.
  </text>
</section>

<section>
  <title>Conditional Statements</title>
  <heading>the `if` statement</heading>
  <text>
    The if statement evaluates a boolean condition in parentheses. It executes the block 
    of code contained within it if that boolean condition evaluates to true.
  </text>
  <code>
    let alt = 23;
    if(alt >= 19) {
      alert('Du kannst Cannabis in Kanada rauchen!');
    }
  </code>
  <heading>the `if-else` statement</heading>
  <text>
    if the condition in our if branch is false, an optional else branch can be
    executed instead.
  </text>
  <code>
    let alt = 15;
    if(alt >= 19) {
      alert('Du kannst Cannabis in Kanada rauchen!');
    } else {
      alert('Leider musst du warten');
    }
  </code>
  <heading>the `else if` statement</heading>
  <text>
    Multiple variants of a condition are possible.
  </text>
  <code>
    if (alt > 30) {
      alert('Du bist alt!');
    } else if (alt < 30) {
      alert('Du bist jung!');
    } else {
      alert('Du bist genauso richtig');
    }
  </code>
  <heading>The `switch` statement</heading>
  <text> 
    If you have too many else if statements, consider using a switch statement instead.
  </text>
  <code>
    let jahr = 4;

    switch (alter) {

      case 1:
        alert("Du bist Freshman");
        break;
      case 2:
        alert("Du bist Sophomore");
        break;
      case 3:
        alert("Du bist... Junior");
        breal;
      case 4:
        alert("Du bist senior.");
        break;
      default:
        alert("Weiß nicht");
    }
  </code>
</section>

<section>
  <title>Logical operators</title>
  <heading>|| (OR)</heading>
  <text>
    For boolean arguments. Evaluates to true if at least one of its arguments is true.
  </text>
  <code>
    alert(true || false); // true
    alert(false || false); // false
    alert(false || true); // true
  </code>
  <heading>&& (AND)</heading>
  <text>
    For boolean arguments. Evaluates to true ONLY if at all of its arguments are true.
    Otherwise, it evaluates to false.
  </text>
  <code>
    alert(true && true);
    alert(true && false); // false
    alert(false && false); // false
    alert(false && true); // false
  </code>
  <heading>! (NOT)</heading>
  <text>
    Returns the inverse value of a boolean. Converts true to false.
    Converts false to true. We can use a double NOT `!!` to convert
    a value to boolean type.
  </text>
  <code>
    alert(!true); // false
    alert(!!null); // false
    alert(!!'WAS GEHT AB!'); // true
  </code>
</section>

<section>
<title>Loops</title>
<text>
  Loops are used to repeat actions. For example, outputting list items one 
  after another, or outputting the numbers from 1 to 100.
</text>
<heading>while</heading>
<text>
  While the condition is true, the code in the loop body is executed.
  The basic syntax:
</text>
<code>
  while (condition) {
    // loop body
  }
</code>
<text>
  The code below outputs the numbers from 0 to 10.
</text>
<code>
  let i = 0;
  while (i <= 10) {
    alert(i);
    i++;
  }
</code>
<heading>do while</heading>
<text>
  Similar to while, but the condition is below the loop. 
  The loop executes the body first, then checks the condition.
</text>
<code>
  let i = 0;
  do {
    alert(i);
    i++;
  } while (i <= 10);
</code>

<heading>for</heading>
<text>
  Most commonly used loop. Here is its structure:
</text>
<code>
  for (begin; condition; step) {
    // loop body
  }
</code>
<text>
  Here is an example:
</text>
<code>
  for(let i = 0; i <= 10; i++) {
    alert(i);
  }
</code>
<list>
  <listItem>begin: i = 0</listItem>
  <listItem>condition: i < 3</listItem>
  <listItem>body: alert(i)</listItem>
  <listItem>step: i++</listItem>
</list>
<text>
  Any part of `for` loop can be skipped.
</text>
<code>
  let i = 0;
  for(; i < 5; i++) { // takes from i above
    alert(i); // 0, 1, 2, 3, 4
  }

  let i = 0;
  for(; i < 5;) {
    alert(i++);
  } // identical to: while (i < 5)

  for (;;) {
    // infinite loop!
  }
</code>
<text>
  We can use `break` to break from a loop.
</text>
<code>
  while (true) {
    let answer = prompt("Enter a number: ", '');
    if (!answer) break;
  }
</code>
</section>

<section>
<title>Functions</title>
<text>
  A function is a block of code that can be called many times without repetition.
  Here is the basic structure of a function:
</text>
<code>
  function name(parameters, separated, by, comma) {
    // code
  }
</code>
<text>
  Values that are passed to a function as parameters are copied to its local variables. 
  A function can access external variables but only works from inside out. 
  A function's local variables can't be seen by external code. 
  A function can return a value but if it doesn't, the result is `undefined`.
  Here is a basic function:
</text>
<code>
  function displayGreeting() {
    alert('Hallo Leute!');
  }

  displayGreeting();
</code>
<text>
  A function can access outer variables.
</text>
<code>
  let name = 'Hans';

  function displayGreeting() {
    let greeting = 'Hallo, ' + name;
    alert(greeting);
  }

  displayGreeting();
</code>
<text>
  A function with parameters looks like so:
</text>
<code>
  function calculateArea(width, length) {
    return width * length;
  }

  calculateArea(5, 12);
</code>
<text>
  Functions can have default values as well.
</text>
<code>
  function calculateArea(width=1, length=1) {
    return width * length;
  }

  calculateArea(5); // width=5, length=1
</code>
<list>
  <listItem>Functions are values that can be assigned, copied or declared.</listItem>
  <listItem>Functions can be expressions or declarations.</listItem>
</list>
</section>

<section>
  <heading>Error Handling with `try..catch`</heading>
  <text>
    When errors that may cause a script to die occur, we use a `try..catch`
    to execute code instead of letting the script die.
  </text>
  <code>
    try {
      // code
    } catch (error) {
      // handle error
    }
  </code>
</section>

<section>
<title>Interaction with the web</title>

<heading>alert</heading>
<text>
  alert pops up a message on a modal on the screen. Modal means that
  the user can't interact with the rest of the page until they deal 
  with that modal.
</text>
<code>
  alert('Hallo jung!');
</code>

<heading>prompt</heading>
<text>
  Displays a modal with a text message, an input field, and the buttons OK/cancel
</text>
<code>
  let ergebnis = prompt('Geb dein Name ein');
</code>

<heading>confirm</heading>
<text>
  Shows a modal window with a question and buttons OK/cancel
</text>
<code>
  let selfAct = confirm("Are you self-actualized?");
  alert(selfAct);
</code>
</section>