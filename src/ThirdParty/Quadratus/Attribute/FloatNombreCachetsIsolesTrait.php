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
 * Nombre cachets isoles trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNombreCachetsIsolesTrait {

    /**
     * Nombre cachets isoles.
     *
     * @var float
     */
    private $nombreCachetsIsoles;

    /**
     * Get the nombre cachets isoles.
     *
     * @return float Returns the nombre cachets isoles.
     */
    public function getNombreCachetsIsoles() {
        return $this->nombreCachetsIsoles;
    }

    /**
     * Set the nombre cachets isoles.
     *
     * @param float $nombreCachetsIsoles The nombre cachets isoles.
     */
    public function setNombreCachetsIsoles($nombreCachetsIsoles) {
        $this->nombreCachetsIsoles = $nombreCachetsIsoles;
        return $this;
    }
}
