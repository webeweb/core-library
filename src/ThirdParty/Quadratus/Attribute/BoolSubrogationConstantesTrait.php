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
 * Subrogation constantes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSubrogationConstantesTrait {

    /**
     * Subrogation constantes.
     *
     * @var bool
     */
    private $subrogationConstantes;

    /**
     * Get the subrogation constantes.
     *
     * @return bool Returns the subrogation constantes.
     */
    public function getSubrogationConstantes() {
        return $this->subrogationConstantes;
    }

    /**
     * Set the subrogation constantes.
     *
     * @param bool $subrogationConstantes The subrogation constantes.
     */
    public function setSubrogationConstantes($subrogationConstantes) {
        $this->subrogationConstantes = $subrogationConstantes;
        return $this;
    }
}
