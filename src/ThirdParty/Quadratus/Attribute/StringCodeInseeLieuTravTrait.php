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
 * Code insee lieu trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeInseeLieuTravTrait {

    /**
     * Code insee lieu trav.
     *
     * @var string
     */
    private $codeInseeLieuTrav;

    /**
     * Get the code insee lieu trav.
     *
     * @return string Returns the code insee lieu trav.
     */
    public function getCodeInseeLieuTrav() {
        return $this->codeInseeLieuTrav;
    }

    /**
     * Set the code insee lieu trav.
     *
     * @param string $codeInseeLieuTrav The code insee lieu trav.
     */
    public function setCodeInseeLieuTrav($codeInseeLieuTrav) {
        $this->codeInseeLieuTrav = $codeInseeLieuTrav;
        return $this;
    }
}
