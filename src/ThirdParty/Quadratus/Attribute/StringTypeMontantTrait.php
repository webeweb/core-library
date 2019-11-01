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
 * Type montant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeMontantTrait {

    /**
     * Type montant.
     *
     * @var string
     */
    private $typeMontant;

    /**
     * Get the type montant.
     *
     * @return string Returns the type montant.
     */
    public function getTypeMontant() {
        return $this->typeMontant;
    }

    /**
     * Set the type montant.
     *
     * @param string $typeMontant The type montant.
     */
    public function setTypeMontant($typeMontant) {
        $this->typeMontant = $typeMontant;
        return $this;
    }
}
