# EventosApp

😄 **Welcome to _EventosApp_!** 🎉

An elegant Laravel-based web application for creating, browsing, and managing events with ease. Whether you're organizing a meetup or planning a conference, _EventosApp_ has got you covered!

---

## 🎯 Goals & Objectives

- 🗓️ Build a comprehensive events management platform  
- 💪 Showcase Laravel MVC, Eloquent ORM, and Blade templating  
- 🎨 Implement responsive UI with Tailwind CSS and Vite  
- 🔐 Provide secure user authentication and authorization  

---

## ✨ Key Features

- 🔑 **User Authentication** (Laravel Breeze)  
- 📝 **Event CRUD** – Create, Read, Update, Delete events  
- 🔍 **Search & Filter** – Find events by date, category, or location  
- 🎟️ **RSVP/Registration** for attendees  
- 📧 **Email Notifications** for event updates and reminders  
- 📊 **Admin Dashboard** for managing users and events  
- 📱 **Responsive Design** – Mobile-first using Tailwind CSS  

---

## 🚀 Technologies & Tools Used

- **Backend:** PHP 8.2 & Laravel 12.x  
- **Frontend:** Blade, Tailwind CSS, Vite  
- **Database:** MySQL (or SQLite for local development)  
- **Dev Environment:** Laravel Sail (Docker)  
- **Authentication:** Laravel Breeze  
- **Testing:** PHPUnit  
- **Dependencies Management:** Composer & NPM  

---

## 🔧 Prerequisites

- PHP ≥ 8.2  
- Composer  
- Node.js & NPM  
- Docker & Docker Compose (if using Laravel Sail)  
- Git  

---

## 🛠️ Installation & Setup

```bash
# 1. Clone the repository
git clone https://github.com/AndresLapSol/EventosApp.git
cd EventosApp

# 2. Copy & configure environment
cp .env.example .env
composer install
npm install

# 3. Build assets
npm run dev

# 4. Generate app key & run migrations
php artisan key:generate
php artisan migrate --seed
```

---

## 💻 How to Run & Test

1. **Start the development server**  
   ```bash
   php artisan serve
   ```
2. **Access the app** at `http://127.0.0.1:8000`  
3. **Run tests**  
   ```bash
   php artisan test
   ```

---

## 📂 Project Folder Structure

```
eventosapp/
├─ app/                 # Application core (Controllers, Models, Policies)
├─ bootstrap/           # Bootstrapping files
├─ config/              # Configuration files
├─ database/            # Migrations, seeders, factories
├─ public/              # Public assets (entry point)
├─ resources/           # Views (Blade), assets (Sass, JS)
├─ routes/              # Route definitions
├─ storage/             # Logs and compiled views
├─ tests/               # Automated tests
├─ .env.example         # Environment variables template
├─ artisan              # Artisan CLI
├─ composer.json        # PHP dependencies
├─ package.json         # JS dependencies
├─ tailwind.config.js   # Tailwind CSS config
├─ vite.config.js       # Vite build config
└─ phpunit.xml          # PHPUnit config
```

---

## 🤝 Contributing

We welcome your contributions! Please follow these steps:

1. 🍴 **Fork** the repo  
2. 🔀 **Create** a branch: `git checkout -b feature/YourFeature`  
3. 💡 **Commit** your changes: `git commit -m "Add new feature"`  
4. 🚀 **Push** to origin: `git push origin feature/YourFeature`  
5. 📬 **Open a Pull Request** and describe your changes  

---

## ⚖️ License

This project is licensed under the **MIT License**. See the [LICENSE](LICENSE) file for details.

---

## 📫 Contact

- GitHub: [@AndresLapSol](https://github.com/AndresLapSol)  
- Email: andreslapsol@gmail.com
