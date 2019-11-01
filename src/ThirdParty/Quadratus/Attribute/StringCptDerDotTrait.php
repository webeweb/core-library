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
 * Cpt der dot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptDerDotTrait {

    /**
     * Cpt der dot.
     *
     * @var string
     */
    private $cptDerDot;

    /**
     * Get the cpt der dot.
     *
     * @return string Returns the cpt der dot.
     */
    public function getCptDerDot() {
        return $this->cptDerDot;
    }

    /**
     * Set the cpt der dot.
     *
     * @param string $cptDerDot The cpt der dot.
     */
    public function setCptDerDot($cptDerDot) {
        $this->cptDerDot = $cptDerDot;
        return $this;
    }
}
