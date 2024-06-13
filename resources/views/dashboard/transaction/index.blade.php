@include('dashboard.components.header')
@include('dashboard.components.sidebar')

<div class="content-wrapper">

    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">Transactions /</span> All Transactions
        </h4>

        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Bundle Title</th>
                            <th>Bundle Price</th>
                            <th>Proof</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($transactions as $transaction)
                            <tr>
                                <td class="fw-medium">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar me-2">
                                            <img src="https://storage.googleapis.com/lidm_211/{{ $transaction->user->avatar ?? '' }}"
                                                alt class="rounded-circle" style="width: 40px; height: 40px;">
                                        </div>
                                        {{ $transaction->user->name ?? '' }}
                                    </div>
                                </td>

                                <td>{{ $transaction->transaction_title ?? '' }}</td>
                                <td>
                                    @if ($transaction->transaction_price != null)
                                        Rp. {{ number_format($transaction->transaction_price) }}
                                    @else
                                        No price
                                    @endif
                                </td>
                                <td>
                                    <div class="avatar me-2">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal">
                                            <img src="https://storage.googleapis.com/lidm_211/{{ $transaction->bukti_transaksi ?? '' }}"
                                                alt class="rounded-circle" style="width: 40px; height: 40px;">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <span
                                        class="badge {{ strcasecmp($transaction->transaction_status, 'Sukses') == 0
                                            ? 'bg-label-success'
                                            : (strcasecmp($transaction->transaction_status, 'Gagal') == 0
                                                ? 'bg-label-danger'
                                                : 'bg-label-primary') }} me-1">
                                        {{ $transaction->transaction_status ?? '' }}
                                    </span>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button"
                                            class="btn p-0 dropdown-toggle hide-arrow {{ strcasecmp($transaction->transaction_status, 'Sukses') == 0
                                                ? 'disabled'
                                                : (strcasecmp($transaction->transaction_status, 'Gagal') == 0
                                                    ? 'disabled'
                                                    : '') }}"
                                            data-bs-toggle="dropdown"><i
                                                class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            @if ($transaction->transaction_status != 'SUKSES' && $transaction->transaction_status != 'GAGAL')
                                                <a class="dropdown-item" href="javascript:void(0);"
                                                    onclick="updateTransactionStatus({{ $transaction->transactionRecord_id }}, 'SUKSES')"><i
                                                        class="bx bx-check me-1"></i> Accept</a>
                                                <a class="dropdown-item" href="javascript:void(0);"
                                                    onclick="updateTransactionStatus({{ $transaction->transactionRecord_id }}, 'GAGAL')"><i
                                                        class="bx bx-x me-1"></i> Deny</a>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No data found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="d-flex justify-content-end p-2 m-0">
                    {{ $transactions->links() }}
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body p-0">
                <img src="https://storage.googleapis.com/lidm_211/{{ $transaction->bukti_transaksi ?? '' }}" alt
                    class="img-fluid w-100 h-100" style="object-fit: contain;">
            </div>
        </div>
    </div>
</div>

@push('js')
    <script>
        function updateTransactionStatus(transactionId, status) {
            const url = `http://localhost:8080/updateTransaction/${transactionId}`;
            const data = {
                transaction_status: status
            };

            fetch(url, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok ' + response.statusText);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Success:', data);
                    alert('Transaction updated successfully!');
                    window.location.reload();
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                    alert('Failed to update transaction.');
                });
        }
    </script>
@endpush

@include('dashboard.components.footer')
