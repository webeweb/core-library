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
 * Attest auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAttestAutoTrait {

    /**
     * Attest auto.
     *
     * @var bool
     */
    private $attestAuto;

    /**
     * Get the attest auto.
     *
     * @return bool Returns the attest auto.
     */
    public function getAttestAuto() {
        return $this->attestAuto;
    }

    /**
     * Set the attest auto.
     *
     * @param bool $attestAuto The attest auto.
     */
    public function setAttestAuto($attestAuto) {
        $this->attestAuto = $attestAuto;
        return $this;
    }
}
