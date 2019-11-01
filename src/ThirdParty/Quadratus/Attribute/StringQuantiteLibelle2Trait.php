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
 * Quantite libelle2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQuantiteLibelle2Trait {

    /**
     * Quantite libelle2.
     *
     * @var string
     */
    private $quantiteLibelle2;

    /**
     * Get the quantite libelle2.
     *
     * @return string Returns the quantite libelle2.
     */
    public function getQuantiteLibelle2() {
        return $this->quantiteLibelle2;
    }

    /**
     * Set the quantite libelle2.
     *
     * @param string $quantiteLibelle2 The quantite libelle2.
     */
    public function setQuantiteLibelle2($quantiteLibelle2) {
        $this->quantiteLibelle2 = $quantiteLibelle2;
        return $this;
    }
}
