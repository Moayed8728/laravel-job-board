# 🚀 Laravel Job Board & Blog Platform

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12-red?style=for-the-badge&logo=laravel" />
  <img src="https://img.shields.io/badge/PHP-8.2-blue?style=for-the-badge&logo=php" />
  <img src="https://img.shields.io/badge/MySQL-Database-orange?style=for-the-badge&logo=mysql" />
  <img src="https://img.shields.io/badge/JWT-Authentication-green?style=for-the-badge" />
</p>

<p align="center">
A modern Laravel 12 application that combines a <strong>Job Board</strong>, <strong>Blog Management System</strong>, and <strong>Role-Based Authentication</strong> into one scalable platform.
</p>

---

# 📌 Overview

This project was developed using **Laravel 12** with a clean MVC architecture and secure authentication workflows.  
The system demonstrates backend engineering concepts such as:

- Authentication & Authorization
- Role-Based Access Control (RBAC)
- CRUD Operations
- Middleware Security
- Route Protection
- Policy-Based Authorization
- RESTful Resource Management
- Database Relationships
- Scalable Laravel Architecture

The platform is designed to simulate a real-world production-ready backend system while maintaining clean and maintainable code.

---

# ✨ Key Features

## 🔐 Authentication System
- User Signup & Login
- Secure Session Authentication
- JWT Authentication Support
- Logout Functionality
- Protected Routes

## 👥 Role-Based Access Control
The system supports multiple user roles:

| Role | Permissions |
|------|-------------|
| Viewer | View blog posts & comments |
| Editor | Create & edit blog posts |
| Admin | Full system control including deletion |

### Security Layers Used
- Laravel Middleware
- Policies (`can:update`)
- Custom Role Middleware
- Route Protection
- Authorization Checks

---

# 📰 Blog Management Module

## Features
- Create Blog Posts
- Edit Existing Posts
- Delete Posts
- View Individual Posts
- Comment System
- Tag Management
- Resource Controllers

## Technologies Used
- Eloquent ORM
- Resource Routing
- MVC Pattern
- Laravel Policies
- Middleware Authorization

---

# 💼 Job Board Module

The project also includes a job listing section that demonstrates:

- Job Listing Pages
- Dynamic Route Handling
- Controller-Based Rendering
- Structured Application Flow

---

# 🏗️ System Architecture

The project follows Laravel’s MVC architecture:

```text
Client Request
      ↓
Routes (web.php)
      ↓
Controllers
      ↓
Services / Business Logic
      ↓
Models (Eloquent ORM)
      ↓
Database
```

### Main Architectural Principles
- Separation of Concerns
- Reusable Components
- Clean Route Organization
- Scalable Structure
- Security-First Development

---

# 🛠️ Tech Stack

| Technology | Purpose |
|------------|---------|
| Laravel 12 | Backend Framework |
| PHP 8.2+ | Server Language |
| MySQL / SQLite | Database |
| JWT Auth | Token Authentication |
| Blade | Frontend Rendering |
| Vite | Frontend Asset Bundling |
| Eloquent ORM | Database ORM |

---

# 📂 Project Structure

```bash
app/
 ├── Http/
 │    ├── Controllers/
 │    ├── Middleware/
 │    └── Requests/
 ├── Models/
 └── Policies/

routes/
 └── web.php

resources/
 └── views/

database/
 ├── migrations/
 └── seeders/
```

---

# 🔒 Security Implementation

This project demonstrates multiple backend security concepts:

## Authorization
- Middleware-based access control
- Policy authorization
- Role verification

## Route Protection
```php
Route::middleware('auth')->group(function () {
    // Protected routes
});
```

## Policy Authorization
```php
->can('update', 'post')
```

## Role Middleware
```php
Route::middleware('role:admin')
```

---

# ⚡ Installation Guide

## 1️⃣ Clone Repository

```bash
git clone https://github.com/your-username/laravel-job-board.git
```

## 2️⃣ Navigate Into Project

```bash
cd laravel-job-board
```

## 3️⃣ Install Dependencies

```bash
composer install
npm install
```

## 4️⃣ Configure Environment

```bash
cp .env.example .env
```

Then update database credentials inside `.env`.

---

## 5️⃣ Generate Application Key

```bash
php artisan key:generate
```

---

## 6️⃣ Run Migrations

```bash
php artisan migrate
```

---

## 7️⃣ Start Development Server

```bash
php artisan serve
npm run dev
```

Application will run on:

```bash
http://127.0.0.1:8000
```

---

# 📖 Example Protected Route Flow

```php
Route::middleware('auth')->group(function () {

    Route::middleware('role:admin')->group(function () {
        Route::delete('/blog/{post}', [PostController::class,'destroy']);
    });

});
```

This demonstrates:
- Authentication protection
- Role authorization
- Secure route access
- Permission-based actions

---

# 🧠 Backend Engineering Concepts Demonstrated

- MVC Architecture
- RESTful APIs
- Authentication & Authorization
- Middleware Pipelines
- Laravel Policies
- Route Model Binding
- Eloquent Relationships
- Secure CRUD Operations
- Resource Controllers
- Application Scalability

---

# 🎯 Why This Project Matters

This project showcases practical backend engineering skills commonly used in modern software development environments:

✅ Secure Laravel Architecture  
✅ Real-World Authorization Logic  
✅ Clean Code Organization  
✅ Scalable Backend Structure  
✅ Production-Oriented Development Practices  

It reflects the ability to design and implement maintainable backend systems using Laravel best practices.

---

# 👨‍💻 Developer

**Moayed Mohamed**

- Backend Developer
- Laravel Developer
- Software Engineering Student

GitHub:
👉 https://github.com/Moayed8728

---

# 📜 License

This project is open-source and available under the MIT License.
