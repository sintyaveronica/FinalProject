<x-admin>
    @section('title')
        {{ 'Create Product' }}
    @endsection
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Create Product</h3>
                        <div class="card-tools">
                            <a href="{{ route('admin.collection.index') }}" class="btn btn-info btn-sm">Back</a>
                        </div>
                    </div>
                    <form class="needs-validation" novalidate action="{{ route('admin.collection.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" required>
                                        @error('name')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <select name="category" id="category" class="form-control" required>
                                            <option value="" selected disabled>Select category</option>
                                            @foreach ($category as $cat)
                                                <option {{ old($cat->id) == $cat->id ? 'selected' : '' }} value="{{ $cat->id }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                            @error('category')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" name="image" id="image" class="form-control" required>
                                        @error('image')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Harga</label>
                                        <input type="number" name="harga" id="harga" value="{{ old('harga') }}" class="form-control" required>
                                        @error('name')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin>
