<h2>Page monitoring</h2>

<div>
    <table class="basic_table">
        <thead>
            <tr>
                <th >ID</th>
                <th >
                    <span>Titre</span>
                    <span>
                        <a href="index.php?action=monitor&tri=title&order=1" class="tri-up<?= ($filtre['title'] == 1)? ' tri-actif':'' ?>"></a>
                        <a href="index.php?action=monitor&tri=title&order=-1" class="tri-down<?= ($filtre['title'] == -1)? ' tri-actif':'' ?>"></a> 
                    </span>
                </th>
                <th >
                    <span>Vues</span>
                    <span>
                        <a href="index.php?action=monitor&tri=view_count&order=1" class="tri-up<?= ($filtre['view_count'] == 1)? ' tri-actif':'' ?>"></a>
                        <a href="index.php?action=monitor&tri=view_count&order=-1" class="tri-down<?= ($filtre['view_count'] == -1)? ' tri-actif':'' ?>"></a>
                    </span>
                </th>
                <th >
                    <span>Commentaires</span>
                    <span>
                        <a href="index.php?action=monitor&tri=comment&order=1" class="tri-up<?= ($filtre['comment'] == 1)? ' tri-actif':'' ?>"></a>
                        <a href="index.php?action=monitor&tri=comment&order=-1" class="tri-down<?= ($filtre['comment'] == -1)? ' tri-actif':'' ?>"></a>
                    </span>
                </th>
                <th >
                    <span>Publication</span>
                    <span>
                        <a href="index.php?action=monitor&tri=date_creation&order=1" class="tri-up<?= ($filtre['date_creation'] == 1)? ' tri-actif':'' ?>"></a>
                        <a href="index.php?action=monitor&tri=date_creation&order=-1" class="tri-down<?= ($filtre['date_creation'] == -1)? ' tri-actif':'' ?>"></a>
                    </span>
                </th>
                <th >
                    <span>Modification</span>
                    <span>
                        <a href="index.php?action=monitor&tri=date_update&order=1" class="tri-up<?= ($filtre['date_update'] == 1)? ' tri-actif':'' ?>"></a>
                        <a href="index.php?action=monitor&tri=date_update&order=-1" class="tri-down<?= ($filtre['date_update'] == -1)? ' tri-actif':'' ?>"></a>
                    </span>
                </th>
                <th ><a href="index.php?action=monitor">✖</a></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $key=>$article) { ?>
                <tr>
                    <td ><?= $article->getId() ?></td>
                    <td >
                        <a href="index.php?action=showArticle&id=<?= $article->getId() ?>">
                            <?= $article->getTitle() ?>
                        </a>
                    </td>
                    <td ><?= $article->getViewCount() ?></td>
                    <td ><?= $commentCounts[$key] ?></td>
                    <td ><?= $article->getDateCreation()->format('d-m-Y') ?></td>
                    <td ><?= $article->getDateUpdate()->format('d-m-Y') ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    
    <a class="submit" href="index.php?action=admin">Retour</a>
</div>