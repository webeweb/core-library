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
 * Type abonnement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAbonnementTrait {

    /**
     * Type abonnement.
     *
     * @var string
     */
    private $typeAbonnement;

    /**
     * Get the type abonnement.
     *
     * @return string Returns the type abonnement.
     */
    public function getTypeAbonnement() {
        return $this->typeAbonnement;
    }

    /**
     * Set the type abonnement.
     *
     * @param string $typeAbonnement The type abonnement.
     */
    public function setTypeAbonnement($typeAbonnement) {
        $this->typeAbonnement = $typeAbonnement;
        return $this;
    }
}
