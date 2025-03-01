<p align="center"> 
    <img src="https://raw.githubusercontent.com/shoaibshams/expense-tracker/main/readme-logo.png?sanitize=true" height="100">
</p>
<p align="center">
    <a href="https://github.com/shoaibshams/expense-tracker/graphs/contributors">
        <img src="https://img.shields.io/github/contributors/shoaibshams/expense-tracker" />
    </a>
    <a href="https://opensource.org/licenses/MIT">
        <img src="https://img.shields.io/badge/License-MIT-green.svg" />
    </a>
</p>

# Expense Tracker
## Description
Expense Tracker is designed to assist you in meticulously monitoring your personal finances. Built with Laravel and Livewire, it empowers you to effortlessly record and oversee your expenses, classify them by account type (such as cash or bank), and generate insightful reports to gain valuable insights into your financial habits and trends.

## Screenshots

![Dashboard](https://github.com/Hasen38/expense_tracker/blob/main/expense1.png)
![accounts](https://github.com/Hasen38/expense_tracker/blob/main/expense2.png)
![categories](https://github.com/Hasen38/expense_tracker/blob/main/expense3.png)
![transactions](https://github.com/Hasen38/expense_tracker/blob/main/expense4.png)
![calendar-view](https://github.com/Hasen38/expense_tracker/blob/main/expense5.png)


## Features

* Dashboard
  * Monthly and weekly summary charts
  * Summary of Accounts (Opening balance, Income, Expense, Current Balance)
  * Yearly breakdown of income and expenses, organized by month
* Multiple accounts
  * Support for multiple account types, including Cash, Bank, and more
* Categories
  * Income & Expense categories
* Reporting
  * Detailed Accounts Ledger
  * Transaction Reports with Customizable Category Filters and More

## Installation
```bash
# Clone the repository
git clone https://github.com/shoaibshams/expense-tracker.git

# Change the directory
cd expense-tracker

# Install dependencies
composer install

# Create a copy of .env file
cp .env.example .env

# Generate application key
php artisan key:generate

# Create a database and update .env file with database credentials
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=expense_tracker
DB_USERNAME=root
DB_PASSWORD=

# Run database migrations and seeders
php artisan migrate --seed

# Start the local development server
php artisan serve
```

You should now be able to access the project at http://localhost:8000.

## Credentials
**Email:** admin@admin.com

**Password:** password

## Usage

To begin using the Expense Tracker, simply log in using the following credentials:

**Email:** admin@admin.com

**Password:** password

After logging in, you can start adding accounts, categories, income, and expenses.

# Contributing

Contributions are **welcome** and will be fully **credited**.

Please read and understand the contribution guide before creating an issue or pull request.

## Procedure

Before filing an issue:

- Attempt to replicate the problem, to ensure that it wasn't a coincidental incident.
- Check to make sure your feature suggestion isn't already present within the project.
- Check the pull requests tab to ensure that the bug doesn't have a fix in progress.
- Check the pull requests tab to ensure that the feature isn't already in progress.

Before submitting a pull request:

- Check the codebase to ensure that your feature doesn't already exist.
- Check the pull requests to ensure that another person hasn't already submitted the feature or fix.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
