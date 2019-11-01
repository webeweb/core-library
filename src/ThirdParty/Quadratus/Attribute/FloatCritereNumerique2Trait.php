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
 * Critere numerique2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCritereNumerique2Trait {

    /**
     * Critere numerique2.
     *
     * @var float
     */
    private $critereNumerique2;

    /**
     * Get the critere numerique2.
     *
     * @return float Returns the critere numerique2.
     */
    public function getCritereNumerique2() {
        return $this->critereNumerique2;
    }

    /**
     * Set the critere numerique2.
     *
     * @param float $critereNumerique2 The critere numerique2.
     */
    public function setCritereNumerique2($critereNumerique2) {
        $this->critereNumerique2 = $critereNumerique2;
        return $this;
    }
}
