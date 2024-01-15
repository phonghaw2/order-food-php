<div>
    <h1>hehehehe</h1>
    <div class="item-container">
        <?php foreach ($foods as $food) { ?>
            <div class="item-restaurant-row hover:scale-105 hover:duration-150 duration-150">
                <div class="food-image">
                    <img src="<?php echo $food['img'] ?>">
                </div>
                <div class="food-name">
                    <h4><?php echo $food['name'] ?></h4>
                </div>
                <div class="food-price">
                    <h5><?php echo $food['price'] ?></h5>
                </div>
            </div>
        <?php } ?>
    </div>
</div>