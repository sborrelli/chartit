Copyright (c) 2012 Steve Borrelli, Dario Alvarez - Washington State University

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

Introduction
------------

The CHART IT system allows one to organize library stack location information by assigning them a set of coordinate within a map image, and visualizing the area as an overlay on the image.

It uses jQuery and a couple of plugins to present sections using a "nested accordion" control, HTML5 "canvas" element to draw dynamically on static images, and javascript to detect mobile browsers and present a simplified version.

CHART IT is based on a PHP, Javascript/CSS/HTML5 and SQLite platform. It also depends on a number of open source components like jQuery and Blueprint CSS.

Organization
------------

The system uses a small database with just three tables: Libraries, Floors and Stacks.

As implied by the names, they correspond to libraries (or buildings), floors and stacks within the libraries. In the WSU case, there are two libraries (Holland and Terrell), with nine "floors". The Floors are presented as main sections in the accordion panel, and the stacks in the floor are displayed in groups of ten.

Files
------

- stackchart.php: Organizes the floors and other sections as accordion headers. For each floor, it calls the function displayStacks($db, $page_size, $floor_id, $element_id) to generate the 2nd level headers for the accordion control. Mobile browser detection is also in this file: if a client is identified as mobile, the standard headers are not displayed to save screen space.

- map.php: displays a static (jpg or png) image, as well as a dynamic colored area determined by the parameters it receives.

- common.php: utility file with functions used in other files.

Admin section
-------------

The database administration files are

- index.php: displays a list of existing floors. When one is selected, the list of stacks is retrieved with an AJAX request and displayed. It includes links to create and delete stacks.

- stacks_list.php: gets an AJAX request with a floor_id from index.php, and generates a response with the list of stacks for that floor.

- stacks_edit.php displays the fields of a stacks and allows for modifications. The map overlay drawing is performed here with javascript and HTML5.

- stacks_delete.php: receives a stack delete request and performs the database operation.


Dependencies
------------

The system uses the following open source components

- jQuery
- jQueryUI
- Blueprint CSS
- SQLite 2

These libraries are all included in the project files and in the downloadable bundle. They all retain their original licenses, which allow for redistribution in the way it's done here.
 
