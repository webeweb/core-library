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
 * Compte ventil trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteVentilTrait {

    /**
     * Compte ventil.
     *
     * @var string
     */
    private $compteVentil;

    /**
     * Get the compte ventil.
     *
     * @return string Returns the compte ventil.
     */
    public function getCompteVentil() {
        return $this->compteVentil;
    }

    /**
     * Set the compte ventil.
     *
     * @param string $compteVentil The compte ventil.
     */
    public function setCompteVentil($compteVentil) {
        $this->compteVentil = $compteVentil;
        return $this;
    }
}
