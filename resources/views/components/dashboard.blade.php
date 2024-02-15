<div class="row">
<div class="col-lg-4 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3> Rp. {{$user}}</h3>
                <p>Keseluruhan Omset</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="{{ route('admin.user.index') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3> Rp. {{$user}}</h3>
                <p>Customer</p>
            </div>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
            <a href="{{ route('admin.user.index') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{$category}}</h3>
                <p>Kategori Produk</p>
            </div>
            <div class="icon">
                <i class="fas fa-list-alt"></i>
            </div>
            <a href="{{ route('admin.category.index') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
  
    <div class="col-lg-4 col-6">
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3>{{$collection}}</h3>
                <p>Total Produk</p>
            </div>
            <div class="icon">
                <i class="fas fas fa-file-pdf"></i>
            </div>
            <a href="{{ route('admin.collection.index') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3>{{$user}}</h3>
                <p>Orderan Baru</p>
            </div>
            <div class="icon">
                <i class="fas fas fa-file-pdf"></i>
            </div>
            <a href="{{ route('admin.collection.index') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3>{{$user}}</h3>
                <p>Orderan Sedang Diproses</p>
            </div>
            <div class="icon">
                <i class="fas fas fa-file-pdf"></i>
            </div>
            <a href="{{ route('admin.collection.index') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3>{{$user}}</h3>
                <p>Orderan Sedang Dikirim</p>
            </div>
            <div class="icon">
                <i class="fas fas fa-file-pdf"></i>
            </div>
            <a href="{{ route('admin.collection.index') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3>{{$user}}</h3>
                <p>Orderan Selesai</p>
            </div>
            <div class="icon">
                <i class="fas fas fa-file-pdf"></i>
            </div>
            <a href="{{ route('admin.collection.index') }}" class="small-box-footer">View <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>