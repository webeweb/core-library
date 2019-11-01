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
 * Libelle revetement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleRevetementTrait {

    /**
     * Libelle revetement.
     *
     * @var string
     */
    private $libelleRevetement;

    /**
     * Get the libelle revetement.
     *
     * @return string Returns the libelle revetement.
     */
    public function getLibelleRevetement() {
        return $this->libelleRevetement;
    }

    /**
     * Set the libelle revetement.
     *
     * @param string $libelleRevetement The libelle revetement.
     */
    public function setLibelleRevetement($libelleRevetement) {
        $this->libelleRevetement = $libelleRevetement;
        return $this;
    }
}
