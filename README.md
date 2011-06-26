# time(t)able
Webapp for managing timetables. Made using PHP, MySQL, HTML and JS.

## About time(t)able
`time(t)able` (pronounced `timeable`) is a web-based application to manage timetables. I used to have my personal timetable on my homepage written in obfuscated table-layouted html. Originally only meant for personal use, classmates started to use it as well and soon I had a hand full of people relaying on my online timetable. This works good for a few people in the same class using the same timetable, but soon we won't be in one class anymore, instead having personal courses with individual timetables. So I started this project to provide a solution for me and my friends to still have the timetable online and always available.

## Try it!
I've got my version up at [time-t-able.psoke.de](http://time-t-able.psoke.de/)!

## Featureset

### User features
* account registration / logging in and out / account deletion
* password encryption - your data is safe
* option for making the timetable public
* German and English localization
* clean interface
* 12 lesson times
* 5 weekdays
* 20 subjects with custom colors
* default-room auto-assignment
* easy-to-use table editor

### Admin features
* complete open source
* comfortable Creative Commons license
* setup wizard for super-easy in-browser installation
* fully working right out of the box
* full customizable strings / templates / CSS
* easy to add more localizations
* only 4 database tables - no clutter - easy to remove and maintain

## Cloning, self-hosting and contribution/development
The project page is available under [psoke.de/other-projects/time-t-able/](http://www.psoke.de/other-projects/time-t-able/). 

### Getting the code
The source code is stored in my [time(t)able git repository on github](https://github.com/Ps0ke/time-t-able). There you can find all the sources, commit history and an issue tracker for filing bugs (which would be extremely helpful by the way).

If you have [git](http://git-scm.com/) installed, simply type:

	$ git clone https://github.com/Ps0ke/time-t-able.git

I recommend git as it is in my opinion the best version control system, and it is the easiest way to get my source. If you don't want to use git, you can get the source from this [tarball](https://github.com/Ps0ke/time-t-able/tarball/master) or [zip archive](https://github.com/Ps0ke/time-t-able/zipball/master). I hardly recommend using a UNIX operating system or a text editor that handles LF line endings (Windows uses CRLF by default).

### Installing on your webserver
Now (if not done already) upload the `time-t-able/` folder to your webspace. Now navigate your browser to `[...]/time-t-able/install/`. A setup wizard will come up and guide you through the installation process.

## License
My code is published under [cc-by-nc-sa](http://creativecommons.org/licenses/by-nc-sa/3.0/) (c) 2011 by Philipp Stephan, [ps0ke.de](http://ps0ke.de)

The [jscolorpicker](http://jscolor.com) is published under GPL by Jan Odvarko, [odvarko.cz](http://odvarko.cz)