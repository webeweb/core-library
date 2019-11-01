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
 * Complement livraison trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringComplementLivraisonTrait {

    /**
     * Complement livraison.
     *
     * @var string
     */
    private $complementLivraison;

    /**
     * Get the complement livraison.
     *
     * @return string Returns the complement livraison.
     */
    public function getComplementLivraison() {
        return $this->complementLivraison;
    }

    /**
     * Set the complement livraison.
     *
     * @param string $complementLivraison The complement livraison.
     */
    public function setComplementLivraison($complementLivraison) {
        $this->complementLivraison = $complementLivraison;
        return $this;
    }
}
