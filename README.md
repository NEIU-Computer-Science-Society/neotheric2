neoteric
========

Theme folder for word press.  

The css is generated using sass.  To compile the style.css, type the following at the command line.

sass --watch style.scss:style.css

If you get permission errors on Linux/OS X,
type:  sudo sass --watch style.scss:style.css

All of the sass files are contained in the styles folder.

Each sub-directory of the styles folder contains a "foldername_dir.sass" file that is meant to include every partial sass file contained in the directory.

syles sub-directory contents
=====================
- layouts directory:  contains layouts for each corresponding wordpress template being used in the wordpress theme.
  (ex) _home.sass is for the home.php page
  (ex) _category.sass is for the category.php page

- modules directory:  contains partial stylesheets for individual page components.
  (ex) _topnav.scss contains all of the styling for the top navigation bar.
  (ex) _footer.scss contains all of the styling for the footer.

- plugins directory:  contains all of the framework plugins being used in the theme.
  (ex) bourbon directory contains the bourbon framework
  (ex) neat directory contains the grid framework