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
 * Increm cpte frn auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIncremCpteFrnAutoTrait {

    /**
     * Increm cpte frn auto.
     *
     * @var bool
     */
    private $incremCpteFrnAuto;

    /**
     * Get the increm cpte frn auto.
     *
     * @return bool Returns the increm cpte frn auto.
     */
    public function getIncremCpteFrnAuto() {
        return $this->incremCpteFrnAuto;
    }

    /**
     * Set the increm cpte frn auto.
     *
     * @param bool $incremCpteFrnAuto The increm cpte frn auto.
     */
    public function setIncremCpteFrnAuto($incremCpteFrnAuto) {
        $this->incremCpteFrnAuto = $incremCpteFrnAuto;
        return $this;
    }
}
