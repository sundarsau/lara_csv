@extends('layouts.master')
@section('main-content')
    <h1>Laravel Generate CSV</h1>
    <div class="container">
        <div class="text-end">
            <a href="{{ route('download.csv') }}" class="btn btn-primary">Download CSV</a>
        </div>

        <h4>List of Applications</h4>
        <div class="table-responsive">
            <table class="table table-striped table-bordered mt-5">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $index => $row)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->address }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No Applications Found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
@endsection

  
