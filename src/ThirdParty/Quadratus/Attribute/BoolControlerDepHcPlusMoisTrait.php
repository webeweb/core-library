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
 * Controler dep hc plus mois trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolControlerDepHcPlusMoisTrait {

    /**
     * Controler dep hc plus mois.
     *
     * @var bool
     */
    private $controlerDepHcPlusMois;

    /**
     * Get the controler dep hc plus mois.
     *
     * @return bool Returns the controler dep hc plus mois.
     */
    public function getControlerDepHcPlusMois() {
        return $this->controlerDepHcPlusMois;
    }

    /**
     * Set the controler dep hc plus mois.
     *
     * @param bool $controlerDepHcPlusMois The controler dep hc plus mois.
     */
    public function setControlerDepHcPlusMois($controlerDepHcPlusMois) {
        $this->controlerDepHcPlusMois = $controlerDepHcPlusMois;
        return $this;
    }
}
