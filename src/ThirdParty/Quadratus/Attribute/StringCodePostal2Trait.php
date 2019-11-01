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
 * Code postal2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePostal2Trait {

    /**
     * Code postal2.
     *
     * @var string
     */
    private $codePostal2;

    /**
     * Get the code postal2.
     *
     * @return string Returns the code postal2.
     */
    public function getCodePostal2() {
        return $this->codePostal2;
    }

    /**
     * Set the code postal2.
     *
     * @param string $codePostal2 The code postal2.
     */
    public function setCodePostal2($codePostal2) {
        $this->codePostal2 = $codePostal2;
        return $this;
    }
}
