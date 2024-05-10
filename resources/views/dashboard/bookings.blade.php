<x-layout>
    <x-slot:heading>
        Bookings
    </x-slot:heading>

    <!-- Table responsiveness and overflow handling -->
    <div class="overflow-x-auto">
        <table class="min-w-full table-auto border-collapse">
            <thead>
                <tr>
                    <!-- Table headers with background, padding, and text styling -->
                    <th class="px-4 py-2 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Pickup Date
                    </th>
                    <th class="px-4 py-2 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Return Date
                    </th>
                    <th class="px-4 py-2 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Purpose
                    </th>
                    <th class="px-4 py-2 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Model
                    </th>
                    <th class="px-4 py-2 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        License Plate
                    </th>
                    <th class="px-4 py-2 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Driver
                    </th>
                    <th class="px-4 py-2 border-b-2 border-gray-300 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                    <tr class="bg-white hover:bg-gray-50">
                        <!-- Table data with padding -->
                        <td class="px-4 py-2 border-b border-gray-300 text-sm text-gray-700">
                            {{ $booking['pickup_date'] }}
                        </td>
                        <td class="px-4 py-2 border-b border-gray-300 text-sm text-gray-700">
                            {{ $booking['return_date'] }}
                        </td>
                        <td class="px-4 py-2 border-b border-gray-300 text-sm text-gray-700">
                            {{ $booking['purpose'] }}
                        </td>
                        <td class="px-4 py-2 border-b border-gray-300 text-sm text-gray-700">
                            {{ $booking['model'] }}
                        </td>
                        <td class="px-4 py-2 border-b border-gray-300 text-sm text-gray-700">
                            {{ $booking['vehicle'] }}
                        </td>
                        <td class="px-4 py-2 border-b border-gray-300 text-sm text-gray-700">
                            {{ $booking['driver_name'] }}
                        </td>
                        <td class="px-4 py-2 border-b border-gray-300 text-sm text-gray-700">
                            {{ $booking['status'] }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
