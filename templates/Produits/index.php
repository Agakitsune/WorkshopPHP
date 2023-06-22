<?= $this->Html->css("product") ?>
<?= $this->fetch("css") ?>

<div class=product-container>
    <h1 class=app-text>Produits<h1>
    <table>
        <tr>
            <th class=app-text>En vente</th>
        </tr>
        <?php foreach ($produits as $produit): ?>
            <tr>
                <td class=app-text>
                    <?= $produit->nom ?>
                <td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
