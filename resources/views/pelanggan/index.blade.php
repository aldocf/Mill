@extends('layouts.index')

@section('pageTitle')
<h3>List Pelanggan</h3>
@endsection

@section('pageOptions')
<a href={{ route('pelanggan.create')}} class="btn btn-primary">Tambah Pelanggan</a>
@endsection

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="table-responsive">
        <table class="table table-bordered mt-3">
          <thead>
            <tr>
              <th>Kode Pelanggan </th>
              <th>Nama Pelanggan </th>
              <th>Alamat </th>
              <th>Kota </th>
              <th>Kode Pos </th>
              <th>No Telpon </th>
              <th>Fax </th>
              <th>Kontak Supplier</th>
              <th>Limit Hutang </th>
              <th>Default Tempo </th>
              <th>NPWP </th>
              <th>NPPKP </th>
              <th colspan="3">Action </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($pelanggans as $pelanggan)
            <tr>
              <td> {{$pelanggan->kode_pelanggan}} </td>
              <td> {{$pelanggan->nama_pelanggan}} </td>
              <td> {{$pelanggan->alamat}} </td>
              <td> {{$pelanggan->kota}} </td>
              <td> {{$pelanggan->kode_pos}} </td>
              <td> {{$pelanggan->no_telp}} </td>
              <td> {{$pelanggan->fax}} </td>
              <td> {{$pelanggan->kontak_person}} </td>
              <td> {{$pelanggan->limit_hutang}} </td>
              <td> {{$pelanggan->default_tempo}} </td>
              <td> {{$pelanggan->npwp}} </td>
              <td> {{$pelanggan->nppkp}} </td>
              <td><a href="{{ route('pelanggan.edit', [ 'id' => $pelanggan->id ])}}" class="btn btn-secondary"> Update </a></td>
              <td>
                @include('pelanggan.delete')
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection