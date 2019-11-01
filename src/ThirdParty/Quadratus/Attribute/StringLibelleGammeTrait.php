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
 * Libelle gamme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleGammeTrait {

    /**
     * Libelle gamme.
     *
     * @var string
     */
    private $libelleGamme;

    /**
     * Get the libelle gamme.
     *
     * @return string Returns the libelle gamme.
     */
    public function getLibelleGamme() {
        return $this->libelleGamme;
    }

    /**
     * Set the libelle gamme.
     *
     * @param string $libelleGamme The libelle gamme.
     */
    public function setLibelleGamme($libelleGamme) {
        $this->libelleGamme = $libelleGamme;
        return $this;
    }
}
