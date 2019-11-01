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
 * Taux escompte trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTauxEscompteTrait {

    /**
     * Taux escompte.
     *
     * @var float
     */
    private $tauxEscompte;

    /**
     * Get the taux escompte.
     *
     * @return float Returns the taux escompte.
     */
    public function getTauxEscompte() {
        return $this->tauxEscompte;
    }

    /**
     * Set the taux escompte.
     *
     * @param float $tauxEscompte The taux escompte.
     */
    public function setTauxEscompte($tauxEscompte) {
        $this->tauxEscompte = $tauxEscompte;
        return $this;
    }
}
