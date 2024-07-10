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

1. Clone the repository:

   ```bash
   git clone https://github.com/abualmueid/laravel-career-path.git
   cd assignment-3

2. Start the PHP built-in server: 

   ```bash
   php -S localhost:8000

3. Access the application:

   Open your web browser and go to http://localhost:8000.

## Usage

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

## File Structure

   - index.php - Home page of the application.
   - register.php - User registration page.
   - login.php - User login page.
   - dashboard.php - User dashboard page (visible only to logged-in users).
   - feedback.php - Feedback submission page.
   - data/ - Directory to store user and feedback data files.
   - helpers.php - Helper functions file.

## Helper Functions

   - sanitize($data) - Function to sanitize user input.
   - flash($key, $message = null) - Function to set and get flash messages.
   - dd($data) - Function to dump and die for debugging purposes.

## Best Practices Followed 

- Ensured to sanitize and validate all user inputs to prevent security issues.
- Followed a clean code structure and maintained readability.
- Stored user passwords securely using hashing.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contribution

Contributions are always welcome. Please don't hesitate to give a PR!
