# ONLINE BLOOD BANK MANAGEMENT SYSTEM

A web-based blood bank management system built with PHP, MySQL, and JavaScript. The system connects blood donors, recipients, hospitals, and administrators through a centralized platform.

## Features

### Role-Based Access
- **Admin** — Full system control, user/staff/hospital management, feedback review, reports
- **Staff** — Manage donors, appointments, blood inventory, hospital requests
- **Hospital** — Submit blood requests, view availability
- **User** — Register, donate, view account, submit feedback

### Core Modules
- Donor registration and management
- Blood inventory tracking
- Hospital blood request management
- Appointment scheduling
- Feedback system
- Report generation
- Profile management with photo upload

## Tech Stack

| Component | Technology |
|-----------|------------|
| Backend | PHP 8+ (PDO) |
| Database | MySQL / MariaDB |
| Frontend | HTML5, CSS3, JavaScript |
| Icons | Font Awesome 6, Material Icons |
| Styling | Bootstrap, Custom CSS |

## Installation

### Requirements
- PHP 8.0 or higher
- MySQL 5.7+ or MariaDB 10+
- Web server (Apache / Nginx / PHP built-in)

### Setup

```bash
# Clone the repository
git clone https://github.com/abnormal-yi/ONLINE-BLOOD-BANK-MANAGEMENT-SYSTEM.git

# Import the database
mysql -u root -p < obbms.sql

# Update database credentials in:
# - config/db_connection.php
# - Admin/config/db_admin_connection.php
# - staff/config/db_staff_connection.php
# - newuser/config/db_connection.php

# Start development server
php -S localhost:8080
```

### Database Configuration
Edit the config files to match your database setup:

```php
$servername = "your_host";
$dbname = "your_database";
$username = "your_username";
$password = "your_password";
```

## Default Credentials

| Role | Email | Password |
|------|-------|----------|
| Admin | valexinjr75@gmail.com | admin |
| Staff | gstaff@gmail.com | killler |
| User | antomrisho@gmail.com | (user provided) |
| Hospital | Hospkilea@gmail.com | HospIklers |

## Project Structure

```
├── Admin/              # Admin dashboard
├── config/             # Database configuration
├── css/                # Stylesheets
├── images/             # Image assets
├── js/                 # JavaScript files
├── staff/              # Staff dashboard
├── newuser/            # User portal
├── uploads/            # User uploaded files
├── index.php           # Landing page
├── login.php           # Unified login
├── logout.php          # Session logout
├── useraccount.php     # User profile
└── obbms.sql           # Database dump
```

## Security

- All database queries use PDO prepared statements
- Error reporting is disabled in production
- Session-based authentication with role verification
- Profile uploads restricted to image types only

## License

This project is open source. Feel free to use and modify.
