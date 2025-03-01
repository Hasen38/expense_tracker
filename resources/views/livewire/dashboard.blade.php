<div class="container-fluid">
    <!-- Monthly Transaction Chart Row -->
    <div class="mb-4 row">
        <div class="col-12">
            <livewire:charts.monthly-transaction-chart />
        </div>
    </div>

    <!-- Main Content Row -->
    <div class="row">
        <!-- Left Column - Tables -->
        <div class="col-12 col-xl-7">
            <!-- Accounts Summary Card -->
            <div class="mb-4 border-0 shadow card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="mb-0 fs-5 fw-bold">Accounts Summary</h2>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>Account</th>
                                <th>Opening Balance</th>
                                <th>Income</th>
                                <th>Expense</th>
                                <th>Balance</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @forelse(\App\Models\Account::get() as $account)
                                @php
                                    $opening_balance = $account->opening_balance;
                                    $income = \App\Models\Transaction::income()
                                        ->where('account_id', $account->id)
                                        ->sum('amount');
                                    $expense = \App\Models\Transaction::expense()
                                        ->where('account_id', $account->id)
                                        ->sum('amount');
                                    $balance = $opening_balance + $income - $expense;
                                @endphp
                                <tr wire:key="{{ $account->id }}">
                                    <td>{{ $account->name }}</td>
                                    <td>{{ number_format($opening_balance) }}</td>
                                    <td>{{ number_format($income) }}</td>
                                    <td>{{ number_format($expense) }}</td>
                                    <td>{{ number_format($balance) }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center text-danger" colspan="6">No record found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Recent Transactions Card -->
            <div class="mb-4 border-0 shadow card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="mb-0 fs-5 fw-bold">Recent Transactions</h2>
                        </div>
                        <div class="col text-end">
                            <a wire:navigate href="{{ route('transaction') }}" class="btn btn-sm btn-primary">
                                See all
                            </a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Type</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            @forelse($transactions as $index => $transaction)
                                <tr wire:key="{{ $transaction->id }}">
                                    <td>{{ ++$index }}</td>
                                    <td>{{ $transaction->date->format('d-m-Y') }}</td>
                                    <td>{{ $transaction->category->name }}</td>
                                    <td>
                                        <span @class([
                                            'badge badge-pill',
                                            'bg-success' => $transaction->category->type === 'income',
                                            'bg-danger' => $transaction->category->type === 'expense',
                                        ])>
                                            {{ $transaction->category->type }}</span>
                                    </td>
                                    <td>{{ number_format($transaction->amount) }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center text-danger" colspan="6">No record found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Right Column - Yearly Chart -->
        <div class="col-12 col-xl-5">
            <div class="mb-4 border-0 shadow card">
                <livewire:charts.yearly-transaction-chart />
            </div>
        </div>
    </div>
</div>
