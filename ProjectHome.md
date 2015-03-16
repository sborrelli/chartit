# Chart It #

  * [Introduction](#Introduction.md)
  * [Why Chart It?](#Why_Chart_It.md)
  * [Example](#Example.md)
  * [Installation](#Installation.md)
  * [User Operation](#User_Operation.md)
  * [Admin Operation](#Admin_Operation.md)


## Introduction ##

Chart It is a php application that allows one to draw an overlay on top of a jpeg image.  It has been designed to assist users in libraries locate a particular resource in a building by call number.  Once linked within an OPAC, patrons are able to access Chart It, identify the call number range where the resource they’re after is located and see an image of the building and floor, with the particular stack highlighted.

http://chartit.googlecode.com/hg/doc/doc_01.PNG

## Why Chart It ##

Libraries in general, but particularly academic libraries house large collections in larger buildings.  Locating resources in these facilities can be frustrating and intimidating.  Chart It assists patrons locate the resources they’re after, more easily by showing an image of the particular "stack" a resource is located by call number (see the example below). The resource locating and retrieval process is made more efficient through reducing the time required locating resources, and by reducing library anxiety as an additional finding aid.


## Example ##

Adam is a new transfer student at a four year state university.  He’s researching novels about the Galapagos, and is after one with that title by Kurt Vonnegut Jr. for a literature class.  He’s familiar with searching a library catalog but doesn’t know his way around the university library.  He identifies the call number for the book as PS3572.O5 G3 1988, but has no clue where to find the book.  Seeing the link for Chart It in the catalog, he clicks the link and accesses the Chart It (see figure 1).

http://chartit.googlecode.com/hg/doc/doc_02.PNG

> Recognizing the call number is between   PS 3302 and Z he knows the book is on the 3rd Floor of the Holland Library.  After clicking the accordion panel, Adam sees that the call number for the book he’s after falls between PS 3565 A8 S6X and PS 3573 A42 3399 1995, stack 607. One more click and Adam sees an image of the floor and the location of the stack where the novel _Galapagos_ is. Adam’s now knows not only that the library has a copy of the resource he wants, but is empowered to get it on his own without the additional hassle and embarrassment of having to ask for help.

http://chartit.googlecode.com/hg/doc/doc_03.PNG

## Installation ##

The  default project configuration is intended to work right away. Copying the entire folder to PHP-enabled webserver should be enough.
The system has an embedded SQLite 2 database, as well as several supporting open source libraries like jQuery and Blueprint CSS.


## User Operation ##

There are two main parts regarding user operation in Chart It: the first is locating a "stack" in the accordion-based user interface, and the second is checking its actual location in the floor map.

The initial configuration upon downloading includes the floors and stack data from Washington State University Holland & Terrell Libraries. The initial screen displays the two libraries and its floors as header sections in the accordion control; when one is selected, it is expanded and groups of stacks are selectable as second level headers. The default group size of 10 is modifiable (see Admin Operation).

http://chartit.googlecode.com/hg/doc/maplink.PNG

Each stack has configured a set of "coordinates" consisting of a floor image and the location of the stack on the image. The coordinates are displayed in a link with the stack number.

## Admin Operation ##

The application has an administrator section where stacks can be added, edited and removed from the database.

http://chartit.googlecode.com/hg/doc/admin-01.PNG

The initial selection combo displays the list of floors in the database. After picking one, the list of stacks is shown, including links for editing and deleting, and for the creation of new stacks.

The stack details screen allows setting values for stack name and call numbers, as well as selecting a map image and specifying a rectangular overlay to indicate the exact location of the stack in the floor. The procedure is:
  1. Select an image from the thumbnail list. The selected image will be displayed below the form.
  1. Draw a rectangle on the image with the mouse. The Map Coords field will reflect the coordinates with four numbers (in pixels) separated by hashes:
    1. X: horizontal position of the upper-left corner
    1. Y: vertical position of the upper-left corner
    1. W: rectangle width
    1. H: rectangle height
  1. Alternatively, the Map Coords can be edited manually, and overlsy will be redrawn automatically.

http://chartit.googlecode.com/hg/doc/admin-02.PNG