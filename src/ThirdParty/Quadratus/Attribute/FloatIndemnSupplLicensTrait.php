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
 * Indemn suppl licens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnSupplLicensTrait {

    /**
     * Indemn suppl licens.
     *
     * @var float
     */
    private $indemnSupplLicens;

    /**
     * Get the indemn suppl licens.
     *
     * @return float Returns the indemn suppl licens.
     */
    public function getIndemnSupplLicens() {
        return $this->indemnSupplLicens;
    }

    /**
     * Set the indemn suppl licens.
     *
     * @param float $indemnSupplLicens The indemn suppl licens.
     */
    public function setIndemnSupplLicens($indemnSupplLicens) {
        $this->indemnSupplLicens = $indemnSupplLicens;
        return $this;
    }
}
