<?php

namespace App\Livewire;

use App\Models\Transaction;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $transactions = Transaction::with('category')
            ->orderByDesc('date') // Change latest() to orderByDesc()
            ->limit(5)
            ->get();
        return view('livewire.dashboard', [
            'transactions' => $transactions,
        ]);
    }
}
