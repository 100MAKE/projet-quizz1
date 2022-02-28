<div class="table-data">
<div class="order">
<div class="head">
<h3>Liste des Joueurs</h3>
<i class='bx bx-search' ></i>
<i class='bx bx-filter' ></i>
</div>
<table>
<thead>
<tr>
<th>Nom et Prenom</th>
<th>Score</th>
</tr>
</thead>
<tbody>
<?php foreach($data as $value):?>
<tr>
<td>
<img src="">
<p><?=$value['nom_complet']?></p>
</td>
<td><?=$value['score']?></td>
</tr>
<?php endforeach?></tbody>
</table>
</div>
</div>