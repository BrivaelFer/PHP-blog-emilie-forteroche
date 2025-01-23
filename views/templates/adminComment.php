<?php
$filterArticle = (isset($filter['idArticle']))? $filter['idArticle']: -1;
$filterDate = (isset($filter['dateOrder']))? $filter['idArticle']: -2;
$filterSearch = (isset($filter['searche']))? $filter['idArticle']: false;
?>
<h2>Administration des commentaires</h2>
<div>
    <form class="comment_search" action="index.php">
        <input type="hidden" name="action" value="adminComment">
        <select name="idArticle">
            <option value="">Aucune</option>
            <?php
            foreach($articles as $key=>$article){
                $id = $article->getId()
                ?>
                <option value="<?= $id ?>"<?= ($filterArticle == $id)? ' selected':''; ?>><?= $article->getTitle() ?></option>
                <?php
            }
            ?>
        </select>
        <select name="dateOrder">
            <option value="">Aucune</option>
            <option value="1"<?= ($filterDate == 1)? ' selected':''; ?>>Croissant</option>
            <option value="-1"<?= ($filterDate == -1)? ' selected':''; ?>>Décroissant</option>
        </select>
        <div>
            <input name="search" type="text" value="<?= ($filterSearch)? $filterSearch:''; ?>">
        </div>
        <input class="submit" type="submit" value="Recherche">
    </form>
    
    <table class="basic_table">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Article</th>
                <th>Pseudo</th>
                <th>Commentaire</th>
                <th>date</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($comments as $key=>$comment){
                ?>
                <tr>
                    <td><?= $comment->getId()?></td>
                    <td><?= $comment->getIdArticle()?></td>
                    <td><?= $comment->getPseudo()?></td>
                    <td><?= $comment->getContent()?></td>
                    <td><?= $comment->getDateCreation()->format('d-m-Y')?></td>
                    <td>
                        <div titre="supprimer" class="delete-button">
                            <a href="index.php?action=deleteComment&id=<?= $comment->getId()?>">✖</a>
                        </div>
                    </td>
                </tr>    
                <?php
            }
            ?>
            
        </tbody>
    </table>
    <a class="submit" href="index.php?action=admin">Retour</a>
</div>