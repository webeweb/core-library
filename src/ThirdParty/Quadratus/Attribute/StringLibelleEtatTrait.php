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
 * Libelle etat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleEtatTrait {

    /**
     * Libelle etat.
     *
     * @var string
     */
    private $libelleEtat;

    /**
     * Get the libelle etat.
     *
     * @return string Returns the libelle etat.
     */
    public function getLibelleEtat() {
        return $this->libelleEtat;
    }

    /**
     * Set the libelle etat.
     *
     * @param string $libelleEtat The libelle etat.
     */
    public function setLibelleEtat($libelleEtat) {
        $this->libelleEtat = $libelleEtat;
        return $this;
    }
}
