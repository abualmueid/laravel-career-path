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
        echo "Income added successfully!\n";
    }

    public function addExpense(float $amount, string $category) {
        $this->expenses[] = [
            "amount" => $amount,
            "category" => $category
        ];
        $this->saveData();
        echo "Expense added successfully!\n";
    }

    private function saveData(): void {
        $data = [
            "incomes" => $this->incomes,
            "expenses" => $this->expenses
        ];
        file_put_contents("src/" . $this->dataFile, json_encode($data));
    }

    public function viewIncome(): void {
        echo "Incomes:\n";
        foreach($this->incomes as $income) {
            echo "Amount: {$income['amount']}, Category: {$income['category']}\n";
        }
    }

    public function viewExpense():void {
        echo "Expenses:\n";
        foreach($this->expenses as $expense) {
            echo "Amount: {$expense['amount']}, Category: {$expense['category']}\n";
        }
    }

    public function viewSavings() {
        echo "categories";
    }

    public function viewCategories() {
        echo "categories";
    }
}