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

