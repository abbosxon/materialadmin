<?php
namespace abbosxon\materialadmin\widgets;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;

class Menu extends \yii\widgets\Menu
{
    public $linkTemplate = '<a href="{url}"><div class="gui-icon"><i class="{icon}"></i></div> <span class="title">{label}</span></a>';
    public $noIconLinkTemplate = '<a href="{url}"><span class="title">{label}</span></a>';

    protected function renderItems($items, $subMenuParentOptions = null)
    {
        $n = count($items);
        $lines = [];
        foreach ($items as $i => $item) {
            $options = array_merge($this->itemOptions, ArrayHelper::getValue($item, 'options', []));
            $tag = ArrayHelper::remove($options, 'tag', 'li');
            $class = [];
            if ($item['active']) {
                $class[] = $this->activeCssClass;
            }
            if ($i === 0 && $this->firstItemCssClass !== null) {
                $class[] = $this->firstItemCssClass;
            }
            if ($i === $n - 1 && $this->lastItemCssClass !== null) {
                $class[] = $this->lastItemCssClass;
            }
            Html::addCssClass($options, $class);

            $menu = $this->renderItem($item);
            if (!empty($item['items'])) {
                $submenuTemplate = ArrayHelper::getValue($item, 'submenuTemplate', $this->submenuTemplate);
                $menu .= strtr($submenuTemplate, [
                    '{items}' => $this->renderItems($item['items'], ['class' => 'gui-folder']),
                ]);
            }

            if ((strpos($menu, '<ul>') !== false)){
                $options['class'][] = 'gui-folder';
            }

            $lines[] = Html::tag($tag, $menu, $options);
        }

        return implode("\n", $lines);
    }

    protected function renderItem($item)
    {
        if (isset($item['url'])) {
            if (isset($item['icon']))
                $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);
            else
                $template = ArrayHelper::getValue($item, 'template', $this->noIconLinkTemplate);

            return strtr($template, [
                '{icon}' => isset($item['icon']) ? $item['icon'] : '',
                '{url}' => Html::encode(Url::to($item['url'])),
                '{label}' => $item['label'],
            ]);
        } else {
            $template = ArrayHelper::getValue($item, 'template', $this->linkTemplate);

            return strtr($template, [
                '{label}' => $item['label'],
            ]);
        }
    }
}