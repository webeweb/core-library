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
 * Libelle variante trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleVarianteTrait {

    /**
     * Libelle variante.
     *
     * @var string
     */
    private $libelleVariante;

    /**
     * Get the libelle variante.
     *
     * @return string Returns the libelle variante.
     */
    public function getLibelleVariante() {
        return $this->libelleVariante;
    }

    /**
     * Set the libelle variante.
     *
     * @param string $libelleVariante The libelle variante.
     */
    public function setLibelleVariante($libelleVariante) {
        $this->libelleVariante = $libelleVariante;
        return $this;
    }
}
