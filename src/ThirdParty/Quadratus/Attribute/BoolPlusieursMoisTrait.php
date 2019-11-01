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
 * Plusieurs mois trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPlusieursMoisTrait {

    /**
     * Plusieurs mois.
     *
     * @var bool
     */
    private $plusieursMois;

    /**
     * Get the plusieurs mois.
     *
     * @return bool Returns the plusieurs mois.
     */
    public function getPlusieursMois() {
        return $this->plusieursMois;
    }

    /**
     * Set the plusieurs mois.
     *
     * @param bool $plusieursMois The plusieurs mois.
     */
    public function setPlusieursMois($plusieursMois) {
        $this->plusieursMois = $plusieursMois;
        return $this;
    }
}
