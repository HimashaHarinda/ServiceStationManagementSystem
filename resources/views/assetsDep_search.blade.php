<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
    <thead>
    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 181px;">ID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Original Value</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Current Value</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 154px;">Depreciation Amount</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Date</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;"></th></tr>
    </thead>
    <tbody>
   @foreach($assetDep as $assetD)
                <tr role="row" class="odd">
                  <td>{{$assetD->assetID}}</td>
                  <td>{{$assetD->original_value}}</td>
                  <td>{{$assetD->current_value}}</td>
                  <td>{{$assetD->depreciation_amount}}</td>
                  <td>{{$assetD->calculated_date}}</td>
                  <td><button class="btn btn-danger" value="{{$assetD->assetID}}"  onclick="deleteAssetDep('{{$assetD->assetID}}','{{$assetD->original_value}}','{{$assetD->current_value}}')">Delete</button></td>
                </tr>

                @endforeach 
    </tbody>
    <tfoot>
    </tfoot>
</table>