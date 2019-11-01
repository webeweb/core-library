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
 * Indemn speci licens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatIndemnSpeciLicensTrait {

    /**
     * Indemn speci licens.
     *
     * @var float
     */
    private $indemnSpeciLicens;

    /**
     * Get the indemn speci licens.
     *
     * @return float Returns the indemn speci licens.
     */
    public function getIndemnSpeciLicens() {
        return $this->indemnSpeciLicens;
    }

    /**
     * Set the indemn speci licens.
     *
     * @param float $indemnSpeciLicens The indemn speci licens.
     */
    public function setIndemnSpeciLicens($indemnSpeciLicens) {
        $this->indemnSpeciLicens = $indemnSpeciLicens;
        return $this;
    }
}
