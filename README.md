# <div align="center"> 🛍️ Mini E-commerce (Laravel + Livewire) </div>

Mini e-commerce built with **Laravel**, **Livewire**, and **TailwindCSS** for a technical challenge.

---

## 🚀 Manual Installation

```bash
git clone https://github.com/mariajtik/mini-ecommerce.git
cd mini-ecommerce
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve

```
Access the app at: http://localhost:8000

## 🐳 Docker Installation
docker-compose up -d
docker-compose exec app php artisan migrate --seed

## 👤 Test Credentials
<table width="30%">
  <tr>
<th> Email </th>	<th> Password </th>
<td>user@example.com</td>
	<td>password</td>
  
  </tr>
</table>


## ⚙️ Tech Stack

*Laravel 11.x*

*Livewire 3*

*TailwindCSS*

*SQLite*

*Docker*

## 🧩 Features

✅ Product listing and search
 <br></br>
✅ Product detail page
 <br></br>
✅ Dynamic shopping cart
<br></br>
✅ Simulated checkout
<br></br>
✅ User authentication (Laravel Breeze)
<br></br>
✅ Image upload and display
<br></br>
✅ Docker-ready environment

---

## 🧠 Technical Decisions

**Livewire** chosen for reactivity without complex JavaScript.

**TailwindCSS** used for a modern, responsive UI.

**SQLite** selected for ease of setup in any environment.

**Factories** and **seeders** ensure quick database population.

**Docker** standardizes the execution environment.

---

## 📂 Project Structure
**app/**
<br></br>
 ├── Http/Livewire
 <br></br>
 ├── Models
 <br></br>
 └── Controllers
 <br></br>
**database/**
<br></br>
 ├── factories
 <br></br>
 ├── migrations
 <br></br>
 └── seeders
 <br></br>
**resources/views/**
<br></br>
 ├── layouts
 <br></br>
 ├── livewire
 <br></br>
 └── product
 
---
 ## 🪪 License

This project is licensed under the MIT License.

Made with 💙 by [Mariajtik](https://github.com/Mariajtik)
