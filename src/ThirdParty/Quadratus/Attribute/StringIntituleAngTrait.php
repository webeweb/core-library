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
 * Intitule ang trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIntituleAngTrait {

    /**
     * Intitule ang.
     *
     * @var string
     */
    private $intituleAng;

    /**
     * Get the intitule ang.
     *
     * @return string Returns the intitule ang.
     */
    public function getIntituleAng() {
        return $this->intituleAng;
    }

    /**
     * Set the intitule ang.
     *
     * @param string $intituleAng The intitule ang.
     */
    public function setIntituleAng($intituleAng) {
        $this->intituleAng = $intituleAng;
        return $this;
    }
}
