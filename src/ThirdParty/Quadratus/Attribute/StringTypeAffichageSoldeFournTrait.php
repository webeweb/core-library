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
 * Type affichage solde fourn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAffichageSoldeFournTrait {

    /**
     * Type affichage solde fourn.
     *
     * @var string
     */
    private $typeAffichageSoldeFourn;

    /**
     * Get the type affichage solde fourn.
     *
     * @return string Returns the type affichage solde fourn.
     */
    public function getTypeAffichageSoldeFourn() {
        return $this->typeAffichageSoldeFourn;
    }

    /**
     * Set the type affichage solde fourn.
     *
     * @param string $typeAffichageSoldeFourn The type affichage solde fourn.
     */
    public function setTypeAffichageSoldeFourn($typeAffichageSoldeFourn) {
        $this->typeAffichageSoldeFourn = $typeAffichageSoldeFourn;
        return $this;
    }
}
