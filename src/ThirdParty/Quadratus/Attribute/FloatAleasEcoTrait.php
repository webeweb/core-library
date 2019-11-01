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
 * Aleas eco trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAleasEcoTrait {

    /**
     * Aleas eco.
     *
     * @var float
     */
    private $aleasEco;

    /**
     * Get the aleas eco.
     *
     * @return float Returns the aleas eco.
     */
    public function getAleasEco() {
        return $this->aleasEco;
    }

    /**
     * Set the aleas eco.
     *
     * @param float $aleasEco The aleas eco.
     */
    public function setAleasEco($aleasEco) {
        $this->aleasEco = $aleasEco;
        return $this;
    }
}
