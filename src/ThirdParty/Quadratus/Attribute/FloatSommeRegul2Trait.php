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
 * Somme regul2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSommeRegul2Trait {

    /**
     * Somme regul2.
     *
     * @var float
     */
    private $sommeRegul2;

    /**
     * Get the somme regul2.
     *
     * @return float Returns the somme regul2.
     */
    public function getSommeRegul2() {
        return $this->sommeRegul2;
    }

    /**
     * Set the somme regul2.
     *
     * @param float $sommeRegul2 The somme regul2.
     */
    public function setSommeRegul2($sommeRegul2) {
        $this->sommeRegul2 = $sommeRegul2;
        return $this;
    }
}
