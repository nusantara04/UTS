<form method="post" action="{{url('jurusan/update')}}">
    {{csrf_field()}}
    <input type="text" name="id"
            value="@if(count($result) > 0) {{$result['master'] [0]->id_jurusan}} @endif"
            readonly><br>
    <input type="text" name="namajurusan"
            value="@if(count($result) > 0) {{$result['master'] [0]->nama_jurusan}} @endif"
            required><br>
    <input type="text" name="kodejurusan"
            value="@if(count($result) > 0) {{$result['master'] [0]->kodejurusan}} @endif"><br> 
    <input type="text" name="nama_kajur"
            value="@if(count($result) > 0) {{$result['master'] [0]->nama_kajur}} @endif"><br>
    <button type="submit">Simpan</button>
</form>