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
 * String link trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringLinkTrait {

    /**
     * Link.
     *
     * @var string
     */
    protected $link;

    /**
     * Get the link.
     *
     * @return string Returns the link.
     */
    public function getLink() {
        return $this->link;
    }

    /**
     * Set the link.
     *
     * @param string $link The link.
     */
    public function setLink($link) {
        $this->link = $link;
        return $this;
    }
}
