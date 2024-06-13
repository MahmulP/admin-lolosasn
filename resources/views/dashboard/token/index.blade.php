@include('dashboard.components.header')
@include('dashboard.components.sidebar')

<div class="content-wrapper">

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="mb-3 d-flex justify-content-between align-items-center mb-4">
            <h4 class="breadcrumb-wrapper mb-0">
                <span class="text-muted fw-light">Tokens /</span> All Tokens
            </h4>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#generateModal"> Generate
                Token </button>
        </div>

        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Token</th>
                            <th>List Tryout</th>
                            <th>Token Status</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($tokens as $token)
                            <tr>
                                <td class="fw-medium">
                                    {{ $token->tryoutToken_code ?? '' }}
                                </td>

                                <td>
                                    @if (isset($token->tryoutToken_listTryout))
                                        <ul>
                                            @foreach (explode(',', $token->tryoutToken_listTryout) as $tryout)
                                                @php
                                                    $tryoutData = \App\Models\Tryout::where(
                                                        'tryout_id',
                                                        $tryout,
                                                    )->first();
                                                    $tryoutName = $tryoutData
                                                        ? $tryoutData->tryout_title
                                                        : 'Tryout not found';
                                                @endphp
                                                <li>{{ $tryoutName }}</li>
                                            @endforeach

                                        </ul>
                                    @else
                                        {{ '' }}
                                    @endif
                                </td>

                                <td>
                                    <span
                                        class="badge {{ strcasecmp($token->tryoutToken_status, 'REDEEMED') == 0 ? 'bg-label-primary' : 'bg-label-success' }} me-1">
                                        {{ $token->tryoutToken_status ?? '' }}
                                    </span>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">No data found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="d-flex justify-content-end p-2 m-0">
                    {{ $tokens->links() }}
                </div>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="generateModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-enable-otp modal-dialog-centered">
        <div class="modal-content p-3 p-md-5">
            <div class="modal-body">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="text-center">
                    <h3 class="mb-2">Generate Token</h3>
                    <p>Choose the tryout to be generated</p>
                </div>
            </div>
            <form id="createTokenForm">
                @csrf
                <div class="mb-4 pb-2">
                    <label for="select2Basic" class="form-label">Add Tryout</label>
                    <select id="select2Basic" class="form-select form-select-lg share-project-select"
                        data-allow-clear="true" name="listTryoutId">
                        @foreach ($tryouts as $tryout)
                            <option data-name="{{ $tryout->tryout_title }}" value="{{ $tryout->tryout_id }}">
                                {{ $tryout->tryout_title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-flex align-items-center mt-4">
                    <div class="d-flex flex-grow-1 justify-content-end align-items-center gap-2">
                        <button type="submit" class="btn btn-primary">Generate</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('js')
    <script>
        $(document).ready(function() {
            $('#select2Basic').select2({
                placeholder: "Choose tryouts",
                allowClear: true,
                multiple: true,
                dropdownParent: $('#generateModal')
            });

            $('#createTokenForm').submit(function(event) {
                event.preventDefault();

                const url = 'http://localhost:8080/tokens/create';
                const listTryoutIds = $('#select2Basic').val();
                const qty = listTryoutIds.length;

                const data = {
                    qty: "1",
                    listTryoutId: listTryoutIds.join(',')
                };

                fetch(url, {
                        method: 'POST',
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
                        alert('Token created successfully!');
                        location.reload();
                    })
                    .catch(error => {
                        console.error('There was a problem with the fetch operation:', error);
                        alert('Failed to create token.');
                    });
            });
        });
    </script>
@endpush

@include('dashboard.components.footer')
