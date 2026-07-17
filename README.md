
# 📝 Visitor Registration & Management System

[![Live Demo](https://img.shields.io/badge/Demo-Live_Website-blue?style=for-the-badge&logo=google-chrome&logoColor=white)](http://visitor-registration.infinityfreeapp.com)
[![PHP](https://img.shields.io/badge/PHP-7.4%20%7C%208.x-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![JavaScript](https://img.shields.io/badge/JavaScript-ES6%2B-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)

A fully integrated, professional web application designed to manage and track visitor logs in real-time. This project features a modern Single Page Application (SPA) architecture, utilizing asynchronous AJAX requests to handle data insertion and status toggling instantly without any full-page reloads, ensuring an incredibly smooth and responsive user experience (UX).

---

## 🚀 Key Features

* Real-time Data Insertion: Register new visitors and dynamically render them to the dashboard immediately using the Fetch API (AJAX).
* Instant Binary Toggle: Seamlessly toggle the status of any visitor (Active 1 / Inactive `0`) with an instant reactive DOM update.
* Responsive Dashboard UI: Beautiful, minimalist, and responsive front-end design optimized for desktops, tablets, and smartphones.
* Secure Database Connection: Powered by a robust cloud-hosted MySQL database driven by PHP PDO prepared statements to secure query execution.
* Clean MVC/Functional Separation: Strict decoupling of backend logic (`PHP` processing) from front-end presentation (`HTML`/`CSS`/`JS`).

---

## 🛠️ Tech Stack

* Frontend:
  * <img src="https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white" /> - Semantic markup for forms, controls, and log tables.
  * <img src="https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white" /> - High-contrast styling, layouts, hover animations, and custom transitions.
  * <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black" /> - Fetch API (AJAX) integration for handling background server transactions.

* Backend & Database:
  * <img src="https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white" /> - Server-side rendering, request routing, and payload validation.
  * <img src="https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white" /> - Structured relational storage to house stable visitor entity logs.

---

## 📂 Project Architecture & Files

The project consists of the following modular files:

```bash
├── config.php       # Established PDO Secure Database Connection
├── index.php        # Primary User Interface Dashboard (Interactive Form & Visitors Table)
├── insert.php       # Backend Endpoint: Processes & inserts new visitor entries
├── fetch.php        # Backend Endpoint: Retreives and returns all visitor rows asynchronously
├── toggle.php       # Backend Endpoint: Executes instant binary state switching (0 / 1)
├── style.css        # Clean UI Layout & Styling configurations
├── script.js        # Dynamic DOM event listeners, API requests, and frontend state controller
└── database.sql     # Database Table Schema query scripts
