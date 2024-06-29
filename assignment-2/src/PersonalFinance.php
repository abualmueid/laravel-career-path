<?php 

namespace CLIApp;

class PersonalFinance {
    private FinanceManager $financeManager;

    private const ADD_INCOME = 1;
    private const ADD_EXPENSE = 2;
    private const VIEW_INCOME = 3;
    private const VIEW_EXPENSE = 4;
    private const VIEW_SAVINGS = 5;
    private const VIEW_CATEGORIES = 6;
    private const EXIT_APP = 7;

    private array $options = [
        self::ADD_INCOME => "Add income", 
        self::ADD_EXPENSE => "Add expense",
        self::VIEW_INCOME => "View Income",
        self::VIEW_EXPENSE => "View Expense",
        self::VIEW_SAVINGS => "View Savings",
        self::VIEW_CATEGORIES => "View Categories",
        self::EXIT_APP => 'Exit App'
    ];

    public function __construct() {
        $this->financeManager = new FinanceManager();
    }

    public function run(): void {
        echo "--------------------------------------\n";
        echo "--------------------------------------\n";
        echo "Welcome to 'Personal Finance Manager'!\n";
        echo "--------------------------------------\n";

        while (true) {
            echo "--------------------------------------\n";
            foreach ($this->options as $option => $label) {
                printf("%d. %s\n", $option, $label);
            }
            echo "--------------------------------------\n";

            $choice = intval(readline("Enter your option: "));
            switch ($choice) {
                case self::ADD_INCOME:
                    $amount = floatval(trim(readline("\nEnter income amount: ")));
                    $category = trim(readline("Enter income category: "));
                    $this->financeManager->addIncome($amount, $category);
                    break;
                case self::ADD_EXPENSE:
                    $amount = floatval(trim(readline("\nEnter expense amount: ")));
                    $category = trim(readline("Enter expense category: "));
                    $this->financeManager->addExpense($amount, $category);
                    break;
                case self::VIEW_INCOME:
                    $this->financeManager->viewIncome();
                    break;
                case self::VIEW_EXPENSE:
                    $this->financeManager->viewExpense();
                    break;
                case self::VIEW_SAVINGS:
                    $this->financeManager->viewSavings();
                    break;
                case self::VIEW_CATEGORIES:
                    $this->financeManager->viewCategories();
                    break;
                case self::EXIT_APP:
                    return;
                default:
                    echo "Invalid option.\n";
            }
        }
    }
}