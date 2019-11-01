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
 * Remun brut cice trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRemunBrutCiceTrait {

    /**
     * Remun brut cice.
     *
     * @var float
     */
    private $remunBrutCice;

    /**
     * Get the remun brut cice.
     *
     * @return float Returns the remun brut cice.
     */
    public function getRemunBrutCice() {
        return $this->remunBrutCice;
    }

    /**
     * Set the remun brut cice.
     *
     * @param float $remunBrutCice The remun brut cice.
     */
    public function setRemunBrutCice($remunBrutCice) {
        $this->remunBrutCice = $remunBrutCice;
        return $this;
    }
}
