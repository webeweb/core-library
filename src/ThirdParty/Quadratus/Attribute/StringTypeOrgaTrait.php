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
 * Type orga trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeOrgaTrait {

    /**
     * Type orga.
     *
     * @var string
     */
    private $typeOrga;

    /**
     * Get the type orga.
     *
     * @return string Returns the type orga.
     */
    public function getTypeOrga() {
        return $this->typeOrga;
    }

    /**
     * Set the type orga.
     *
     * @param string $typeOrga The type orga.
     */
    public function setTypeOrga($typeOrga) {
        $this->typeOrga = $typeOrga;
        return $this;
    }
}
