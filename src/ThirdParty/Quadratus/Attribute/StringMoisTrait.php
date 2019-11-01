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
 * Mois trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMoisTrait {

    /**
     * Mois.
     *
     * @var string
     */
    private $mois;

    /**
     * Get the mois.
     *
     * @return string Returns the mois.
     */
    public function getMois() {
        return $this->mois;
    }

    /**
     * Set the mois.
     *
     * @param string $mois The mois.
     */
    public function setMois($mois) {
        $this->mois = $mois;
        return $this;
    }
}
