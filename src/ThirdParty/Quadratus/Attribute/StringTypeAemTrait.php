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
 * Type aem trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAemTrait {

    /**
     * Type aem.
     *
     * @var string
     */
    private $typeAem;

    /**
     * Get the type aem.
     *
     * @return string Returns the type aem.
     */
    public function getTypeAem() {
        return $this->typeAem;
    }

    /**
     * Set the type aem.
     *
     * @param string $typeAem The type aem.
     */
    public function setTypeAem($typeAem) {
        $this->typeAem = $typeAem;
        return $this;
    }
}
