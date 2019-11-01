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
 * Type nationalite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeNationaliteTrait {

    /**
     * Type nationalite.
     *
     * @var string
     */
    private $typeNationalite;

    /**
     * Get the type nationalite.
     *
     * @return string Returns the type nationalite.
     */
    public function getTypeNationalite() {
        return $this->typeNationalite;
    }

    /**
     * Set the type nationalite.
     *
     * @param string $typeNationalite The type nationalite.
     */
    public function setTypeNationalite($typeNationalite) {
        $this->typeNationalite = $typeNationalite;
        return $this;
    }
}
