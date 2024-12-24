# 💰 Expense Manager

**Expense Manager** is a 🌐 web application built with 🐘 Laravel and 🖼️ Vue.js to help users 🧾 track expenses and 📊 manage budgets effectively. This project aims to combine simplicity with powerful features for efficient financial management.

---

## ✨ Features

- 🔐 **User Authentication**: Secure registration and login system.
- ➕➖✏️ **Expense Management**: Add, edit, and delete expenses with ease.
- 🗓️ **Budget Planning**: Set and manage monthly budgets.
- 📉📈 **Data Visualization**: Interactive charts for tracking expenses.
- 🔔 **Notifications**: Alerts for overspending.
- 📤 **Data Export**: Export expense data as CSV or PDF.
- 📱 **Responsive Design**: Optimized for mobile devices.

---

## 🛠️ Tech Stack

- **Backend**: 🐘 Laravel
- **Frontend**: 🖼️ Vue.js
- **Styling**: 🎨 Tailwind CSS
- **Database**: 🗄️ MySQL

---

## ⚙️ Project Setup

### 🔑 Prerequisites

- 🐘 PHP 8.1 or higher
- 📦 Composer
- ⚡ Node.js and npm
- 🗄️ MySQL

### 🛠️ Installation Steps

1. 📥 Clone the repository:

   ```bash
   git clone https://github.com/jvmvl/expense-manager.git
   cd expense-manager
   ```

2. ⚙️ Install PHP dependencies:

   ```bash
   composer install
   ```

3. 🛠️ Set up environment variables:

   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Update 🗄️ database credentials in `.env`.

4. 🔑 Generate the application key:

   ```bash
   php artisan key:generate
   ```

5. 📦 Install JavaScript dependencies:

   ```bash
   npm install
   ```

6. 🔄 Run database migrations:

   ```bash
   php artisan migrate
   ```

7. 🚀 Start the development server:

   ```bash
   php artisan serve
   ```

---

## 🗺️ Roadmap

- [x] **Day 1**: Set up 🐘 Laravel and basic routing.
- [ ] **Day 2**: Learn about 🕹️ controllers and create your first controller.
- [ ] **Day 3**: Set up 🗄️ database and migrations.
- [ ] **Day 4**: Build the expense management model and CRUD operations.
- [ ] **Day 5**: Introduce 🔐 authentication (login/register).
- [ ] **Day 6**: Implement basic frontend with 🖼️ Vue.js.
- [ ] **Day 7**: Learn Vue.js 🧩 components and structure.
- [ ] **Day 8**: Create 📝 expense list and add expense functionality.
- [ ] **Day 9**: Implement ✏️ edit and 🗑️ delete expense features.
- [ ] **Day 10**: Set up budget management logic and 🎨 UI.
- [ ] **Day 11**: Add ✅ validation to forms (backend and frontend).
- [ ] **Day 12**: Integrate 🎨 Tailwind CSS for styling.
- [ ] **Day 13**: Create 📊 charts for visualizing expenses.
- [ ] **Day 14**: Set up 🔔 notifications for overspending.
- [ ] **Day 15**: Allow data export (📤 CSV or 📄 PDF).
- [ ] **Day 16**: Enhance the 🎨 UI/UX design.
- [ ] **Day 17**: Add 📜 pagination to expense list.
- [ ] **Day 18**: Optimize 🗄️ database queries.
- [ ] **Day 19**: Test app on 📱 mobile devices.
- [ ] **Day 20**: Write 🧪 unit tests for the backend.
- [ ] **Day 21**: Write 🧪 unit tests for the frontend.
- [ ] **Day 22**: Prepare for 🚀 deployment (Laravel Forge or similar).
- [ ] **Day 23**: Deploy the app to a 🌐 live server.
- [ ] **Day 24-100**: Add advanced features, 🐞 bug fixes, and ✨ enhancements based on feedback.

---

## 🤝 How to Contribute

1. 🍴 Fork the repository.
2. Create your 🔀 feature branch:
   ```bash
   git checkout -b feature/<feature-name>
   ```
3. 💾 Commit your changes:
   ```bash
   git commit -m "Add <description of changes>"
   ```
4. 📤 Push to the branch:
   ```bash
   git push origin feature/<feature-name>
   ```
5. 🔃 Open a pull request.

---

## 📜 License

This project is licensed under the 📝 [MIT license](https://opensource.org/licenses/MIT).

---

## 📡 Connect

Follow the journey on 📸 Instagram: [@jvmvl](https://instagram.com/jvmvl). Stay updated on the progress and share your feedback! 🙌