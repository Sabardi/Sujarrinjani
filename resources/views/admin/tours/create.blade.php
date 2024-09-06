@extends('layout.app')




@section('content')

<style>
    .form-wizard {
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
    }

    .wizard-step {
        display: none;
    }

    .wizard-step.active {
        display: block;
    }

    .btn {
        margin-top: 10px;
    }
</style>
    <div class="container">
        <h1>Create New Tour</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('artikels.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-wizard">

                <!-- Step 1: Basic Information and Day 1 -->
                <div id="step-1" class="wizard-step active">
                    <!-- Tour ID -->
                    <div class="form-group">
                        <label for="tours_id">Tour:</label>
                        <select name="tours_id" id="tours_id">
                            @foreach ($tours as $k)
                                <option value="{{ $k->id }}" {{ old('tours_id') == $k->id ? 'selected' : '' }}>
                                    {{ $k->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('tours_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Quote -->
                    <div class="form-group">
                        <label for="quote">Quote:</label>
                        <input type="text" class="form-control" id="quote" name="quote"
                            value="{{ old('quote') }}">
                        @error('quote')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Itinerary -->
                    <div class="form-group">
                        <label for="itinerary">Itinerary:</label>
                        <input type="text" class="form-control" id="itinerary" name="itinerary"
                            value="{{ old('itinerary') }}">
                        @error('itinerary')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Paragraphs for Day 1 -->
                    <div class="form-group">
                        <label for="paragrap1_day1">Paragraf 1 Hari 1:</label>
                        <input type="text" class="form-control" id="paragrap1_day1" name="paragrap1_day1"
                            value="{{ old('paragrap1_day1') }}">
                        @error('paragrap1_day1')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="paragrap2_day1">Paragraf 2 Hari 1:</label>
                        <input type="text" class="form-control" id="paragrap2_day1" name="paragrap2_day1"
                            value="{{ old('paragrap2_day1') }}">
                        @error('paragrap2_day1')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Image for Day 1 -->
                    <div class="form-group">
                        <label for="day1_image">Gambar Hari 1:</label>
                        <input type="file" class="form-control" id="day1_image" name="day1_image">
                        @error('day1_image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Navigation Buttons -->
                    <button type="button" class="btn btn-primary" onclick="nextStep(2)">Next</button>
                </div>

                <!-- Step 2: Day 2 -->
                <div id="step-2" class="wizard-step">
                    <!-- Paragraphs for Day 2 -->
                    <div class="form-group">
                        <label for="paragrap1_day2">Paragraf 1 Hari 2:</label>
                        <input type="text" class="form-control" id="paragrap1_day2" name="paragrap1_day2"
                            value="{{ old('paragrap1_day2') }}">
                        @error('paragrap1_day2')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="paragrap2_day2">Paragraf 2 Hari 2:</label>
                        <input type="text" class="form-control" id="paragrap2_day2" name="paragrap2_day2"
                            value="{{ old('paragrap2_day2') }}">
                        @error('paragrap2_day2')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Image for Day 2 -->
                    <div class="form-group">
                        <label for="day2_image">Gambar Hari 2:</label>
                        <input type="file" class="form-control" id="day2_image" name="day2_image">
                        @error('day2_image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Navigation Buttons -->
                    <button type="button" class="btn btn-secondary" onclick="prevStep(1)">Previous</button>
                    <button type="button" class="btn btn-primary" onclick="nextStep(3)">Next</button>
                </div>

                <!-- Step 3: Day 3 -->
                <div id="step-3" class="wizard-step">
                    <!-- Paragraphs for Day 3 -->
                    <div class="form-group">
                        <label for="paragrap1_day3">Paragraf 1 Hari 3:</label>
                        <input type="text" class="form-control" id="paragrap1_day3" name="paragrap1_day3"
                            value="{{ old('paragrap1_day3') }}">
                        @error('paragrap1_day3')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="paragrap2_day3">Paragraf 2 Hari 3:</label>
                        <input type="text" class="form-control" id="paragrap2_day3" name="paragrap2_day3"
                            value="{{ old('paragrap2_day3') }}">
                        @error('paragrap2_day3')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Image for Day 3 -->
                    <div class="form-group">
                        <label for="day3_image">Gambar Hari 3:</label>
                        <input type="file" class="form-control" id="day3_image" name="day3_image">
                        @error('day3_image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Navigation Buttons -->
                    <button type="button" class="btn btn-secondary" onclick="prevStep(2)">Previous</button>
                    <button type="button" class="btn btn-primary" onclick="nextStep(4)">Next</button>
                </div>

                <!-- Step 4: Day 4 -->
                <div id="step-4" class="wizard-step">
                    <!-- Paragraphs for Day 4 -->
                    <div class="form-group">
                        <label for="paragrap1_day4">Paragraf 1 Hari 4:</label>
                        <input type="text" class="form-control" id="paragrap1_day4" name="paragrap1_day4"
                            value="{{ old('paragrap1_day4') }}">
                        @error('paragrap1_day4')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="paragrap2_day4">Paragraf 2 Hari 4:</label>
                        <input type="text" class="form-control" id="paragrap2_day4" name="paragrap2_day4"
                            value="{{ old('paragrap2_day4') }}">
                        @error('paragrap2_day4')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Image for Day 4 -->
                    <div class="form-group">
                        <label for="day4_image">Gambar Hari 4:</label>
                        <input type="file" class="form-control" id="day4_image" name="day4_image">
                        @error('day4_image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Navigation Buttons -->
                    <button type="button" class="btn btn-secondary" onclick="prevStep(3)">Previous</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </form>
    </div>

    <script>
        function showStep(stepNumber) {
            const steps = document.querySelectorAll('.wizard-step');
            steps.forEach((step, index) => {
                if (index === stepNumber - 1) {
                    step.classList.add('active');
                } else {
                    step.classList.remove('active');
                }
            });
        }

        function nextStep(stepNumber) {
            showStep(stepNumber);
        }

        function prevStep(stepNumber) {
            showStep(stepNumber);
        }

        // Initialize with the first step
        document.addEventListener('DOMContentLoaded', () => showStep(1));
    </script>
@endsection

