<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
    <thead>
    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 181px;">Payment ID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Order ID </th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Amount</th></tr>
    </thead>
    <tbody>
    @foreach($janOrders as $janOrder)
        <tr role="row" class="odd">
            <td>{{$janOrder->paymentID}}</td>
            <td>{{$janOrder->orderID}}</td>
            <td>{{$janOrder->amount}}</td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    </tfoot>
</table>