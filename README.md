# 🍽️ Restaurant Reservation System

A modern **Restaurant Reservation System** developed with **Laravel 11**, following Laravel best practices and clean software architecture.

The project combines a responsive customer-facing restaurant website with a complete administration panel for managing restaurant operations.

It was built as a portfolio project to demonstrate professional backend development skills, clean project organization, CRUD operations, Eloquent relationships, validation, authentication, middleware, reusable Blade components and responsive UI development.

> **Project Status:** Version 1.0

---

# Features

## Customer Website

- Modern responsive landing page
- Responsive navigation bar
- Hero section with Call-to-Action buttons
- Smooth scrolling navigation
- Restaurant gallery
- Dynamic "Signature Dishes" section
- Dynamic "Our Menu" section
- Dynamic menu categories
- Dynamic menu items
- JavaScript category filtering
- Restaurant story section
- Customer testimonials
- Contact section
- Online reservation form
- Reservation form validation
- Responsive design for desktop, tablet and mobile

---

## Reservation System

Customers can

- Reserve a table online
- Enter personal information
- Select reservation date & time
- Select number of guests
- Submit reservation request
- Receive validation feedback

Reservations are stored directly in the database using Laravel.

---

# Administration Panel

Complete CRUD management for

- Categories
- Menu Items
- Restaurant Tables
- Reservations

Administrator can

- Create
- Edit
- Delete
- Update

all restaurant data through a responsive dashboard.

---

# Backend Features

- Laravel 11
- MVC Architecture
- Resource Controllers
- Route Groups
- Route Model Binding
- Eloquent ORM
- Eloquent Relationships
- Form Request Validation
- File Upload
- Image Storage
- Authentication
- Authorization
- Admin Middleware
- Session Flash Messages
- Reusable Blade Components
- Reusable Form Partials
- Clean Project Structure

---

# Frontend Features

The frontend template has been fully integrated into Laravel.

Implemented frontend features include

- Dynamic Homepage
- Dynamic Menu Categories
- Dynamic Signature Dishes
- Dynamic Menu Items
- Responsive Layout
- Blade Layouts
- Blade Components
- Smooth Navigation
- Interactive JavaScript Menu Tabs
- Responsive Navigation
- Reservation Form Integration
- Dynamic Content loaded from MySQL Database

---

# Technologies

## Backend

- Laravel 11
- PHP 8.2
- MySQL
- Eloquent ORM

## Frontend

- Blade Template Engine
- Tailwind CSS
- Alpine.js
- JavaScript
- HTML5
- CSS3

## Authentication

- Laravel Breeze

## Development

- Git
- GitHub

---

# Project Structure

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── Admin/
│   │   └── Frontend/
│   │
│   ├── Requests/
│   ├── Middleware/
│   └── Resources/
│
├── Models/
│
routes/
├── web.php
│
resources/
├── views/
│   ├── admin/
│   ├── frontend/
│   ├── layouts/
│   ├── partials/
│   └── components/
│
database/
├── migrations/
└── seeders/
```

---

# Implemented Laravel Concepts

- MVC Architecture
- Resource Controllers
- Eloquent Relationships
- Route Groups
- Route Prefixes
- Authentication
- Authorization
- Middleware
- Form Request Validation
- Blade Components
- Blade Layouts
- Partial Views
- Reusable Forms
- Session Flash Messages
- Image Upload
- Responsive Design

---

# Screenshots

## 🏠 Home Page

*(Add screenshot here)*

```
screenshots/home.png
```

---

## Hero Section

*(Add screenshot here)*

```
screenshots/hero.png
```

---

## Signature Dishes

*(Add screenshot here)*

```
screenshots/signature-dishes.png
```

---

## Dynamic Menu

*(Add screenshot here)*

```
screenshots/menu.png
```

---

## Reservation Form

*(Add screenshot here)*

```
screenshots/reservation-form.png
```

---

## Admin Dashboard

![Dashboard](screenshots/admin_dashboard.png)

---

## Categories Index

![Categories](screenshots/admin_categories.png)

---

## Categories Index (Mobile)

![Categories](screenshots/admin_categories_mobile.png)

---

## Menus Index

![Menus](screenshots/admin_menus.png)

---

## Create Menu

![Menus](screenshots/admin_menus_create.png)

---

## Create Reservation

![Reservation](screenshots/admin_reservations_create.png)

---

## Edit Reservation

![Reservation](screenshots/admin_reservations_edit.png)

---

## Tables

![Tables](screenshots/admin_tables.png)

---

## Tables (Mobile)

![Tables](screenshots/admin_tables_mobile.png)

---

# Admin Authentication

Authentication is implemented using **Laravel Breeze**.

Administrator access is protected using

- Authentication Middleware
- Custom Admin Middleware

---

# Default Admin Account

```
Email:
admin@gmail.com

Password:
123
```

---

# Installation

```bash
git clone https://github.com/your-repository.git

cd Restaurant-Reservation-System

composer install

cp .env.example .env

php artisan key:generate

php artisan migrate --seed

php artisan storage:link

npm install

npm run dev

php artisan serve
```

---

# Future Improvements

Planned features

- Reservation availability validation
- Automatic table assignment
- Reservation status workflow
- Reservation conflict detection
- Email notifications
- Search
- Filtering
- Pagination improvements
- Customer reservation history
- Online ordering system
- Payment integration

---

# About this Project

This project was developed as a portfolio project to demonstrate practical Laravel development skills including backend architecture, authentication, CRUD operations, database relationships, reusable components, responsive frontend integration and clean code organization.

The project follows Laravel best practices and is continuously improved by adding new business logic and real-world functionality.

---

# Author

**Ali Abdulhameed**

Backend Developer (Laravel)

GitHub:
https://github.com/AliAbdulhame2d

2026