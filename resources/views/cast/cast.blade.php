@extends('layout.master')

@section('judul')
Data pemain Film
@endsection

@section('content')
<table class="table table-hover">
    <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Umur</th>
          <th scope="col">Bio</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Farhan</td>
          <td>17</td>
          <td>Anak SMK TI bazma</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Freya</td>
          <td>17</td>
          <td>Member JKT 48</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Vonzy</td>
          <td>19</td>
          <td>BA Onic Esport</td>
        </tr>
    </tbody>
  </table>
@endsection