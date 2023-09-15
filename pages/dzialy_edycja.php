<div class="content-wrapper">
    <div class="table-wrapper">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") // Zapisz dane z formularza do bazy [INSERT]
        {
//            SELECT * FROM dzialy WHERE id=$_GET['id']
            $query = "UPDATE dzialy SET Nazwa = ('" . $_POST['nazwa'] . "') WHERE Nazwa = 99";
            echo $query;

            if (mysqli_query($conn, $query)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($conn);
            }

        } else {
//            SELECT * FROM dzialy WHERE id=$_GET['id']
            ?>
            <form action="?page=dzialy_edycja"  method="POST">
                <table>
                    <tr>
                        <td><label for="id_dzial">Id_dzial</label></td>
                        <td><input type="text" name="id_dzial" id="id_dzial"></td>
                    </tr>
                    <tr>
                        <td><label for="nazwa">Nazwa</label></td>
                        <td><input type="text" name="nazwa" id="nazwa"></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center"><input type="Submit" value="Zapisz" style="padding: 3px 10px"></td>
                    </tr>
                </table>

            </form>
            <?php
        }
        ?>
    </div>
</div>