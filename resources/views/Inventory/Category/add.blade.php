<x-app-layout>
    <div class="card">
        <div class="card-body">
            
        <h1>Add Product</h1>

            <form action="/inventory/category/add-post" method="post">
            @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="code">Code:</label>
                    <input type="text" name="code" class="form-control" required>
                </div>

                <div class="form-group mt-2">
                    <button class="btn btn-success">
                        Add
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>