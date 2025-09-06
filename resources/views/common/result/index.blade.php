@extends('layouts.authLayout')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">📊 Results</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        @if(auth()->user()->is_admin)
                        <th>#</th>
                        <th>Student Name</th>
                        <th>Student ID</th>
                        @endif
                        <th>Subject</th>
                        <th>Code</th>
                        <th>Marks</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($marks as $index => $mark)
                    <tr>
                        @if(auth()->user()->is_admin)
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $mark->student->name }}</td>
                        <td>{{ $mark->student->student_id }}</td>
                        @endif
                        <td>{{ $mark->subject->title }}</td>
                        <td>{{ $mark->subject->code }}</td>
                        <td>{{ $mark->marks }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="{{ auth()->user()->is_admin ? 5 : 3 }}" class="text-center text-muted">No results found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
