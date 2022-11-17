<div class="form-group col-sm-6 mb-1">
    @php $is_invalid = ''; $errors->has('warehouse_id') ? $is_invalid = 'is-invalid' : ''; @endphp
    {!! Form::label('warehouse_id', 'Gudang') !!}
    {!! Form::select('warehouse_id', $warehouse, isset($incomingWood) ? $incomingWood->warehouse_id : null, ['class' => "select2 form-control $is_invalid",'id' => 'warehouse_id']) !!}
    @error('warehouse_id')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="row py-2">
    <div class="form-group col-sm-6">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="administrator_access" value="checked" />
            <label class="form-check-label" for="administrator_access">Pilih Semua</label>
        </div>
    </div>
</div>

<div class="form-group col-sm-12 mb-1">
    <table width="100%" class="table table-bordered" id="table-detail">
        <thead>
            <tr>
                <th width="5%" class="text-center">Checklist</th>
                <th width="95%" class="text-left">Nama</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>   
</div>