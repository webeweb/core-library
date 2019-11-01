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
 * Tranche abanl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTrancheAbanlTrait {

    /**
     * Tranche abanl.
     *
     * @var float
     */
    private $trancheAbanl;

    /**
     * Get the tranche abanl.
     *
     * @return float Returns the tranche abanl.
     */
    public function getTrancheAbanl() {
        return $this->trancheAbanl;
    }

    /**
     * Set the tranche abanl.
     *
     * @param float $trancheAbanl The tranche abanl.
     */
    public function setTrancheAbanl($trancheAbanl) {
        $this->trancheAbanl = $trancheAbanl;
        return $this;
    }
}
