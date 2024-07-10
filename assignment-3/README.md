# Anonymous Feedback Application

## Description

This project is a simple, minimal 'Anonymous Feedback Application'. The application allows users to register and receive a unique shareable link to collect feedback from others. The user can see the feedback received on their dashboard. This project **does not use a database but instead uses files** to store all kinds of data.

## Features

- User registration
- User login
- Dashboard view for logged-in users
- Unique shareable feedback link for each registered user
- Ability to submit feedback without logging in
- Data storage using files

## Technologies Used

- PHP
- HTML
- CSS (Tailwind CSS)

## Requirements

- PHP 7.0 or higher
- Web server (e.g., Apache, Nginx)

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/abualmueid/laravel-career-path.git
   cd assignment-3

2. Start the PHP built-in server: 
   ```bash
   php -S localhost:8000

3. Access the application:

Open your web browser and go to http://localhost:8000.

# Usage
1. Register a new user:

   - Navigate to the registration page.
   - Fill in the required details (name, email, password, confirm password).
   - Submit the form to register.
2. Login:

   - Navigate to the login page.
   - Enter your email and password.
   - Submit the form to login.

3. Dashboard:

   - After logging in, you will be redirected to your dashboard.
   - You can view the feedback you have received.
4. Share feedback link:

   - Copy the unique feedback link from your dashboard.
   - Share this link with others to collect anonymous feedback.
5. Submit feedback:

   - Open the shared feedback link.
   - Fill in the feedback form and submit it.

# File Structure
   - index.php - Home page of the application.
   - register.php - User registration page.
   - login.php - User login page.
   - dashboard.php - User dashboard page (visible only to logged-in users).
   - feedback.php - Feedback submission page.
   - data/ - Directory to store user and feedback data files.
   - helpers.php - Helper functions file.

# Helper Functions
   - sanitize($data) - Function to sanitize user input.
   - flash($key, $message = null) - Function to set and get flash messages.
   - dd($data) - Function to dump and die for debugging purposes.

# Best Practices
- Ensure to sanitize and validate all user inputs to prevent security issues.
- Follow a clean code structure and maintain readability.
- Store user passwords securely using hashing.



















# Personal Finance Manager - Anonymous Feedback Application

This is a simple CLI application for managing personal finances. Users can add income, add expenses, view income/expense lists, view income/expense categories, and view savings. The application uses a JSON file to persist data across sessions.

## Features

- Add income with a specified category.
- Add expense with a specified category.
- View all recorded incomes.
- View all recorded expenses.
- Calculate and display total savings.
- Display unique income and expense categories.

## Requirements

- PHP 7.4 or higher
- Composer (for installing dependencies)

## Installation

1. Clone the repository.

   ```
   git clone https://github.com/abualmueid/laravel-career-path.git 
   cd laravel-career-path
   git checkout assignment-2
   ```

2. Install dependencies using Composer.

    ```
    composer install
    ```

## Usage 

To run the application, navigate to the project directory and use the following command.

```
php index.php
```

Upon running the command, you will see a menu with options to manage your finances.

```
1. Add income
2. Add expense
3. View incomes
4. View expenses
5. View savings
6. View categories
7. Exit
```

### Options

1. **Add income**: 
   - Enter the amount and category of the income to add it to the records.

2. **Add expense**:
   - Enter the amount and category of the expense to add it to the records.

3. **View incomes**:
   - Display a list of all recorded incomes with their respective amounts and categories.

4. **View expenses**:
   - Display a list of all recorded expenses with their respective amounts and categories.

5. **View savings**:
   - Calculate and display the total savings (total income - total expenses).

6. **View categories**:
   - Display all unique income and expense categories.

7. **Exit**:
   - Exit the application.


## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contribution

Contributions are always welcome. Please don't hesitate to give a PR!
