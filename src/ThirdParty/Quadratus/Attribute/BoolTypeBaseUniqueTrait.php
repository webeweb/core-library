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
 * Type base unique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTypeBaseUniqueTrait {

    /**
     * Type base unique.
     *
     * @var bool
     */
    private $typeBaseUnique;

    /**
     * Get the type base unique.
     *
     * @return bool Returns the type base unique.
     */
    public function getTypeBaseUnique() {
        return $this->typeBaseUnique;
    }

    /**
     * Set the type base unique.
     *
     * @param bool $typeBaseUnique The type base unique.
     */
    public function setTypeBaseUnique($typeBaseUnique) {
        $this->typeBaseUnique = $typeBaseUnique;
        return $this;
    }
}
