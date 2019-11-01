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
 * Increment auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIncrementAutoTrait {

    /**
     * Increment auto.
     *
     * @var bool
     */
    private $incrementAuto;

    /**
     * Get the increment auto.
     *
     * @return bool Returns the increment auto.
     */
    public function getIncrementAuto() {
        return $this->incrementAuto;
    }

    /**
     * Set the increment auto.
     *
     * @param bool $incrementAuto The increment auto.
     */
    public function setIncrementAuto($incrementAuto) {
        $this->incrementAuto = $incrementAuto;
        return $this;
    }
}
