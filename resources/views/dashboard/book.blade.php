<x-layout>
    <x-slot:heading>
        Book Vehicle
    </x-slot:heading>
    <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <form method="POST" action="/dashboard/book">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-5 grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-6">

                    {{-- Select vehicle --}}
                    <div class="">
                        <label for="vehicle" class="block text-sm font-medium leading-6 text-gray-900">Vehicle</label>
                        <div class="mt-2">
                            <select id="vehicle" name="vehicle" autocomplete="vehicle-name" required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                @foreach ($vehicles as $vehicle)
                                    <option value="{{ $vehicle['vehicle_id'] }}">{{ $vehicle['vehicle_model'] }} -
                                        {{ $vehicle['vehicle_license_plate'] }} ( {{ $vehicle['vehicle_type'] }} )
                                    </option>
                                @endforeach
                            </select>
                            <x-form-error name="vehicle" />
                        </div>
                    </div>

                    {{-- Driver --}}
                    <div class="sm:col-span-3">
                        <label for="driver" class="block text-sm font-medium leading-6 text-gray-900">Driver</label>
                        <div class="mt-2">
                            <select id="driver" name="driver" autocomplete="driver-name" required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                @foreach ($drivers as $driver)
                                    <option value="{{ $driver['driver_id'] }}">{{ $driver['driver_name'] }} -
                                        {{ $driver['driver_phonenumber'] }}</option>
                                @endforeach
                            </select>
                            <x-form-error name="driver" />
                        </div>
                    </div>

                    {{-- Purpose --}}
                    <div class="col-span-full">
                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Purpose</label>
                        <div class="mt-2">
                            <textarea id="about" name="about" rows="3" required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                            <x-form-error name="about" />
                        </div>
                    </div>

                    <!-- Start datetime and End datetime on the same row for desktop -->
                    <div class="sm:col-span-3">
                        <label for="start-datetime" class="block text-sm font-medium leading-6 text-gray-900">Start
                            Date & Time</label>
                        <div class="mt-2">
                            <input type="datetime-local" id="start_datetime" name="start_datetime" required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-form-error name="start_datetime" />
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="end-datetime" class="block text-sm font-medium leading-6 text-gray-900">End Date
                            & Time</label>
                        <div class="mt-2">
                            <input type="datetime-local" id="end_datetime" name="end_datetime" required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <x-form-error name="end_datetime" />
                        </div>
                    </div>

                    <div class="sm:col-span-6">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Approvals</h2>
                        <p class="text-gray-500">The booking process would need to go to 2-level-approval by the
                            supervisor and operational manager.</p>
                    </div>

                    {{-- Approver 1 --}}
                    <div>
                        <label for="approver1" class="block text-sm font-medium leading-6 text-gray-900">
                            Supervisor
                        </label>
                        <div class="mt-2">
                            <select id="approver1" name="approver1" autocomplete="approver1-name" required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                @foreach ($supervisors as $supervisor)
                                    <option value="{{ $supervisor['id'] }}"> {{ $supervisor['name'] }} -
                                        {{ $supervisor['email'] }} </option>
                                @endforeach
                            </select>
                            <x-form-error name="supervisor" />
                        </div>
                    </div>

                    {{-- Approver 2 --}}
                    <div>
                        <label for="approver2" class="block text-sm font-medium leading-6 text-gray-900">
                            Operational Manager
                        </label>
                        <div class="mt-2">
                            <select id="approver2" name="approver2" autocomplete="approver2-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                @foreach ($managers as $manager)
                                    <option value="{{ $manager['id'] }}"> {{ $manager['name'] }} -
                                        {{ $manager['email'] }} </option>
                                @endforeach
                            </select>
                            <x-form-error name="operational manager" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Reset</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
        </div>
    </form>
</x-layout>
