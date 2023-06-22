<?= $this->Html->css("playground") ?>
<?= $this->fetch("css") ?>

<div class="playground-container">
    <div class=counter-container>
        <div class=counter-button>
            <p class="text button-text">Click Me!</p>
        </div>
        <p class="text counter-text">Counter: <?= $counter ?><p>
    </div>
</div>

<script>

    const counterButton = document.getElementsByClassName("counter-button")[0];
    const counterText = document.getElementsByClassName("counter-text")[0];

    counterButton.addEventListener("click", () => {
        console.log(<?= $counter ?>);
        <?php $counter++ ?>
    });

</script>
