<?= $this->Html->css("playground") ?>
<?= $this->fetch("css") ?>

<?= $this->Html->script("playground") ?>
<?= $this->fetch("script") ?>

<div class="playground-container">
    <div class=counter-container>
        <div class=counter-button>
            <p class="text button-text">Click Me!</p>
        </div>
        <pc class=text>Counter: <?= $counter ?><p>
    </div>
</div>

<script>

    const counterButton = document.getElementsByClassName("counter-button")[0];

    counterButton.addEventListener("click", () => {
        console.log(<?= $counter ?>);
        <?php $counter = $counter + 1 ?>
    });

</script>
