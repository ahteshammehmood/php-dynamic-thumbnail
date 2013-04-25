php-dynamic-thumbnail
=====================

A simple and reusable function for generating thumbnails dynamically from PHP

This script is orginally written by Ronald Nicholls

http://www.onextrapixel.com/2011/02/25/creating-dynamic-image-thumbnails-using-php/

usage
=====

generateThumbnail($source_file, $destination_file, $image_mimetype, $new_width, $new_height);

example
=======

generateThumbnail("input.jpg", "output.jpg", "image/jpeg", 100, 100);

version log
===========

2013-04-25: Version 1.1: New parameter ($image_mimetype) added to the function \n
                         Example Added

2013-04-24: Version 1.0: Initial Release

