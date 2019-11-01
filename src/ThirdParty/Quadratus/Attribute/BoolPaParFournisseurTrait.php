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
 * Pa par fournisseur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPaParFournisseurTrait {

    /**
     * Pa par fournisseur.
     *
     * @var bool
     */
    private $paParFournisseur;

    /**
     * Get the pa par fournisseur.
     *
     * @return bool Returns the pa par fournisseur.
     */
    public function getPaParFournisseur() {
        return $this->paParFournisseur;
    }

    /**
     * Set the pa par fournisseur.
     *
     * @param bool $paParFournisseur The pa par fournisseur.
     */
    public function setPaParFournisseur($paParFournisseur) {
        $this->paParFournisseur = $paParFournisseur;
        return $this;
    }
}
