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
 * Etiquettes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEtiquettesTrait {

    /**
     * Etiquettes.
     *
     * @var bool
     */
    private $etiquettes;

    /**
     * Get the etiquettes.
     *
     * @return bool Returns the etiquettes.
     */
    public function getEtiquettes() {
        return $this->etiquettes;
    }

    /**
     * Set the etiquettes.
     *
     * @param bool $etiquettes The etiquettes.
     */
    public function setEtiquettes($etiquettes) {
        $this->etiquettes = $etiquettes;
        return $this;
    }
}
