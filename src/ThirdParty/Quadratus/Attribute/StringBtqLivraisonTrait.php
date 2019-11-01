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
 * Btq livraison trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBtqLivraisonTrait {

    /**
     * Btq livraison.
     *
     * @var string
     */
    private $btqLivraison;

    /**
     * Get the btq livraison.
     *
     * @return string Returns the btq livraison.
     */
    public function getBtqLivraison() {
        return $this->btqLivraison;
    }

    /**
     * Set the btq livraison.
     *
     * @param string $btqLivraison The btq livraison.
     */
    public function setBtqLivraison($btqLivraison) {
        $this->btqLivraison = $btqLivraison;
        return $this;
    }
}
