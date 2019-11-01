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
 * Af dotation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatAfDotationTrait {

    /**
     * Af dotation.
     *
     * @var float
     */
    private $afDotation;

    /**
     * Get the af dotation.
     *
     * @return float Returns the af dotation.
     */
    public function getAfDotation() {
        return $this->afDotation;
    }

    /**
     * Set the af dotation.
     *
     * @param float $afDotation The af dotation.
     */
    public function setAfDotation($afDotation) {
        $this->afDotation = $afDotation;
        return $this;
    }
}
