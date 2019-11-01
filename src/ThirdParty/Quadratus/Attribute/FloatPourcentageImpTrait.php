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
 * Pourcentage imp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentageImpTrait {

    /**
     * Pourcentage imp.
     *
     * @var float
     */
    private $pourcentageImp;

    /**
     * Get the pourcentage imp.
     *
     * @return float Returns the pourcentage imp.
     */
    public function getPourcentageImp() {
        return $this->pourcentageImp;
    }

    /**
     * Set the pourcentage imp.
     *
     * @param float $pourcentageImp The pourcentage imp.
     */
    public function setPourcentageImp($pourcentageImp) {
        $this->pourcentageImp = $pourcentageImp;
        return $this;
    }
}
