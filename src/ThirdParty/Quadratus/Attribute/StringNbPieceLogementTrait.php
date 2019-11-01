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
 * Nb piece logement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbPieceLogementTrait {

    /**
     * Nb piece logement.
     *
     * @var string
     */
    private $nbPieceLogement;

    /**
     * Get the nb piece logement.
     *
     * @return string Returns the nb piece logement.
     */
    public function getNbPieceLogement() {
        return $this->nbPieceLogement;
    }

    /**
     * Set the nb piece logement.
     *
     * @param string $nbPieceLogement The nb piece logement.
     */
    public function setNbPieceLogement($nbPieceLogement) {
        $this->nbPieceLogement = $nbPieceLogement;
        return $this;
    }
}
