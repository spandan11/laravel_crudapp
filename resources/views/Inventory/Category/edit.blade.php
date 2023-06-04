<x-app-layout>
    <div class="card">
        <div class="card-body">
            
        <h1>Update Product</h1>

            <form action="/inventory/category/edit-post" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$category->id}}">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name"  value="{{$category->name}}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="code">Code:</label>
                    <input type="text" name="code" value="{{$category->code}}" class="form-control" required>
                </div>

                <div class="form-group mt-2">
                    <button class="btn btn-success">
                        Save
                    </button>
                </div>

            </form>
        </div>
    </div>
</x-app-layout>