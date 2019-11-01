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
 * Taux majoration h compl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxMajorationHComplTrait {

    /**
     * Taux majoration h compl.
     *
     * @var float
     */
    private $tauxMajorationHCompl;

    /**
     * Get the taux majoration h compl.
     *
     * @return float Returns the taux majoration h compl.
     */
    public function getTauxMajorationHCompl() {
        return $this->tauxMajorationHCompl;
    }

    /**
     * Set the taux majoration h compl.
     *
     * @param float $tauxMajorationHCompl The taux majoration h compl.
     */
    public function setTauxMajorationHCompl($tauxMajorationHCompl) {
        $this->tauxMajorationHCompl = $tauxMajorationHCompl;
        return $this;
    }
}
