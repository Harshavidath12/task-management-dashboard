# TaskFlow - Task Management Dashboard

A premium, full-stack Task Management Dashboard built to demonstrate clean architecture, RESTful API design, and a responsive, glassmorphism UI.

![TaskFlow Dashboard Preview](https://via.placeholder.com/1000x500.png?text=TaskFlow+Dashboard+Preview) *(Replace with actual screenshot if desired)*

## 🚀 Features
- **Kanban Board Interface**: Manage tasks across 'Pending', 'In Progress', and 'Completed' columns.
- **Optimistic UI Updates**: Instant frontend updates before the server responds for a snappy user experience.
- **RESTful API**: A robust Laravel 11 backend handling all data persistence and validation.
- **Responsive Design**: Beautiful glassmorphism UI that looks great on both desktop and mobile devices.
- **Real-time Search**: Instantly filter tasks by title.

## 🛠️ Tech Stack
- **Frontend**: HTML5, Alpine.js (State Management), Tailwind CSS (Styling)
- **Backend**: Laravel 11 (PHP 8.2+)
- **Database**: SQLite (Zero-configuration database)

---

## 💻 Local Setup Instructions

Follow these instructions to get the project running on your local machine.

### Prerequisites
Make sure you have the following installed:
- [PHP 8.2+](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/)

### 1. Backend Setup (Laravel API)

1. Open your terminal and navigate to the backend directory:
   ```bash
   cd Backend
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Set up your environment file:
   ```bash
   cp .env.example .env
   ```

4. Generate the application key:
   ```bash
   php artisan key:generate
   ```

5. Run database migrations and seeders (This will create an SQLite database and populate it with dummy tasks):
   ```bash
   php artisan migrate --seed
   ```

6. Start the Laravel development server:
   ```bash
   php artisan serve
   ```
   *The API will now be running at `http://localhost:8000`*

### 2. Frontend Setup (Alpine.js + Tailwind)

Because the frontend is a lightweight Single Page Application (SPA) using CDN links, there is **no build step or `npm install` required!**

1. Simply open the `Frontend` folder.
2. Double-click the `index.html` file to open it in your browser.
   *(Alternatively, use an extension like **Live Server** in VS Code for hot-reloading: Right-click `index.html` -> Open with Live Server).*

### 3. Usage
- Ensure the backend server (`php artisan serve`) is running in the background.
- Open the frontend in your browser. 
- You can now add, move, and delete tasks. All changes will be securely saved to the SQLite database via the API!

---

## 📂 Directory Structure Highlights

- `Backend/app/Models/Task.php` - Eloquent model containing status definitions.
- `Backend/app/Http/Controllers/Api/TaskController.php` - RESTful controller handling CRUD operations.
- `Frontend/index.html` - The entire frontend interface and Alpine.js state management.

<br>
<p align="center">
  <i>Designed and developed by Vidath Harshitha</i>
</p>
