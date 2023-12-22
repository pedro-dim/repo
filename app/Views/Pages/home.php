<?php $this->layout('Templates/main') ?>

<div class="bg-stone-600 text-white p-2 m-4 rounded">

    <h1>Home Page</h1>

</div>

<div class="bg-stone-400 text-white p-2 m-4 rounded">
    <h1>Content</h1>
    <h1>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Excepturi dolore atque suscipit at obcaecati fugiat,
        velit voluptas nulla minima dolorum voluptatem qui ipsum, accusantium, tempore magnam? Fugit sed facilis
        adipisci.</h1>
    <hr>
</div>


<?= $this->e($data) ?>

<!-- <p>Hello, <?= $this->e($name),
                $this->e(' ' . $age) ?></p> -->