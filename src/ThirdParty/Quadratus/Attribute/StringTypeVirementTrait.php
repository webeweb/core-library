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
 * Type virement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeVirementTrait {

    /**
     * Type virement.
     *
     * @var string
     */
    private $typeVirement;

    /**
     * Get the type virement.
     *
     * @return string Returns the type virement.
     */
    public function getTypeVirement() {
        return $this->typeVirement;
    }

    /**
     * Set the type virement.
     *
     * @param string $typeVirement The type virement.
     */
    public function setTypeVirement($typeVirement) {
        $this->typeVirement = $typeVirement;
        return $this;
    }
}
