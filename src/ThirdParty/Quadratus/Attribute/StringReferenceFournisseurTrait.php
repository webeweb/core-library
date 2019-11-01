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
 * Reference fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringReferenceFournisseurTrait {

    /**
     * Reference fournisseur.
     *
     * @var string
     */
    private $referenceFournisseur;

    /**
     * Get the reference fournisseur.
     *
     * @return string Returns the reference fournisseur.
     */
    public function getReferenceFournisseur() {
        return $this->referenceFournisseur;
    }

    /**
     * Set the reference fournisseur.
     *
     * @param string $referenceFournisseur The reference fournisseur.
     */
    public function setReferenceFournisseur($referenceFournisseur) {
        $this->referenceFournisseur = $referenceFournisseur;
        return $this;
    }
}
