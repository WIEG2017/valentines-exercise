<?php
    $page_title = "Members";
    include "incl/header.php";
    if(!isset($_SESSION['CID'])) header('Location: ./login.php?url=medlem.php');
?>
<div class="tableWrapper">
    <table>
        <tr>
            <th>Email</th>
            <th>Name</th>
            <th>Password</th>
        </tr>
        <?php
            foreach($customers as $customer)
            {
                echo "<tr>";

                echo "<td>" . $customer["email"] . "</td>";
                echo "<td>" . $customer["name"] . "</td>";
                echo "<td>" . $customer["password"] . "</td>";

                echo "</tr>";
            }
        ?>
    </table>
</div>

<?php
    include "incl/footer.php";
?>