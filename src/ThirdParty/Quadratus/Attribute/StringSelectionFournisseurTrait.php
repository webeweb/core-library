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
 * Selection fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSelectionFournisseurTrait {

    /**
     * Selection fournisseur.
     *
     * @var string
     */
    private $selectionFournisseur;

    /**
     * Get the selection fournisseur.
     *
     * @return string Returns the selection fournisseur.
     */
    public function getSelectionFournisseur() {
        return $this->selectionFournisseur;
    }

    /**
     * Set the selection fournisseur.
     *
     * @param string $selectionFournisseur The selection fournisseur.
     */
    public function setSelectionFournisseur($selectionFournisseur) {
        $this->selectionFournisseur = $selectionFournisseur;
        return $this;
    }
}
