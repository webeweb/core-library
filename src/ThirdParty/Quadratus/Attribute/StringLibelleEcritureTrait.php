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
 * Libelle ecriture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleEcritureTrait {

    /**
     * Libelle ecriture.
     *
     * @var string
     */
    private $libelleEcriture;

    /**
     * Get the libelle ecriture.
     *
     * @return string Returns the libelle ecriture.
     */
    public function getLibelleEcriture() {
        return $this->libelleEcriture;
    }

    /**
     * Set the libelle ecriture.
     *
     * @param string $libelleEcriture The libelle ecriture.
     */
    public function setLibelleEcriture($libelleEcriture) {
        $this->libelleEcriture = $libelleEcriture;
        return $this;
    }
}
