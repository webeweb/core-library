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
 * Indemn specif licens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnSpecifLicensTrait {

    /**
     * Indemn specif licens.
     *
     * @var float
     */
    private $indemnSpecifLicens;

    /**
     * Get the indemn specif licens.
     *
     * @return float Returns the indemn specif licens.
     */
    public function getIndemnSpecifLicens() {
        return $this->indemnSpecifLicens;
    }

    /**
     * Set the indemn specif licens.
     *
     * @param float $indemnSpecifLicens The indemn specif licens.
     */
    public function setIndemnSpecifLicens($indemnSpecifLicens) {
        $this->indemnSpecifLicens = $indemnSpecifLicens;
        return $this;
    }
}
