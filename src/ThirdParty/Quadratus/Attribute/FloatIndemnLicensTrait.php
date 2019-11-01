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
 * Indemn licens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnLicensTrait {

    /**
     * Indemn licens.
     *
     * @var float
     */
    private $indemnLicens;

    /**
     * Get the indemn licens.
     *
     * @return float Returns the indemn licens.
     */
    public function getIndemnLicens() {
        return $this->indemnLicens;
    }

    /**
     * Set the indemn licens.
     *
     * @param float $indemnLicens The indemn licens.
     */
    public function setIndemnLicens($indemnLicens) {
        $this->indemnLicens = $indemnLicens;
        return $this;
    }
}
