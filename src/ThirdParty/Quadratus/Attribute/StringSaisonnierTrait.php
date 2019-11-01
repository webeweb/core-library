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
 * Saisonnier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSaisonnierTrait {

    /**
     * Saisonnier.
     *
     * @var string
     */
    private $saisonnier;

    /**
     * Get the saisonnier.
     *
     * @return string Returns the saisonnier.
     */
    public function getSaisonnier() {
        return $this->saisonnier;
    }

    /**
     * Set the saisonnier.
     *
     * @param string $saisonnier The saisonnier.
     */
    public function setSaisonnier($saisonnier) {
        $this->saisonnier = $saisonnier;
        return $this;
    }
}
