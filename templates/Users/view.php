<div class=main-container>
    <div class="row">
        <aside class="column">
            <div class="side-nav">
                <!-- <h4 class="heading"><?= __('Actions') ?></h4> -->
                <!-- // veuillez ajouter les différents lien vers les autres actions -->
            </div>
        </aside>
        <div class="column-responsive column-80">
            <div class="user view content">
                <table>
                    <tr>
                        <th class=app-text><?= __('Email') ?></th>
                        <td class=app-text><?= $user->email ?></td>
                    </tr>
                    <tr>
                        <th class=app-text><?= __('Username') ?></th>
                        <td class=app-text><?= $user->username ?></td>
                    </tr>
                    <tr>
                        <th class=app-text><?= __('Id') ?></th>
                        <td class=app-text><?= $user->id ?></td>
                    </tr>
                </table>
                <div class="related">
                    <h4 class=app-text><?= __('Produits') ?></h4>
                        <?php if (!empty($user->produits)) : ?>
                        <div class="table-responsive">
                            <table>
                                <?php foreach ($user->produits as $produit): ?>
                                    <tr>
                                        <td class=app-text>
                                            <?= $produit->nom ?>
                                        <td>
                                    </tr>
                                <?php endforeach ?>
                            </table>
                        </div>
                <?php endif; ?>
                </div>
                <?=
                    $this->Form->postLink(
                        'Delete User',
                        ['action' => 'delete', $user->id],
                        ['confirm' => 'Are you sure? You will not be able to get it back']
                    )
                ?>
            </div>
        </div>
    </div>
</div>