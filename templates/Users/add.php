<?= $this->Html->css("product") ?>
<?= $this->fetch("css") ?>

<div class=main-container>
    <div class="row">
        <aside class="column">
            <div class="side-nav">
                <h4 class=app-text class="heading"><?= __('Actions') ?></h4>
                <?= $this->Html->link(__('Liste des utilisateur'), ['action' =>
                'index'], ['class' => 'side-nav-item app-text']) ?>
            </div>
        </aside>
        <div class="column-responsive column-80">
            <div class="user form content">
            <?php
                echo $this->Form->create($user, ["class" => "form-text"]);
                echo $this->Form->control('email', ["class" => "form-input"]);
                echo $this->Form->control('username', ["class" => "form-input"]);
                echo $this->Form->control('password', ["type" => 'decimal', "class" => "form-input"]);
                echo $this->Form->submit('Submit', ["class" => "form-input"]);
                echo $this->Form->end();
            ?>
            </div>
        </div>
    </div>
</div>