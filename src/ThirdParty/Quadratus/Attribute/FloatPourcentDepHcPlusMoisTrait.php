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
 * Pourcent dep hc plus mois trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatPourcentDepHcPlusMoisTrait {

    /**
     * Pourcent dep hc plus mois.
     *
     * @var float
     */
    private $pourcentDepHcPlusMois;

    /**
     * Get the pourcent dep hc plus mois.
     *
     * @return float Returns the pourcent dep hc plus mois.
     */
    public function getPourcentDepHcPlusMois() {
        return $this->pourcentDepHcPlusMois;
    }

    /**
     * Set the pourcent dep hc plus mois.
     *
     * @param float $pourcentDepHcPlusMois The pourcent dep hc plus mois.
     */
    public function setPourcentDepHcPlusMois($pourcentDepHcPlusMois) {
        $this->pourcentDepHcPlusMois = $pourcentDepHcPlusMois;
        return $this;
    }
}
