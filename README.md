# time(t)able
Webapp for managing timetables. Made using PHP, MySQL, HTML and JS.

## About time(t)able
`time(t)able` (pronounced `timeable`) is a web-based application to manage timetables. I used to have my personal timetable on my homepage written in obfuscated table-layouted html. Originally only meant for personal use, classmates started to use it as well and soon I had a hand full of people relaying on my online timetable. This works good for a few people in the same class using the same timetable, but soon we won't be in one class anymore, instead having personal courses with individual timetables. So I started this project to provide a solution for me and my friends to still have the timetable online and always available.

## Try it!
I've got my version up at [time-t-able.psoke.de](http://time-t-able.psoke.de/)! Please note, that I run my custom version with beautified CSS. The default style is very ugly, plain and stock.

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

### Modding
I really recommend to mod the code to better fit your needs/style/what-so-ever. The best way to do that and keep updating fairly easy is working with git's great [branch](http://gitref.org/branching/) feature. Simply commit all your modifications on a `mods` branch, so you can always go back to stock, if you break something. To create such a branch and check it out immediately, use:

	$ git checkout -b mods
	
Now you can begin to commit you changes. The first one should be to add `modded` to the `meta` tag about version in `templates/header.tpl`:

	<meta name="time(t)able version" content="vX.Y modded" />
	
If you ever want to go back to stock simply use:

	$ git checkout master

### Updating
If you want to update you version of time(t)able, the ease depends on the modifications you are running. Either way you should always check the `CHANGES.md` file with the release and update note and list of changed files. Don't forget to delete the `install/` folder and to set the permissions again. You find your version number in the `meta` tags of the `templates/header.tpl`.

#### Unmodificated
If you are running an unmodificated version, updating is easy using git. First backup your `strings/info.php` and `strings/pw.php`. Then simply run:

	$ git fetch
	$ git checkout vX.Y
	
where `X.Y` represents the version number. The last command is optional, but I recommend using it in case I pushed an unstable update. Now re-import your `strings/info.php` and `strings/pw.php` in case they got lost, but read the `CHANGES.md` update notes carefully in case you have to modify them. At last upload the delta to your webserver and you are done.

#### Self-modificated
If you modificated your version to fit your needs, things get a bit more complicated. In case you get hardcore conflicts always keep a offside backup of your whole source tree. **Always** check the `CHANGES.md` file for update notes and watch out for conflicts with your modifications. If you feel safe, you can try a simple update (Skip the branch creation if you have branch for mods already, but be sure to fetch and merge from `master`):

	$ git branch mods
	$ git fetch
	$ git merge mods
	$ git branch -d mods
	
If this doesn't work, use your backup and make all the changes manually. Yes, this might be a "shitload" of work. Use the list of changed files in `CHANGES.md` for a better overview. You can use `git diff` to see differences between two files/branches/tags and

	$ git diff --name-status vX.Y HEAD
	
reveals all changed files from version `X.Y` to the current state of your repository.

## License
My code is published under [cc-by-nc-sa](http://creativecommons.org/licenses/by-nc-sa/3.0/) (c) 2011 by Philipp Stephan, [ps0ke.de](http://ps0ke.de)

The [jscolorpicker](http://jscolor.com) is published under GPL by Jan Odvarko, [odvarko.cz](http://odvarko.cz)