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
 * Per reference cotisations trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPerReferenceCotisationsTrait {

    /**
     * Per reference cotisations.
     *
     * @var float
     */
    private $perReferenceCotisations;

    /**
     * Get the per reference cotisations.
     *
     * @return float Returns the per reference cotisations.
     */
    public function getPerReferenceCotisations() {
        return $this->perReferenceCotisations;
    }

    /**
     * Set the per reference cotisations.
     *
     * @param float $perReferenceCotisations The per reference cotisations.
     */
    public function setPerReferenceCotisations($perReferenceCotisations) {
        $this->perReferenceCotisations = $perReferenceCotisations;
        return $this;
    }
}
