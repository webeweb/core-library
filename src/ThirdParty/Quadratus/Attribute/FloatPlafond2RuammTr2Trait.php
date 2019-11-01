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
 * Plafond2 ruamm tr2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPlafond2RuammTr2Trait {

    /**
     * Plafond2 ruamm tr2.
     *
     * @var float
     */
    private $plafond2RuammTr2;

    /**
     * Get the plafond2 ruamm tr2.
     *
     * @return float Returns the plafond2 ruamm tr2.
     */
    public function getPlafond2RuammTr2() {
        return $this->plafond2RuammTr2;
    }

    /**
     * Set the plafond2 ruamm tr2.
     *
     * @param float $plafond2RuammTr2 The plafond2 ruamm tr2.
     */
    public function setPlafond2RuammTr2($plafond2RuammTr2) {
        $this->plafond2RuammTr2 = $plafond2RuammTr2;
        return $this;
    }
}
