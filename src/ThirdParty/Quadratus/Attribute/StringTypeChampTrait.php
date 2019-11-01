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
 * Type champ trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeChampTrait {

    /**
     * Type champ.
     *
     * @var string
     */
    private $typeChamp;

    /**
     * Get the type champ.
     *
     * @return string Returns the type champ.
     */
    public function getTypeChamp() {
        return $this->typeChamp;
    }

    /**
     * Set the type champ.
     *
     * @param string $typeChamp The type champ.
     */
    public function setTypeChamp($typeChamp) {
        $this->typeChamp = $typeChamp;
        return $this;
    }
}
