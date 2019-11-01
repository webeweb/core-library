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
 * Cpt der rep trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptDerRepTrait {

    /**
     * Cpt der rep.
     *
     * @var string
     */
    private $cptDerRep;

    /**
     * Get the cpt der rep.
     *
     * @return string Returns the cpt der rep.
     */
    public function getCptDerRep() {
        return $this->cptDerRep;
    }

    /**
     * Set the cpt der rep.
     *
     * @param string $cptDerRep The cpt der rep.
     */
    public function setCptDerRep($cptDerRep) {
        $this->cptDerRep = $cptDerRep;
        return $this;
    }
}
