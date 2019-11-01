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
 * Taux majoration trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxMajorationTrait {

    /**
     * Taux majoration.
     *
     * @var float
     */
    private $tauxMajoration;

    /**
     * Get the taux majoration.
     *
     * @return float Returns the taux majoration.
     */
    public function getTauxMajoration() {
        return $this->tauxMajoration;
    }

    /**
     * Set the taux majoration.
     *
     * @param float $tauxMajoration The taux majoration.
     */
    public function setTauxMajoration($tauxMajoration) {
        $this->tauxMajoration = $tauxMajoration;
        return $this;
    }
}
