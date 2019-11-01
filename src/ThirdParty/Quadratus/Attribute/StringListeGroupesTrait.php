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
 * Liste groupes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringListeGroupesTrait {

    /**
     * Liste groupes.
     *
     * @var string
     */
    private $listeGroupes;

    /**
     * Get the liste groupes.
     *
     * @return string Returns the liste groupes.
     */
    public function getListeGroupes() {
        return $this->listeGroupes;
    }

    /**
     * Set the liste groupes.
     *
     * @param string $listeGroupes The liste groupes.
     */
    public function setListeGroupes($listeGroupes) {
        $this->listeGroupes = $listeGroupes;
        return $this;
    }
}
