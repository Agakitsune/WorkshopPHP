<!DOCTYPE html>

<html>
    <head>
        <?= $this->Html->css("my") ?>
        <?= $this->Html->script("my") ?>

        <?= $this->fetch("css") ?>
        <?= $this->fetch("script") ?>
    </head>
    <body>
        <div class=app-container >
            <div class="bar-container">
                <?= $this->Html->image("logo.png", ["class" => "bar-icon"]) ?>
                <p class="bar-text main">MyApp</p>
            </div>
            <main class="main">
                <div class="container">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </div>
            </main>
        </div>
    </body>
</html>