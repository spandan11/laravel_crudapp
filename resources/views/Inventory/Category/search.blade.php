<x-app-layout>
    <div class="card">
        <div class="card-body">
            <h1>Searched Items</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($searchList as $searchItem)
                    <tr>
                        <td>{{$searchItem->id}}</td>
                        <td>{{$searchItem->name}}</td>
                        <td>{{$searchItem->code}}</td>
                        <td>
                            <a href="/inventory/category/edit?id={{$searchItem->id}}" class="btn btn-primary">Edit</a>
                            <a href="/inventory/category/delete?id={{$searchItem->id}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
        </div>
    </div>
</x-app-layout>