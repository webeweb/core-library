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
 * Cloturee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolClotureeTrait {

    /**
     * Cloturee.
     *
     * @var bool
     */
    private $cloturee;

    /**
     * Get the cloturee.
     *
     * @return bool Returns the cloturee.
     */
    public function getCloturee() {
        return $this->cloturee;
    }

    /**
     * Set the cloturee.
     *
     * @param bool $cloturee The cloturee.
     */
    public function setCloturee($cloturee) {
        $this->cloturee = $cloturee;
        return $this;
    }
}
