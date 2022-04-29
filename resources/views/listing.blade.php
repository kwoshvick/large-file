<!DOCTYPE html>
<head>
    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body >
<div class="d-flex justify-content-center">
    <H1>Invoices</H1>
</div>
<div  class="container mt-5" style="background-color: gray">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th>Invoice No.</th>
            <th>Stock Code</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Invoice Date</th>
            <th>Unit Price</th>
            <th>Customer ID</th>
            <th>Country</th>
        </tr>
        </thead>
        <tbody>
        @foreach($datas as $data)
        <tr>
            <th scope="row">#</th>
            <td>{{ $data->invoice_no }}</td>
            <td>{{ $data->stock_code }}</td>
            <td>{{ $data->description }}</td>
            <td>{{ $data->quantity }}</td>
            <td>{{ $data->invoice_date }}</td>
            <td>{{ $data->unit_price }}</td>
            <td>{{ $data->customer_id }}</td>
            <td>{{ $data->country }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="col-sm-12 offset-md-1 col-md-3 offset-lg-3 col-lg-6 pagination-container" style="margin-top: 50px">
        {{$datas->links()}}
    </div>
</div>

</body>
</html>
