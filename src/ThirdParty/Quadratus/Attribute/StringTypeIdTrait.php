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
 * Type id trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeIdTrait {

    /**
     * Type id.
     *
     * @var string
     */
    private $typeId;

    /**
     * Get the type id.
     *
     * @return string Returns the type id.
     */
    public function getTypeId() {
        return $this->typeId;
    }

    /**
     * Set the type id.
     *
     * @param string $typeId The type id.
     */
    public function setTypeId($typeId) {
        $this->typeId = $typeId;
        return $this;
    }
}
