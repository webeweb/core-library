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
 * Cpt der maj trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptDerMajTrait {

    /**
     * Cpt der maj.
     *
     * @var string
     */
    private $cptDerMaj;

    /**
     * Get the cpt der maj.
     *
     * @return string Returns the cpt der maj.
     */
    public function getCptDerMaj() {
        return $this->cptDerMaj;
    }

    /**
     * Set the cpt der maj.
     *
     * @param string $cptDerMaj The cpt der maj.
     */
    public function setCptDerMaj($cptDerMaj) {
        $this->cptDerMaj = $cptDerMaj;
        return $this;
    }
}
