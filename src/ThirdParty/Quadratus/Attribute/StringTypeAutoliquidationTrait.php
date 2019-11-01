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
 * Type autoliquidation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAutoliquidationTrait {

    /**
     * Type autoliquidation.
     *
     * @var string
     */
    private $typeAutoliquidation;

    /**
     * Get the type autoliquidation.
     *
     * @return string Returns the type autoliquidation.
     */
    public function getTypeAutoliquidation() {
        return $this->typeAutoliquidation;
    }

    /**
     * Set the type autoliquidation.
     *
     * @param string $typeAutoliquidation The type autoliquidation.
     */
    public function setTypeAutoliquidation($typeAutoliquidation) {
        $this->typeAutoliquidation = $typeAutoliquidation;
        return $this;
    }
}
