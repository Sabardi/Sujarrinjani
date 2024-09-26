<x-app-layout>
    <br>
    <br>
    <br>
    <br>
    <br>
    <form action="{{ route('bookingstore') }}" method="POST" class="flex flex-wrap w-full gap-6">
        @csrf

        <!-- Group 1: Personal Information -->
        <fieldset class="w-1/3">
            <legend class="text-lg font-medium text-gray-700">Personal Information</legend>

            <div class="mt-4">
                <label for="fullName" class="block text-sm font-medium text-gray-700">Full Name:</label>
                <input type="text" id="fullName" name="fullName" value="{{ old('fullName') }}"
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm" required>
            </div>

            <div class="mt-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm" required>
                @error('email')
                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mt-4">
                <label for="pasport_number" class="block text-sm font-medium text-gray-700">Passport Number:</label>
                <input type="text" id="pasport_number" name="pasport_number" value="{{ old('pasport_number') }}"
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm" required>
                @error('pasport_number')
                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mt-4">
                <label for="nationality" class="block text-sm font-medium text-gray-700">Nationality:</label>
                <input type="text" id="nationality" name="nationality" value="{{ old('nationality') }}"
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm" required>
                @error('nationality')
                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>
        </fieldset>

        <!-- Group 2: Tour Information -->
        <fieldset class="w-1/3">
            <legend class="text-lg font-medium text-gray-700">Tour Information</legend>

            <div class="mt-4">
                <label for="tours_id" class="block text-sm font-medium text-gray-700">Name Tour:</label>
                <input type="text" value="{{$tour->name}}" readonly class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm">
                <input type="hidden" name="tours_id" id="tours_id" value="{{$tour->id}}">
            </div>

            <div class="mt-4">
                <label for="total_participan" class="block text-sm font-medium text-gray-700">Total
                    Participants:</label>
                <input type="number" id="total_participan" name="total_participan" value="{{ old('total_participan') }}"
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm" required>
                @error('total_participan')
                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <!-- Group 4: Additional Information -->
            <div class="mt-2">
                <label for="add_message" class="block text-sm font-medium text-gray-700">Additional Message:</label>
                <textarea id="add_message" name="add_message" rows="3"
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm"></textarea>
                @error('add_message')
                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>
        </fieldset>

        <!-- Group 3: Date & Pickup Information -->
        <fieldset class="">
            <legend class="text-lg font-medium text-gray-700">Pickup Information</legend>

            <div class="mt-4">
                <label for="arrival_date" class="block text-sm font-medium text-gray-700">Arrival Date:</label>
                <input type="date" id="arrival_date" name="arrival_date" value="{{ old('arrival_date') }}"
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm" required>
                @error('arrival_date')
                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mt-4">
                <label for="pickup_time" class="block text-sm font-medium text-gray-700">Pickup Time:</label>
                <input type="time" id="pickup_time" name="pickup_time" value="{{ old('pickup_time') }}"
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm" required>
                @error('pickup_time')
                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="mt-4">
                <label for="pickup_location" class="block text-sm font-medium text-gray-700">Pickup Location:</label>
                <input type="text" id="pickup_location" name="pickup_location" value="{{ old('pickup_location') }}"
                    class="block w-full px-3 py-2 mt-1 border border-gray-300 rounded-md shadow-sm" required>
                @error('pickup_location')
                <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>
        </fieldset>

        <fieldset>
            <legend class="text-lg font-medium text-gray-700">Payment</legend>

            <div class="mt-4">
                <label for="payment_id" class="block text-sm font-medium text-gray-700">payment:</label>
                <select class="block w-full form-control" id="payment_id" name="payment_id" required>
                    <option>Please select </option>
                    @foreach ($payment as $payment)
                        <option value="{{ $payment->id }}">{{ $payment->name }}</option>
                    @endforeach
                </select>
                @error('payment_id')
                    <div class="mt-1 text-sm text-red-500">{{ $message }}</div>
                @enderror
            </div>
        </fieldset>

        <!-- Submit Button -->
        <div class="flex justify-center w-full py-8 border-t-2">
            <button type="submit"
                class="px-8 py-2 text-white bg-orange-600 rounded-md hover:bg-indigo-700">Submit</button>
        </div>

    </form>
</x-app-layout>
<x-footer />
