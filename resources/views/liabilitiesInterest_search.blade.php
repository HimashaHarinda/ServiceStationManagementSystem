<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
    <thead>
    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 181px;">ID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Interest Rate</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Duration</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 154px;">Principal Amount</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Calculated Interest</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 181px;">Total Amount</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 181px;">Date</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 181px;"></th></tr>
    </thead>
    <tbody>
    @foreach($liabilityInterest  as $liabilityD)
                <tr role="row" class="odd">
                  <td>{{$liabilityD->liabilityID}}</td>
                  <td>{{$liabilityD->interest_rate}}</td>
                  <td>{{$liabilityD->duration}}</td>
                  <td>{{$liabilityD->principal_amount}}</td>
                  <td>{{$liabilityD->calculated_interest}}</td>
                  <td>{{$liabilityD->total_amount}}</td>
                  <td>{{$liabilityD->calculated_date}}</td>
                  <td><button class="btn btn-danger" value="{{$liabilityD->liabilityID}}"  onclick="deleteLiabilityInterest('{{$liabilityD->liabilityID}}','{{$liabilityD->principal_amount}}','{{$liabilityD->calculated_interest}}','{{$liabilityD->total_amount}}')">Delete</button></td>
                </tr>

                @endforeach 
    </tbody>
    <tfoot>
    </tfoot>
</table>

