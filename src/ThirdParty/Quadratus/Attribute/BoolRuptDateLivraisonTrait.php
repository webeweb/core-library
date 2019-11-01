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
 * Rupt date livraison trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRuptDateLivraisonTrait {

    /**
     * Rupt date livraison.
     *
     * @var bool
     */
    private $ruptDateLivraison;

    /**
     * Get the rupt date livraison.
     *
     * @return bool Returns the rupt date livraison.
     */
    public function getRuptDateLivraison() {
        return $this->ruptDateLivraison;
    }

    /**
     * Set the rupt date livraison.
     *
     * @param bool $ruptDateLivraison The rupt date livraison.
     */
    public function setRuptDateLivraison($ruptDateLivraison) {
        $this->ruptDateLivraison = $ruptDateLivraison;
        return $this;
    }
}
