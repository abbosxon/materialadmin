<div id="menubar" class="menubar-inverse animate">
    <div class="menubar-fixed-panel">
        <div>
            <a class="btn btn-icon-toggle btn-default menubar-toggle" data-toggle="menubar" href="javascript:void(0);">
                <i class="fa fa-bars"></i>
            </a>
        </div>
        <div class="expanded">
            <a href="<?= \yii\helpers\Url::to(['/']) ?>">
                <span class="text-lg text-bold text-primary">MATERIAL&nbsp;ADMIN</span>
            </a>
        </div>
    </div>
    <div class="menubar-scroll-panel">
        <?= \materialadmin\widgets\Menu::widget([
            'options' => ['class' => 'gui-controls', 'id' => 'main-menu',],
            'items' => [
                ['label' => 'Dashboard', 'url' => ['site/index'], 'icon' => 'md md-home'],
                [
                    'label' => 'Email',
                    'icon' => 'md md-email',
                    'url' => '#',
                    'items' => [
                        ['label' => 'Inbox', 'url' => '#'],
                        ['label' => 'Compose', 'url' => '#'],
                        ['label' => 'Reply', 'url' => '#'],
                        ['label' => 'View message', 'url' => '#'],
                    ],
                ],
                [
                    'label' => 'Layouts', 'url' => '#', 'icon' => 'md md-web',
                    'items' => [
                        ['label' => 'Inbox', 'url' => '#'],
                        ['label' => 'Compose', 'url' => '#'],
                        ['label' => 'Reply', 'url' => '#'],
                        ['label' => 'View message', 'url' => '#'],
                    ]
                ],
                ['label' => 'UI elements', 'url' => '#', 'icon' => 'fa fa-puzzle-piece fa-fw'],
                ['label' => 'Tables', 'url' => '#', 'icon' => 'fa fa-table'],
                [
                    'label' => 'Forms', 'url' => '#', 'icon' => 'glyphicon glyphicon-list-alt',
                    'items' => [
                        ['label' => 'Inbox', 'url' => '#'],
                        ['label' => 'Compose', 'url' => '#'],
                        ['label' => 'Reply', 'url' => '#'],
                        ['label' => 'View message', 'url' => '#'],
                    ]
                ],
                ['label' => 'Pages', 'url' => '#', 'icon' => 'md md-computer'],
                ['label' => 'Charts', 'url' => '#', 'icon' => 'md md-assessment'],
            ],
        ]) ?>

        <div class="menubar-foot-panel">
            <small class="no-linebreak hidden-folded">
                <span class="opacity-75">Copyright &copy; 2017</span> <strong>Theme monster</strong>
            </small>
        </div>
    </div>
</div>