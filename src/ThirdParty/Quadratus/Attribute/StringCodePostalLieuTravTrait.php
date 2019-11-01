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
 * Code postal lieu trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePostalLieuTravTrait {

    /**
     * Code postal lieu trav.
     *
     * @var string
     */
    private $codePostalLieuTrav;

    /**
     * Get the code postal lieu trav.
     *
     * @return string Returns the code postal lieu trav.
     */
    public function getCodePostalLieuTrav() {
        return $this->codePostalLieuTrav;
    }

    /**
     * Set the code postal lieu trav.
     *
     * @param string $codePostalLieuTrav The code postal lieu trav.
     */
    public function setCodePostalLieuTrav($codePostalLieuTrav) {
        $this->codePostalLieuTrav = $codePostalLieuTrav;
        return $this;
    }
}
