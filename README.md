# Boat Sales Web Application

This project is a PHP/MySQL web application for displaying and managing data related to boats, sales, customers, and suppliers. The application features 12 dynamic SQL queries, each displayed through a separate PHP page.

## 🔧 Features

- Structured relational database with tables like Boats, Suppliers, Customers, Sales, Warehouse, etc.
- 12 queries using SQL techniques such as JOIN, GROUP BY, ORDER BY, COUNT, and DATE filters.
- User-friendly HTML interface with navigation menu.
- Deployed on 000webhost.

## 🗂 Project Structure

- `header.php`: Handles database connection and navigation menu.
- `select1.php` to `select12.php`: Each file executes and displays one SQL query.
- `SQL DATABASE DATA INSERT.odt`: SQL file for creating and populating the database.
- `.htaccess`: Optional server configuration file.
- `12 queries creation.odt`: Describes the queries implemented.
- `PASSWORDS FOR WEBSITE.txt`: Database and hosting credentials (**do NOT upload this publicly**).

## 💻 How to Run the Project

1. Create a MySQL database named `id21425981_bash1`.
2. Import the database structure and data using the SQL script in `SQL DATABASE DATA INSERT.odt`.
3. Upload all PHP files to a folder in your web server (e.g., Apache or 000webhost).
4. Make sure the credentials in `header.php` match your database.
5. Open any of the PHP files in a web browser (e.g., `select1.php`) to view the results.

## 📸 Online Demo

🔗 [Live Example](https://ulotrichous-meet.000webhostapp.com/public_html/select3.php)

## ⚠️ Security Notice

- **Do NOT upload sensitive credential files (like `PASSWORDS FOR WEBSITE.txt`) to public repositories.**
- Use `.gitignore` to exclude such files from version control.

## 👤 Author

**Georgios Dionisopoulos**  
Email: giorgosdionysopoulos2003@gmail.com
