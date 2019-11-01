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
 * Debour trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDebourTrait {

    /**
     * Debour.
     *
     * @var bool
     */
    private $debour;

    /**
     * Get the debour.
     *
     * @return bool Returns the debour.
     */
    public function getDebour() {
        return $this->debour;
    }

    /**
     * Set the debour.
     *
     * @param bool $debour The debour.
     */
    public function setDebour($debour) {
        $this->debour = $debour;
        return $this;
    }
}
