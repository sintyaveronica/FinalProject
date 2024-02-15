<x-admin>
    @section('title')
        {{ 'Orders' }}
    @endsection
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Laporan Orders</h3>
            <div class="card-tools">
                <a href="{{ route('admin.product.create') }}" class="btn btn-sm btn-info">New</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped" id="productTable">
                <thead>
                    <tr>
                        <th>InvoiceID</th>
                        <th>Pelanggan</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $product)
                        <tr>
                            <td>{{ $product->InvoiceID }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td><a href="{{ route('admin.product.edit', encrypt($product->id)) }}"
                                    class="btn btn-sm btn-primary">Edit</a></td>
                            <td>
                                <form action="{{ route('admin.product.destroy', encrypt($product->id)) }}" method="POST" onsubmit="return confirm('Are sure want to delete?')">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @section('js')
        <script>
            $(function() {
                $('#productTable').DataTable({
                    "paging": true,
                    "searching": true,
                    "ordering": true,
                    "responsive": true,
                });
            });
        </script>
    @endsection
</x-admin>
