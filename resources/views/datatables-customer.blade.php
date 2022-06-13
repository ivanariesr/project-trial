<!DOCTYPE html>
<html>
<head>
  <title>Laravel 8 DataTables Example</title>

  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>

</head>

<body>

<div>
<style type="text/css">
table {
    counter-reset: row-num -1;
  }
  table tr {
    counter-increment: row-num;
  }
  table tr td:first-child::before {
      content: counter(row-num);
}
</style>

      <table class="table table-bordered table-striped" id="DataTables">
        <thead class="thead-dark">
         <tr>
           <th scope="col">No</th>
           <th scope="col">Nama Customer</th>
           <th scope="col">Type</th>
           <th scope="col">Area</th>
           <th scope="col">Unit</th>
           <th scope="col">Kode Customer</th>
           <th scope="col">Edit</th>
           <th scope="col">Delete</th>
         </tr>
       </thead>
       <tbody>
         @foreach ($displaydata as $dc)
         <tr>
           <td></td>
           <td> {{$dc->customer}}</td>
           <td> {{$dc->cust_type}}</td>
           <td> {{$dc->area}}</td>
           <td> {{$dc->unit}}</td> 
           <td> {{$dc->no_idc}}</td> 
           <td>
             <a href="{{ route('data-customer.edit', $dc->id)}}" target="_parent" class="btn btn-primary">
               Edit
             </a>
           </td>
           <td>
             
             <form onsubmit="return confirm('Apa anda yakin ingin menghapus data?');" action="{{route('data-customer.destroy', $dc->id)}}" method="post">
               @csrf
               @method('DELETE')
               <button class="btn btn-danger">Hapus</button>
             </form>
           </td>
         </tr>
         @endforeach
       </tbody>

 </table>

<script type="text/javascript">
$(document).ready(function () {
    $('#DataTables').DataTable({
        lengthChange: false,
        paging: true,
        ordering: true,
        info: false,
    });
});
</script>
</div>  
</body>
</html>