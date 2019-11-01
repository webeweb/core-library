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
 * Type elem trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeElemTrait {

    /**
     * Type elem.
     *
     * @var string
     */
    private $typeElem;

    /**
     * Get the type elem.
     *
     * @return string Returns the type elem.
     */
    public function getTypeElem() {
        return $this->typeElem;
    }

    /**
     * Set the type elem.
     *
     * @param string $typeElem The type elem.
     */
    public function setTypeElem($typeElem) {
        $this->typeElem = $typeElem;
        return $this;
    }
}
