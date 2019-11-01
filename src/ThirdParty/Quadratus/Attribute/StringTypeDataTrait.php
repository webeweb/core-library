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
 * Type data trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeDataTrait {

    /**
     * Type data.
     *
     * @var string
     */
    private $typeData;

    /**
     * Get the type data.
     *
     * @return string Returns the type data.
     */
    public function getTypeData() {
        return $this->typeData;
    }

    /**
     * Set the type data.
     *
     * @param string $typeData The type data.
     */
    public function setTypeData($typeData) {
        $this->typeData = $typeData;
        return $this;
    }
}
