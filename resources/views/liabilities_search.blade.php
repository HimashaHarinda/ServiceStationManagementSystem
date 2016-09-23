<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
    <thead>
    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 181px;">ID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Description</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Amount</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 154px;">Company</th></tr>
    </thead>
    <tbody>
    @foreach($liabilities as $liability)
        <tr role="row" class="odd">
            <td>{{$liability->liabilityID}}</td>
            <td>{{$liability->description}}</td>
            <td>{{$liability->amount}}</td>
            <td>{{$liability->company}}</td>
            <td><button class="btn btn-danger" value="{{$liability->liabilityID}}"  onclick="deleteLiabilities('{{$liability->liabilityID}}')">Delete</button></td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    </tfoot>
</table>