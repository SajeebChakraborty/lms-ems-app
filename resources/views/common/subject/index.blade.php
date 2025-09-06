@extends('layouts.authLayout')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">📚 Subject List</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Subject Title</th>
                        <th>Subject Code</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($subjects as $index => $subject)
                        <tr>
                            <td>{{ $subjects->firstItem() + $index }}</td>
                            <td>{{ $subject->title }}</td>
                            <td>{{ $subject->code }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted">No subjects found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-3">
                {!! $subjects->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
</div>
@endsection
