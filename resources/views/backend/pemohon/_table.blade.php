@push('css')
	@include('datatables.datatables-css')
@endpush
<div class="float-right" id="buttons"></div>
<table id="tabel-pemohon" class="table table-hover table-sm" style="width:100%">
    <thead>
        <tr>
            <th>#</th>
            <th>NAMA PEMOHON</th>
            <th>ALAMAT PEMOHON</th>
            <th>NO TELEPON</th>
            <th class="text-right">AKSI</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

@push('scripts')
    @include('datatables.datatables-js')
@endpush