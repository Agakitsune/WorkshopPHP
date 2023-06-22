<!DOCTYPE html>

<html>
    <head>
        <?= $this->Html->css("my") ?>
        <?= $this->Html->script("my") ?>

        <?= $this->fetch("css") ?>
        <?= $this->fetch("script") ?>
    </head>
    <body>
        <div class="app-container" >
            <div class="bar-container">
                <?= $this->Html->image("logo.png", ["class" => "bar-icon"]) ?>
                <p class="text bar-text main">MyApp</p>
                <div class="bar-separator right"></div>
                <div class="bar-button playground-button">
                    <p class="text bar-text">Playground</p>
                </div>
                <div class="bar-separator right left"></div>
                <div class="bar-button about-button">
                    <p class="text bar-text">About</p>
                </div>
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