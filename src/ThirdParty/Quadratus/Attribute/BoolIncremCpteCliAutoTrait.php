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
 * Increm cpte cli auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIncremCpteCliAutoTrait {

    /**
     * Increm cpte cli auto.
     *
     * @var bool
     */
    private $incremCpteCliAuto;

    /**
     * Get the increm cpte cli auto.
     *
     * @return bool Returns the increm cpte cli auto.
     */
    public function getIncremCpteCliAuto() {
        return $this->incremCpteCliAuto;
    }

    /**
     * Set the increm cpte cli auto.
     *
     * @param bool $incremCpteCliAuto The increm cpte cli auto.
     */
    public function setIncremCpteCliAuto($incremCpteCliAuto) {
        $this->incremCpteCliAuto = $incremCpteCliAuto;
        return $this;
    }
}
