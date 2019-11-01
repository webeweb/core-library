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
 * Type facture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTypeFactureTrait {

    /**
     * Type facture.
     *
     * @var int
     */
    private $typeFacture;

    /**
     * Get the type facture.
     *
     * @return int Returns the type facture.
     */
    public function getTypeFacture() {
        return $this->typeFacture;
    }

    /**
     * Set the type facture.
     *
     * @param int $typeFacture The type facture.
     */
    public function setTypeFacture($typeFacture) {
        $this->typeFacture = $typeFacture;
        return $this;
    }
}
