<?php 

namespace CLIApp;

class PersonalFinance {

    private const ADD_INCOME = 1;
    private const ADD_EXPENSE = 2;
    private const VIEW_INCOME = 3;
    private const VIEW_EXPENSE = 4;
    private const VIEW_SAVINGS = 5;
    private const VIEW_CATEGORIES = 6;
    private const EXIT = 7;

    private array $options = [
        self::ADD_INCOME => "Add income", 
        self::ADD_EXPENSE => "Add expense",
        self::VIEW_INCOME => "View Income",
        self::VIEW_EXPENSE => "View Expense",
        self::VIEW_SAVINGS => "View Savings",
        self::VIEW_CATEGORIES => "View Categories"
    ];

    public function run(): void {

    }
}