<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * String title trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringTitleTrait {

    /**
     * Title.
     *
     * @var string
     */
    protected $title;

    /**
     * Get the title.
     *
     * @return string Returns the title.
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set the title.
     *
     * @param string $title The title.
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }
}
