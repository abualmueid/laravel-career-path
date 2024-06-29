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

    private function saveData(): void {
        $data = [
            "incomes" => $this->incomes,
            "expenses" => $this->expenses
        ];
        file_put_contents($this->dataFile, json_encode($data));
    }

    public function addExpense(float $amount, string $category) {
        // echo "Expense added successfully!\n";
    }

    public function viewIncome() {
        echo "categories";
    }

    public function viewExpense() {
        echo "categories";
    }

    public function viewSavings() {
        echo "categories";
    }

    public function viewCategories() {
        echo "categories";
    }
}