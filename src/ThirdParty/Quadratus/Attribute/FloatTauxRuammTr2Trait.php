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
 * Taux ruamm tr2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxRuammTr2Trait {

    /**
     * Taux ruamm tr2.
     *
     * @var float
     */
    private $tauxRuammTr2;

    /**
     * Get the taux ruamm tr2.
     *
     * @return float Returns the taux ruamm tr2.
     */
    public function getTauxRuammTr2() {
        return $this->tauxRuammTr2;
    }

    /**
     * Set the taux ruamm tr2.
     *
     * @param float $tauxRuammTr2 The taux ruamm tr2.
     */
    public function setTauxRuammTr2($tauxRuammTr2) {
        $this->tauxRuammTr2 = $tauxRuammTr2;
        return $this;
    }
}
