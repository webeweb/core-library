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
 * Quantite libelle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQuantiteLibelleTrait {

    /**
     * Quantite libelle.
     *
     * @var string
     */
    private $quantiteLibelle;

    /**
     * Get the quantite libelle.
     *
     * @return string Returns the quantite libelle.
     */
    public function getQuantiteLibelle() {
        return $this->quantiteLibelle;
    }

    /**
     * Set the quantite libelle.
     *
     * @param string $quantiteLibelle The quantite libelle.
     */
    public function setQuantiteLibelle($quantiteLibelle) {
        $this->quantiteLibelle = $quantiteLibelle;
        return $this;
    }
}
