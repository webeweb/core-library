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
 * Nom ville insee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomVilleInseeTrait {

    /**
     * Nom ville insee.
     *
     * @var string
     */
    private $nomVilleInsee;

    /**
     * Get the nom ville insee.
     *
     * @return string Returns the nom ville insee.
     */
    public function getNomVilleInsee() {
        return $this->nomVilleInsee;
    }

    /**
     * Set the nom ville insee.
     *
     * @param string $nomVilleInsee The nom ville insee.
     */
    public function setNomVilleInsee($nomVilleInsee) {
        $this->nomVilleInsee = $nomVilleInsee;
        return $this;
    }
}
