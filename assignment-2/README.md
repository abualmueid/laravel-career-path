# Personal Finance Manager - A Simple PHP CLI Application

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
