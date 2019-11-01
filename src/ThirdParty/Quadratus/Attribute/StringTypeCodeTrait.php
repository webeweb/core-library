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
 * Type code trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeCodeTrait {

    /**
     * Type code.
     *
     * @var string
     */
    private $typeCode;

    /**
     * Get the type code.
     *
     * @return string Returns the type code.
     */
    public function getTypeCode() {
        return $this->typeCode;
    }

    /**
     * Set the type code.
     *
     * @param string $typeCode The type code.
     */
    public function setTypeCode($typeCode) {
        $this->typeCode = $typeCode;
        return $this;
    }
}
