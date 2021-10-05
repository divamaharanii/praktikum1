<!DOCTYPE html>
<html>


    <body>
        <h3>Data Provinsi</h3>

        <br/>
        <br/>

        <table border="1">
            <tr>
                <th>id_provinsi</th>
                <th>nama</th>
                
            </tr>

            @foreach($provinsi as $p)
            <tr>
                <td>{{ $p->ID_PROVINSI }}</td>
                <td>{{ $p->NAMA }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>