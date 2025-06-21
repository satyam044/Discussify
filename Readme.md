# 💬 Discussify — Full-Stack Discussion Forum

Discussify is a modern, full-stack discussion forum where users can post questions, reply to others, and engage in topic-based conversations — similar to Reddit or Stack Overflow. Built with a modular architecture featuring PHP and JavaScript for dynamic performance.

---

## 🚀 Features

- 🧾 **User Authentication**
  - Signup, login, and logout system with session management

- 🗨️ **Discussion Threads**
  - Post new questions and reply to threads in real time

- 📂 **Category-based Forum**
  - Organize posts into categories (e.g., Tech, Career, General)

- 🔎 **Search Functionality**
  - Quickly find relevant threads or replies

- 🎨 **Responsive UI**
  - Clean and adaptable design using custom CSS/JS

---

## 🧱 Project Structure

```bash
Discussify/
├── client/          # Frontend views and JS scripts
├── server/          # Backend logic (routes, database interaction)
├── common/          # Shared components/configuration
├── public/          # Public assets like images, CSS, JS
├── index.php        # Entry point

🛠️ Tech Stack
Frontend	HTML, CSS, JavaScript
Backend	PHP (Vanilla PHP)
Database	MySQL
Auth	PHP Sessions

📦 Getting Started (Local Setup)
Prerequisite: PHP 7+, MySQL, Apache (e.g., XAMPP or Laragon)

Clone the repo

bash
Copy
Edit
git clone https://github.com/satyam044/Discussify.git
Import the database

Use phpMyAdmin to import the SQL file (if included)

Or manually create tables from server/database.php

Update your DB credentials
In common/db.php or relevant config files, set your:

php
Copy
Edit
$host = "localhost";
$username = "root";
$password = "";
$dbname = "discussify";
Run the project

Start Apache & MySQL from XAMPP

Visit: http://localhost/Discussify

📄 License
This project is open-source and free to use under the MIT License.

👨‍💻 Author
Satyam Mishra
Full-stack Developer | PHP & MERN Enthusiast
GitHub Profile »

⭐ Like this Project?
If you find this useful, star the repo or fork it and build your own discussion app!

markdown
Copy
Edit

---
