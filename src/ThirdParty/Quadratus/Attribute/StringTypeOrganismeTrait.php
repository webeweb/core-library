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
 * Type organisme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeOrganismeTrait {

    /**
     * Type organisme.
     *
     * @var string
     */
    private $typeOrganisme;

    /**
     * Get the type organisme.
     *
     * @return string Returns the type organisme.
     */
    public function getTypeOrganisme() {
        return $this->typeOrganisme;
    }

    /**
     * Set the type organisme.
     *
     * @param string $typeOrganisme The type organisme.
     */
    public function setTypeOrganisme($typeOrganisme) {
        $this->typeOrganisme = $typeOrganisme;
        return $this;
    }
}
