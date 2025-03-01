<div class="mb-4 col-12">
    <div class="bg-yellow-100 border-0 shadow card">
        <div class="flex-row card-header d-sm-flex align-items-center flex-0">
            <div class="mb-3 d-block mb-sm-0">
                <div class="mb-2 fs-5 fw-normal">{{ now()->monthName }} Expenses</div>
                <h2 class="fs-3 fw-extrabold">{{ number_format($total_expenses ?? 0) }}</h2>
                <div class="mt-2 small">
                    <span class="fw-normal me-2">Today</span>
                    <span class="text-success fw-bold">{{ number_format($today_expenses ?? 0) }}</span>
                </div>
            </div>
            <div class="d-flex ms-auto">
                <button class="btn {{ $type == 'monthly' ? 'btn-secondary text-dark' : null }} btn-sm me-2"
                    wire:click="setType('monthly')">Month</button>
                <button class="btn {{ $type == 'weekly' ? 'btn-secondary text-dark' : null }} btn-sm me-3"
                    wire:click="setType('weekly')">Week</button>
            </div>
        </div>
        <div class="p-2 card-body">
            <div id="transaction-chart" class="ct-double-octave ct-series-g"></div>
        </div>
    </div>
</div>

@push('js')
    <script>
        function loadChart(labels, expenses) {
            new Chartist.Line('#transaction-chart', {
                labels: labels,
                series: [
                    expenses,
                ]
            }, {
                low: 0,
                showArea: true,
                fullWidth: true,
                plugins: [
                    Chartist.plugins.tooltip()
                ],
                axisX: {
                    // On the x-axis start means top and end means bottom
                    position: 'end',
                    showGrid: true
                },
                axisY: {
                    // On the y-axis start means left and end means right
                    showGrid: false,
                    showLabel: false,
                    labelInterpolationFnc: function(value) {
                        return '$' + (value / 1) + 'k';
                    }
                }
            })
        }
    </script>
@endpush
