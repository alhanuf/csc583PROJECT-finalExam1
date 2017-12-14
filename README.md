# csc583PROJECT-finalExam1
Non-functional Requirement :

1.This project is can be run on every platform .Like mac,Android ,Window . just need an web-browser to run the project.for localhost you need the XAMPP server. I used XAMPP because it is easy to install it and easy to connect frontend with backend

installation instruction:
You can install it from https://www.apachefriends.org/index.html and follow the wizzerd active Apache and MySQl

Download visual studio code from https://code.visualstudio.com/ to be able to see the code

then clone the project folder and move under "C:\xampp\htdocs" this location. import your database table "enquery.sql"and "admin veiw.sql" in database ,the database name should be "toro"
1.the project have start from index.html
2.open index.html and open xampp server and run mysql Admin.
3.run your project on locahost "http://localhost/projcet/index.html" like this.
4.open after.php page and check here the database name and password are same with your databse .
5.that user name and password you set at the time of installation.
6.then run index.html.
7.You should see the sign in page. enter your information then submit. It will rediret to the same page. when data goes successfully in database. If it is empty, It will ask you to fill the page.
8.go to http://localhost/projcet/admin.html
9. it should go to a page where u can see a Admin Login Form
10. to login I required and account that is in the database, "project@gmail.com"where it ask you about the username or email . And "12345678" is the password  
11. it should direct u to http://localhost/project/info.php You will see all the list of all signed in users in the database.


So, 1.just run the project in the browser ,here the enquery send to the database. 
2. on The admin page ,there have some page link,and information page of all the users.


Architecture discussion :


MySql: database XAMMP: server PHP: Connect the server with the database HTML, PHP, javascript: API and front-end

First, Index Page:This is the index page here the user fill the enquery form then the data goes into the database. Admin Log form:Admin login form for the admin who get the access the complete portal . Admin Page:This is the admin page here the admin access all the portal .

I used the bootstrap and media query for the responsive designing and HTML and CSS for web design. I used also Jquery for special effacts and javascipt for validation.

plan of action :

- [x] Nonfunctional analysis

- [x] Architecture design

- [x] Coding

- [x] Test deployment

- [x] Admin authentication before accessing the data table

- [x] Page Validation Form

- [x] Unit Testing
