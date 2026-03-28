@extends('layouts.dashboard')

@section('title', 'My Transactions')

@push('styles')
    <style>
        .card {
            border: none;
            border-radius: 12px;
        }
        .table-responsive {
            border-radius: 12px;
        }
        .table thead th {
            background-color: #f8f9fa;
            color: #334155;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.025em;
            border-top: none;
        }
        .table tbody td {
            vertical-align: middle;
            font-size: 0.875rem;
            color: #475569;
        }
        .status-badge {
            padding: 0.4em 0.8em;
            font-weight: 500;
            border-radius: 50px;
            font-size: 0.75rem;
        }
        .badge-success { background-color: #ecfdf5; color: #059669; }
        .badge-danger { background-color: #fef2f2; color: #dc2626; }
        .badge-warning { background-color: #fffbeb; color: #d97706; }
        .badge-info { background-color: #e0f2fe; color: #0369a1; }
        .search-container .input-group {
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .search-container .form-control {
            border: none;
            padding: 0.6rem 1rem;
        }
        .search-container .btn {
            padding: 0.6rem 1.2rem;
        }
        .pagination .page-link {
            border-radius: 8px !important;
            margin: 0 2px;
            border: none;
            color: #64748b;
        }
        .pagination .page-item.active .page-link {
            background-color: #0d6efd;
            box-shadow: 0 4px 6px -1px rgba(13, 110, 253, 0.2);
        }
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col-12 mb-4">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h3 class="fw-bold text-dark mb-1">My Transactions</h3>
                    <p class="text-muted small mb-0">View your personal transaction history and receipts.</p>
                </div>
                <div class="d-none d-md-block">
                    <span class="badge bg-light text-dark border p-2">
                        <i class="bi bi-clock-history me-1"></i> {{ now()->format('d M, Y') }}
                    </span>
                </div>
            </div>
        </div>

        <div class="col-12 mb-4">
            <div class="row g-3">
                <div class="col-sm-6 col-xl-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center py-4">
                            <p class="text-uppercase text-muted mb-2 small">Today Credit</p>
                            <h3 class="fw-bold mb-2">&#8358;{{ number_format($todayCredit ?? 0, 2) }}</h3>
                            <span class="badge bg-success">Credit</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center py-4">
                            <p class="text-uppercase text-muted mb-2 small">Today Debit</p>
                            <h3 class="fw-bold mb-2">&#8358;{{ number_format($todayDebit ?? 0, 2) }}</h3>
                            <span class="badge bg-danger">Debit</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center py-4">
                            <p class="text-uppercase text-muted mb-2 small">Today Refunds</p>
                            <h3 class="fw-bold mb-2">&#8358;{{ number_format($todayRefund ?? 0, 2) }}</h3>
                            <span class="badge bg-warning text-dark">Refund</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center py-4">
                            <p class="text-uppercase text-muted mb-2 small">Today Bonus</p>
                            <h3 class="fw-bold mb-2">&#8358;{{ number_format($todayBonus ?? 0, 2) }}</h3>
                            <span class="badge bg-info text-dark">Bonus</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body p-0">
                    <div class="p-4 border-bottom">
                        <div class="row align-items-center">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <form method="GET" action="{{ route('user.transactions') }}" class="search-container">
                                    <div class="input-group border">
                                        <span class="input-group-text bg-white border-0">
                                            <i class="bi bi-search text-muted"></i>
                                        </span>
                                        <input type="text" name="search" value="{{ request('search') }}"
                                            class="form-control" placeholder="Search by reference, service, or status...">
                                        <button class="btn btn-primary px-4" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 text-md-end">
                                @if ($transactions->count())
                                    <span class="text-muted small">
                                        Showing <strong>{{ $transactions->firstItem() }}-{{ $transactions->lastItem() }}</strong> of <strong>{{ $transactions->total() }}</strong> records
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        @if ($transactions->count())
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th class="ps-4">#</th>
                                        <th>Date & Time</th>
                                        <th>Reference No.</th>
                                        <th>Service</th>
                                        <th>Amount</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-end pe-4">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions as $data)
                                        <tr>
                                            <td class="ps-4 text-muted small">{{ ($transactions->currentPage() - 1) * $transactions->perPage() + $loop->iteration }}</td>
                                            <td>
                                                <div class="fw-medium">{{ $data->created_at->format('d M Y') }}</div>
                                                <div class="text-muted smallest">{{ $data->created_at->format('h:i A') }}</div>
                                            </td>
                                            <td>
                                                @if($data->referenceId)
                                                    <a href="{{ route('user.receipt', $data->referenceId) }}" class="text-primary fw-semibold text-decoration-none">
                                                        {{ $data->referenceId }}
                                                    </a>
                                                @else
                                                    <span class="text-muted small">N/A</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="fw-medium text-dark">{{ $data->service_type }}</div>
                                                <div class="text-muted small text-truncate" style="max-width: 180px;">{{ $data->service_description }}</div>
                                            </td>
                                            <td>
                                                <span class="fw-bold text-dark">&#8358;{{ number_format($data->amount, 2) }}</span>
                                            </td>
                                            <td class="text-center">
                                                @php
                                                    $statusClass = match(strtolower($data->status)) {
                                                        'approved', 'success' => 'badge-success',
                                                        'rejected', 'failed' => 'badge-danger',
                                                        default => 'badge-warning',
                                                    };
                                                @endphp
                                                <span class="status-badge {{ $statusClass }}">
                                                    {{ strtoupper($data->status) }}
                                                </span>
                                            </td>
                                            <td class="text-end pe-4">
                                                @if($data->referenceId)
                                                    <a href="{{ route('user.receipt', $data->referenceId) }}" class="btn btn-sm btn-outline-primary rounded-pill">
                                                        <i class="bi bi-download me-1"></i> Receipt
                                                    </a>
                                                @else
                                                    <button class="btn btn-sm btn-light rounded-pill disabled" title="Reference ID missing">
                                                        <i class="bi bi-slash-circle me-1"></i> No Receipt
                                                    </button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="py-5 text-center">
                                <img width="180" src="{{ asset('assets/images/no-transaction.gif') }}" alt="No data" class="mb-3 opacity-75">
                                <h5 class="text-dark fw-bold">No Transactions Found</h5>
                                <p class="text-muted">You have no transactions yet or your search did not match any records.</p>
                                <a href="{{ route('user.transactions') }}" class="btn btn-primary rounded-pill px-4">Clear Filters</a>
                            </div>
                        @endif
                    </div>

                    @if ($transactions->hasPages())
                        <div class="p-4 border-top d-flex justify-content-center">
                            {{ $transactions->appends(request()->query())->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
