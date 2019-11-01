<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Parent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringParentTrait {

    /**
     * Parent.
     *
     * @var string
     */
    private $parent;

    /**
     * Get the parent.
     *
     * @return string Returns the parent.
     */
    public function getParent() {
        return $this->parent;
    }

    /**
     * Set the parent.
     *
     * @param string $parent The parent.
     */
    public function setParent($parent) {
        $this->parent = $parent;
        return $this;
    }
}
