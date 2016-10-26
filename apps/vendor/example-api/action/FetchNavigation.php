<?php
/**
 * Created by PhpStorm.
 * User: sai
 * Date: 10/6/16
 * Time: 6:09 AM
 */

namespace ExampleApi\Action;


class FetchNavigation extends Base
{
    public function run()
    {
        $data = [
            $this->createItem('dashboard', 'Dashboard', 'fa fa-home', '#'),
            $this->createItem('dashboard2', 'Dashboard 2', 'fa fa-home', '#'),
            $this->createItemWithChild('dashboard3', 'Dashboard 3', 'fa fa-home', '#', [
                $this->createItemChild('dashboard2', 'Dashboard 2', '#'),
                $this->createItemChild('dashboard2', 'Dashboard 2', '#'),
                $this->createItemChild('dashboard2', 'Dashboard 2', '#'),
                $this->createItemChild('dashboard2', 'Dashboard 2', '#'),
            ]),
        ];

        $this->success([
            [
                'title' => 'Main Navigation',
                'navigation' => $data
            ],
        ]);

    }

    public function createItemChild($name, $label, $icon)
    {
        return [
            'name' => $name,
            'label' => $label,
            'icon' => $icon,
        ];
    }

    public function createItem($name, $label, $icon, $href)
    {
        return [
            'name' => $name,
            'label' => $label,
            'icon' => $icon,
            'href' => $href,
        ];
    }

    public function createItemWithChild($name, $label, $icon, $href, $childs)
    {
        return [
            'name' => $name,
            'label' => $label,
            'icon' => $icon,
            'href' => $href,
            'childs' => $childs,
        ];
    }
}