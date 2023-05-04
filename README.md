# Laravel Livewire Task Manager

This is a task management web application built with Laravel and Livewire.

## Requirements

To run this project, you must have the following installed:

- PHP
- Composer

## How to Run

1. Clone the repository to your local machine using the command: `git clone https://github.com/Mehdi-Belajouza/Laravel_Livewire_Task_Manager`.
2. Run `composer install` to install the required dependencies.
3. Copy the `.env.example` file to `.env`.
4. Run `php artisan key:generate` to generate the application key.
5. Set up the database connection details for `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` in the `.env` file.
6. Run `php artisan migrate` to run the database migrations.
7. (Optional) Seed the database with default data by running `php artisan db:seed`.
8. Run `php artisan serve` to start the development server.
9. Visit http://localhost:8000 in your browser to view the application.
