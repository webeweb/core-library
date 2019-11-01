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
 * Taux h ab cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxHAbCpTrait {

    /**
     * Taux h ab cp.
     *
     * @var float
     */
    private $tauxHAbCp;

    /**
     * Get the taux h ab cp.
     *
     * @return float Returns the taux h ab cp.
     */
    public function getTauxHAbCp() {
        return $this->tauxHAbCp;
    }

    /**
     * Set the taux h ab cp.
     *
     * @param float $tauxHAbCp The taux h ab cp.
     */
    public function setTauxHAbCp($tauxHAbCp) {
        $this->tauxHAbCp = $tauxHAbCp;
        return $this;
    }
}
