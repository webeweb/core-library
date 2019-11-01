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
 * Compte ventilation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteVentilationTrait {

    /**
     * Compte ventilation.
     *
     * @var string
     */
    private $compteVentilation;

    /**
     * Get the compte ventilation.
     *
     * @return string Returns the compte ventilation.
     */
    public function getCompteVentilation() {
        return $this->compteVentilation;
    }

    /**
     * Set the compte ventilation.
     *
     * @param string $compteVentilation The compte ventilation.
     */
    public function setCompteVentilation($compteVentilation) {
        $this->compteVentilation = $compteVentilation;
        return $this;
    }
}
