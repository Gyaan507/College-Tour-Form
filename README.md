# College-Tour-Form
**Project Overview**
This project is a simple form submission application for Techno International NewTown. The form collects user details and stores them in a MySQL database. Users can enter their name, age, gender, email, phone number, and queries. Upon successful submission, the form data is stored in the database and a confirmation message is displayed to the user.

#Features
User-friendly form interface
Collects user information
Stores data in a MySQL database
Displays a confirmation message upon successful submission
Basic validation to ensure all fields are filled out
#Technologies #Used
HTML
CSS
PHP
MySQL
##Prerequisites
To run this project, you need to have the following software installed on your local machine:

XAMPP (or any other local server with PHP and MySQL support)
Web browser (e.g., Google Chrome, Firefox)
#Setup #Instructions
1. Clone the repository:
 git clone https://github.com/yourusername/tech-tour-form.git
2. Navigate to the project directory:
 cd tech-tour-form
3. Start XAMPP and run Apache and MySQL services.
4. Create the database and table:
  Open your web browser and navigate to `http://localhost/phpmyadmin`.
  Create a new database named `tint tech tour`.
  Run the following SQL query to create the `tech tour` table:
  CREATE TABLE `tech tour` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(100) NOT NULL,
  `age` INT NOT NULL,
  `gender` VARCHAR(10) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(15) NOT NULL,
  `desc` TEXT NOT NULL,
  `date` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
);
5. Move the project files:
 Move the project files to the htdocs directory of your XAMPP installation. The path is usually C:\xampp\htdocs\.
6. Access the application:
Open your web browser and navigate to `http://localhost/tech-tour-form/index.php`.

#Contributing
Contributions are welcome! If you find any bugs or have suggestions for improvements, please open an issue or submit a pull request.








