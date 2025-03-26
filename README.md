



# 📌 Laravel & Tailwind CSS To-Do List

A simple and clean To-Do List application built with **Laravel** and **Tailwind CSS**. 🚀

---

## 🔧 Installation & Setup

### 1️⃣ Clone the Repository
```bash
git clone https://github.com/your-username/todo-list.git
cd todo-list
```

### 2️⃣ Install Dependencies
```bash
composer install
npm install
```

### 3️⃣ Configure Environment
- Copy the `.env.example` file and rename it to `.env`
```bash
cp .env.example .env
```
- Generate the application key:
```bash
php artisan key:generate
```
- Set up your **database** in the `.env` file.

### 4️⃣ Run Database Migrations
```bash
php artisan migrate
```

### 5️⃣ Run the Application
```bash
php artisan serve
```
Then visit `http://127.0.0.1:8000` in your browser. 🎉

---

## 🎨 Features
✅ Add new tasks  
✅ Mark tasks as completed  
✅ Delete tasks  
✅ Responsive design with Tailwind CSS  

---

## 🏗 Tech Stack
- **Laravel 10** (Backend)
- **Tailwind CSS** (Styling)
- **MySQL / SQLite** (Database)
- **Blade Templates** (Frontend)

---

## 📜 Routes
| Method | URI | Description |
|--------|----------------|-------------|
| GET | `/` | Show all tasks |
| POST | `/tasks` | Add a new task |
| PUT | `/tasks/{id}` | Update a task |
| DELETE | `/tasks/{id}` | Delete a task |

---

## 📸 Screenshots
_Add some screenshots of your project here._

---

## 📌 License
This project is open-source and free to use. 🚀

