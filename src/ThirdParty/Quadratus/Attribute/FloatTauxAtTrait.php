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
 * Taux at trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxAtTrait {

    /**
     * Taux at.
     *
     * @var float
     */
    private $tauxAt;

    /**
     * Get the taux at.
     *
     * @return float Returns the taux at.
     */
    public function getTauxAt() {
        return $this->tauxAt;
    }

    /**
     * Set the taux at.
     *
     * @param float $tauxAt The taux at.
     */
    public function setTauxAt($tauxAt) {
        $this->tauxAt = $tauxAt;
        return $this;
    }
}
