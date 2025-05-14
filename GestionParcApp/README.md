# GestionParcApp

## Project Overview

This application was developed during my internship at **Veolia (Amendis)**.
It is designed to manage a fleet of resources, specifically focusing on the management of employees (employers) and materials (materiels) within the company. The app allows you to add, edit, view, and delete both employees and materials, and link materials to specific employees.

## Features

- Manage a list of employees (Employers)
- Manage a list of materials (Materiels)
- Assign materials to employees
- Built with Laravel 11, Vue 3, Inertia.js, and Tailwind CSS

## How to Run the Project

1. **Clone the repository**
   ```bash
   git clone https://github.com/zarr14/stage-vieolia.git
   
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Copy the example environment file and set your variables**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   - Edit `.env` to set your database connection (SQLite, MySQL, etc.)

5. **Run migrations and seeders**
   ```bash
   php artisan migrate --seed
   ```
   This will create the tables and populate them with **example demo data** for Employers, Materiels, and a default user.

6. **Start the development server**
   ```bash
   php artisan serve
   ```

7. **(Optional) Start the frontend dev server**
   ```bash
   npm run dev
   ```

## Demo Data

- The project uses **example/demo data** for Employers and Materiels . 


## Notes

- The original database with Veolia/Amendis data is **not included** for privacy reasons.
- You can modify the seeders in `database/seeders/` to add your own data.
