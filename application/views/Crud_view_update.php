<?php echo validation_errors(); ?>

<?php echo form_open('Crud_controller/c_update') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <h3>Edycja piłkarza o indeksie = <?php echo $crud_list->indeks ?> </h3>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <table class="table table-bordered table-hover">
                <tr>
                    <td><label for="indeks">indeks</label></td>
                    <td><input type="input" name="indeks" readonly value="<?php echo $crud_list->indeks ?>" /> </td>
                </tr>
                <tr>
                    <td><label for="imie">imię</label></td>
                    <td><input type="input" name="imie" value="<?php echo $crud_list->imie ?>" /> </td>
                </tr>
                <tr>
                    <td><label for="nazwisko">nazwisko</label></td>
                    <td><input type="input" name="nazwisko" value="<?php echo $crud_list->nazwisko ?>" /> </td>
                </tr>
                <tr>
                    <td><label for="klub">klub</label></td>
                    <td><input type="input" name="klub" value="<?php echo $crud_list->klub ?>" /> </td>
                </tr>
                <tr>
                    <td><label for="numerNaKoszulce">numer na koszulce</label></td>
                    <td><input type="input" name="numerNaKoszulce" value="<?php echo $crud_list->numerNaKoszulce ?>" /> </td>
                </tr>
                <tr>
                    <td><label for="narodowosc">narodowość</label></td>
                    <td><input type="input" name="narodowosc" value="<?php echo $crud_list->narodowosc ?>" /> </td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Modyfikuj" class="btn btn-success"/>
            <a href="http://orfi.uwm.edu.pl/~s150788/projekt3/index.php/Crud_controller/c_select" class="btn btn-danger text-center"> Cofnij </a>
            </form>
        </div>
    </div>
</div>