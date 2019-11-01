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
 * Increment compte auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIncrementCompteAutoTrait {

    /**
     * Increment compte auto.
     *
     * @var int
     */
    private $incrementCompteAuto;

    /**
     * Get the increment compte auto.
     *
     * @return int Returns the increment compte auto.
     */
    public function getIncrementCompteAuto() {
        return $this->incrementCompteAuto;
    }

    /**
     * Set the increment compte auto.
     *
     * @param int $incrementCompteAuto The increment compte auto.
     */
    public function setIncrementCompteAuto($incrementCompteAuto) {
        $this->incrementCompteAuto = $incrementCompteAuto;
        return $this;
    }
}
