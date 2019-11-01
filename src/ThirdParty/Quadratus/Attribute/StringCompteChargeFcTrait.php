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
 * Compte charge fc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteChargeFcTrait {

    /**
     * Compte charge fc.
     *
     * @var string
     */
    private $compteChargeFc;

    /**
     * Get the compte charge fc.
     *
     * @return string Returns the compte charge fc.
     */
    public function getCompteChargeFc() {
        return $this->compteChargeFc;
    }

    /**
     * Set the compte charge fc.
     *
     * @param string $compteChargeFc The compte charge fc.
     */
    public function setCompteChargeFc($compteChargeFc) {
        $this->compteChargeFc = $compteChargeFc;
        return $this;
    }
}
