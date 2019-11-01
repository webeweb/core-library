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
 * Nombre cachets trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNombreCachetsTrait {

    /**
     * Nombre cachets.
     *
     * @var float
     */
    private $nombreCachets;

    /**
     * Get the nombre cachets.
     *
     * @return float Returns the nombre cachets.
     */
    public function getNombreCachets() {
        return $this->nombreCachets;
    }

    /**
     * Set the nombre cachets.
     *
     * @param float $nombreCachets The nombre cachets.
     */
    public function setNombreCachets($nombreCachets) {
        $this->nombreCachets = $nombreCachets;
        return $this;
    }
}
