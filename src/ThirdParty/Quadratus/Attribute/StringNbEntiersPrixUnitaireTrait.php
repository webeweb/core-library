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
 * Nb entiers prix unitaire trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbEntiersPrixUnitaireTrait {

    /**
     * Nb entiers prix unitaire.
     *
     * @var string
     */
    private $nbEntiersPrixUnitaire;

    /**
     * Get the nb entiers prix unitaire.
     *
     * @return string Returns the nb entiers prix unitaire.
     */
    public function getNbEntiersPrixUnitaire() {
        return $this->nbEntiersPrixUnitaire;
    }

    /**
     * Set the nb entiers prix unitaire.
     *
     * @param string $nbEntiersPrixUnitaire The nb entiers prix unitaire.
     */
    public function setNbEntiersPrixUnitaire($nbEntiersPrixUnitaire) {
        $this->nbEntiersPrixUnitaire = $nbEntiersPrixUnitaire;
        return $this;
    }
}
