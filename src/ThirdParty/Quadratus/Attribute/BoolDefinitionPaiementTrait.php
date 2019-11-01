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
 * Definition paiement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDefinitionPaiementTrait {

    /**
     * Definition paiement.
     *
     * @var bool
     */
    private $definitionPaiement;

    /**
     * Get the definition paiement.
     *
     * @return bool Returns the definition paiement.
     */
    public function getDefinitionPaiement() {
        return $this->definitionPaiement;
    }

    /**
     * Set the definition paiement.
     *
     * @param bool $definitionPaiement The definition paiement.
     */
    public function setDefinitionPaiement($definitionPaiement) {
        $this->definitionPaiement = $definitionPaiement;
        return $this;
    }
}
