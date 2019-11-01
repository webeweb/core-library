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
 * Trs poids mini pal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrsPoidsMiniPalTrait {

    /**
     * Trs poids mini pal.
     *
     * @var float
     */
    private $trsPoidsMiniPal;

    /**
     * Get the trs poids mini pal.
     *
     * @return float Returns the trs poids mini pal.
     */
    public function getTrsPoidsMiniPal() {
        return $this->trsPoidsMiniPal;
    }

    /**
     * Set the trs poids mini pal.
     *
     * @param float $trsPoidsMiniPal The trs poids mini pal.
     */
    public function setTrsPoidsMiniPal($trsPoidsMiniPal) {
        $this->trsPoidsMiniPal = $trsPoidsMiniPal;
        return $this;
    }
}
