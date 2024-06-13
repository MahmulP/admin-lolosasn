@include('dashboard.components.header')
@include('dashboard.components.sidebar')

<div class="content-wrapper">

    <div class="container-xxl flex-grow-1 container-p-y">


        <h4 class="py-3 breadcrumb-wrapper mb-4">
            <span class="text-muted fw-light">Users /</span> All Users
        </h4>

        <div class="card">
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @forelse ($users as $user)
                            <tr>
                                <td class="fw-medium">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar me-2">
                                            <img src="https://storage.googleapis.com/lidm_211/{{ $user->avatar ?? '' }}" alt class="rounded-circle" style="width: 40px; height: 40px;">
                                        </div>
                                        {{ $user->name ?? '' }}
                                    </div>
                                </td>
                                
                                <td>{{$user->email ?? ''}}</td>
                                <td>
                                    {{$user->phone ?? ''}}
                                </td>
                                <td>
                                    <span class="badge {{ strcasecmp($user->role, 'Admin') == 0 ? 'bg-label-primary' : 'bg-label-success' }} me-1">
                                        {{ $user->role ?? '' }}
                                    </span>
                                </td>                                
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown"><i
                                                class="bx bx-dots-vertical-rounded"></i></button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);"><i
                                                    class="bx bx-trash me-1"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                        <tr>
                            <td colspann="5" class="text-center">No data found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <div class="d-flex justify-content-end p-2 m-0">
                    {{ $users->links() }}
                </div>
            </div>
        </div>

    </div>
</div>

@include('dashboard.components.footer')
