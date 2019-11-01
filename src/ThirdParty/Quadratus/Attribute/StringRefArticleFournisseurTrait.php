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
 * Ref article fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRefArticleFournisseurTrait {

    /**
     * Ref article fournisseur.
     *
     * @var string
     */
    private $refArticleFournisseur;

    /**
     * Get the ref article fournisseur.
     *
     * @return string Returns the ref article fournisseur.
     */
    public function getRefArticleFournisseur() {
        return $this->refArticleFournisseur;
    }

    /**
     * Set the ref article fournisseur.
     *
     * @param string $refArticleFournisseur The ref article fournisseur.
     */
    public function setRefArticleFournisseur($refArticleFournisseur) {
        $this->refArticleFournisseur = $refArticleFournisseur;
        return $this;
    }
}
