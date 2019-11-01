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
 * Type an trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeAnTrait {

    /**
     * Type an.
     *
     * @var string
     */
    private $typeAn;

    /**
     * Get the type an.
     *
     * @return string Returns the type an.
     */
    public function getTypeAn() {
        return $this->typeAn;
    }

    /**
     * Set the type an.
     *
     * @param string $typeAn The type an.
     */
    public function setTypeAn($typeAn) {
        $this->typeAn = $typeAn;
        return $this;
    }
}
