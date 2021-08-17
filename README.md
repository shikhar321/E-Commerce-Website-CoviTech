# E-Commerce Website: CoviTech

E-Commerce Website using MySQL, PHP and Bootstrap

## Need to work on:

1. User should not be allowed to register if he/she tries to provide the already registered email ID.
2. Implementation of export button in admin module to export all details of users to an excel sheet.

## Prerequisites
1. Install XAMPP web server
2. Any Editor (Preferably VS Code or Sublime Text)
3. Any web browser with latest version

## Languages and Technologies used
1. HTML5/CSS3
2. JavaScript (to create dynamically updating content)
3. Bootstrap (An HTML, CSS, and JS library)
4. XAMPP (A web server by Apache Friends)
5. PHP
6. MySQL (An RDBMS that uses SQL)

## Steps to run the project in your machine
1. Download and install XAMPP in your machine.
2. Clone or download the repository.
3. Extract all the files and move it to the 'htdocs' folder of your XAMPP directory.
4. Make a new folder 'project' in the 'htdocs' folder of your XAMPP directory. Extract all the files and move it to this folder.
6. Start the Apache and Mysql in your XAMPP control panel.
7. Click on Admin button in the Mysql Module. Alternatively you can open your web browser and type 'http://localhost/phpmyadmin/'.

### Database Creation Instruction

1. In phpmyadmin page, create a new database from the left panel and name it as 'project'.

#### Creating Table "users":
2. In this 'project' database, click on "New" button.
3. On the navigation bar click on SQL, paste the following SQL commands and click on Go.

`````````````````````````````````````````````````````
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
    `DOB` date NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
`````````````````````````````````````````````````````

#### Creating Table "admin":
4. In the 'project' database, again click on "New" button.
5. On the navigation bar click on SQL, paste the following SQL commands and click on Go.

`````````````````````````````````````````````````````
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

`````````````````````````````````````````````````````

#### Creating Table "testing":
6. In the 'project' database, again click on "New" button.
7. On the navigation bar click on SQL, paste the following SQL commands and click on Go.

`````````````````````````````````````````````````````
CREATE TABLE `testing` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Product` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
    `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

`````````````````````````````````````````````````````

#### Creating Table "orders":
8. In the 'project' database, again click on "New" button.
9. On the navigation bar click on SQL, paste the following SQL commands and click on Go.

`````````````````````````````````````````````````````
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `Product` varchar(100) NOT NULL,
  `Price` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
`````````````````````````````````````````````````````

<p align="center">
  <img src="https://user-images.githubusercontent.com/78657875/126182991-e9cd47f3-b231-44e7-a119-8f3b34e25f59.png">
</p>

NOTE: EVERYTHING IS CASE SENSITIVE


10. Open a new tab and type 'http://localhost/project/index.php' in the url of your browser
11. Hurray! That's it!
    
### SOFTWARES USED
  - XAMPP was installed on windows and APACHE Server and MySQL were initialized. And, files were built inside C:\xampp\htdocs\project.
  - VS Code was used as a text editor.
  - Google Chrome Version 91.0.4472.124 was used to run the project.
  

### Starting Apache And MySQL in XAMPP:
  The XAMPP Control Panel allows you to manually start and stop Apache and MySQL. To start Apache or MySQL manually, click the ‘Start’ button under ‘Actions’.

<p align="center"><img src="https://user-images.githubusercontent.com/78657875/126271652-4edbcff2-deb4-41c2-9bcc-426576154549.png"/>  
	
## GETTING INTO THE PROJECT:
	
### Home Page:
This website has a ‘Home’ page which contains links to the following from where the user & admin can login into their accounts by toggling the tabs accordingly.
	
![image](https://user-images.githubusercontent.com/78657875/126287259-333c4540-d5a9-41a4-9e03-0e0a5dd268ed.png)
	
It contains following sections:-

A) Services
	
B) Live Updates
	
C) Useful Youtube Videos

### Services: 
This Section (in the home page itself) contains link to various services like Register for Vaccine, donate to PM Care Fund, find nearest vaccination center and read information about COVID-19 and its prevention.
	
![image](https://user-images.githubusercontent.com/78657875/126288270-d9f70962-185c-451e-b062-3f9eb973ace9.png)

### Live Updates:
This Section (in the home page itself) displays (COVID-19) statistics of confirmed Covid Cases, Deaths and number of people vaccinated. The user can select any country and can also compare covid cases by region.
	
![image](https://user-images.githubusercontent.com/78657875/126289050-0b69d131-1e1c-4aad-9966-4bae9bc0132a.png)

### USEFUL YOUTUBE VIDEOS:
This Section (in the home page itself) displays various embedded Youtube videos on Symptoms, Precautions and Prevention of Coronavirus.

![image](https://user-images.githubusercontent.com/78657875/126289294-558c67d8-a13a-4587-99f4-f9df042a82b5.png)

### About Us
'About Us' page (Fig 1.2) allows us to get some more information about goals and the services of our E-commerce website.
	
![image](https://user-images.githubusercontent.com/78657875/126289979-6b986ef7-9608-499c-9239-e2ee8976ae45.png)

The website consists of 2 modules:

1. User Module
2. Admin Module

## User Module:

This module allows customers to create their account, login to their account, view products, add/delete products to their cart and place/cancel their orders.

### Registration Page

The registration page asks customers to enter their First Name, Last Name, DOB, Email Address, Password, Home Address, Phone Number, and radio buttons to select their gender.

![image](https://user-images.githubusercontent.com/78657875/126368397-ae9f69f3-cef3-415d-b151-2c9071ae4938.png)

### Login Page

Once the user has created his/her own account after clicking the ‘Register’ button, then he/she will be redirected to Login Page.

After successful registration, the user has to log in with the email and password provided on the registration page.

![image](https://user-images.githubusercontent.com/78657875/126290347-ef304607-3202-497e-996d-864a70a6108e.png)

### Easy Shop Page

After successful login,  the user gets redirected to Easy Shop Page. Here the user can choose any product as well as the quantity. To add an item to their cart, the user needs to click the "Add to cart" button.

![image](https://user-images.githubusercontent.com/78657875/126655108-20472cfd-a532-4028-bb70-83521b73d92e.png)

![image](https://user-images.githubusercontent.com/78657875/126655371-70eff33d-2d77-4945-8d24-8c0f48927248.png)

![image](https://user-images.githubusercontent.com/78657875/126655636-b0f7c49d-a7fc-4f76-8a52-a34793e1fba2.png)

### My Cart Page

This Page displays all the products choosen by the user with their ID, Quantity and Price (per item). The user can also Remove an item by clicking on the "Remove" Button.

The user can also place the order by clicking on "Place Order" Button.
	
![image](https://user-images.githubusercontent.com/78657875/126373563-0f661675-9db1-4168-8376-b589536c9408.png)

### My Orders

This Page displays all the orders placed by the user with their ID, Quantity and Price (per item). The user can also cancel an order by clicking on the "Cancel Order" Button.

![image](https://user-images.githubusercontent.com/78657875/126390486-53d6f78b-a00d-46ab-b351-fa3bcbe7c65b.png)

## Admin Module:

This module allows an Admin to log in to their existing account, view orders of other users, cancel an order, and add a new Admin.

### Admin Login Page:

Firstly, the Admin has to log in to their existing account using his username and password.

![image](https://user-images.githubusercontent.com/78657875/126366865-496348ec-fa66-4ee5-8cb5-3ef8db2b7bf4.png)

### Order Manager Page

After successful login, the Admin gets redirected to Order Manager Page. Here the Admin can see all the products choosen by the users with their ID, Quantity, Price (per item), Email ID and Address. The Admin can also cancel the order of any user.

![image](https://user-images.githubusercontent.com/78657875/126681042-6cf132bb-9209-404a-8a29-1f947b36c280.png)

### Add Admin Page

The Admin can also add another Admin by clicking on "Add Admin" button on Order Manager Page.
The Admin needs to enter the Username and Password and then click on "Add Admin" button.

![image](https://user-images.githubusercontent.com/78657875/126391158-50a23edd-c3e3-46c0-9bb5-12cf09793d88.png)

## Updates

Updates to this Project will be added here.

## Document

[Click Here to Download Project Report](https://github.com/shikhar321/TEST-FOR-IMAGES/files/6913022/Final.Report.Group.12.pdf)

## License

This project is licensed under the [MIT License](LICENSE).
