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
 * Type col ref trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeColRefTrait {

    /**
     * Type col ref.
     *
     * @var string
     */
    private $typeColRef;

    /**
     * Get the type col ref.
     *
     * @return string Returns the type col ref.
     */
    public function getTypeColRef() {
        return $this->typeColRef;
    }

    /**
     * Set the type col ref.
     *
     * @param string $typeColRef The type col ref.
     */
    public function setTypeColRef($typeColRef) {
        $this->typeColRef = $typeColRef;
        return $this;
    }
}
