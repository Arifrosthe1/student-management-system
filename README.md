# Student Management System

A simple web-based Student Management System built with PHP and MySQL, designed to manage and track student records efficiently. The system allows users to perform basic CRUD (Create, Read, Update, Delete) operations on student data.

## Features

* **Add New Student**: Add student details such as name, course, and contact information.
* **View Students**: Display a list of all registered students.
* **Update Student Information**: Edit the details of an existing student.
* **Delete Student**: Remove a student's record from the system.

## Technologies Used

* **PHP**: Server-side scripting language to handle logic.
* **MySQL**: Database to store student information.
* **HTML/CSS**: For the frontend user interface.

## Installation

### Prerequisites

* PHP 7.x or higher
* MySQL Database
* A local server environment like XAMPP or WAMP

### Steps to Install

1. Clone this repository to your local machine:

   ```bash
   git clone https://github.com/Arifrosthe1/student-management-system.git
   ```

2. Place the cloned folder in your server's root directory (e.g., `htdocs` for XAMPP).

3. Create a new database in MySQL:

   ```sql
   CREATE DATABASE student_management;
   ```

4. Import the database schema from `database.sql` (if provided) or create your own tables based on the system's requirements.

5. Configure your database connection in the `config.php` file:

   ```php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'student_management');
   ```

6. Open your browser and go to `localhost/student-management-system/` to access the system.

## Usage

1. **Add New Student**: Navigate to the "Add Student" page and fill in the required information.
2. **View Students**: Visit the "View Students" page to see all student records.
3. **Edit or Delete**: Click on the "Edit" or "Delete" buttons next to a student's name to update or remove their details.

## License

This project is open-source.

