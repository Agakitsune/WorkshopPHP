<div class="user index content">
    <?= $this->Html->link(__('Nouvel Utilisateur'), ['action' => 'add'], ['class'
    => 'button float-right app-text']) ?>
    <h3 class=app-text><?= __('User') ?></h3>
    <div class="table-responsive">
    <table>
        <thead>
            <tr>
                <th>
                    <?php
                        echo $this->Paginator->sort('user_id');
                    ?>
                </th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <td>
        </tbody>
    </table>
    </div>
        <div class="paginator">
            <!-- // ajouter de la pagination pour pouvoir changer de pages -->
    </div>
</div>
