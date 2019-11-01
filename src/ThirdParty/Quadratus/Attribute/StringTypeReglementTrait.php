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
 * Type reglement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeReglementTrait {

    /**
     * Type reglement.
     *
     * @var string
     */
    private $typeReglement;

    /**
     * Get the type reglement.
     *
     * @return string Returns the type reglement.
     */
    public function getTypeReglement() {
        return $this->typeReglement;
    }

    /**
     * Set the type reglement.
     *
     * @param string $typeReglement The type reglement.
     */
    public function setTypeReglement($typeReglement) {
        $this->typeReglement = $typeReglement;
        return $this;
    }
}
