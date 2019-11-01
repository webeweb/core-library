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
 * Liste comptes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringListeComptesTrait {

    /**
     * Liste comptes.
     *
     * @var string
     */
    private $listeComptes;

    /**
     * Get the liste comptes.
     *
     * @return string Returns the liste comptes.
     */
    public function getListeComptes() {
        return $this->listeComptes;
    }

    /**
     * Set the liste comptes.
     *
     * @param string $listeComptes The liste comptes.
     */
    public function setListeComptes($listeComptes) {
        $this->listeComptes = $listeComptes;
        return $this;
    }
}
