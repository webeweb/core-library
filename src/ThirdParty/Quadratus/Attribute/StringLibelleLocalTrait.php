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
 * Libelle local trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleLocalTrait {

    /**
     * Libelle local.
     *
     * @var string
     */
    private $libelleLocal;

    /**
     * Get the libelle local.
     *
     * @return string Returns the libelle local.
     */
    public function getLibelleLocal() {
        return $this->libelleLocal;
    }

    /**
     * Set the libelle local.
     *
     * @param string $libelleLocal The libelle local.
     */
    public function setLibelleLocal($libelleLocal) {
        $this->libelleLocal = $libelleLocal;
        return $this;
    }
}
