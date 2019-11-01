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
 * Libelle transf cpta trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibelleTransfCptaTrait {

    /**
     * Libelle transf cpta.
     *
     * @var string
     */
    private $libelleTransfCpta;

    /**
     * Get the libelle transf cpta.
     *
     * @return string Returns the libelle transf cpta.
     */
    public function getLibelleTransfCpta() {
        return $this->libelleTransfCpta;
    }

    /**
     * Set the libelle transf cpta.
     *
     * @param string $libelleTransfCpta The libelle transf cpta.
     */
    public function setLibelleTransfCpta($libelleTransfCpta) {
        $this->libelleTransfCpta = $libelleTransfCpta;
        return $this;
    }
}
