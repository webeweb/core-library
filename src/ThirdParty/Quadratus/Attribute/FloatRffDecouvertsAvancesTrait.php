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
 * Rff decouverts avances trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRffDecouvertsAvancesTrait {

    /**
     * Rff decouverts avances.
     *
     * @var float
     */
    private $rffDecouvertsAvances;

    /**
     * Get the rff decouverts avances.
     *
     * @return float Returns the rff decouverts avances.
     */
    public function getRffDecouvertsAvances() {
        return $this->rffDecouvertsAvances;
    }

    /**
     * Set the rff decouverts avances.
     *
     * @param float $rffDecouvertsAvances The rff decouverts avances.
     */
    public function setRffDecouvertsAvances($rffDecouvertsAvances) {
        $this->rffDecouvertsAvances = $rffDecouvertsAvances;
        return $this;
    }
}
