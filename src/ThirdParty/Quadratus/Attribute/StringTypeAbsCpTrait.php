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
 * Type abs cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAbsCpTrait {

    /**
     * Type abs cp.
     *
     * @var string
     */
    private $typeAbsCp;

    /**
     * Get the type abs cp.
     *
     * @return string Returns the type abs cp.
     */
    public function getTypeAbsCp() {
        return $this->typeAbsCp;
    }

    /**
     * Set the type abs cp.
     *
     * @param string $typeAbsCp The type abs cp.
     */
    public function setTypeAbsCp($typeAbsCp) {
        $this->typeAbsCp = $typeAbsCp;
        return $this;
    }
}
