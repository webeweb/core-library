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
 * Taux h sup trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxHSupTrait {

    /**
     * Taux h sup.
     *
     * @var float
     */
    private $tauxHSup;

    /**
     * Get the taux h sup.
     *
     * @return float Returns the taux h sup.
     */
    public function getTauxHSup() {
        return $this->tauxHSup;
    }

    /**
     * Set the taux h sup.
     *
     * @param float $tauxHSup The taux h sup.
     */
    public function setTauxHSup($tauxHSup) {
        $this->tauxHSup = $tauxHSup;
        return $this;
    }
}
