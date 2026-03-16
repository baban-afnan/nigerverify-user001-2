@extends('layouts.dashboard')

@section('title', 'Transactions History')

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
                    <h3 class="fw-bold text-dark mb-1">Transactions</h3>
                    <p class="text-muted small mb-0">Manage and track all system transactions in one place.</p>
                </div>
                <div class="d-none d-md-block">
                    <span class="badge bg-light text-dark border p-2">
                        <i class="bi bi-clock-history me-1"></i> {{ now()->format('d M, Y') }}
                    </span>
                </div>
            </div>
        </div>

        @include('common.message')

        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body p-0">
                    <div class="p-4 border-bottom">
                        <div class="row align-items-center">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <form method="GET" action="{{ url()->current() }}" class="search-container">
                                    <div class="input-group border">
                                        <span class="input-group-text bg-white border-0">
                                            <i class="bi bi-search text-muted"></i>
                                        </span>
                                        <input type="text" name="search" value="{{ request('search') }}"
                                            class="form-control" placeholder="Search by name, email or reference...">
                                        <button class="btn btn-primary px-4" type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6 text-md-end">
                                @if ($transactions->count())
                                    <span class="text-muted small">
                                        Showing <strong>{{ $transactions->firstItem() }}-{{ $transactions->lastItem() }}</strong> of <strong>{{ $transactions->total() }}</strong> transactions
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
                                        <th>Payer Details</th>
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
                                                <a href="{{ route('admin.receipt', $data->referenceId) }}" class="text-primary fw-semibold text-decoration-none">
                                                    {{ $data->referenceId }}
                                                </a>
                                            </td>
                                            <td>
                                                <div class="fw-medium text-dark">{{ $data->service_type }}</div>
                                                <div class="text-muted small text-truncate" style="max-width: 150px;">{{ $data->service_description }}</div>
                                            </td>
                                            <td>
                                                <div class="fw-medium text-dark">{{ $data->payer_name }}</div>
                                                <div class="text-muted small">{{ $data->payer_email }}</div>
                                                <div class="text-muted smallest">{{ $data->payer_phone }}</div>
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
                                                <a href="{{ route('admin.receipt', $data->referenceId) }}" class="btn btn-sm btn-outline-primary rounded-pill">
                                                    <i class="bi bi-download me-1"></i> Receipt
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="py-5 text-center">
                                <img width="180" src="{{ asset('assets/images/no-transaction.gif') }}" alt="No data" class="mb-3 opacity-75">
                                <h5 class="text-dark fw-bold">No Transactions Found</h5>
                                <p class="text-muted">We couldn't find any transactions matching your criteria.</p>
                                <a href="{{ url()->current() }}" class="btn btn-primary rounded-pill px-4">Clear Filters</a>
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
            
            <div class="mt-3 text-muted small p-2">
                <i class="bi bi-info-circle me-1"></i> Tip: Click on the <strong>Reference No.</strong> to view and download the full transaction receipt.
            </div>
        </div>
    </div>
@endsection

    @push('scripts')
    @endpush
