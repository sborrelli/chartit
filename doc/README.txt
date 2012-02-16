

What
How
Dependencies

The CHART IT system allows to organize stacks location information by assigning them a set of coordinate within a map image, and visualizing
the area as an overlay on the image.

It uses jQuery and a couple of plugins to present sections using a "nested accordion" control, HTML5 "canvas" element to draw dynamically on static 
images, and javascript to detect mobile browsers and present a simplified version.

CHART IT is based on a PHP, Javascript/CSS/HTML5 and SQLite platform. It also depends on a number of open source components like jQuery and Blueprint CSS.

Organization

The system uses a small database with just three tables: Libraries, Floors and Stacks.

As implied by the names, they correspond to libraries (or buildings), floors and stacks within the libraries. In the WSU case, there are 2 libraries (Holland and Terrel), with 9 "floors". The Floors are presented as main sections in the accordion panel, and the stacks in the floor are displayed
in groups of 10.

Files

- stackchart.php: Organizes the floors and other sections as accordion headers. For each floor, it calls the function displayStacks($db, $page_size, $floor_id, $element_id) to generate the 2nd level headers for the accordion control. Mobile browser detection is also in this file: if a client is identified as mobile, the standard WSU headers are not displayed to save screen space.

- map.php: displays a static (jpg or png) image, as well as a dynamic colored area determined by the parameters it receives.

- common.php: utility file with functions used in other files.

Admin section

Talk here.

Dependencies

The system uses the following open source components

- jQuery
- jQueryUI
- Blueprint CSS
- SQLite 2


 
