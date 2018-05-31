<?php

include('inc/header.php');

$sql = "SELECT * FROM user";
$query = $pdo->prepare($sql);
$query->execute();
$users = $query->fetchAll();
?>

<div class="col-lg-12">
    <div class="card">
        <div class="card-title">
            <h4>Liste des utilisateurs </h4>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Pseudo</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Grade</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($users as $user) { ?>
                        <tr>
                        <th scope="row"><?php echo $user['id'] ?></th>
                        <td><?php echo $user['username'] ?></td>
                        <td><?php echo $user['email'] ?></span></td>
                        <td><?php echo $user['password'] ?></td>
                        <td><span class="badge badge-danger">Administrateur</td>
                        <td><a href="upgrade.php"><i class="fas fa-plus"></i> <a href="approved.php"><i class="fas fa-check"></i> <a href="banned.php" alt="Bannir"><i class="fas fa-trash"></i></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php

include('inc/footer.php');
?>
