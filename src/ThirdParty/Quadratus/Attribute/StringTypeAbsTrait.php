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
 * Type abs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAbsTrait {

    /**
     * Type abs.
     *
     * @var string
     */
    private $typeAbs;

    /**
     * Get the type abs.
     *
     * @return string Returns the type abs.
     */
    public function getTypeAbs() {
        return $this->typeAbs;
    }

    /**
     * Set the type abs.
     *
     * @param string $typeAbs The type abs.
     */
    public function setTypeAbs($typeAbs) {
        $this->typeAbs = $typeAbs;
        return $this;
    }
}
