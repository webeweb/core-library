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
 * Code officiel commune lieu trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeOfficielCommuneLieuTravTrait {

    /**
     * Code officiel commune lieu trav.
     *
     * @var string
     */
    private $codeOfficielCommuneLieuTrav;

    /**
     * Get the code officiel commune lieu trav.
     *
     * @return string Returns the code officiel commune lieu trav.
     */
    public function getCodeOfficielCommuneLieuTrav() {
        return $this->codeOfficielCommuneLieuTrav;
    }

    /**
     * Set the code officiel commune lieu trav.
     *
     * @param string $codeOfficielCommuneLieuTrav The code officiel commune lieu trav.
     */
    public function setCodeOfficielCommuneLieuTrav($codeOfficielCommuneLieuTrav) {
        $this->codeOfficielCommuneLieuTrav = $codeOfficielCommuneLieuTrav;
        return $this;
    }
}
