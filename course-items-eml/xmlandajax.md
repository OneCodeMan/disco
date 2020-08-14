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