public function create()
{
    return view('cars.create');
}

public function store(Request $request)
{
    $validatedData = $request->validate([
        'brand' => 'required',
        'model' => 'required',
        'date_purchased' => 'required|date',
        'previous_owner' => 'required',
        'contact_number' => 'required',
        'status' => 'required',
        'ownership' => 'required',
    ]);

    Car::create($validatedData);

    return redirect()->route('cars.index')->with('success', 'Car added successfully.');
}

public function destroy($id)
{
    $car = Car::findOrFail($id);
    $car->delete();

    return redirect()->route('cars.index')->with('success', 'Car deleted successfully.');
}

public function index()
{
    $cars = Car::where('status', '!=', 'Sold')->get();
    return view('cars.index', compact('cars'));
}

public function index()
{
    $cars = Car::where('status', '!=', 'Sold')->get();
    return response()->json(['cars' => $cars]);
}

public function sell(Request $request, $id)
{
    $car = Car::findOrFail($id);

    // Update the necessary fields to mark the car as sold
    $car->status = 'Sold';
    $car->save();

    return redirect()->route('cars.index')->with('success', 'Car sold successfully.');
}

public function edit($id)
{
    $car = Car::findOrFail($id);
    return view('cars.edit', compact('car'));
}

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'brand' => 'required',
        'model' => 'required',
        'date_purchased' => 'required|date',
        'previous_owner' => 'required',
        'contact_number' => 'required',
        'status' => 'required',
        'ownership' => 'required',
    ]);

    $car = Car::findOrFail($id);
    $car->update($validatedData);

    return redirect()->route('cars.index')->with('success', 'Car updated successfully.');
}
