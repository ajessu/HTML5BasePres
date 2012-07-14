ATS AciliaTalksSystem
=====================
This system is intended to use **only locally**.

Its a complete slydeshow system using:

* Impress.js http://bartaz.github.com/impress.js/#/ing

* SyxtaxHighlighter http://alexgorbatchev.com/SyntaxHighlighter/

* EditArea http://www.cdolivet.com/editarea/

* Jquery


Installing:
-----------

Just create a virtualhost system, and put the files, with correct permissions.


Running:
--------

Access to your local system, and all the subdirectories in slides (Its the master directory) will appear, and an export link in order to export to simple html without special effects (for printing purposes)


Goodies:
--------

The slide system special effects are based on name inside the files.  For example the file 2-3-NameofSlide-3.php  The format is:
first number is y coordinate, second number is x coordinate and if you want a z-coordinate use after the name of the slide a third number. (its simple if you watch it) (The example file will have x:3 y:2 and z:3)

THe code inside the slides are simple html, with some goodies:

* ul class lista - will create a list hidden by default but if you click on it the rest of the lis will appear
* p class code - will highlight a php code and create a button to send to the editor, if you save this code in the editor, will appear in the left at the console system.


TODO:
------

Goodie for open with highlight other files. (with a link), for example a class=file for a xml with hightlight.

Put styles in % in the editor part in order to work in all screens.

If you have some doubts you can contact me at carlos.agudo@acilia.es in spanish or english.
THanks.






