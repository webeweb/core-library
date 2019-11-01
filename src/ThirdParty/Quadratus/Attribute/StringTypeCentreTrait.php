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
 * Type centre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeCentreTrait {

    /**
     * Type centre.
     *
     * @var string
     */
    private $typeCentre;

    /**
     * Get the type centre.
     *
     * @return string Returns the type centre.
     */
    public function getTypeCentre() {
        return $this->typeCentre;
    }

    /**
     * Set the type centre.
     *
     * @param string $typeCentre The type centre.
     */
    public function setTypeCentre($typeCentre) {
        $this->typeCentre = $typeCentre;
        return $this;
    }
}
