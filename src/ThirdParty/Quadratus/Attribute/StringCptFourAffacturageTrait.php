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
 * Cpt four affacturage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCptFourAffacturageTrait {

    /**
     * Cpt four affacturage.
     *
     * @var string
     */
    private $cptFourAffacturage;

    /**
     * Get the cpt four affacturage.
     *
     * @return string Returns the cpt four affacturage.
     */
    public function getCptFourAffacturage() {
        return $this->cptFourAffacturage;
    }

    /**
     * Set the cpt four affacturage.
     *
     * @param string $cptFourAffacturage The cpt four affacturage.
     */
    public function setCptFourAffacturage($cptFourAffacturage) {
        $this->cptFourAffacturage = $cptFourAffacturage;
        return $this;
    }
}
