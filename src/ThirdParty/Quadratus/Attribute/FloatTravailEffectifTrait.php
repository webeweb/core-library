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
 * Travail effectif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTravailEffectifTrait {

    /**
     * Travail effectif.
     *
     * @var float
     */
    private $travailEffectif;

    /**
     * Get the travail effectif.
     *
     * @return float Returns the travail effectif.
     */
    public function getTravailEffectif() {
        return $this->travailEffectif;
    }

    /**
     * Set the travail effectif.
     *
     * @param float $travailEffectif The travail effectif.
     */
    public function setTravailEffectif($travailEffectif) {
        $this->travailEffectif = $travailEffectif;
        return $this;
    }
}
