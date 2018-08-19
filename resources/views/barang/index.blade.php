@extends('layouts.index')

@section('pageTitle')
<h3>List Barang</h3>
@endsection

@section('pageOptions')
<a href={{ route('barang.create')}} class="btn btn-primary">Tambah Barang</a>
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <table class="table table-bordered mt-3">
        <thead>
          <tr>
            <th>Tanggal Pembelian </th>
            <th>Kode Barang </th>
            <th>Nama Barang </th>
            <th>Berat (Kg) </th>
            <th>Harga Beli </th>
            <th>Harga Jual 1 </th>
            <th>Harga Jual 2 </th>
            <th>Harga Jual 3 </th>
            <th>Harga Jual 4 </th>
            <th>Harga Jual 5 </th>
            <th>Qty </th>
            <th colspan="3">Action </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($barangs as $barang)
          <tr>
            <td> {{date('j F Y, H:i', strtotime($barang->tgl_beli))}} </td>
            <td> {{$barang->kode_barang}} </td>
            <td> {{$barang->nama}} </td>
            <td> {{$barang->berat}} </td>
            <td> {{$barang->harga_beli}} </td>
            <td> {{$barang->harga_jual1}} </td>
            <td> {{$barang->harga_jual2}} </td>
            <td> {{$barang->harga_jual3}} </td>
            <td> {{$barang->harga_jual4}} </td>
            <td> {{$barang->harga_jual5}} </td>
            <td> {{$barang->qty}} </td>
            <td><a href="{{ route('barang.edit', [ 'id' => $barang->id ])}}" class="btn btn-secondary"> Update </a></td>
            <td>
              @include('barang.delete')
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection