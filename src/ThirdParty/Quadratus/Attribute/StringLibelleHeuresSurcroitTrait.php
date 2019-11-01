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
 * Libelle heures surcroit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleHeuresSurcroitTrait {

    /**
     * Libelle heures surcroit.
     *
     * @var string
     */
    private $libelleHeuresSurcroit;

    /**
     * Get the libelle heures surcroit.
     *
     * @return string Returns the libelle heures surcroit.
     */
    public function getLibelleHeuresSurcroit() {
        return $this->libelleHeuresSurcroit;
    }

    /**
     * Set the libelle heures surcroit.
     *
     * @param string $libelleHeuresSurcroit The libelle heures surcroit.
     */
    public function setLibelleHeuresSurcroit($libelleHeuresSurcroit) {
        $this->libelleHeuresSurcroit = $libelleHeuresSurcroit;
        return $this;
    }
}
