<html>

<body>
    <table border="1">
        <tr>
            <th>
                No
            </th>
            <th>
                Nama
            </th>
            <th>Semester</th>
        </tr>
        <tr>
            <?php
            foreach ($matkul as $mat) {
                $no = 1;
            ?>
                <td>{{$no}}</td>
                <td>{{$mat->nama}}</td>
                <td>{{$mat->semester}}</td>
            <?php $no++;
            } ?>
        </tr>
    </table>
</body>

</html>