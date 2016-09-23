<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
    <thead>
    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 181px;">Payment ID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Service ID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Amount</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Date</th></tr>
    </thead>
    <tbody>
    @foreach($services as $service)
                <tr role="row" class="odd">
                  <td>{{$service->paymentID}}</td>
                  <td>{{$service->serviceID}}</td>
                  <td>{{$service->amount}}</td>
                  <td>{{$service->paidDate}}</td>
                </tr>
                @endforeach
    </tbody>
    <tfoot>
    </tfoot>
</table>

