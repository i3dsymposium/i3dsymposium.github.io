The site uses the 960 Grid System (http://960.gs) for the layout,
modified into a fluid layout (960-fluid.css) with some additions
for responsive design (responsive.css).

Both the {header,footer}.php and css/i3d.css files are commented.

The individual php files should be self explanatory.

For the logo, there is an img/logo.xcf file which is the layered
logo in the GIMP file format. The text is on two separate editable
layers. For the drop shadow:
  - Duplicate the text layer
  - Offset the layer by 5px in the x and 4px in the y
  - Fill the text with rgb(51, 51, 51) using the bucket
  - Apply a gaussian blur filter with a 10px radius
  - Set the layer opacity to 70%
  - The layer boundary size may need to be adjusted to not clip

