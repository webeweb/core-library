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
 * Jour livraison trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringJourLivraisonTrait {

    /**
     * Jour livraison.
     *
     * @var string
     */
    private $jourLivraison;

    /**
     * Get the jour livraison.
     *
     * @return string Returns the jour livraison.
     */
    public function getJourLivraison() {
        return $this->jourLivraison;
    }

    /**
     * Set the jour livraison.
     *
     * @param string $jourLivraison The jour livraison.
     */
    public function setJourLivraison($jourLivraison) {
        $this->jourLivraison = $jourLivraison;
        return $this;
    }
}
