<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">

<table class="pure-table pure-table-bordered" align="center">
    <thead>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>position</th>
            <th>salary</th>
        </tr>
    </thead>

<?php foreach ($datos as $dato): ?>

    <tr>
        <td><?=$dato["name"] ?></td>
        <td><?=$dato["email"] ?></td>
        <td><?=$dato["position"] ?></td>
        <td><?=$dato["salary"] ?></td>
    </tr>

<?php endforeach; ?>

    <tr>
        <form action="buscar-empleado-email" method="POST" class="pure-form">
            <td colspan="1" align="center">
                <label for="email"><strong>Buscar empleado por email:</strong></label>
            </td>
            <td colspan="2" align="center">
                <input type="text" name="email" placeholder="Email...">
            </td>
            <td colspan="1" align="center">
                <input type='submit' value='Buscar' >
            </td>
        </form>
    </tr>

     <tr>
        <form action="resultado-comparar-salarios" method="GET" class="pure-form">
             <td colspan="1" align="center">
                <label for="email"><strong>Buscar empleados por rango de salario:</strong></label>
            </td>
            <td colspan="1" align="center">
                <input class="pure-input-1" type="text" name="salarioMinimo" placeholder="Salario Mínimo...">
            </td>
            <td colspan="1" align="center">
                <input class="pure-input-1" type="text" name="salarioMaximo" placeholder="Salario Máximo...">
            </td>
            <td colspan="1" align="center">
                <input class="pure-input-1" type='submit' value='Buscar' >
            </td>
        </form>
    </tr>

</table>