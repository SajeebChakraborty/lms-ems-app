@extends('layouts.authLayout')

@section('content')
<div class="container mt-4">
    <h2 class="mb-3">✍️ Add Marks</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <form action="{{ url('/marks/store') }}" method="POST">
                @csrf

                <!-- Student Select -->
                <div class="mb-3">
                    <label for="student_id" class="form-label">Select Student</label>
                    <select name="student_id" id="student_id" class="form-select" required>
                        <option value="">-- Choose Student --</option>
                        @foreach($students as $student)
                            <option value="{{ $student->id }}">{{ $student->name }} ({{ $student->student_id }})</option>
                        @endforeach
                    </select>
                </div>

                <!-- Subject Select -->
                <div class="mb-3">
                    <label for="subject_id" class="form-label">Select Subject</label>
                    <select name="subject_id" id="subject_id" class="form-select" required>
                        <option value="">-- Choose Subject --</option>
                        @foreach($subjects as $subject)
                            <option value="{{ $subject->id }}">{{ $subject->title }} ({{ $subject->code }})</option>
                        @endforeach
                    </select>
                </div>

                <!-- Marks Input -->
                <div class="mb-3">
                    <label for="marks" class="form-label">Enter Marks</label>
                    <input type="number" name="marks" id="marks" class="form-control" min="0" max="100" required>
                </div>

                <!-- Submit -->
                <button type="submit" class="btn btn-primary">Save Mark</button>
            </form>
        </div>
    </div>
</div>
@endsection
