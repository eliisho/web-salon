# Elisya Hair and Spa Salon

A web-based salon management system built with CodeIgniter 4. Developed as a final project for the Web Programming course (3rd Semester, December 2024).

---

## About

This application is a web-based platform, designed to help a hair and spa salon manage their daily operations from tracking reservations and services to managing employees, members, and products.

---

## Features

- Authentication (login/logout)
- Admin dashboard
- Service & service type management
- Reservation management
- Member management
- Employee management
- Product management
- PDF report export

> ⚠️ **Note:** This project does not yet implement route middleware. Pages such as the dashboard can currently be accessed directly via URL without requiring login. This is a known limitation and planned for future improvement.

---

## Tech Stack

![CodeIgniter](https://img.shields.io/badge/CodeIgniter-EF4223?style=flat&logo=codeigniter&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white)
![HTML](https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black)

---

## Installation

1. Clone the repository
   ```bash
   git clone https://github.com/eliisho/web-salon.git
   cd web-salon
   ```

2. Install dependencies
   ```bash
   composer install
   ```

3. Copy and configure environment file
   ```bash
   cp env .env
   ```
   Edit `.env` and fill in your database credentials:
   ```
   database.default.hostname = localhost
   database.default.database = db_elisya_salon
   database.default.username = root
   database.default.password =
   ```

4. Import the database — import the provided `.sql` file into your MySQL server via phpMyAdmin or CLI.

5. Run the application
   ```bash
   php spark serve
   ```

6. Open in browser: `http://localhost:8080`

---

## Notes

> This project was developed as a course assignment for Web Programming class (Semester 3).  
> The `.env` file and sensitive configuration are excluded from this repository.
