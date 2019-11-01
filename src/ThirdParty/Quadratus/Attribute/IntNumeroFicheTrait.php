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
 * Numero fiche trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumeroFicheTrait {

    /**
     * Numero fiche.
     *
     * @var int
     */
    private $numeroFiche;

    /**
     * Get the numero fiche.
     *
     * @return int Returns the numero fiche.
     */
    public function getNumeroFiche() {
        return $this->numeroFiche;
    }

    /**
     * Set the numero fiche.
     *
     * @param int $numeroFiche The numero fiche.
     */
    public function setNumeroFiche($numeroFiche) {
        $this->numeroFiche = $numeroFiche;
        return $this;
    }
}
