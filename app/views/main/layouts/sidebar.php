<div class="sidebar">
    <div class="brand">
        <p>B<span>rand</span></p>
    </div>
    <ul class="nav-list">
        <?php foreach ($nav as $item => $info) { ?>
            <li class="nav-item <?php echo ($item == $active) ? 'active' : ''; ?>">
                <a href="<?= $info['href']; ?>">
                    <span class="nav-item__icon">
                        <ion-icon name="<?= $info['icon-name']; ?>"></ion-icon>
                    </span>
                    <span class="nav-item__text"><?= $item; ?></span>
                </a>
            </li>
        <?php } ?>
    </ul>
    <ul class="nav-list">
        <li class="nav-item">
            <a href="#">
                <span class="nav-item__icon avatar">P</span>
                <span class="nav-item__text">
                    PHP TEAM
                </span>
            </a>
        </li>
        <li class="nav-item">
            <a href="#">
                <span class="nav-item__icon logout">
                    <ion-icon name="log-out-outline"></ion-icon>
                </span>
                <span class="nav-item__text">
                    Logout
                </span>
            </a>
        </li>
    </ul>
</div>