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
 * Type nature trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeNatureTrait {

    /**
     * Type nature.
     *
     * @var string
     */
    private $typeNature;

    /**
     * Get the type nature.
     *
     * @return string Returns the type nature.
     */
    public function getTypeNature() {
        return $this->typeNature;
    }

    /**
     * Set the type nature.
     *
     * @param string $typeNature The type nature.
     */
    public function setTypeNature($typeNature) {
        $this->typeNature = $typeNature;
        return $this;
    }
}
