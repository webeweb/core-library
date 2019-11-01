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
 * Plafond maladie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafondMaladieTrait {

    /**
     * Plafond maladie.
     *
     * @var float
     */
    private $plafondMaladie;

    /**
     * Get the plafond maladie.
     *
     * @return float Returns the plafond maladie.
     */
    public function getPlafondMaladie() {
        return $this->plafondMaladie;
    }

    /**
     * Set the plafond maladie.
     *
     * @param float $plafondMaladie The plafond maladie.
     */
    public function setPlafondMaladie($plafondMaladie) {
        $this->plafondMaladie = $plafondMaladie;
        return $this;
    }
}
