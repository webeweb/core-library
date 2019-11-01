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
 * Type rempl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeRemplTrait {

    /**
     * Type rempl.
     *
     * @var string
     */
    private $typeRempl;

    /**
     * Get the type rempl.
     *
     * @return string Returns the type rempl.
     */
    public function getTypeRempl() {
        return $this->typeRempl;
    }

    /**
     * Set the type rempl.
     *
     * @param string $typeRempl The type rempl.
     */
    public function setTypeRempl($typeRempl) {
        $this->typeRempl = $typeRempl;
        return $this;
    }
}
