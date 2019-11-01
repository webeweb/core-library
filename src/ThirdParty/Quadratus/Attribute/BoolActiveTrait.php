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
 * Active trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolActiveTrait {

    /**
     * Active.
     *
     * @var bool
     */
    private $active;

    /**
     * Get the active.
     *
     * @return bool Returns the active.
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * Set the active.
     *
     * @param bool $active The active.
     */
    public function setActive($active) {
        $this->active = $active;
        return $this;
    }
}
