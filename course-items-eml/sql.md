# HTML and CSS
INSERT INTO `course_items`(`course_id`, `course_title`, `item_id`, `type`, `title`, `description`, `content`) VALUES (2,'Introduction to HTML and CSS',3,'lesson','HTML & CSS','In this lesson, we explore the basics of HTML and CSS','

<mainTitle>Lesson 1 - HTML & CSS</mainTitle>

<section>
<title>The Web</title>
<text>
  A web server responds to client requests by providing resources such as HTML documents. A web server and a client communicate using the platform-independent Hypertext Transfer Protocol (HTTP), a protocol for transferring requests and files over the Internet or an intranet.
  URIs (Uniform Resource Identifiers) identify resources on the internet. URIs that start with http:// are called URLs (Uniform Resource Locators). URLs refer to files, directories, or server-side code that performs tasks, database lookups, internet searches, and business-application processing. A URL contains information that directs a browser to a user's desired resource.


  When given a web page URL, a web browser uses HTTP to request and display the web page found at that address. A GET request retrieves information from a server. A POST request sends data to a server. Browsers often cache recently viewed web pages so they can quickly reload the pages.


  Client-side scripting can be used to validate user input, interact with the browser, enhance web pages, and add client/server communication between a browser and a web server. Client-side scripting does have limitations, such as browser dependency; the browser or scripting host must support the scripting language and capabilities. Sensitive information, such as passwords or other personally identifiable data, should not be stored or validated on the client.


  Server-side scripting languages have a wider range of programmatic capabilities than their client-side equivalents.


  To request documents from web servers, users must know the hostnames on which the web server software resides. Users can request documents from local web servers or remote web servers.
</text>
</section>

<section>
<title>HTML</title>
<text>
  HTML5 (HyperText Markup Language 5) specifies the structure and content of documents displayed on web browsers. Web servers store HTML5 documents. Clients request these HTML5 documents from web servers.

  HTML5 is made up of different elements that define different components of web items. Elements are made up of tags (a start tag and and end tag) that use angle brackets. For example &lt;p&gt;Was geht ab!!!&lt;/p&gt;, the &lt;p&gt; is the start tag, &lt;/p&gt; is the end tag.
  Some HTML tags do not require a closing tag and take a `/` in addition to the right closing bracket. We will see this with the <img> element. They are called void elements, they don't markup text and only have attributes.
</text>
<text> 
  Some things you can do with HTML are:
</text>
<list>
  <listItem>Publish documents containing texts, images, lists, tables</listItem>
  <listItem>Access web resources (images, videos, HTML documents, hyperlinks)</listItem>
  <listItem>Create forms to collect user inputs like name, email, comments</listItem>
</list>
<text>
  Here is a very basic HTML example.
</text>
<code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="en"&gt;
  &lt;head&gt;
      &lt;title&gt;Basic HTML Document&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
      &lt;h1&gt;Hallo Welt!&lt;/h1&gt;
      &lt;p&gt;Wilkommen zu meinem Webseite!&lt;/p&gt;
  &lt;/body&gt;
&lt;/html&gt;
</code>
<list>
  <listItem>The first line tells the browser that the document is an HTML5 document.</listItem>
  <listItem>the `head` element is a container providing information about the document.</listItem>
  <listItem>the `body` element contains the actual content of the document, what the user sees.</listItem>
</list>
<text>
  HTML tags are case-insensitive, so is the same &lt;P&gt; as &lt;p&gt;.
  HTML elements can be nested.
  Void elements are self-closing tags with no content in between.
</text>
<code>
  Hallo &lt;br&gt;
  &lt;img src="images/alpha.jph" alt="Wolves"&gt;
  &lt;input type="text" name="email"&gt;
</code>
<text>
  Comments can be written with `<!-\-` `-->`
</text>
<code>
  <!-- EXAMPLE HTML COMMENT -->
</code>
<heading>Attributes</heading>
<text>
  HTML attributes define more characteristics of the element. Attributes are specified 
  on the opening tag, and consists usually of a name/value pair, where the value
  is enclosed in quotation marks. Some attributes are REQUIRED for certain elements.
</text>
<code>
  &lt;img src="images/gern.png" width="100" height="200" alt="Leipzig"&gt;
  &lt;a href="https://www.google.com/" title="Title"&gt;Google&lt;/a&gt;
  &lt;abbr title="Hyper Text Markup Language"&gt;HTML&lt;/abbr&gt;
  &lt;input type="text" value="Budda"&gt;
</code>
<text>
  The `id` attribute gives a unique identifier to a certain element. 
  Must be unique, used only once within a document.
</text>
<code>
  &lt;div id="container"&gt;
    &lt;h1 id="title"&gt;My Title&lt;/h1&gt;
  &lt;/div&gt;
</code>
<text>
  The `class` attribute is used to identify elements as well, but can be applied
  to multiple elements instead. Multiple elements can have the same class attribute,
  but only one element can have the same id attribute.
</text>
<code>
  &lt;div class="box"&gt;
    &lt;button class="btn btn-dark"&gt;Click me!&lt;/button&gt;
  &lt;/div&gt;
</code>
<text>
  The `title` attribute provides more information about an element on hover of the element.
</text>
<code>
  &lt;a href="images/hummus.jpg" title="Click to view the perfect hummus"&gt;
</code>
<text>
  The `style` attribute allows for CSS styling within the element.
</text>
<code>
  &lt;div style="border: 1px solid green;"&gt;
    &lt;p style="color: blue;"&gt;This is a paragraph.&lt;/p&gt;
  &lt;/div&gt;&lt;div style="border: 1px solid green;"&gt;
    &lt;p style="color: blue;"&gt;This is a paragraph.&lt;/p&gt;
  &lt;/div&gt;
</code>
<heading>Headings</heading>
<text>
  Headings define hierarchy and structure of the content. They highlight important
  topics and grouping them together. The higher the heading level, the bigger it is, 
  because it's most important. There are 6 of them. For good practice, use the 
  h1 headings as main headings, h2 as sub-headings, h3 as tertiary headings, and so on.
</text>
<code>
  &lt;h1&gt;Heading level 1&lt;/h1&gt;
  &lt;h2&gt;Heading level 2&lt;/h2&gt;
  &lt;h3&gt;Heading level 3&lt;/h3&gt;
  &lt;h4&gt;Heading level 4&lt;/h4&gt;
  &lt;h5&gt;Heading level 5&lt;/h5&gt;
  &lt;h6&gt;Heading level 6&lt;/h6&gt;
</code>
<heading>Paragraphs</heading>
<text>
  Paragraph element is for publishing text on web pages.
  Line breaks can be achieved using the empty element `br`.
  Horizontal rules create horizontal lines `hr`.
</text>
<code>
  &lt;p&gt;Hoch stand der Sanddorn am Strand von Hiddensee
  Micha, mein Micha und alles tat so weh
  Dass die Kaninchen scheu schauten aus dem Bau
  So laut entlud sich mein Leid in's Himmelblau, ha
  So böse stampfte mein nackter Fuß den Sand
  Und schlug ich von meiner Schulter deine Hand
  Micha, mein Micha und alles tat so weh
  Tu' das noch einmal, Micha, und ich geh'
  Du hast den Farbfilm vergessen, mein Michael
  Nun glaubt uns kein Mensch, wie schön's hier war, ha-ha, ha-ha
  Du hast den Farbfilm vergessen, bei meiner Seel'
  Alles blau und weiß und grün und später nicht mehr wahr&lt;/p&gt;
</code>
<text>
  Pre-formatted text can be displayed instead with the `pre` element.
</text>
<code>
  &lt;pre&gt;
    Wir lagen träumend im Gras
    Die Köpfe voll verrückter Ideen
    Da sagte er nur zum Spaß
    Komm lass uns auf die Reise gehen
    Doch der Rauch schmeckte bitter
    Aber Conny sagte mir was er sah
    Ein Meer von Licht und Farben
    Wir ahnten nicht, was bald darauf geschah
  &lt;/pre&gt;
</code>
<heading>Links</heading>
<text>
  A hyperlink is a connection to a web resource. They are declared using the `a` tag. 
  The `href` attribute specifies the destination of the link.
</text>
<code>
  &lt;a href="url"&gt;Link text&lt;/a&gt;
</code>
<text>
  `target` attribute tells the browser how to open the link. Here are some of the possible
  values:
</text>
<list>
  <listItem>_blank: Opens link in new window/tab</listItem>
  <listItem>_parent: Opens link in parent window/tab</listItem>
  <listItem>_self: Opens link in same window/tab as document</listItem>
  <listItem>_top: Opens link in full browser window.</listItem>
</list>
<code>
  &lt;a href="google.com" target="_blank"&gt;Google!&lt;/a&gt;
</code>
<heading>Text Formatting</heading>
<text>
  Text can be formatted with certain tags.
</text>
<list>
  <listItem>
    &lt;p&gt;This is &lt;b&gt;bold&lt;/b&gt;&lt;/p&gt;
  </listItem>
  <listItem>
    &lt;p&gt;This is &lt;strong&gt;strong&lt;/strong&gt;&lt;/p&gt;
  </listItem>
  <listItem>
    &lt;p&gt;This is &lt;i&gt;italics&lt;/i&gt;&lt;/p&gt;
  </listItem>
  <listItem>
    &lt;p&gt;This is &lt;em&gt;emphasized&lt;/em&gt;&lt;/p&gt;&lt;p&gt;This is &lt;em&gt;emphasized&lt;/em&gt;&lt;/p&gt;
  </listItem>
  <listItem>
    &lt;p&gt;This is &lt;mark&gt;highlighted&lt;/mark&gt;&lt;/p&gt;
  </listItem>
  <listItem>
    &lt;p&gt;This is &lt;small&gt;smaller text&lt;/small&gt;&lt;/p&gt;
  </listItem>
  <listItem>
    &lt;p&gt;This is &lt;del&gt;deleted text&lt;/del&gt;&lt;/p&gt;
  </listItem>
  <listItem>
    &lt;p&gt;This is &lt;ins&gt;inserted text&lt;/ins&gt;&lt;/p&gt;
  </listItem>
</list>
<text>
  Blockquotes can be added as well.
</text>
<code>
  &lt;blockquote&gt;
    &lt;p&gt;The willing are ruled by fate; the reluctant dragged.&lt;/p&gt;
    &lt;cite&gt;— Epictetus&lt;/cite&gt;
  &lt;/blockquote&gt;
</code>
<text>
  HTML images can be displayed like so:
</text>
<code>
  &lt;img src="pathtoimg.jpg" alt="Description about image"&gt;
</code>
<text>
  The width and height can be declared as well.
</text>
<code>
  &lt;img src="pathtoimg.jpg" alt="Description about image" width="300" height="500"&gt;
</code>
<text>
  HTML tables allow you to arrange data into rows and columns. Good for displaying 
  product listings, customer details, financial reports, and scientific findings.
  The `table` element is used. `tr` is to create rows, `td` is to create columns. 
  A caption can also be added!
</text>
<code>
  &lt;table&gt;
    &lt;caption&gt;Employee Records&lt;/caption&gt;
    &lt;tr&gt;
        &lt;th&gt;Employee ID&lt;/th&gt;
        &lt;th&gt;Employee Name&lt;/th&gt;
        &lt;th&gt;Age&lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;1&lt;/td&gt;
        &lt;td&gt;Hans Dampf&lt;/td&gt;
        &lt;td&gt;16&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;2&lt;/td&gt;
        &lt;td&gt;Justin Gaethje&lt;/td&gt;
        &lt;td&gt;34&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/table&gt;
</code>
<heading>
  HTML Lists
</heading>
<text>
  HTML Lists can be:
</text>
<list>
  <listItem>Unordered: related items with no order</listItem>
  <listItem>Ordered: related items with order</listItem>
  <listItem>Description: list of terms and descriptions</listItem>
</list>
<text>
  Unordered lists use the `ul` element, each list item starts with `li`
</text>
<code>
  &lt;ul&gt;
    &lt;li&gt;Kettlebell Swing&lt;/li&gt;
    &lt;li&gt;Kettlebell Clean&lt;/li&gt;
    &lt;li&gt;Kettlebell Snatch&lt;/li&gt;
  &lt;/ul&gt;
</code>
<text>
  Ordered lists use the `ol` element, each list item starts with `li`
</text>
<code>
  &lt;ol&gt;
    &lt;li&gt;Lay down on the ground holding the kettlebell directly up with one arm&lt;/li&gt;
    &lt;li&gt;Knee is so that you're on your foot on the side that your arm is holding the kettlebell with.&lt;/li&gt;
    &lt;li&gt;Get up.&lt;/li&gt;
  &lt;/ol&gt;
</code>
<text>
  Ordered lists start at 1, but you can add the `start` attribute to manipulate that.
</text>
<code>
  &lt;ol start="4"&gt;
    &lt;li&gt;With control, go slowly downwards and flex your hips to a 45 degree angle.&lt;/li&gt;
    &lt;li&gt;Do a quasi-iso-controlled method pace with 5 breaths.&lt;/li&gt;
    &lt;li&gt;Repeat the process starting from the memto.&lt;/li&gt;
  &lt;/ol&gt;
</code>
<text>
  Description lists are created using the `dl` element. Each list item comes with a description.
</text>
<code>
  &lt;dl&gt;
    &lt;dt&gt;Claudius&lt;/dt&gt;
    &lt;dd&gt;The accidental emperor&lt;/dd&gt;
    &lt;dt&gt;Augustus Caesar&lt;/dt&gt;
    &lt;dd&gt;The first roman emperor&lt;/dd&gt;
  &lt;/dl&gt;
</code>
<heading>HTML Forms</heading>
<text>
  HTML forms are used to correct different types of user inputs and contact details.
  They contain elements called controls such as inputbox, checkboxes, radio-buttons,
  and submit buttons. The `form` tag starts us off.
</text>
<code>
  &lt;form&gt;
    &lt;label&gt; Email: &lt;input type="text"&gt;&lt;/label&gt;
    &lt;label&gt; Password: &lt;input type="password"&gt;&lt;/label&gt;
    &lt;input type="submit" value="Submit"&gt;
  &lt;/form&gt;
</code>
<text>
  Here are some more input types:
</text>
<code>
  &lt;form&gt;
    &lt;input type="radio" name="gender" id="male"&gt;
    &lt;label for="male"&gt;Male&lt;/label&gt;
    &lt;input type="radio" name="gender" id="female"&gt;
    &lt;label for="female"&gt;Female&lt;/label&gt;
    &lt;input type="radio" name="gender" id="other"&gt;
    &lt;label for="other"&gt;Other&lt;/label&gt;
    &lt;input type="checkbox" name="languages" id="german"&gt;
    &lt;label for="german"&gt;German&lt;/label&gt;
    &lt;input type="checkbox" name="languages" id="russian"&gt;
    &lt;label for="russian"&gt;Russian&lt;/label&gt;
    &lt;input type="checkbox" name="languages" id="latin"&gt;
    &lt;label for="latin"&gt;Latin&lt;/label&gt;
    &lt;input type="file" name="upload" id="file-select"&gt;
    &lt;label for="address"&gt;Any comments?&lt;/label&gt;
    &lt;textarea rows="3" cols="30" name="address" id="address"&gt;
    &lt;label for="country"&gt;Country:&lt;/label&gt;
    &lt;select name="country" id="country"&gt;
        &lt;option value="czech republic"&gt;Czech Republic&lt;/option&gt;
        &lt;option value="austria"&gt;Austria&lt;/option&gt;
        &lt;option value="japan"&gt;Japan&lt;/option&gt;
    &lt;/select&gt;
    &lt;input type="date" id="birthday" name="birthday"&gt;
    &lt;input type="color" id="car-tint" name="car-tint"&gt;
  &lt;/form&gt;
</code>
<heading>Page-structure elements</heading>
<text>
  HTML also contains page-structure elements. It's a way to mark up sections
  based on their functionality. Web pages share common components. 
  They provide a more syntactically meaningful way to define common features a page would have such as headers, 
  navs, footers, sections, figures, and a bit more.
</text>
<text>
  The `header` tag can create a header with both text and graphics and can be used many times in one page.
</text>
<code>
  &lt;header&gt;
    &lt;img src="img/steves_and_his_nan.png" alt="Steves and his Nan" width="500" height="300" /&gt;
    &lt;h1&gt;Steves and his Nan&lt;/h1&gt;
  &lt;/header&gt;
</code>
<text>
  The `nav` element represents a section with the purpose of providing navigation links.
</text>
<code>
  &lt;nav&gt;
    &lt;a href="/mc_grindah/"&gt;MC Grindah&lt;/a&gt; |
    &lt;a href="/dj_beats/"&gt;DJ Beats&lt;/a&gt; |
    &lt;a href="/dj_steves/"&gt;DJ Steves&lt;/a&gt; |
    &lt;a href="/dj_decoy/"&gt;DJ Decoy&lt;/a&gt;
  &lt;/nav&gt;
</code>
<text>
The `figure` element describes a figure (such as an image, chart, or table) on the page so it c
an be moved to the side of the page or to another page. The `figcaption` element provides a caption
</text>
<code>
  &lt;figure&gt;
    &lt;img src="https://i.redd.it/05jh6rou6nx21.jpg" alt="DJ Beats and his family" width="500" height="300" /&gt;
    &lt;figure&gt;DJ Beats and His Family&lt;/figure&gt;
  &lt;/figure&gt;
</code>
<text>
  The &lt;article&gt; element describes standalone content that could potentially be used or distributed elsewhere, such as a news article, forum post or blog entry. They can be nested.
</text>
<code>
  &lt;article&gt;
    &lt;h2&gt;MC Grindah&lt;/h2&gt;
    &lt;p&gt;Very hard-working MC of Kurupt FM in Brenntford. The best MC in the galaxy. He is also a family man.&lt;/p&gt;
  &lt;/article&gt;
</code>
<text>
  The `footer` element represents end content for a page.
</text>
<code>
  &lt;footer&gt;
    &lt;p&gt;© 2020 Hans&lt;/p&gt;
  &lt;/footer&gt;
</code>

</section>

<section>
<title>CSS</title>
<text>
  HTML declares what elements are presented. CSS (Cascading Style Sheets) specifies HOW the elements are presented.
  CSS (Cascading Style Sheets) is used to style and lay out web pages. 
  It is reponsible for altering font, colour, size, and spacing of your content and lay it out in certain ways.
  CSS is a rule-based language, meaning you define rules of groups of styles that apply to 
  elements on a web page. For example, the code below displays the main heading of a page
  as large, green text.
</text>
<text>
  CSS consists of properties and values. Properties are human-readable identifiers that 
  indicate which features you want to modify. Values are what are assigned to properties,
  indicating how to style the property. 
  Property-value pairs (e.g. `color: blue`) are called CSS declarations, and are found
  within CSS declaration blocks.
</text>
<code>
  h1 {
    color: red;
    font-size: 5em;
  }

  h1, p {
    font-weight: bold;
  }
</code>
<text>
  The rule opens with a selector, which is an entity that selects the HTML element that
  we are targetting. In our case, the `h1` heading. Inside the curly braces, 
  there are declarations which take the form of property and value. `color` is a property
  with the value `red` for example. Multiple selectors can be targeted at once.
</text>
<text>
   CSS to documents, we can reference our CSS file within the HTML `head` tag
  with the following syntax:
</text>
<code>
  &lt;link rel="stylesheet" href="styles.css"&gt;
</code>
<text>
  Recall that elements can take class attributes. Here is how they're used.
</text>
<code>
  // HTML
  &lt;p class="special"&gt;I am a special paragraph tag.&lt;/p&gt;

  // CSS
  .special {
    color: purple;
    font-weight: bold;
  }
</code>
<text>
  We can also target elements based on their location in a document by using a selector
  known as the descendant combinator.
</text>
<code>
  div p {
    color: deepskyblue;
  }
</code>
<text>
  An adjacent sibling combinator to be used to style elements of the same hierarchy
  that are next to each other
</text>
<code>
  h1 + p {
    font-size: 50px;
  }
</code>
<text>
  Elements can also be styled based on state.
</text>
<code>
  a:link {
    color: purple;
  }

  a:visited {
    color: green;
  }

  a:hover {
    color: yellow;
  }
</code>
<text>
  Inline styles with CSS are possible. Notice how each declaration is separated with a 
  semi-colon.
</text>
<code>
  &lt;h1 style="color: red;"&gt;Hallo Leute!&lt;/h1&gt;
  &lt;p style="color:blue; font-size: 25px"&gt;Ich wünsche euch einen schönen Tag!&lt;/p&gt;
</code>
<heading>
CSS Box Model
</heading>
<text>
Every HTML element is a box with several components such as padding and margins. 
We can use CSS to set position, size, and other properties to these boxes.
</text>
<code>
div {
  width: 200px;
  border: 1px solid gray;
  padding: 20px;
  margin: 25px;
}
</code>
<list>
  <listItem>The `border` property is a short-hand property for thickness, style, and colour.</listItem>
  <listItem>`padding` refers to the space between the border and the contents within that border</listItem>
  <listItem>`margin` refers to the space outside an element, and it surrounds the other boxes with space.</listItem>
  <listItem>
    The content box defines the area inside the box. `width` and `height` can be used, as well as 
    `max-width`, `min-width`, `max-height`, `min-height`.
  </listItem>
  <listItem>The total element width can be calculated like so: right margin + left margin + right border + left border + 
  right padding + left padding + width</listItem>
  <listItem>The total element height can be calculated like so: bottom margin + top margin + bottom border + top border + bottom padding + top padding + height.</listItem>
</list>
<heading>Text Styling</heading>
<text>
  CSS allows texts to be manipulated on their colours, sizes, fonts, and shadows. There are also properties
  for text-alignment and spacing between letters and words.
</text>
<text>
Text colours can be set using the color attribute which accepts the 
either the actual colour name, a 6-digit hex code, or rgb value indicators as values.
RGBA can also be used, where the fourth parameter determines opacity (1.0 being completely opaque, 0.0 being invisible)
</text>
<code>
h1 {
  color: purple;
}

p {
  color: #F73213;
}

span {
  color: rgb(100, 100, 20);
}

h4 {
  color: rgba(100, 100, 25, 0.86);
}
</code>
<text>
`text-align` sets the alignment of the text. `justify` stretches the text
so that each line has the same width.
</text>
<code>
h1 {
  text-align: left;
}

p {
  text-align: center;
}

h2 {
  text-align: right;
}

span {
  text-align: justify.
}
</code>
<text>
`text-decoration` sets decorative lines to emphasize points.
`line-through` strikes over the text, `overline` goes above the text, and
`underline` goes below the text.
</text>
<text>
`text-transform` is good for changing the case of the text. Its possible values are 
`uppercase`, `lowercase`, and `capitalized`.
</text>
<text>
`text-indent` allows for indentation, which is good for clarity and readability.
</text>
<code>
p {
  text-indent: 45px;
}
</code>
<text>
`letter-spacing` can have negative and positive values, and it dictates the space
between letters. Positive values increase space between letters, while negative values
decrease space between letters.
</text>
<code>
h1 {
  letter-spacing: 2px; /* increases space */
}

h2 {
  letter-spacing: -2px; /* decreases space */
}
</code>
<text>
`word-spacing` can have negative and positive values, and it dictates the space
between words. Positive values increase space between words, while negative values
decrease space between words.
</text>
<code>
h1 {
  word-spacing: 10px; /* increases space */
}

h2 {
  word-spacing: -10px; /* decreases space */
}
</code>
<text>
`line-height` defines the vertical spacing between lines of text. It can have 
regular numbers or length indicators (cm, pt, px, etc.)
</text>
<text>
`direction` defines direction of the text. It can be `ltr` (left-to-right) or `rtl` (right-to-left)
</text>
<text>
`text-shadow` property adds a shadow to text.
</text>
<code>
h1 {
  text-shadow: 2px 2px 0px green;
}
</code>
<text>
`text-overflow` lets us define how to deal with overflowing content within a container. 
Some values it can take are `ellipsis` and `clip`.
</text>
<heading>Background</heading>
<text>
Backgrounds can have a colour or an image. They can repeat horizontally or vertically or both or not at all.
</text>
<code>
div {
  background-image: url("image.png");
  background-repeat: repeat-x; /* repeats image horizontally */
}
</code>
<heading>Box Shadows</heading>
<text>
  We can use `box-shadow` to add a drop shadow to the element box. This can be done
  with almost any element.
</text>
<code>
  div {
    box-shadow: 5px 5px;
  }
</code>
<heading>Displaying Elements</heading>
<text>The `display` property controls the way the elements are presented. Here are some of the
values it can have.</text>
<list>
  <listItem>none: element is not displayed</listItem>
  <listItem>inline: The element stays in the same line and only takes up the width of its content</listItem>
  <listItem>block: The element starts in a new line and takes up the whole available width</listItem>
  <listItem>inline-block: The element is displayed as an inline element but can be styled as a block level element</listItem>
  <listItem>table: The element is displayed as a table type element</listItem>
  <listItem>flex: The element is displayed as a block level flex element</listItem>
</list>
<heading>Positioning Elements</heading>
<text>`position` indicates the location of elements in a document.
All elements are `static` by default. They follow regular page flow.
Elements that follow `relative` position means that they follow regular flow
but they offset relative to themselves according to `top`, `right`, `bottom`, `left`.
</text>
<code>
div {
  position: relative;
  top: 30px;
  left: 25px;
}
</code>
<text>
`fixed` means that an element is eliminated from the regular flow of the document.
It will be completely ignored by other elements.
</text>
<code>
div {
  position: fixed;
  top: 20px;
  right: 4px;
}
</code>
<text>
`sticky` sets elements as relative but the elements become `fixed` when the element reaches
a specific location during scrolling.
</text>
<text>
`absolute` indicates that an element is eliminated from regular flow of the document and
is ignored by other elements.
</text>
<code>
div {
  position: absolute;
  top: 30px;
  right: 14px;
  bottom: 3px;
}
</code>
<text>
Useful tip: Elements that have `inherit` take the position from their parents.
</text>
<heading>`float` property</heading>
<text>
The CSS `float` property positions elements to the left or right of their containers. However,
the floated element stays as part of the page's flow, unlike the `position` property.
`float` can take values `left`, `right`, `none`, `inline-start`, and `inline-end`.
</text>
<code>
.container {
  float: left;
  width: 90px;
  margin: 3px;
  border: 1px solid green;
}
</code>
<heading>Border Radius</heading>
<text>
CSS `border-radius` property has a short-hand where you can manipulate all four corners 
of the border. The order of application is: top left, top right, bottom right, bottom left corner.
</text>
<code>
.container {
  border-radius: 2px 10px 3px 9px; 
}
</code>
<heading>CSS Animations</heading>
<text>
  `animation` property used for making elements transition properties.
  Keyframes need to be specified to define the beginning and end states of the 
  animation. The animation will gradually change its properties and the keyframes
  define how the animations look between the initial and final change. For example, in the code below, 
  we change the background colour of div from red to orange in 3 seconds.
</text>
<code>
@keyframes changeColour {
  from {background-color: red;}
  to {background-color: orange;}
}

div {
  width: 100px;
  height: 50px;
  background-color: red;
  animation-name: changeColour;
  animation-duration: 3s;
}
</code>
<text>
Percentage values for the gradual changes can be set as well. We have freedom to control
more phases in our animation.
</text>
<code>
@keyframes changeColour {
  0% {background-color: red;}
  25% {background-color: orange;}
  75% {background-color: green;}
  100% {background-color: purple;}
}

div {
  width: 100px;
  height: 50px;
  background-color: red;
  animation-name: changeColour;
  animation-duration: 3s;
}
</code>
<text>
Multiple animations can be achieved by separating each animation with a comma
</text>
<code>
.container {
  width: 100px;
  height: 50px;
  background-color: red;
  animation:
    changeColour 3s ease infinite alternate,
    bounce 2s linear infinite alternate;
}
</code>
<text>
Here is an example of a fade-in animation:
</text>
<code>
@keyframes fadeIn {
 from {opacity: 0;}
 to {opacity: 1;}
}

/* The div element for the animation */
div {
 width: 100px;
 height: 20px;
 animation-name: fadeIn;
 animation-duration: 2s;
}
</code>
<text>
`animation-delay` property defines how much time passes until the animation starts.
The default value is 0 and this means that the animation starts as soon as the page loads.
`animation-iteration-count` defines how many times an animation runs. You can use `infinite`
to keep it going forever.
</text>
<code>
div {
    width: 100px;
    height: 210px;
    background-color: yellow;
    animation-name: bounce;
    animation-duration: 3s;
    animation-iteration-count: infinite;
}

.wrapper {
    width: 200px;
    height: 350px;
    background-color: red;
    animation-name: shake;
    animation-duration: 4s;
    animation-iteration-count: 5;
}
</code>
<text>
`animation-direction` can also define what direction an animation goes, it can take
`forward`, `backward`, `alternate`, and `reverse-alternate`
</text>
<text>
The `animation` short-hand uses 6 longhands being:
</text>
<code>
div {
    width: 200px;
    height: 350px;
    background-color: red;

    animation-name: bounce;
    animation-duration: 3s;
    animation-timing-function: easeIn;
    animation-delay: 1s;
    animation-iteration-count: infinite;
    animation-direction: reverse-alternate;
}

/* SAME AS */
div {
    width: 200px;
    height: 350px;
    background-color: red;

    animation: bounce 3s easeIn 1s infinite reverse-alternate;
}
</code>
</section>

');

# HTML and CSS Quiz
INSERT INTO `course_items`(`course_id`, `course_title`, `item_id`, `type`, `title`, `description`, `content`) VALUES (2,'HTML & CSS',5,'quiz','HTML & CSS Quiz','Test your skills and see how much you know HTML and CSS','


                                                                                                                    <quizTitle>HTML and CSS Quiz</quizTitle>

<content>

<quizItem>
  <question>What does HTML stand for?</question>
  <answer>Helper Text Marking Longanisa</answer>
  <answer>How To Make Lumpia</answer>
  <answer>HyperText Markup Language</answer>
  <correctAnswer>HyperText Markup Language</correctAnswer>
</quizItem>

<quizItem>
  <question>What is the HTML tag for the largest heading?</question>
  <answer>&lt;h6&gt;</answer>
  <answer>&lt;heading&gt;</answer>
  <answer>&lt;h1&gt;</answer>
  <answer>&lt;title&gt;</answer>
  <correctAnswer>&lt;h1&gt;</correctAnswer>
</quizItem>

<quizItem>
  <question>What is the HTML tag for the horizontal line?</question>
  <answer>&lt;br&gt;</answer>
  <answer>&lt;hr&gt;</answer>
  <answer>&lt;line&gt;</answer>
  <correctAnswer>&lt;hr&gt;</correctAnswer>
</quizItem>

<quizItem>
  <question>What is the HTML tag for emphasis on text?</question>
  <answer>&lt;italics&gt;</answer>
  <answer>&lt;emphasis&gt;</answer>
  <answer>&lt;em&gt;</answer>
  <answer>&lt;strong&gt;</answer>
  <correctAnswer>&lt;em&gt;</correctAnswer>
</quizItem>

<quizItem>
  <question>What is the correct HTML to declare a hyperlink?</question>
  <answer>&lt;a text="Google"&gt;Google.com&lt;/a&gt;</answer>
  <answer>&lt;a href="google.com"&gt;Google&lt;/a&gt;</answer>
  <answer>&lt;a url="google.com" text="Google" /&gt;</answer>
  <correctAnswer>&lt;a href="google.com"&gt;Google&lt;/a&gt;</correctAnswer>
</quizItem>

<quizItem>
  <question>How do you open a new link in a new tab/browser?</question>
  <answer>&lt;a href="google.com" target="_new"&gt;</answer>
  <answer>&lt;a href="google.com" target="_blank"&gt;</answer>
  <answer>&lt;a url="google.com" target="_blank"&gt;</answer>
  <answer>&lt;a url="google.com" target="_new"&gt;</answer>
  <correctAnswer>&lt;a href="google.com" target="_blank"&gt;</correctAnswer>
</quizItem>

<quizItem>
  <question>True or false: The `header` tag can only be used once per page.</question>
  <answer>true</answer>
  <answer>false</answer>
  <correctAnswer>false</correctAnswer>
</quizItem>

<quizItem>
  <question>How can you make an unordered list?</question>
  <answer>&lt;ul&gt;</answer>
  <answer>&lt;lis&gt;</answer>
  <answer>&lt;ol&gt;</answer>
  <correctAnswer>&lt;ul&gt;</correctAnswer>
</quizItem>

<quizItem>
  <question>True or false: the footer element represents end content for a page</question>
  <answer>true</answer>
  <answer>false</answer>
  <correctAnswer>true</correctAnswer>
</quizItem>

<quizItem>
  <question>Which HTML element defines navigation links?</question>
  <answer>&lt;nav&gt;</answer>
  <answer>&lt;navigation&gt;</answer>
  <answer>&lt;n&gt;</answer>
  <correctAnswer>&lt;nav&gt;</correctAnswer>
</quizItem>

<quizItem>
  <question>What does CSS stand for?</question>
  <answer>Creative Style Sheets</answer>
  <answer>Cool Style Sheets</answer>
  <answer>Cascading Style Sheets</answer>
  <correctAnswer>Cascading Style Sheets</correctAnswer>
</quizItem>

<quizItem>
  <question>How do you declare an external stylesheet in an HTML document?</question>
  <answer>&lt;stylesheet&gt;styles.css&lt;/stylesheet&gt;</answer>
  <answer>&lt;link rel="stylesheet" href="styles.css"&gt;</answer>
  <answer>&lt;link href="stylesheet" rel="styles.css"&gt;</answer>
  <answer>&lt;link href="stylesheet" file="styles.css"&gt;</answer>
  <correctAnswer>&lt;link rel="stylesheet" href="styles.css"&gt;</correctAnswer>
</quizItem>

<quizItem>
  <question>How do you declare an internal stylesheet in an HTML document?</question>
  <answer>&lt;style&gt;</answer>
  <answer>&lt;css&gt;</answer>
  <answer>&lt;styles&gt;</answer>
  <correctAnswer>&lt;style&gt;</correctAnswer>
</quizItem>

<quizItem>
  <question>Which property changes the size of text?</question>
  <answer>text-size</answer>
  <answer>font-size</answer>
  <answer>text-big</answer>
  <answer>typing-size</answer>
  <correctAnswer>font-size</correctAnswer>
</quizItem>

<quizItem>
  <question>Which property changes the colour of text?</question>
  <answer>color</answer>
  <answer>text-color</answer>
  <answer>font-color</answer>
  <correctAnswer>color</correctAnswer>
</quizItem>

<quizItem>
  <question>How would you use CSS to make all paragraph elements have a colour blue?</question>
  <answer>p { font-color: blue }</answer>
  <answer>paragraph { color: blue }</answer>
  <answer>.p { color: blue }</answer>
  <answer>p { color: blue }</answer>
  <correctAnswer>p { color: blue }</correctAnswer>
</quizItem>

<quizItem>
  <question>How would you use CSS to make all span elements with a class of "description" have a bold font?</question>
  <answer>span .description { font-type: bold }</answer>
  <answer>.description { fontWeight: big }</answer>
  <answer>span .description { font-weight: bold }</answer>
  <correctAnswer>span .description { font-weight: bold }</correctAnswer>
</quizItem>

<quizItem>
  <question>For the `letter-spacing` property, are you allowed to use negative values?</question>
  <answer>Yes</answer>
  <answer>No</answer>
  <correctAnswer>Yes</correctAnswer>
</quizItem>

<quizItem>
  <question>How would you use the `border-radius` short-hand to achieve a bottom left 9px, top left 2px, top right 10px, and bottom right 3px?</question>
  <answer>border-radius: 2px 10px 3px 9px;</answer>
  <answer>border-radius: 9px 2px 10px 3px;</answer>
  <answer>border-radius: 10px 3px 9px 2px;</answer>
  <answer>border-radius: 3px 2px 10px 9px;</answer>
  <correctAnswer>border-radius: 2px 10px 3px 9px;</correctAnswer>
</quizItem>

<quizItem>
  <question>True or false: the default value for the `animation-delay` property is 2.</question>
  <answer>True</answer>
  <answer>False</answer>
  <correctAnswer>False</correctAnswer>
</quizItem>

</content>

');

# JavaScript
INSERT INTO `course_items`(`course_id`, `course_title`, `item_id`, `type`, `title`, `description`, `content`) VALUES (1,'JavaScript Course',1,'lesson','Introduction to JavaScript','Here we learn JavaScript, starting from scratch and go on to advanced concepts like OOP. We concentrate on the language itself here, with the minimum of environment-specific notes.','
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
');

# JavaScript Quiz
INSERT INTO `course_items`(`course_id`, `course_title`, `item_id`, `type`, `title`, `description`, `content`) VALUES (1,'JavaScript Course',2,'quiz','Introduction to JavaScript Quiz','This is a test of your skills. Act as if your life depends on it. Because it might. Jk. Good luck have fun.','

<quizTitle>Introduction to JavaScript Quiz</quizTitle>

<content>

<quizItem>
  <question>True or false: `54num` is a valid JavaScript variable name</question>
  <answer>True</answer>
  <answer>False</answer>
  <correctAnswer>False</correctAnswer>
</quizItem>

<quizItem>
  <question>What will `console.log(x + 5)` if x = 10?</question>
  <answer>10</answer>
  <answer>105</answer>
  <answer>15</answer>
  <answer>-15</answer>
  <correctAnswer>15</correctAnswer>
</quizItem>

<quizItem>
  <question>Which one of these is not a control statement structure in JavaScript?</question>
  <answer>while</answer>
  <answer>do until</answer>
  <answer>for</answer>
  <correctAnswer>do until</correctAnswer>
</quizItem>

<quizItem>
  <question>True or false: `name` and `naME` are identical variables.</question>
  <answer>true</answer>
  <answer>false</answer>
  <correctAnswer>false</correctAnswer>
</quizItem>

<quizItem>
  <question>True or false: some words are reserved and can not be variable names</question>
  <answer>true</answer>
  <answer>false</answer>
  <correctAnswer>true</correctAnswer>
</quizItem>

<quizItem>
  <question>True or false: everything in JavaScript has a type.</question>
  <answer>true</answer>
  <answer>false</answer>
  <correctAnswer>true</correctAnswer>
</quizItem>

<quizItem>
  <question>True or false: `array.pop()` removes the last element on an array and returns nothing</question>
  <answer>true</answer>
  <answer>false</answer>
  <correctAnswer>false</correctAnswer>
</quizItem>

<quizItem>
  <question>True or false: the `number` type represents only integers.</question>
  <answer>true</answer>
  <answer>false</answer>
  <correctAnswer>false</correctAnswer>
</quizItem>

<quizItem>
  <question>Which of the following is a proper way to delcare an array?</question>
  <answer>let arr = new Arr();</answer>
  <answer>let arr = [new Arr()];</answer>
  <answer>let arr = new Array();</answer>
  <answer>let array: new Array() = [];</answer>
  <correctAnswer>let arr = new Array();</correctAnswer>
</quizItem>

<quizItem>
  <question>If name = "Hans", what would be the proper syntax to output 'Hallo Hans!'?</question>
  <answer>alert(`Hallo ${name}!`);</answer>
  <answer>alert('Hallo ${name}!');</answer>
  <answer>alert("Hallo ${name}!");</answer>
  <correctAnswer>alert(`Hallo ${name}!`);</correctAnswer>
</quizItem>

<quizItem>
  <question>How do you remove the first element of an array `arr` and return that value?</question>
  <answer>arr[1]</answer>
  <answer>arr.shift();</answer>
  <answer>arr[0]</answer>
  <correctAnswer>arr.shift();</correctAnswer>
</quizItem>

<quizItem>
  <question>What is the result of the following code: alert('5' > 4)?</question>
  <answer>Error</answer>
  <answer>true</answer>
  <answer>54</answer>
  <answer>false</answer>
  <answer>NaN</answer>
  <correctAnswer>true</correctAnswer>
</quizItem>

<quizItem>
  <question>What is the result of the following code: alert(5 < 4)?</question>
  <answer>Error</answer>
  <answer>true</answer>
  <answer>54</answer>
  <answer>false</answer>
  <answer>NaN</answer>
  <correctAnswer>false</correctAnswer>
</quizItem>

<quizItem>
  <question>What's the output of the following operation: `true || !false && !(true && false)`</question>
  <answer>1</answer>
  <answer>0</answer>
  <answer>true</answer>
  <answer>false</answer>
  <correctAnswer>true</correctAnswer>
</quizItem>

<quizItem>
  <question>Which code initiates an infinite loop?</question>
  <answer>for(;;++)</answer>
  <answer>for(;;)</answer>
  <answer>for(i=0;)</answer>
  <correctAnswer>for(;;)</correctAnswer>
</quizItem>

</content>

');

# XML and AJAX 
INSERT INTO `course_items`(`course_id`, `course_title`, `item_id`, `type`, `title`, `description`, `content`) VALUES (3,'XML and Ajax',4,'lesson','XML and Ajax Basics','A basic introduction to the language XML and the client communicator Ajax','

<mainTitle>XML and Ajax</mainTitle>

<section>
<title>XML Basics</title>
<text>
XML is a portable, widely supported, open technology for data storage and exchange. XML describes data that can both be easily understood by humans and can be easily processed by computers. XML can be used to describe many types of data, such as mathematical formulas, music, news, recipes, and financial reports.
</text>
<code>
&lt;?xml version="1.0"&gt;

&lt;!DOCTYPE country SYSTEM "country.dtd"&gt;
&lt;country&gt;Canada&lt;/country&gt;
&lt;capital&gt;Ottawa&lt;/capital&gt;

&lt;country&gt;Germany&lt;/country&gt;
&lt;capital&gt;Berlin&lt;/capital&gt;
</code>
<text>
  XML documents are formed as element trees, meaning that an XML tree starts at a root element 
  and branches from the root to the child elements.
</text>
<text>
Just like HTML, XML has start tags and end tags as well. Every XML document must have exactly one root element that contains all other elements. See below for an example.
</text>
<code>
&lt;rapper&gt;
  &lt;firstName&gt;MC&lt;/firstName&gt;
  &lt;lastName&gt;Grindah&lt;/lastName&gt;
  &lt;location&gt;Brenntford&lt;/location&gt;
&lt;/rapper&gt;
</code>
<text>
XML documents begin with an XML declaration, which identifies the document as an XML document. This 
line is called the XML prolog. It's optional but if it exists, it must come first in the document.
XML documents can have international characters. UTF-8 is the default character encoding for XML documents.
All elements must have a closing tag and the tags are case-sensitive.
</text>
<code>
&lt;?xml version="1.0"?&gt;
</code>
<heading>XML Attributes</heading>
<text>
Just like in HTML, XML attributes need to be quoted.
</text>
<list>
  <listItem>attributes cannot contain multiple values</listItem>
  <listItem>attributes cannot contain tree structures</listItem>
  <listItem>attributes are not easily expandable</listItem>
</list>
<code>
  &lt;recipe culture="German"&gt;
    &lt;name&gt;Currywurst&lt;/name&gt;
  &lt;/recipe&gt;
</code>
<text>
Blank lines are normally ignored by XML parsers. Comments being with `<!--` and end with `-->`
`DOCTYPE` reference contains three items: name of root element that the DTD specifies, the keyword `SYSTEM` (which denotes an external DTD) and DTD's name and location.
</text>
</section>

<section>
<title>XML Namespaces</title>
<text>
XML namespaces are collections of elements and attribute names that prevent naming collisions from dfiferent authors. Each namespace prefix is bound to a uniform resource identifier (URI) that uniquely identifies the namespace. Document authors commonly use URLs (Uniform Resource Locators) for URIs, because domain names (e.g., deitel.com) in URLs must be unique. Here is another example of a namespace being used. Here is an example. `highschool` and `medicalschool` are namespace prefixes. Notice the prefix `:` being used.
</text>
<code>
&lt;highschool:subject&gt;Geometry&lt;/highschool:subject&gt;
&lt;medicalschool:subject&gt;Cardiology&lt;/medicalschool:subject&gt;
</code>
<text>
Namespaves can be defined by an xmlns attribute in the start tag of an element.
</text>
</section>

<section>
<title>Document Type Definitions (DTDs)</title>
<text>
Document Type Definitions (DTDs) specify documents' element types and attributes, and their relationships to each other. They enable an XML parser to verify whether an XML document is valid. Uses EBNF (Extended Backus-Naur Form) grammar. A DTD can be referenced by an XML document to check if the XML document follows the structure defined by the DTD. The XML document is valid if it meets the DTD. Keep in mind that the schemas are XML documents and DTDs are not. Here is an example of part of a DTD for a letter, taken from the textbook.
</text>
<code>
&lt;!ATTLIST contact type CDATA #IMPLIED&gt;
&lt;!ELEMENT name ( #PCDATA )&gt;
&lt;!ELEMENT address1 ( #PCDATA )&gt;
&lt;!ELEMENT address2 ( #PCDATA )&gt;
&lt;!ELEMENT city ( #PCDATA )&gt;
&lt;!ELEMENT state ( #PCDATA )&gt;
&lt;!ELEMENT zip ( #PCDATA )&gt;
&lt;!ELEMENT phone ( #PCDATA )&gt;
&lt;!ELEMENT flag EMPTY&gt;
&lt;!ATTLIST flag gender (M | F) "M"&gt;
</code>
<text>
The `ELEMENT` type declaration defines the rules for the element. `letter` contains a `contact` element with child elements name, address1, address2, city, state, zip, phone, and flag. DTD requires exactly one occurrence of each of these elements. The first line uses the `ATTLIST` attribute-list declaration to define an attribute named `type` for the `contact` element. The keyword `#IMPLIED` specifies that if the parser finds a `contact` element without a `type` attribute, the parser can choose an arbitrary value or it can ignore the attribute, the document will still be valid. `#REQUIRED` can be used as well, meaning that the attribute must be present in the element. `#FIXED` can be used to specify that the attribute (if present) must have the given fixed value.
</text>
<code>
&lt;!ATTLIST address zip CDATA #FIXED "01757"&gt;
</code>
<text>
The code above indicates that the attribute `zip` (if present in the element `address`) must have the value 01757 for the document to be valid. If not present, the parser uses the fixed value that the ATTLIST declaration specifies.
</text> 
<text>
  It is advisable to use a DTD when:
</text>
<list>
  <listItem>Verifying data</listItem>
  <listItem>Having a consistent agreed-upon method of structuring data.</listItem>
</list>
<text>
  However, keep in mind that XML does not require a DTD.
</text>
</section>

<section>
<title>Exstensible Stylesheet Language (XSLT)</title>
<text>
XSL (Extensible Stylesheet Language) stylesheets can be connected to an XML document by adding `xml:stylesheet` processing instruction to the XML document. They convert XML into any text-based document. It is more elaborate than CSS. `&lt;xsl:stylesheet&gt;` defines that the document is a 
style-sheet document. `&lt;xsl:template&gt;` defines a template.
</text>
</section>

<section>
  <title>Ajax</title>
  <text>
    Ajax applications separate client-side user interaction and server communication, run them in parallel, and make server-side processing more transparent to the user. What happens when the user interacts with a page in an Ajax application? Well, first, client creates an XMLHttpRequest object to manage a request. XMLHttpRequest object sends the request to and waits for the server to respond. Requests are asynchronous, so they allow the user to continue interacting with the application whiel the server processes the request concurrently. When the server responds, the XMLHttpRequest object that issued the request invokes a callback function which typically uses partial page updates to display the returned data in the existing web page without reloading the entire page.
    When passing structured data between the server and the client, Ajax applications often use XML because it consumes little bandwidth and is easy to parse.
    Creating a full-scale ajax-enabled application.
  </text>
  <list>
    <listItem>JSON: Represent objects as strings. A simpler alternative to XML for passing data between the client and the server</listItem>
    <listItem>JSON object: Represented as a list of property names and values contained in curly braces</listItem>
    <listItem>Array: Represented in JSON with square brackets containing a comma-separated list of values, where each value can be a string, number, JSON representation of an object, true, false, or null.</listItem>
    <listItem>JSON strings: Easier to create and parse than XML. Requires fewer bytes.</listItem>
  </list>
  <text>
    We use the `XMLHttpRequest` object, which resides on the client, to create and manage asynchronous requests. Here is an example of a simple Ajax application that uses the `XMLHttpRequest` object.
    An asynchronous request is made using the `open` method on an instance of XMLHttpRequest to set up the request and `send` to initiate the request.  
  </text>
  <code>
    &lt;div id="demo"&gt;
    &lt;h2&gt;The XMLHttpRequest Object&lt;/h2&gt;
    &lt;button type="button" onclick="loadDoc()"&gt;Change Content&lt;button&gt;
    &lt;/div&gt;
    
    &lt;script&gt;
    function loadDoc() {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("demo").innerHTML =
          this.responseText;
        }
      };
      xhttp.open("GET", "ajax_info.txt", true);
      xhttp.send();
    }
    &lt;/script&gt;
  </code>
  <text>
    Callback functions are also used most of the time, which are functions that get called when the server responds.
  </text>
  <heading>
    The `onreadystatechange` Property
  </heading>
  <list>
    <listItem>the `readyState` property holds the status of the XMLHttpRequest.</listItem>
    <listItem>The onreadystatechange property defines a function to be executed when the readyState changes.</listItem>
    <listItem>
      The `readyState` holds the status of the XMLHttpRequest. 
      (0: not initialized, 1: server connection established, 2: request received,
      3: processing request, 4: request finished and response is ready)
    </listItem>
    <listItem>
      `status` can be 200 (OK), 403 (Forbidden), 404 (Page not found), and many other possible codes.
    </listItem>
    <listItem>The status property and the statusText property holds the status of the XMLHttpRequest object.</listItem>
  </list>
  <text>
    A callback function is a function passed as a paramter to another.
    One function per task is a good guideline when using Ajax.
  </text>
  <heading>Ajax GET Request</heading>
  <code>
    var request = new XMLHttpRequest();

    // Instante request object
    request.open("GET", "users.php?email=pure@muscle.ca");

    // Define event listener for readystatechange event
    request.onreadystatechange = function() {
        // If the request is compete and successful..
        if(this.readyState === 4 && this.status === 200) {
            let response = this.responseText;
            document.getElementById("container").innerHTML = response;
        }
    };

    // Sending the request to the server
    request.send();
  </code>
  <text>
  Statuses can be 200 (OK), 404 (Not Found), or 503 (Service Unavailable)
  </text>
  <heading>Ajax POST Request</heading>
  <text>
  This particular code is taken from tutorialrepublic.
  </text>
  <code>
    var request = new XMLHttpRequest();
    
    // Instantiating the request object
    request.open("POST", "submit.php");
    
    // Defining event listener for readystatechange event
    request.onreadystatechange = function() {
        // Check if the request is compete and was successful
        if(this.readyState === 4 && this.status === 200) {
            // Inserting the response from server into an HTML element
            document.getElementById("result").innerHTML = this.responseText;
        }
    };

    // Sending the request to the server
    request.send(formData);
  </code>
  <text>
  The responseXML property rreturns the server response as an XML DOM object.
  This code taken from W3schools demonstrates how one would parse the response 
  as an XML DOM object.
  </text>
  <code>
    xmlDoc = xhttp.responseXML;
    txt = "";
    x = xmlDoc.getElementsByTagName("ARTIST");
    for (i = 0; i < x.length; i++) {
      txt += x[i].childNodes[0].nodeValue + "&lt;br&gt;";
      }
    document.getElementById("demo").innerHTML = txt;
    xhttp.open("GET", "cd_catalog.xml", true);
    xhttp.send();
  </code>
  <heading>`getAllResponseHeaders`</heading>
  <text>
    The `getAllResponseHeaders` method returns all header information from the server response.
    Again, the following example is taken from W3Schools.
  </text>
  <code>
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML =
        this.getAllResponseHeaders();
      }
    };
  </code>
  <heading>`getResponseHeader`</heading>
  <text>
    If you don't want to retrieve all the header information and only need to retrieve some,
    then you can use the `getResponseHeader` method instead.
  </text>
  <code>
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("demo").innerHTML =
        this.getResponseHeader("Last-Modified");
      }
    };
    xhttp.open("GET", "ajax_info.txt", true);
    xhttp.send();
  </code>
</section>

');

# XML and AJAX Quiz

INSERT INTO `course_items`(`course_id`, `course_title`, `item_id`, `type`, `title`, `description`, `content`) VALUES (3,'XML and Ajax',6,'quiz','XML and Ajax Quiz','A quiz that tests your knowledge and comprehension and understand of the basic principles governing XML and Ajax','
                                                                                                                      <quizTitle>XML and Ajax Quiz</quizTitle>

<content>

<quizItem>
  <question>What does XML stand for?</question>
  <answer>Extensible Markup Language</answer>
  <answer>Extensible Marking Language</answer>
  <answer>Extraordinary Markup Language</answer>
  <correctAnswer>xtensible Markup Language</correctAnswer>
</quizItem>

<quizItem>
  <question>Every XML document requires exactly one root element that contains all other elements.</question>
  <answer>True</answer>
  <answer>False</answer>
  <correctAnswer>True</correctAnswer>
</quizItem>

<quizItem>
  <question>True or false: Attributes can contain multiple values</question>
  <answer>True</answer>
  <answer>False</answer>
  <correctAnswer>False</correctAnswer>
</quizItem>

<quizItem>
  <question>True or false: UTF-10 is the default character encoding for XML documents.</question>
  <answer>True</answer>
  <answer>False</answer>
  <correctAnswer>False</correctAnswer>
</quizItem>

<quizItem>
  <question>True or false: XML tags are case-sensitive</question>
  <answer>True</answer>
  <answer>False</answer>
  <correctAnswer>True</correctAnswer>
</quizItem>

<quizItem>
  <question>True or false: All elements must have a closing tag.</question>
  <answer>True</answer>
  <answer>False</answer>
  <correctAnswer>True</correctAnswer>
</quizItem>

<quizItem>
  <question>True or false: DTD uses Backus-Naur Form</question>
  <answer>True</answer>
  <answer>False</answer>
  <correctAnswer>False</correctAnswer>
</quizItem>

<quizItem>
  <question>Which one of the sentences is false?</question>
  <answer>A DTD can be referenced by an XML document to check if the XML document follows the structure defined by the DTD.</answer>
  <answer>Document Type Definitions (DTDs) specify documents' element types and attributes, and their relationships to each other.</answer>
  <answer>Both XML documents and DTDs are schemas.</answer>
  <answer>DTD uses Extended Backus-Naus Form</answer>
  <correctAnswer>Both XML documents and DTDs are schemas.</correctAnswer>
</quizItem>

<quizItem>
  <question>Which of the following is the proper XML declaration?</question>
  <answer>&lt;DOCTYPE xml version="1.0"?&gt;</answer>
  <answer>&lt;?html version=.0?&gt;</answer>
  <answer>&lt;?xml version=.0?&gt;</answer>
  <correctAnswer>&lt;?xml version=.0?&gt;</correctAnswer>
</quizItem>

<quizItem>
  <question>`DOCTYPE` reference contains three items:</question>
  <answer>name of root element that the DTD specifies, the keyword `REL` (which denotes an external DTD) and DTD's name and locationn</answer>
  <answer>name of root element that the DTD specifies, the keyword `SYSTEM` (which denotes an external DTD) and DTD's location.</answer>
  <answer>name of root element that the DTD specifies, the keyword `SYSTEM` (which denotes an external DTD) and DTD's name and location.</answer>
  <correctAnswer>name of root element that the DTD specifies, the keyword `SYSTEM` (which denotes an external DTD) and DTD's name and location.</correctAnswer>
</quizItem>

<quizItem>
  <question>True or false: Blank lines are usually ignored by XML parsers.</question>
  <answer>True</answer>
  <answer>False</answer>
  <correctAnswer>True</correctAnswer>
</quizItem>

<quizItem>
  <question>True or false: XML namespaces allows coders to refer to elements with the same name unambiguously.</question>
  <answer>True</answer>
  <answer>False</answer>
  <correctAnswer>True</correctAnswer>
</quizItem>

<quizItem>
  <question>What is correct about the following code: <!ATTLIST contact type CDATA #IMPLIED></question>
  <answer>Defines an element `type` for the attribute `contact`</answer>
  <answer>Defines an attribute named `type` for the `contact` element</answer>
  <answer>Defines a list of attributes for `contact` with type `CDATA`</answer>
  <correctAnswer>Defines an attribute named `type` for the `contact` element</correctAnswer>
</quizItem>

<quizItem>
  <question>What is correct about the following code: <!ATTLIST contact type CDATA #IMPLIED></question>
  <answer>#IMPLIED specifies that if the parser finds a `contact` element without a `type` attribute, parser can choose arbitrary value for the attribute or can irgnore the attribute.</answer>
  <answer>#IMPLIED specifies that if the parser finds a `contact` element without a `type` attribute, error will be thrown.</answer>
  <answer>#IMPLIED specifies that the attribute must be present in the element.</answer>
  <correctAnswer>#IMPLIED specifies that if the parser finds a `contact` element without a `type` attribute, parser can choose arbitrary value for the attribute or can irgnore the attribute.</correctAnswer>
</quizItem>

<quizItem>
  <question>Which keyword specifies that an attribute must have a given fixed value if present?</question>
  <answer>#FIXED</answer>
  <answer>#REQUIRED</answer>
  <answer>#SCHLAG</answer>
  <correctAnswer>#FIXED</correctAnswer>
</quizItem>

<quizItem>
  <question>True or false: The XMLHttpRequest object resides on the server.</question>
  <answer>True</answer>
  <answer>False</answer>
  <correctAnswer>False</correctAnswer>
</quizItem>

<quizItem>
  <question>An asynchronous request is made using the ___ method on an instance of XMLHttpRequest to set up the request and ____ to initiate the request.</question>
  <answer>open, send</answer>
  <answer>load, open</answer>
  <answer>open, load</answer>
  <correctAnswer>open, send</correctAnswer>
</quizItem>

<quizItem>
  <question>The callback function (in the context of readystatechange) is the event handler that gets called...</question>
  <answer>when the server responds.</answer>
  <answer>when the client loads for the first time</answer>
  <answer>when the server does nothing</answer>
  <correctAnswer>when the server responds.</correctAnswer>
</quizItem>

<quizItem>
  <question>the XMLHttpRequest object method getAllResponseHeaders returns a(n)...</question>
  <answer>string that contains all headers that precede the response body.</answer>
  <answer>array that contains all headers that precede the response body.</answer>
  <answer>array that contains the only first header of the response body.</answer>
  <correctAnswer>array that contains all headers that precede the response body.</correctAnswer>
</quizItem>

<quizItem>
  <question>___ is text returned to the client by the server</question>
  <answer>status</answer>
  <answer>responseXML</answer>
  <answer>responseText</answer>
  <correctAnswer>responseText</correctAnswer>
</quizItem>

<quizItem>
  <question>True or false: `getResponseHeader` lets you fetch all response header information.</question>
  <answer>True</answer>
  <answer>False</answer>
  <correctAnswer>False</correctAnswer>
</quizItem>

</content>
                                                                                                                      ');
                                                                                                                  