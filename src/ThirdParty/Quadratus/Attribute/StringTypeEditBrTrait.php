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
 * Type edit br trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeEditBrTrait {

    /**
     * Type edit br.
     *
     * @var string
     */
    private $typeEditBr;

    /**
     * Get the type edit br.
     *
     * @return string Returns the type edit br.
     */
    public function getTypeEditBr() {
        return $this->typeEditBr;
    }

    /**
     * Set the type edit br.
     *
     * @param string $typeEditBr The type edit br.
     */
    public function setTypeEditBr($typeEditBr) {
        $this->typeEditBr = $typeEditBr;
        return $this;
    }
}
