<?= $this->Html->css("product") ?>
<?= $this->fetch("css") ?>

<div class="product-container">
    <h1 class=app-text>Nouveau Produit</h1>

    <?php
        echo $this->Form->create($produit, ["class" => "form-text"]);
        echo $this->Form->control('user_id', ["type" => "hidden", "value" => 1]);
        echo $this->Form->control('nom', ["class" => "form-input"]);
        echo $this->Form->control('prix', ["type" => 'decimal', "class" => "form-input"]);
        echo $this->Form->control('description', ["class" => "form-input"]);
        echo $this->Form->file("image", ["class" => "form-input"]);
        echo $this->Form->submit('Submit', ["class" => "form-input"]);
        echo $this->Form->end();
    ?>
</div>