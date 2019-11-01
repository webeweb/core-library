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
 * Acompte4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAcompte4Trait {

    /**
     * Acompte4.
     *
     * @var float
     */
    private $acompte4;

    /**
     * Get the acompte4.
     *
     * @return float Returns the acompte4.
     */
    public function getAcompte4() {
        return $this->acompte4;
    }

    /**
     * Set the acompte4.
     *
     * @param float $acompte4 The acompte4.
     */
    public function setAcompte4($acompte4) {
        $this->acompte4 = $acompte4;
        return $this;
    }
}
