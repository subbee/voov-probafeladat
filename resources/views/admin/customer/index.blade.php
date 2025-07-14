@extends("admin.layout.app")
@section("title", "Ügyfelek")
@section("content")

    <div class="inner-container table-responsive">
        <table class="table costumer-table">
            <thead>
            <tr>
                <th style="width: 64px"></th>
                <th>Név</th>
                <th>Email</th>
                <th>Telefonszám</th>
                <th class="text-end">Művelet</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td><img src="{{$customer->avatar}}" alt="avatar" class="rounded-circle avatar-img"></td>
                    <td class="fw-bold">{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->phone}}</td>
                    <td class="text-end">
                        <form id="delete-form-{{ $customer->id }}" action="{{ route('customers.destroy', $customer) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <a href="#" class="text-delete" onclick="event.preventDefault(); if(confirm('Biztosan törlöd?')) document.getElementById('delete-form-{{ $customer->id }}').submit();">törlés</a>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt--24 text-center">
        <a href="{{route("customers.create")}}" class="btn btn-primary">Új ügyfél hozzáadása</a>
    </div>
@endsection
