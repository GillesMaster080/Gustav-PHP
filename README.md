
# Gustav PHP

[![tests](https://github.com/GILLESMaster/Gustav-PHP/actions/workflows/tests.yml/badge.svg)](https://github.com/GILLESMaster/Gustav-PHP/actions/workflows/tests.yml)
[![GitHub last commit](https://img.shields.io/github/last-commit/GILLESMaster/Gustav-PHP.svg)](https://github.com/GILLESMaster/Gustav-PHP/commits/main)
[![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/GILLESMaster/Gustav-PHP/blob/main/LICENSE)
[![StyleCI](https://styleci.io/repos/644866261/shield)](https://styleci.io/repos/644866261)

Gustav PHP is a web database API built on the Laravel framework with a Vite and Livewire powered frontend. It provides an easy and clean way for developers to integrate database features with simple HTTP requests and API keys.

## Features

- Laravel framework for server-side functionality.
- Vite for fast and efficient frontend development.
- Built-in support for common web application features.
- Easy-to-use and well-documented codebase.

## Installation

Before proceeding with the installation, please ensure that you have the following prerequisites installed:

- [![PHP](https://img.shields.io/badge/-PHP-777BB4?logo=php&logoColor=white)](https://www.php.net/) ^8.2.x
- [![Node.js](https://img.shields.io/badge/-Node.js-339933?logo=node.js&logoColor=white)](https://nodejs.org/) ^v18.16.x

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

- [![Laravel](https://img.shields.io/badge/-Laravel-FF2D20?logo=laravel&logoColor=white)](https://laravel.com/)
- [![Vite](https://img.shields.io/badge/-Vite-646CFF?logo=vite&logoColor=white)](https://vitejs.dev/)
- [![Livewire](https://img.shields.io/badge/-Livewire-0769AD?logo=livewire&logoColor=white)](https://laravel-livewire.com/)

