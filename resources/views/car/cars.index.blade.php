@foreach($cars as $car)
    <tr>
        <td>{{ $car->brand }}</td>
        <td>{{ $car->model }}</td>
        <td>{{ $car->date_purchased }}</td>
        <td>{{ $car->previous_owner }}</td>
        <td>{{ $car->contact_number }}</td>
        <td>{{ $car->status }}</td>
        <td>{{ $car->ownership }}</td>
        <td>
            @if ($car->status !== 'Sold')
                <form action="{{ route('cars.sell', $car->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-primary">Sell</button>
                </form>
            @endif
        </td>
    </tr>

    <tr>
        <td>{{ $car->brand }}</td>
        <td>{{ $car->model }}</td>
        <td>{{ $car->date_purchased }}</td>
        <td>{{ $car->previous_owner }}</td>
        <td>{{ $car->contact_number }}</td>
        <td>{{ $car->status }}</td>
        <td>{{ $car->ownership }}</td>
    </tr>

@endforeach

