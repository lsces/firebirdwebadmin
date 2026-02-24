# FirebirdWebAdmin

**FirebirdWebAdmin** is a lightweight, powerful web-based administration tool for the Firebird database server. It provides an intuitive interface for managing databases, tables, and other database objects directly from your browser.

[![Crowdin](https://d322cqt584bo4o.cloudfront.net/firebirdwebadmin/localized.svg)](https://crowdin.com/project/firebirdwebadmin)
[![Code Climate](https://codeclimate.com/github/mariuz/firebirdwebadmin/badges/gpa.svg)](https://codeclimate.com/github/mariuz/firebirdwebadmin)
[![License: GPL v2](https://img.shields.io/badge/License-GPL%20v2-blue.svg)](https://opensource.org/licenses/GPL-2.0)
[![PHP Version](https://img.shields.io/badge/php-%3E%3D%205.5-8892bf.svg)](https://php.net)

---

## 🚀 Features

### 🛠 Database & Object Management
* **Database Operations:** Create, delete, and modify databases.
* **Schema Management:** Manage tables, views, triggers, domains, indices, and generators.
* **Business Logic:** Create and edit stored procedures and User Defined Functions (UDFs).
* **Security:** Manage database users and roles.
* **Exceptions:** Define and manage database exceptions.

### 🔍 Data Manipulation
* **SQL Console:** Execute SQL expressions and scripts with result display.
* **Data Browsing:** Browse table and view contents with real-time updates.
* **Editing:** Insert, edit, and delete data rows while browsing.
* **Blob Support:** Handle BLOB fields (display and edit contents).
* **Import/Export:** Seamlessly import and export data using CSV format.

### 📈 Administration & Maintenance
* **Maintenance:** Database backup and restore capabilities.
* **Monitoring:** Display database metadata and browse system tables.
* **Statistics:** Access database and server statistics (requires local access).
* **Maintenance Tools:** Integrated database maintenance functions.

> **Note:** Some administrative features (like backup/restore and statistics) require PHP to have access to Firebird command-line tools (`isql`, `gsec`, `gstat`, etc.) and may require the web server to run on the same machine as the database server.

---

## 📋 Requirements

* **PHP:** Version 5.5 or higher (PHP 7.x and 8.x recommended).
  * Must be compiled with `pdo_firebird` or `interbase` support.
  * `pcre` support enabled.
* **Database:** Firebird 2.x, 3.x, or 4.x.
* **Web Server:** Apache 2.x, Nginx, or any server with PHP support.
* **Operating System:** Linux (tested), Windows (compatible).

---

## ⚙️ Installation & Configuration

1. **Download:** Clone this repository or download the source code.
   ```bash
   git clone https://github.com/mariuz/firebirdwebadmin.git
   ```
2. **Web Server Setup:** Place the directory in your web server's document root (e.g., `/var/www/html/`).
3. **Configuration:**
   * Open `inc/configuration.inc.php`.
   * Configure the `BINPATH` to point to your Firebird binaries (e.g., `/usr/bin/`).
   * Set `TMPPATH` to a directory writable by the web server.
   * Adjust default connection settings if necessary.
4. **Access:** Navigate to the directory in your browser (e.g., `http://localhost/firebirdwebadmin/`).

---

## 📖 Documentation

While there is no exhaustive manual, users familiar with Firebird will find the interface intuitive.

* **Configuration:** Check `inc/configuration.inc.php` for advanced settings.
* **Ubuntu Guide:** [How to install Firebird on Ubuntu](https://help.ubuntu.com/community/Firebird3.0)
* **Firebird Official Docs:** [Firebird Documentation](https://www.firebirdsql.org/en/documentation/)

---

## 📄 ChangeLog

See [CHANGELOG.md](CHANGELOG.md) for the full history of changes.

---

## 🤝 Contributing

We welcome contributions! To contribute:

1. Fork the repository.
2. Create a feature branch (`git checkout -b feature/amazing-feature`).
3. Commit your changes (`git commit -m 'Add amazing feature'`).
4. Push to the branch (`git push origin feature/amazing-feature`).
5. Open a Pull Request.

---

## ⚖️ License

**FirebirdWebAdmin** is published under the terms of the [GNU GPL v.2](https://opensource.org/licenses/GPL-2.0).
See the `LICENSE` file for details.

© 2000-2026 Lutz Brueckner and contributors.
