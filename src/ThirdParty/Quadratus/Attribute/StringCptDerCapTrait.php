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
 * Cpt der cap trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptDerCapTrait {

    /**
     * Cpt der cap.
     *
     * @var string
     */
    private $cptDerCap;

    /**
     * Get the cpt der cap.
     *
     * @return string Returns the cpt der cap.
     */
    public function getCptDerCap() {
        return $this->cptDerCap;
    }

    /**
     * Set the cpt der cap.
     *
     * @param string $cptDerCap The cpt der cap.
     */
    public function setCptDerCap($cptDerCap) {
        $this->cptDerCap = $cptDerCap;
        return $this;
    }
}
