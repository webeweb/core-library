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
 * Telepaiement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTelepaiementTrait {

    /**
     * Telepaiement.
     *
     * @var bool
     */
    private $telepaiement;

    /**
     * Get the telepaiement.
     *
     * @return bool Returns the telepaiement.
     */
    public function getTelepaiement() {
        return $this->telepaiement;
    }

    /**
     * Set the telepaiement.
     *
     * @param bool $telepaiement The telepaiement.
     */
    public function setTelepaiement($telepaiement) {
        $this->telepaiement = $telepaiement;
        return $this;
    }
}
