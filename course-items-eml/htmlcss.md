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


