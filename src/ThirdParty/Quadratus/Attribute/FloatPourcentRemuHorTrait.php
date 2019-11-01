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
 * Pourcent remu hor trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentRemuHorTrait {

    /**
     * Pourcent remu hor.
     *
     * @var float
     */
    private $pourcentRemuHor;

    /**
     * Get the pourcent remu hor.
     *
     * @return float Returns the pourcent remu hor.
     */
    public function getPourcentRemuHor() {
        return $this->pourcentRemuHor;
    }

    /**
     * Set the pourcent remu hor.
     *
     * @param float $pourcentRemuHor The pourcent remu hor.
     */
    public function setPourcentRemuHor($pourcentRemuHor) {
        $this->pourcentRemuHor = $pourcentRemuHor;
        return $this;
    }
}
