                                                                  ******Book @ Barber*******

----------Introduction----------

As we all know time is the most important thing in everyone’s life and in this digital world where everything is getting digitalized, we created a Web Application to book slots in barber shops.
Our Web Application will allow existing user to login or create a new account for non-existing user. Later he can book a slot in selected city and selected barber shop in that.
Barber shop owners can approach us to add their shop details in our Web Application, So that users will be able book slots in their shop and avoid waiting in queue for service in their shop.
Shop owners can view the details of users who booked a slot in their shop and also can delete the booked details of users whose service is completed.



----------SYSTEM REQUIREMENTS------------- 

1) XAMPP software :- XAMPP is the most popular PHP development environment. It is free and open-source cross-platform web server.
                     We need to use xammp to run our web application by hosting a local server in our own system to run our web application on this local server.
2) Text Editor such as (notepad++,sublimetext etc) to change/manipulate code.
3) A good internet connection to run certain CDN plugins(CONTENT DELIEVERY NETWORK FILES) which is present in the source code.
4) Latest version of Google Chrome / Microsoft edge .

***note***
- To install xampp click on the following link given below.
   https://www.apachefriends.org/index.html

- Choose which operating system you are using and download the software

- To install code editors like notepad++ ,sublimetext visit the following link given below
   1) notepad++   :- https://notepad-plus-plus.org/downloads/
   2) sublimetext :-https://www.sublimetext.com/
    
- Even if you are running this application on local server make sure your device is connected to internet or else the website wont load properly.


------PROJECT ENVIORNMENT SETUP ( CODE SETUP or HOW TO RUN THE PROJECT)--------

1) The folder bookbarber has all the necessary source codes to run the web application.

2) The folder bookbarber needs to be copied and paste it in htdocs folder.

3) The htdocs folder is availabe after you install the xampp application in your system. This folder is needed as all the php files runs on this folder and also php is a server side
   scripting language. 

4) To access/get XAMPP htdocs folder you can search by typing XAMPP htdocs folder or  localdisk c - xampp - htdocs 
   note:- it depends on which downloadpath you select when you install the xampp software. Here we have chosen localdisk c .

5) Copy the folder named webminiproject and paste it in htdocs folder.

*** IMPORTANT *** 

6) As this is a dynamic web application system it would have a database.

7) To start running your xampp application open the xampp control panel and click only on the Apache and MYSQL module .

8) Now open the browser (Chrome or edge) and type in the URL http://localhost:80/phpmyadmin or http://localhost:8080/phpmyadmin . A phpMyadmin dashboard will be opened.

9)You can use phpMyAdmin to perform most administration tasks, including creating a database, running queries, and adding user accounts.

10)Now in the phpMyAdmin create a new database named "barberproject1".

11)After creating the database select the "barberproject1" database you created and click on import button option.

13)Now click on 'choose file' button and select the file named "barberproject1.sql" which is available in webminiproject folder only. After choosing the files press "go".

14)You are now ready to run the web application.

15)To run the web application type in the URL localhost/bookbarber and click login.php now you are ready to use the web application.

Remainder:-Please make sure your device is connected to internet.

*****************************************************
 
How to use the Web application

- On running the web application or project you will get the login page
- if you want to create new user , you can do using a link provided in that page.
- if you are a shop owner then you can choose admin login to view booked details in your shop
- shop details and shop owner details must be provided in the database using xampp phpMyAdmin.
- shop details must be provided in the table "shop_list" and shop owner details must be provided in "admin" tabe.





