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
 * Somme regul1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatSommeRegul1Trait {

    /**
     * Somme regul1.
     *
     * @var float
     */
    private $sommeRegul1;

    /**
     * Get the somme regul1.
     *
     * @return float Returns the somme regul1.
     */
    public function getSommeRegul1() {
        return $this->sommeRegul1;
    }

    /**
     * Set the somme regul1.
     *
     * @param float $sommeRegul1 The somme regul1.
     */
    public function setSommeRegul1($sommeRegul1) {
        $this->sommeRegul1 = $sommeRegul1;
        return $this;
    }
}
