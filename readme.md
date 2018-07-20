#PHP router
*Mini project based on the tutorial available on www.laracasts.com* <br>

### Project Idea:
As a still beginner developer I came across a great PHP router tutorial. I went through this well-prepared, instructive exercise line by line and rewrote the entire code. Why? Just to experience and experiment the MVC concept. I believe that the most important thing is to understand how it works before you try to use Laravel or other PHP framework.   

### Technologies used:
* **PHP (OOP)** - logic programming,
* **MySQL** - database storing data,
* **HTML** - build simplistic views.

### How it works:
* There are four, simple pages:  
    * home page, 
    * contact page, 
    * about page, 
    * about our culture page.

* Each page is managed by it's controller which generates the appropriate view and - if needed - collect and handle data stored in a local mySQL database (in this case, only home page uses db).

* There is a collection of four URL routes that user can choose in order to visit the appropriate pages. 

* Router class handle the whole action. It searches in array of routes for the entered url and if it's correct informs the controller.

* There is also a Request class which grabs current URL from $_SERVER super-global variable. 

* index.php file in the main directory is the entry point of application and is the exact router which handles the whole page traffic. 

* Finally, there are two classes: Connection and QueryBuilder responsible for database service.

Project has no hosting because it's just an exercise. Everything is locally installed on my computer. I focused on folder structure, clean code and the maximum functionality.
<br><br>I intentionally skipped and ignored .htaccess and config.php files because of personal data such as database passwords and server configuration unnecessary here. 

All in all, I decided to share it. Who knows, maybe it can help someone to better understand basics of PHP MVC pattern :) enjoy!          

