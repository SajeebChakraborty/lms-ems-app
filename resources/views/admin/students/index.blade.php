@extends('layouts.authLayout')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">👨‍🎓 Student List</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-hover table-bordered align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Student Name</th>
                        <th>Student ID</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $index => $student)
                        <tr>
                            <td>{{ $students->firstItem() + $index }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->student_id }}</td>
                            <td>{{ $student->email }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted">No students found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-3">
                {!! $students->links('pagination::bootstrap-5') !!}
            </div>
        </div>
    </div>
</div>
@endsection
