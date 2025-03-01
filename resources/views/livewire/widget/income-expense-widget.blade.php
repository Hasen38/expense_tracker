<div class="mb-2 border-0 shadow card">
    <div class="p-2 text-white bg-gray-800 card-title">
        <strong class="mb-1">{{ $title ?? 'Title' }}</strong>
    </div>
    <div class="pt-1 card-body">
        <div class="d-block">
            <div class="d-flex align-items-center me-5">
                <div class="rounded icon-shape icon-sm icon-shape-success me-3">
                    <i class="fa fa-wallet fa-2x"></i>
                </div>
                <div class="d-block">
                    <strong class="mb-0 text-success">Income</strong>
                    <h5 class="mb-0">{{ number_format($income ?? 0) }}</h5>
                </div>
            </div>
            <div class="pt-3 d-flex align-items-center">
                <div class="rounded icon-shape icon-sm icon-shape-danger me-3">
                    <i class="fa fa-money-bill-wave-alt fa-2x"></i>
                </div>
                <div class="d-block">
                    <strong class="mb-0 text-danger">Expense</strong>
                    <h5 class="mb-0">{{ number_format($expense ?? 0) }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>
