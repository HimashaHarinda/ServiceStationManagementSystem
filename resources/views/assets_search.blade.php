<table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
    <thead>
    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 181px;">ID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Description</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Type</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 154px;">Value</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Current Value</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 112px;">Depreciation Rate</th><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 181px;"></th></tr>
    </thead>
    <tbody>
    @foreach($assets as $asset)
        <tr role="row" class="odd">
            <td>{{$asset->assetID}}</td>
            <td>{{$asset->description}}</td>
            <td>{{$asset->type}}</td>
            <td>{{$asset->value}}</td>
            <td>{{$asset->duration}}</td>
            <td>{{$asset->depreciation_rate}}</td>
            <td><button class="btn btn-danger" value="{{$asset->assetID}}"  onclick="deleteAssets('{{$asset->assetID}}')">Delete</button></td>
        </tr>
    @endforeach
    </tbody>
    <tfoot>
    </tfoot>
</table>