<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Product Name</th>
                <th>Unit</th>
                <th>Type</th>
                <th>Information</th>
                <th>Qty</th>
                <th>Producer</th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1 @endphp
            @foreach($data as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{$p->product_name}}</td>
                    <td>{{$p->unit }}</td>
                    <td>{{$p->type}}</td>
                    <td>{{$p->information}}</td>
                    <td>{{$p->qty}}</td>
                    <td>{{$p->producer}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>