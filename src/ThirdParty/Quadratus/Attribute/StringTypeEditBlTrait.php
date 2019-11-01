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
 * Type edit bl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeEditBlTrait {

    /**
     * Type edit bl.
     *
     * @var string
     */
    private $typeEditBl;

    /**
     * Get the type edit bl.
     *
     * @return string Returns the type edit bl.
     */
    public function getTypeEditBl() {
        return $this->typeEditBl;
    }

    /**
     * Set the type edit bl.
     *
     * @param string $typeEditBl The type edit bl.
     */
    public function setTypeEditBl($typeEditBl) {
        $this->typeEditBl = $typeEditBl;
        return $this;
    }
}
