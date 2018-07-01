<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">

<table class="pure-table pure-table-bordered" align="center">
    <thead>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>address</th>
            <th>position</th>
            <th>salary</th>
            <th>skills</th>
        </tr>
    </thead>

<?php foreach ($datos as $dato): ?>

    <?php if ( $dato["email"] == $email ){ ?>
        <tr>
            <td><?=$dato["name"] ?></td>
            <td><?=$dato["email"] ?></td>
            <td><?=$dato["phone"] ?></td>
            <td><?=$dato["address"] ?></td>
            <td><?=$dato["position"] ?></td>
            <td><?=$dato["salary"] ?></td>
            <td>
                <?php foreach ($dato["skills"] as $skill): ?>
                    <?= $s = $skill['skill'] ?>
                <?php endforeach;?>
            </td>
        </tr>
    <?php } ?>

<?php endforeach; ?>

</table>