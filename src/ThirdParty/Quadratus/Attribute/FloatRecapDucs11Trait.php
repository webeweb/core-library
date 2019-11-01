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
 * Recap ducs11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRecapDucs11Trait {

    /**
     * Recap ducs11.
     *
     * @var float
     */
    private $recapDucs11;

    /**
     * Get the recap ducs11.
     *
     * @return float Returns the recap ducs11.
     */
    public function getRecapDucs11() {
        return $this->recapDucs11;
    }

    /**
     * Set the recap ducs11.
     *
     * @param float $recapDucs11 The recap ducs11.
     */
    public function setRecapDucs11($recapDucs11) {
        $this->recapDucs11 = $recapDucs11;
        return $this;
    }
}
