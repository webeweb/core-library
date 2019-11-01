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

use DateTime;

/**
 * Prochain mois oblig trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeProchainMoisObligTrait {

    /**
     * Prochain mois oblig.
     *
     * @var DateTime|null
     */
    private $prochainMoisOblig;

    /**
     * Get the prochain mois oblig.
     *
     * @return DateTime|null Returns the prochain mois oblig.
     */
    public function getProchainMoisOblig() {
        return $this->prochainMoisOblig;
    }

    /**
     * Set the prochain mois oblig.
     *
     * @param DateTime|null $prochainMoisOblig The prochain mois oblig.
     */
    public function setProchainMoisOblig(DateTime $prochainMoisOblig = null) {
        $this->prochainMoisOblig = $prochainMoisOblig;
        return $this;
    }
}
