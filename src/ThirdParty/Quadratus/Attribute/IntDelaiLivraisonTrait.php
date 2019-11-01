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
 * Delai livraison trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDelaiLivraisonTrait {

    /**
     * Delai livraison.
     *
     * @var int
     */
    private $delaiLivraison;

    /**
     * Get the delai livraison.
     *
     * @return int Returns the delai livraison.
     */
    public function getDelaiLivraison() {
        return $this->delaiLivraison;
    }

    /**
     * Set the delai livraison.
     *
     * @param int $delaiLivraison The delai livraison.
     */
    public function setDelaiLivraison($delaiLivraison) {
        $this->delaiLivraison = $delaiLivraison;
        return $this;
    }
}
