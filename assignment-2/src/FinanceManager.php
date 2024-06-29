<?php 

namespace CLIApp;

class FinanceManager {
    private array $incomes = [];
    private array $expenses = [];
    private string $dataFile = "FinanceData.json";

    public function addIncome(float $amount, string $category): void {
        $this->incomes[] = [
            "amount" => $amount, 
            "category" => $category
        ];
        
        $this->saveData();
        echo "\nIncome added successfully!\n";
    }

    public function addExpense(float $amount, string $category): void {
        $this->expenses[] = [
            "amount" => $amount,
            "category" => $category
        ];

        $this->saveData();
        echo "\nExpense added successfully!\n";
    }

    public function viewIncome(): void {
        echo "\n";
        $this->loadData();

        foreach($this->incomes as $income) {
            // echo "Amount: {$income["amount"]}, Category: {$income["category"]}\n";
            echo "Amount: " . number_format($income["amount"], 2, ".") . ", Category: {$income["category"]}\n";
        }
    }

    public function viewExpense(): void {
        echo "\n";
        $this->loadData();

        foreach($this->expenses as $expense) {
            // echo "Amount: {$expense['amount']}, Category: {$expense['category']}\n";
            echo "Amount: " . number_format($expense['amount'], 2, ".") . ", Category: {$expense['category']}\n";
        }
    }

    public function viewSavings(): void {
        $totalIncome = array_sum(array_column($this->incomes, 'amount'));
        $totalExpense = array_sum(array_column($this->expenses, 'amount'));
        $savings = $totalIncome - $totalExpense;

        // echo "\nSavings: $savings\n";
        echo "\nSavings: " . number_format($savings, 2, ".") . "\n";
    }

    public function viewCategories(): void {
        $incomeCategories = array_unique(array_column($this->incomes, 'category'));
        $expenseCategories = array_unique(array_column($this->expenses, 'category'));

        $incomeCategories = implode(', ', $incomeCategories);
        $expenseCategories = implode(', ', $expenseCategories);

        echo "\nIncome categories: $incomeCategories\n";
        echo "Expense categories: $expenseCategories\n";
    }

    private function saveData(): void {
        $data = [
            "incomes" => $this->incomes,
            "expenses" => $this->expenses
        ];

        file_put_contents($this->dataFile, json_encode($data));
    }

    private function loadData(): void {
        if (file_exists($this->dataFile)) {
            $data = json_decode(file_get_contents($this->dataFile), true);

            $this->incomes = $data['incomes'];
            $this->expenses = $data['expenses'];
        }
    }
}