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
 * Increm auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIncremAutoTrait {

    /**
     * Increm auto.
     *
     * @var bool
     */
    private $incremAuto;

    /**
     * Get the increm auto.
     *
     * @return bool Returns the increm auto.
     */
    public function getIncremAuto() {
        return $this->incremAuto;
    }

    /**
     * Set the increm auto.
     *
     * @param bool $incremAuto The increm auto.
     */
    public function setIncremAuto($incremAuto) {
        $this->incremAuto = $incremAuto;
        return $this;
    }
}
