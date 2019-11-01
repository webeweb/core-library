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
 * Remun medecins trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatRemunMedecinsTrait {

    /**
     * Remun medecins.
     *
     * @var float
     */
    private $remunMedecins;

    /**
     * Get the remun medecins.
     *
     * @return float Returns the remun medecins.
     */
    public function getRemunMedecins() {
        return $this->remunMedecins;
    }

    /**
     * Set the remun medecins.
     *
     * @param float $remunMedecins The remun medecins.
     */
    public function setRemunMedecins($remunMedecins) {
        $this->remunMedecins = $remunMedecins;
        return $this;
    }
}
