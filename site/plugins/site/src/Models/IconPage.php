<?php

namespace Kirby\Site\Models;

use Kirby\Cms\Field;
use Kirby\Cms\Page;
use Kirby\Cms\Pages;

class IconPage extends Page
{

    public function icon(): Field
    {
        return new Field($this, 'icon', 'icon-' . $this->slug());
    }

    public function excerpt(): Field
    {
        return new Field($this, 'excerpt', html('<k-icon type="' . $this->slug() . '">'));
    }

}
