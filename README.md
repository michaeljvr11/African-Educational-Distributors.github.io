# African-Educational-Distributors.github.io
Project Deliverable 3 – User Manual 
Faculty Name: 	Information Technology
Module Code: 	ITECA3-B12
Module Name: 	Web Development and e-Commerce 
Content Writer: 	Kariboba Mpwampu
Copy Editor: 	Mr Kyle Keens
Submission Date: 	Block 2 Week 5

Student Name	Michael Janse van Rensburg
Student Number	ZZZZT5KD5
Project Title	E-commerce Website
Submission Date	14/06/2023


 
Table of Contents
3.1	INTRODUCTION	3
3.2	BASICS: ACCESSING YOUR WEBSITE	4
3.3	PRODUCTS: ADDING, REMOVING, AND UPDATING PRODUCTS	5
3.4	CHANGING MENUS	6
3.5	SHIPPING OPTIONS	6
Shipping information:	6


3.6	ORDERS	6
3.7	UPDATING A PAGE ON YOUR SITE	7
3.8	CHECKING WEB TRAFFIC AND STATISTICS	8
3.9	APPENDIX	9

 
3.1	Introduction
African Educational Distributors is a company licensed to sell educational material to
Universities. African Educational Distributors is a company started in 2003 by Jorge Martins, with the vision to make high quality, multi-media educational resources available to universities across Southern Africa. AED supplies material actively to universities in South Africa, Namibia, Botswana, and Zimbabwe. Based in Johannesburg, South Africa we supply the best in audio-visual material to aid in giving your students the education that they deserve. We have an extensive catalogue of DVD's that can be used in the lecture room. Our content is then available for download from the DVD, to store on your server. Bring us a specialised need, and we will source and import, if not available locally, and deliver to your door. We source from all over the world. We are passionate about providing the best in education for universities in Southern Africa, as well as making the classroom a fun & vibrant experience for all involved, through the use of the incredible audio-visual materials we have available. Their products are sold under a catalogue for each subject that a university might need. For many years, African Educational Distributors has operated without a website, marketing only through telemarketing, e-mails and word of mouth. With the creation of this website, AED is now able to invite customers to view their catalogues online and present their company to the online world through this e-commerce website.


3.1.2	About this website
The E-commerce website for African Educational Distributors was developed using HTML, CSS, JavaScript as well as PHP. These coding and markup languages were used to create the different pages of the website, as well as the functionality that is built into the website. HTML was used to design the pages, CSS files stored the styling and responsive code, JavaScript was used to code functions and animations for the website. The back-end of the website was done using MySQL and PhpMyAdmin. PHP code was added to the files for each page to connect to the database, as well as pull all necessary information from the database onto the website. I also have a function where users can add their e-mail address to the mailing list which involves sending data to the back-end. This website is then hosted using the free service 000WebHost. This allows the website to be shared and viewed via a link.

3.2	Basics: Accessing your website 
3.2.1	Accessing the website
The website can be accessed by clicking the link below:
https://african-educational-distributors.000webhostapp.com/index.php

This link is the same for both admins and regular users.

3.2.2 Admin Access:
All admin responsibilities are accessed through the dashboard of the 000WebHosting service found at – 
https://panel.000webhost.com/dashboard/african-educational-distributors/dashboard
This allows the admin to update pages and add and remove products. The dashboard looks as follows:
 




3.3	Products: Adding, removing, and updating products
3.3.1	Adding and Removing Products
Products can be added to the catalogues for each subject on the website by simply adding a new record in the titles table. The titles table is found in the database ‘africaneducationaldistributors’ on PHPMyAdmin. This will add the new product onto the website when it is pulled from the database. 
To remove a product from the website, one must log into PHPMyAdmin to access the back-end. The titles table holds all products, which can then be queried to drop the record that includes the product you wish to delete. This will also remove it on the website, as the products are pulled from this database.

3.3.2	Updating Products
To update a product, this can also be done through PHPmyAdmin. Once you have accessed the titles table, one can edit/update a desired record using the UI or by running an alter table query.

Below is the database manager where one can manage the database to add, remove or update products. This page takes you to PHPMyAdmin where the management can be done.

 




3.4	Changing menus
All navigation to different menu’s on the website is done using the navigation bar at the top of the website, as well as the Useful Links section in the footer. This allows the user to navigate to their desired location through the click of a button. The UI is designed to be user-friendly and allow users to easily understand how to switch between different menus. The menu’s are named unambiguously and there are buttons that also allow the change of a menu on the website. These include the Shop Now Buttons which direct the user to the catalogue page. There is another button in the footer called ‘find out more’ which redirects the user to the about page.


3.5	Shipping Options
The Shipping Options for African Educational Distributors are specified in the About Page. It goes as follows:

Shipping information:
We are able to ship our products straight to your door. We make use of national and international courier service. This service is calculated by weight and is added to the total price when you make an order. For orders of a certain price, we will not charge for the shipping service.

3.6	Orders
Orders are processed off the website as customers need to specify what products they are interested in buying via e-mail or WhatsApp and then AED will get back to them with an invoice/quote. If the order is made from there, it will be processed by an admin and once payment has been received - the products will be sent to the provided address through a courier. 



3.7	Updating a page on your site
A page on this website would have to be updated through the 000WebHost file manager. Since the website is making use of this free hosting service, the files stored inside their file manager need to be altered to update a page. Anyone with the login details to the 000WebHost account can do so. Once they have accessed the file manager through the control panel in 000WebHost, they can then edit one of the pages and save changes. The pages to the website are under the publichtml folder. These updates will be made and seen in real time (once saved) on the website.

The file manager can be seen in the screenshot below:
 










3.8	Checking Web Traffic and Statistics
I have chosen to make use of the web traffic and statistics service: Google Analytics found at –
https://marketingplatform.google.com/about/analytics/

I have decided to make use of them as they offer free web traffic and statistics for any website. Their website is user-friendly and shows a plethora of valuable information when one pastes the link to the desired website into their interface. Google Analytics generates graphs to display data and even ranks the website in regard to other similar websites in the country. AED admins can use Google Analytics moving forward to analyze how the website is performing.

The web application makes use of Google Analytics. I implemented Google Analytics by creating an account and linking the African Educational Distributors Website as the property to be analyzed. This was done by pasting this snippet of code directly underneath the <head> tag.

<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-3N26DTD32X"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-3N26DTD32X'); </script>

Google Analytics homepage for the African Educational Distributors website looks as follows:
 

3.9	Appendix
To set up the database driven e-commerce website seen above:

1.	Write HTML and CSS code for the pages that design the look, feel and functionality of your website.
2.	Add any extra functions that need to be completed through JavaScript.
3.	Create a MySQL Database to store the necessary information for the company website.
4.	Set up XAMPP on your computer to ensure that MYSQL And PhpMyAdmin are linked to your website.
5.	Drag all the HTML, CSS and JavaScript files into the htdocs folder in xampp.
6.	Add PHP Code to create a connection to the database.
7.	Pull any necessary information from the Database to your website using PHP code.
8.	Once the website functions locally you can then look to host it online. Make an account with 000WebHost.
9.	Access the tools dashboard on 000WebHost and drag your project folder from xampp into the publichtml folder in 000WebHost.
10.	Import the database you have created by downloading the .sql file of the database and importing it into the database manager in the tools dashboard on 000WebHost.
11.	Change the connections.php file to match the new Database Name, Database Host and Database password given to you on 000WebHost.
12.	Follow the link generated of your website and ensure all is in working order. If any errors occur – update the code files in the File Manager on 000WebHost.
