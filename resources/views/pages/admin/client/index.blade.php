@extends('templates.admin')
@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Pesanan
                        <small>Pesanan Masuk</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item active">Pesanan Masuk</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Manage Order</h5>
                </div>
                <div class="card-body order-datatable">
                    <table class="display" id="basic-1">
                        <thead>
                        <tr>
                            <th>No</th>

                            <th class="text-center">Nama Client</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">No Hp</th>
                            <th class="text-center">Tanggal Daftar</th>
                            <th class="text-center"     >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>

                        <td>{{ $data->name }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->phonenumber }}</td>
                             <td>{{ $data->created_at }}</td>
                            <td>
                                <a href="#"
                                    class="btn tblActnBtn"><i data-feather="edit"></i></a>
                                 <a href="{{ route('admin.client.destroy', $data->id) }}"
                                    onclick="return confirm('Apakah Anda akan menghapus data ini?')"
                                    class="btn tblActnBtn danger"><i data-feather="trash-2"></i></a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

@endsection
