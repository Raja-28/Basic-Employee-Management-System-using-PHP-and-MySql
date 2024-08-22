
 Basic Employee Management System

 Overview

The Basic Employee Management System is a web-based application developed entirely using PHP and MySQL. It allows organizations to manage their employee data efficiently by providing basic functionalities such as adding, updating, viewing, and deleting employee records. This system is ideal for small to medium-sized businesses looking for a simple yet effective way to handle employee information.

 Features

- Employee Management: Easily add, update, view, and delete employee records.
- User Authentication: Secure login system for administrators to manage employee data.
- Search Functionality: Quickly search for employees by name or ID.
- All-in-One PHP: The application is built entirely using PHP for both frontend and backend, ensuring seamless integration and easy management.

 Technologies Used

- Frontend and Backend:
  - PHP (for all user interface and server-side logic)
- Database:
  - MySQL (for data storage)

 Prerequisites

Before running this project, ensure you have the following installed:

- Web Server: XAMPP, WAMP, or any other web server that supports PHP and MySQL.
- PHP: Version 7.0 or higher.
- MySQL: Version 5.6 or higher.

 Installation

Follow these steps to set up the project on your local machine:

1. Set Up the Database:
   - Open your web browser and navigate to `http://localhost/phpmyadmin`.
   - Create a new database named `employee_management`.
   - Import the SQL file `employee_management.sql` located in the `database` directory of the project to set up the required tables.

2. Start the Application:
   - Open your web browser and navigate to `http://localhost/employee-management-system`.
   - Log in using the default credentials (username: `admin`, password: `admin123`). You can change these later.

 Usage

 Adding a New Employee

1. Navigate to the "Add Employee" section in the menu.
2. Fill out the employee details in the form.
3. Click "Submit" to add the employee to the database.

 Viewing Employees

- Go to the "View Employees" section to see a list of all employees.
- Use the search bar to find specific employees by name or ID.

 Updating Employee Details

1. In the "View Employees" section, click on the "Edit" button next to the employee you want to update.
2. Modify the employee information in the form.
3. Click "Update" to save changes.

 Deleting an Employee

- In the "View Employees" section, click on the "Delete" button next to the employee you wish to remove.

 Future Enhancements

- Role-Based Access Control: Implement different user roles (e.g., admin, HR, manager) with specific permissions.
- Employee Reports: Generate reports on employee data, such as monthly attendance or department-wise employee count.
- Email Notifications: Send automated email notifications for important events like adding a new employee or updating records.

 Contributing

Contributions are welcome! Please fork this repository, make your changes, and submit a pull request.

 Contact

For any questions or feedback, please contact (mail : rajaccet28@gmail.com).
