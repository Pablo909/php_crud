<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th> lp </th>
                        <th> indeks </th>
                        <th> imię </th>
                        <th> nazwisko </th>
                        <th> klub</th>
                        <th> numer na koszulce</th>
                        <th> narodowość</th>
                    </tr>
                    </thead>
                    <?php $i = 1; ?>
                    <?php foreach ($crud_list as $el) { ?>
                        <tr>
                            <td> <?php echo ($i); $i = $i + 1 ?> </td>
                            <td> <?php echo $el['indeks'] ?> </td>
                            <td> <?php echo $el['imie'] ?> </td>
                            <td> <?php echo $el['nazwisko'] ?> </td>
                            <td> <?php echo $el['klub'] ?> </td>
                            <td> <?php echo $el['numerNaKoszulce'] ?> </td>
                            <td> <?php echo $el['narodowosc'] ?> </td>
                            <td class="text-center"> <a href="c_update_form/<?php echo $el['indeks'] ?>" class="btn btn-success"> Edytuj </a> </td>
                            <td class="text-center"> <a href="c_delete/<?php echo $el['indeks'] ?>" class="btn btn-danger"> Kasuj </a> </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
        <div class="row">
        <div class="col-md-1"></div>
        <a href="c_insert" class="btn btn-success"> Dodaj </a>
        </div>
    </div>
</body>