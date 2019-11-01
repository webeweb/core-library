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
 * Code affect rent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAffectRentTrait {

    /**
     * Code affect rent.
     *
     * @var string
     */
    private $codeAffectRent;

    /**
     * Get the code affect rent.
     *
     * @return string Returns the code affect rent.
     */
    public function getCodeAffectRent() {
        return $this->codeAffectRent;
    }

    /**
     * Set the code affect rent.
     *
     * @param string $codeAffectRent The code affect rent.
     */
    public function setCodeAffectRent($codeAffectRent) {
        $this->codeAffectRent = $codeAffectRent;
        return $this;
    }
}
