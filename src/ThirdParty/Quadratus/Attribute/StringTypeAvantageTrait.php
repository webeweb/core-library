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
 * Type avantage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAvantageTrait {

    /**
     * Type avantage.
     *
     * @var string
     */
    private $typeAvantage;

    /**
     * Get the type avantage.
     *
     * @return string Returns the type avantage.
     */
    public function getTypeAvantage() {
        return $this->typeAvantage;
    }

    /**
     * Set the type avantage.
     *
     * @param string $typeAvantage The type avantage.
     */
    public function setTypeAvantage($typeAvantage) {
        $this->typeAvantage = $typeAvantage;
        return $this;
    }
}
