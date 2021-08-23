<?php echo validation_errors(); ?>


<?php echo form_open('Crud_controller/c_insert') ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <h3> Tworzenie nowego rekordu w tablicy Piłkarz</h3>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <table class="table table-bordered table-hover">
                <tr>
                    <td><label for="imie">Imię</label></td>
                    <td><input type="input" name="imie" /></td>
                </tr>
                <tr>
                    <td><label for="nazwisko">Nazwisko</label></td>
                    <td><input type="input" name="nazwisko" /></td>
                </tr>
                <tr>
                    <td><label for="klub">Klub</label></td>
                    <td><input type="input" name="klub" /></td>
                </tr>
                <tr>
                    <td><label for="numerNaKoszulce">Numer na koszulce</label></td>
                    <td><input type="input" name="numerNaKoszulce" /></td>
                </tr>
                <tr>
                    <td><label for="narodowosc">Narodowość</label></td>
                    <td><input type="input" name="narodowosc" /></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="Dodaj" class="btn btn-success"/>
            <a href="http://orfi.uwm.edu.pl/~s150788/projekt3/index.php/Crud_controller/c_select" class="btn btn-danger text-center"> Cofnij </a>
            </form>
        </div>
    </div>
</div>