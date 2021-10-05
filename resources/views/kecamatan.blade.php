<!DOCTYPE html>
<html>


    <body>
        <h3>Data Kecamatan</h3>

        <br/>
        <br/>

        <table border="1">
            <tr>
                <th>id_kecamatan</th>
                <th>id_kota</th>
                <th>nama_kecamatan</th>
            </tr>

            @foreach($kecamatan as $p)
            <tr>
                <td>{{ $p->ID_KECAMATAN }}</td>
                <td>{{ $p->ID_KOTA }}</td>
                <td>{{ $p->NAMA_KEC }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>