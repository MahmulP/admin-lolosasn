# LolosASN Admin Panel

The LolosASN Admin Panel is a web-based interface designed to manage transactions, user accounts, and tokens for the LolosASN application. This panel allows administrators to oversee and control various aspects of the application, ensuring smooth operation and security.

## Features

- **Transaction Management**: Monitor and manage all financial transactions within the platform.
- **User Account Control**: Create, update, and deactivate user accounts as needed.
- **Token Management**: Handle the issuance and validation of tokens for users.

## Prerequisites

Before you begin, ensure you have met the following requirements:

- [Composer](https://getcomposer.org/) installed on your machine.
- A web server with PHP and a database (e.g., MySQL) set up.

## Installation

Follow these steps to set up the LolosASN Admin Panel on your local machine:

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/MahmulP/admin-lolosasn.git
2. **Navigate to the Project Directory**:
   ```bash
   cd admin-lolosasn
3. **Install Dependencies**:
   ```bash
   composer install
4. **Create and Configure the Environment File**:
   Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
Open the .env file and configure your database and other settings.
5. **Generate the Application Key**:
   ```bash
   php artisan key:generate
6. **Start the Development Server**:
   ```bash
   php artisan serve
