# V4Edu Solution Project

A web application for NEET & JEE counselling, providing information about institutes, counsellors, packages, and support. Built with **PHP, Bootstrap 5, and MySQL**.

---

## Project Structure

```
V4EDUSCopy/
│
├─ assets/           → CSS, JS, images, fonts, and other frontend resources
├─ data/             → Database-related files or seed data
├─ in/               → Input files or temporary data
├─ includes/         → Reusable PHP components (header, footer, functions)
├─ Instute_data/     → Information about institutes
├─ views/            → Page templates (index.php, institute.php, etc.)
├─ webhooks/         → Scripts for webhook integrations
├─ .htaccess         → Apache configuration for URL rewriting, security
```

---

## Prerequisites

* **XAMPP** (Apache + MySQL + PHP)
* **PHP 7.4+** (recommended)
* **Web Browser** (Chrome, Firefox, Edge)

---

## XAMPP Installation

1. Download XAMPP from [https://www.apachefriends.org/download.html](https://www.apachefriends.org/download.html).
2. Install XAMPP on your system (default path: `C:\xampp`).
3. Open **XAMPP Control Panel** and start **Apache** and **MySQL**.
4. Make sure ports 80 (Apache) and 3306 (MySQL) are free.

---

## How to Run the Project

1. Copy the project folder `V4EDUSCopy` to your XAMPP `htdocs` directory:

```
C:\xampp\htdocs\V4EDUSCopy
```

2. Open your browser and navigate to:

```
http://localhost/V4EDUSCopy/views/index.php
```

3. If the project uses a **database**:

   * Open **phpMyAdmin**: [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   * Create a database, e.g., `v4edus_db`
   * Import any SQL file from the `data/` folder.
   * Update database credentials in your project (usually in `includes/config.php`).

---

## Folder Description

* `assets/` → Contains **CSS, JS, images, fonts**
* `data/` → Sample database dumps, CSV, or JSON files
* `in/` → Input files for processing
* `includes/` → Reusable **header, footer, DB connection, functions**
* `Instute_data/` → Institute-specific data files
* `views/` → Main **PHP pages** for the website
* `webhooks/` → Webhook listener scripts
* `.htaccess` → Apache configurations (friendly URLs, security)

---

## Development Notes

* Ensure **mod_rewrite** is enabled in Apache for `.htaccess` to work.
* Use **Bootstrap 5** classes for responsive UI.
* All images are stored in `assets/images`.
* Recommended editor: **VS Code** with PHP and Live Server extensions.

---

## Contact / Support

For issues or contributions, please contact:
**Email:** [support@v4edusolution.com](mailto:support@v4edusolution.com)
