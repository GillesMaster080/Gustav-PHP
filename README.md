
# Gustav PHP

[![GitHub last commit](https://img.shields.io/github/last-commit/GILLESMaster/Gustav-PHP.svg)](https://github.com/GILLESMaster/Gustav-PHP/commits/main)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/GILLESMaster/Gustav-PHP/blob/main/LICENSE)
[![CodeFactor](https://www.codefactor.io/repository/github/gillesmaster/gustav-php/badge)](https://www.codefactor.io/repository/github/gillesmaster/gustav-php)

Gustav PHP is a web database API built on the Laravel framework with a Vite-powered frontend. It provides an easy and clean way for developers to integrate database features with simple HTTP requests.

## Features

- Laravel framework for server-side functionality.
- Vite for fast and efficient frontend development.
- Built-in support for common web application features.
- Easy-to-use and well-documented codebase.

## Installation

Before proceeding with the installation, please ensure that you have the following prerequisites installed:

- PHP 8.x.x
- Node.js v18.x.x

1. Clone the repository:

   ```shell
   git clone https://github.com/GILLESMaster/Gustav-PHP.git
   ```

2. Install dependencies:

   ```shell
   composer install
   npm install
   ```

3. Configure the environment variables:

   ```shell
   cp .env.example .env
   php artisan key:generate
   ```

4. Run database migrations and seeders:

   ```shell
   php artisan migrate --seed
   ```

5. Build frontend assets:

   ```shell
   npm run dev
   ```

6. Start the development server:

   ```shell
   php artisan serve
   ```

## Usage

- Access the application in your browser at `http://localhost:8000`.
- Use the provided login credentials or create a new account.
- Explore the application and its features.

## Contributing

Contributions are welcome! If you encounter any bugs or have suggestions for improvements, please [open an issue](https://github.com/GILLESMaster/Gustav-PHP/issues) or submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE).

## Acknowledgements

This project utilizes the following open-source libraries and frameworks:

- [Laravel](https://laravel.com)
- [Vite](https://vitejs.dev)


This is my current setup. Please note that atleast PHP 8.2.x and Node.js v18.16.x or higher must be installed before proceeding with the installation.
