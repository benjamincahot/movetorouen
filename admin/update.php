<?php

include('inc/header.php');
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
                        <tr>
                            <th scope="row">1</th>
                            <td>Benjamin</td>
                            <td>benjamincahot@icloud.com</span></td>
                            <td>590935a7dbee533ef7f40077b6d580ff</td>
                            <td><span class="badge badge-danger">Administrateur</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Indorium</td>
                            <td>tiflobob76@gmail.com</span></td>
                            <td>3343f6a5f0edc50534536e25000f141e</td>
                            <td><span class="badge badge-warning">Développeur</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Jéremy</td>
                            <td>jeremy.dilard@gmail.com</span></td>
                            <td>184b4440c8600a2b369b582077c4f9f3</td>
                            <td><span class="badge badge-success">Branle-couille</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Florent</td>
                            <td>florent.demech@gmail.com</span></td>
                            <td>56533b3163ac59aafdeef571d94dcbf4</td>
                            <td><span class="badge badge-warning">Développeur</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php

include('inc/footer.php');
?>
