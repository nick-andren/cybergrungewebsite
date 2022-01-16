# cybergrungewebsite

Cybergrunge.net is a website allowing user uploads of music and art. This repo has just the most basic functions of the website. this is not the live website, it may differ but only slightly. config is up to you. for now this is just to provide a rough outline of how things work. 

## Getting Started

To run this locally, navigate to the project's base directory and run the following:

```
$ php -S localhost:1337
```

Now you can visit the local version of the site by visiting http://localhost:1337/indexAR.php

## Contributions / Style Guide

Most projects have contribution and style guide which pretends to be kind to contributors. This is fake and condescending. If you have rules, they exist for a reason, so state them forcefully and provide justification. Be open to changing rules, but don't remove your own agency or deny your own prejudice by hiding behind some abstract idea, appealing to some fallacious "conventions" which are just a psychological crutch to deny one's agency/responsibility. We don't need that kind of crap in FOSS or anywhere.

* "readability" and "neatness" are subjective
* assume anyone reading the code doesn't know how code works, otherwise you are ableist and fascist
  * consequence of above: code should explain itself
* brackets don't need their own line. ever.
* keep indentations to minimum, four tabs is enough for anything
  * if its not, then come up with a new solution because you're wrong
* assume vanilla html/js/php etc
  * when libraries are used self-flagellate in comments
* always minimize surface area and vectors for error - computers are stupid enough without humans
* because of above, libraries/frameworks are the devil. JQuery is barely tolerable
* promote communism in comments profusely (PCiCP)

## upload handling

the artists folder contains `custom upload.php` which handles uploads. the process of uploading is kind of shitty, as there are no SQL database entries for individual tracks, just for albums. tracks are simply titled the name of the file. also, i am pretty sure that i use very inconsistent form sanitization methods which leads to a lot of fuckups with uploads that have any kind of special characters in the name, that is work in progress along w everything else

## databases

SQL database structure can be gleaned from the code but for posterity 

for album styling you will need: SQL db named ```albums``` with following columns ``` backgroundcolor1 backgroundcolor2 bordercolor1 bordercolor2 borderstyle1 borderstyle2 color1 color2 album artist page owner ``` some arent implemented right now.

for chat you will need a database named ```users``` with following columns ``` id	username	password	created_at	bgcolor	textcolor	status	email	LAST_ACTIVITY	projects ``` and again some of this stuff isnt implemented such as ```projects``` column.

## router.php

as of now, global rewrite rule leads to router. it handles:

* dynamically generating album pages
* generating artist pages with list of albums by the artist
* generating album editor
* handles redirects to certain pages.

## indexAR.php
main homepage, various content on it is changed almost daily but the general format stays the same ish. includes cute jquery window manager.

## artists dir
this directory has ```custom upload.php``` as well as the php scripts for creating and editing album page styles, and "content management" for album "authors" including re-uploading album art, "nuking" the album. technically, anyone could greif other peoples albums because there is no authentication implemented for who is trying to edit an album, it just checks if they are logged in or not and if not denies editing.
