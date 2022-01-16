# cybergrungewebsite
just the most basic functions of the website. this is not the live website, it may differ but only slightly. config is up to you. 

i will eventually make a repo for an easy to clone and reuse version of the website, for now this is just to provide a rough outline of how things work.

## Getting Started

To run this locally, navigate to the project's base directory and run the following:

```
$ php -S localhost:1337
```

Now you can visit the local version of the site by visiting http://localhost:1337/indexAR.php

## upload handling
the artists folder contains `custom upload.php` which handles uploads. the process of uploading is kind of shitty, as there are no SQL database entries for individual tracks, just for albums. tracks are simply titled the name of the file. ~~currently, a file called userdata.txt is created upon upload that stores data about who uploaded the album. if they are not logged in, it stores nothing. this could be done better with SQL but i havent done it yet. some people might have a problem with this because it technically means any logged in person can edit any album or upload under any artist name and so on. but i havent gotten that far~~ this has been fixed and now upon upload a database entry for the album is made with correct owner listed. still need to implement authentication for editing tho.

also, i am pretty sure that i use very inconsistent form sanitization methods which leads to a lot of fuckups with uploads that have any kind of special characters in the name, that is work in progress along w everything else

## database

SQL database structure can be gleaned from the code but for posterity 

for album styling you will need: SQL db named ```albums``` with following columns ``` backgroundcolor1 backgroundcolor2 bordercolor1 bordercolor2 borderstyle1 borderstyle2 color1 color2 album artist page owner ``` some arent implemented right now.

for chat you will need a database named ```users``` with following columns ``` id	username	password	created_at	bgcolor	textcolor	status	email	LAST_ACTIVITY	projects ``` and again some of this stuff isnt implemented such as ```projects``` column.

## router.php
as of now, global rewrite rule leads to router. it handles dynamically generating album pages (including album editing features) and some other stuff,
handles redirects to certain pages.

## indexAR.php
main homepage, various content on it is changed almost daily but the general format stays the same ish. includes cute jquery window manager i wrote.

## artists dir
this directory has custom upload.php as well as the php scripts for creating and editing album page styles, and "content management" for album "authors" including re-uploading album art, "nuking" the album. technically, anyone could greif other peoples albums because there is no authentication implemented for who is trying to edit an album, it just checks if they are logged in or not and if not denies editing.
