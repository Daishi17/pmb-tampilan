@extends('template.master')
@section('title','Program Studi')
@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Table Program Studi</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Prodi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($coro as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->nm_prodi}}</td>
                    <td>
                        <a href="/siswa/edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/siswa/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin dihapus?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
@endsection
