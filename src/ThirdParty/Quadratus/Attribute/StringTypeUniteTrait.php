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
 * Type unite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeUniteTrait {

    /**
     * Type unite.
     *
     * @var string
     */
    private $typeUnite;

    /**
     * Get the type unite.
     *
     * @return string Returns the type unite.
     */
    public function getTypeUnite() {
        return $this->typeUnite;
    }

    /**
     * Set the type unite.
     *
     * @param string $typeUnite The type unite.
     */
    public function setTypeUnite($typeUnite) {
        $this->typeUnite = $typeUnite;
        return $this;
    }
}
