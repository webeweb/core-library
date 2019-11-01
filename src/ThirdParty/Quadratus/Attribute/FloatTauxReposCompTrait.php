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
 * Taux repos comp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxReposCompTrait {

    /**
     * Taux repos comp.
     *
     * @var float
     */
    private $tauxReposComp;

    /**
     * Get the taux repos comp.
     *
     * @return float Returns the taux repos comp.
     */
    public function getTauxReposComp() {
        return $this->tauxReposComp;
    }

    /**
     * Set the taux repos comp.
     *
     * @param float $tauxReposComp The taux repos comp.
     */
    public function setTauxReposComp($tauxReposComp) {
        $this->tauxReposComp = $tauxReposComp;
        return $this;
    }
}
