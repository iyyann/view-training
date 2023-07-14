<template>
        <div class='w-full max-w-xs'>
            <form id="name-form" class="big-white shadow-md rounded px-8 pt-6 pb-8 mb-10">
                <h1 class='text-black-700 text-l font-bold mb-2'>Name Form</h1>
            
                <!-- brand -->
                <div class="form-group">
                    <label for="brand">BRAND</label>
                    <input type="text" class="form-control" id="brand" name="brand" required>
                </div>

                <!-- model -->
                <div class="form-group">
                    <label for="model">MODEL</label>
                    <input type="text" class="form-control" id="model" name="model" required>
                </div>

                <!-- prevOwner -->
                <div class="form-group">
                    <label for="prevOwner">PREV OWNER</label>
                    <input type="text" class="form-control" id="prevOwner" name="prevOwner" required>
                </div>

                <!-- datePurchased -->
                <div class="form-group">
                    <label for="datePurchased">DATE PURCHASED</label>
                    <input type="date" class="form-control" id="datePurchased" name="datePurchased" required>
                </div>

                <!-- Contact Number -->
                <div class="form-group">
                    <label for="contact_number">Contact Number</label>
                    <input type="text" class="form-control" id="contact_number" name="contact_number" required>
                </div>

                <!-- status -->
                <div class="form-group">
                    <label for="status">STATUS</label>
                    <input type="text" class="form-control" id="status" name="status" required>
                </div>

                <!-- ownership -->
                <div class="form-group">
                    <label for="ownership">OWNERSHIP</label>
                    <input type="number" class="form-control" id="ownership" name="ownership" required>
                </div>

                <!-- Gender -->
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <button class="big-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" onclick="submitName(event)">
                    SUBMIT
                </button>
        </form>
    </div>
</template>

<script>
    export default{
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
    }
</script>

<style>
    
</style>