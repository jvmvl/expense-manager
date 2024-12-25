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

# 🚀 100 Days Challenge: Build an Expenses and Budget Manager App

## Phase 1: Foundations (Days 1–20)
- [x] **Day 1**: 🐘 Set up Laravel and basic routing.
- [x] **Day 2**: 🕹️ Learn about controllers and create your first one.
- [x] **Day 3**: 🗄️ Set up the database and create migrations.
- [x] **Day 4**: 📝 Build the expense management model and CRUD operations.
- [ ] **Day 5**: 🔐 Set up authentication (login/register) using Laravel Breeze.
- [ ] **Day 6**: 🛡️ Learn about middleware and create custom authentication middleware.
- [ ] **Day 7**: 🏷️ Implement user roles and permissions (optional).
- [ ] **Day 8**: 🖼️ Set up Vue.js in your Laravel project.
- [ ] **Day 9**: 🧩 Learn Vue.js components and structure.
- [ ] **Day 10**: 📋 Create an expense list and add expense functionality.

<!--
- [ ] **Day 11**: ✏️ Add edit and 🗑️ delete expense features.
- [ ] **Day 12**: 🎨 Introduce Tailwind CSS and style the frontend.
- [ ] **Day 13**: ✅ Add client-side and server-side validation to forms.
- [ ] **Day 14**: 🧮 Create a budget management model and UI structure.
- [ ] **Day 15**: 💡 Learn Vue directives (`v-if`, `v-for`, `v-bind`).
- [ ] **Day 16**: 📡 Integrate Axios for API requests and handle responses.
- [ ] **Day 17**: 🧮 Implement budget logic and calculations.
- [ ] **Day 18**: 📱 Test and refine the mobile responsiveness of the app.
- [ ] **Day 19**: ⚡ Optimize database queries and use eager loading.
- [ ] **Day 20**: 🧪 Write backend unit tests for expense management.


## Phase 2: Core Features (Days 21–50)
- [ ] **Day 21**: 🧪 Write frontend unit tests for Vue.js components.
- [ ] **Day 22**: 🔍 Add expense search functionality.
- [ ] **Day 23**: 📜 Set up pagination for the expense list.
- [ ] **Day 24**: 👤 Introduce user profile settings (e.g., name, email).
- [ ] **Day 25**: 📝 Add a form to define monthly budgets.
- [ ] **Day 26**: 🔗 Link expenses to budgets.
- [ ] **Day 27**: 📊 Add progress bars for budget utilization.
- [ ] **Day 28**: 🔔 Create notifications for overspending.
- [ ] **Day 29**: 🔄 Add recurring expenses functionality.
- [ ] **Day 30**: 📊 Learn and implement Chart.js for visualizing expenses.
- [ ] **Day 31**: 📈 Create a bar chart for monthly expenses.
- [ ] **Day 32**: 🥧 Add a pie chart for category-wise expenses.
- [ ] **Day 33**: 📉 Add a line chart for expense trends over time.
- [ ] **Day 34**: 💵 Implement currency support for different regions.
- [ ] **Day 35**: 🔑 Create a "Forgot Password" feature with email recovery.
- [ ] **Day 36**: 🌐 Implement multi-language support (e.g., English, Arabic).
- [ ] **Day 37**: 🌙 Add a toggle for dark mode.
- [ ] **Day 38**: 📤 Allow data export (CSV).
- [ ] **Day 39**: 📄 Allow data export (PDF).
- [ ] **Day 40**: 🕒 Set up recurring notifications with Laravel Scheduler.
- [ ] **Day 41**: 📥 Add a feature to upload and store expense receipts.
- [ ] **Day 42**: 🎨 Enhance UI/UX based on feedback.
- [ ] **Day 43**: 🚀 Improve app performance (e.g., caching, query optimization).
- [ ] **Day 44**: 🌐 Test the app on various browsers and devices.
- [ ] **Day 45**: 🔒 Learn about Laravel policies and secure sensitive actions.
- [ ] **Day 46**: ⚠️ Perform error handling and create custom error pages.
- [ ] **Day 47**: 🧪 Write integration tests for the entire app.
- [ ] **Day 48**: 📦 Learn about and set up CI/CD pipelines.
- [ ] **Day 49**: 📝 Prepare deployment scripts and documentation.
- [ ] **Day 50**: 🌐 Deploy the app to a live server.

## Phase 3: Advanced Features and Polish (Days 51–100)
- [ ] **Day 51**: 🖼️ Set up a landing page for the app (optional).
- [ ] **Day 52**: 🏷️ Create a feature for tagging expenses.
- [ ] **Day 53**: 🎙️ Add voice commands to input expenses (optional).
- [ ] **Day 54**: 🤖 Implement AI-powered expense categorization (optional).
- [ ] **Day 55**: 📊 Create a dashboard summarizing user activity.
- [ ] **Day 56**: 🔍 Add advanced filtering for expenses (date, category, amount).
- [ ] **Day 57**: 📈 Set up analytics for app usage (optional).
- [ ] **Day 58**: 🔑 Introduce two-factor authentication for enhanced security.
- [ ] **Day 59**: 🔗 Add social media login options (Google, Facebook).
- [ ] **Day 60**: 🔧 Test and refine advanced features.
- [ ] **Day 61**: 📝 Collect user feedback and prioritize enhancements.
- [ ] **Day 62**: 🎙️ Add voice or text-based search for expenses.
- [ ] **Day 63**: 🔍 Set up logging and monitoring for backend issues.
- [ ] **Day 64**: 📦 Introduce an archive feature for old budgets.
- [ ] **Day 65**: 📅 Create a "Year in Review" summary page for expenses.
- [ ] **Day 66**: 🏆 Add gamification elements (badges, streaks).
- [ ] **Day 67**: 🐳 Learn Docker and containerize the app.
- [ ] **Day 68**: 📈 Prepare app for scalability (optional).
- [ ] **Day 69**: 🔗 Add a REST API for third-party integrations.
- [ ] **Day 70**: 📖 Write API documentation for developers.
- [ ] **Day 71**: 🔔 Introduce push notifications for reminders.
- [ ] **Day 72**: ✂️ Refactor and clean up backend code.
- [ ] **Day 73**: 🧹 Refactor and clean up frontend code.
- [ ] **Day 74**: 🧾 Perform a final UI/UX audit.
- [ ] **Day 75**: ⚡ Optimize images and assets for faster loading.
- [ ] **Day 76**: ⚙️ Add a settings page for customizable preferences.
- [ ] **Day 77**: ♿ Improve app accessibility (WCAG compliance).
- [ ] **Day 78**: 🌟 Review SEO and meta tags for the app.
- [ ] **Day 79**: ✍️ Write a blog post about the app development journey.
- [ ] **Day 80**: 🎥 Create video tutorials for app features.
- [ ] **Day 81**: 🐞 Fix bugs identified by testers or users.
- [ ] **Day 82**: 📈 Test app scalability under high loads.
- [ ] **Day 83**: ⚡ Optimize backend for faster responses.
- [ ] **Day 84**: 📉 Optimize frontend performance (lazy loading, code splitting).
- [ ] **Day 85**: 🔗 Learn GraphQL and add optional API support.
- [ ] **Day 86**: 📂 Create a public GitHub repo for the app (optional).
- [ ] **Day 87**: 📝 Add an in-app feedback form for users.
- [ ] **Day 88**: 📣 Prepare a press kit for the app launch.
- [ ] **Day 89**: 🔍 Run a final app-wide QA test.
- [ ] **Day 90**: 📌 Finalize app versioning and changelog.
- [ ] **Day 91**: 🌐 Publish the app to a public audience.
- [ ] **Day 92**: 🔎 Monitor usage and gather feedback.
- [ ] **Day 93**: ✍️ Share a reflection post on Instagram.
- [ ] **Day 94**: 🔄 Add requested features from users (if any).
- [ ] **Day 95**: 📋 Prepare a new feature roadmap for the app.
- [ ] **Day 96**: 🎉 Celebrate progress and engage your audience!
- [ ] **Day 97**: 📑 Write a detailed post-mortem report.
- [ ] **Day 98**: 🗓️ Plan future updates or new projects.
- [ ] **Day 99**: 💡 Share insights and tips learned during the challenge.
- [ ] **Day 100**: 🥳 Celebrate the journey and your accomplishment!

-->

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

Follow the journey on 📸 Instagram: [@chahir.dev](https://instagram.com/chahir.dev). Stay updated on the progress and share your feedback! 🙌