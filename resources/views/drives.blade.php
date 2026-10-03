@extends('layouts.app')
@section('content')
<h1 class="mb-6 text-2xl font-semibold">Placement Drives</h1>

<div class="overflow-x-auto rounded-lg border border-gray-200 bg-white shadow-sm">
    <table class="min-w-full divide-y divide-gray-200 text-sm">
        <thead class="bg-gray-100 text-left font-medium text-gray-700">
            <tr>
                <th class="px-4 py-3">Company</th>
                <th class="px-4 py-3">Role</th>
                <th class="px-4 py-3 text-right">Package (LPA)</th>
                <th class="px-4 py-3 text-right">Min CGPA</th>
                <th class="px-4 py-3">Last Date</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100">
            @foreach ($drives as $drive)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-3 font-medium">{{ $drive['company'] }}</td>
                    <td class="px-4 py-3">{{ $drive['role'] }}</td>
                    <td class="px-4 py-3 text-right">{{ number_format($drive['package_lpa'], 1) }}</td>
                    <td class="px-4 py-3 text-right">{{ number_format($drive['min_cgpa'], 1) }}</td>
                    <td class="px-4 py-3">{{ \Illuminate\Support\Carbon::parse($drive['last_date'])->format('d M Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
