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
 * Pourc marge previs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcMargePrevisTrait {

    /**
     * Pourc marge previs.
     *
     * @var float
     */
    private $pourcMargePrevis;

    /**
     * Get the pourc marge previs.
     *
     * @return float Returns the pourc marge previs.
     */
    public function getPourcMargePrevis() {
        return $this->pourcMargePrevis;
    }

    /**
     * Set the pourc marge previs.
     *
     * @param float $pourcMargePrevis The pourc marge previs.
     */
    public function setPourcMargePrevis($pourcMargePrevis) {
        $this->pourcMargePrevis = $pourcMargePrevis;
        return $this;
    }
}
