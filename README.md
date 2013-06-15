auto_responder
==============

Author: Peter Jewicz
Version: 1.0 (beta)


Disclaimer: This application is currently
in beta stage. It works, but there is still
a lot of work to be done. I plan on adding 
more features which will make this application
more usefule and secure (hashing admin password
and exporting the database to a text file are
just two things I have in mind). By using this
program you take full responsibily for any 
damages that may arise. I am not responsible 
for what you do.


Thanks you checking out my program. It is
a PHP/MySQL program meant to mimic the 
services of auto responders. This allows
you to store users in a database, and send
emails to them later. I built this as a way
for marketers and those wishing to build a list
to get started and not have to pay money to 
sign up for one.



Here is how the program works.

The user fills out the form which is set
to POST variables to submit.php. Submit then
checks the database to ensure the email is unique.
If so, it inserts the user into the database and
sends out an email to the user. They then can 
click their link which takes them to cofirm.php
which will set their confirmed value to 1 showing
that this user has agreed to accept emails. 

The Admin section starts with login. This will
query the database to check your credentials.
The user can then send an email to everyone on 
their list with a confirmed == 1. This will send 
out an individual email to every user on the list,
which allows for the admin to include the users
personal name or links. 

----Setup-----
Note: The names I use for tables and columns 
are my personal taste. You can change them to
match yours, but make sure that you go through 
the code and edit instances of my naming to match
yours.



To setup you will need to creat a new database.
For mine I used "autoresponde", but you can change 
this to whatever you like in the file db_connect.php.
You will also have to creat two tables, mine are users
and admin. Users is the main table as is set up as so:

id| name | email | confirmed 

admin table:

id | name | password


at this point your set to go. Simply upload the files to
your site, and create a form with the name and email values 
that points to sumbit.php. From there you can start gathering 
names, and then set up an admin account to begin emailing.
