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
 * Critere numerique1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatCritereNumerique1Trait {

    /**
     * Critere numerique1.
     *
     * @var float
     */
    private $critereNumerique1;

    /**
     * Get the critere numerique1.
     *
     * @return float Returns the critere numerique1.
     */
    public function getCritereNumerique1() {
        return $this->critereNumerique1;
    }

    /**
     * Set the critere numerique1.
     *
     * @param float $critereNumerique1 The critere numerique1.
     */
    public function setCritereNumerique1($critereNumerique1) {
        $this->critereNumerique1 = $critereNumerique1;
        return $this;
    }
}
