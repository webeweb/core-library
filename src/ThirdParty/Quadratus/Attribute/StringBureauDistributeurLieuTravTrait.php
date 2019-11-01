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
 * Bureau distributeur lieu trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringBureauDistributeurLieuTravTrait {

    /**
     * Bureau distributeur lieu trav.
     *
     * @var string
     */
    private $bureauDistributeurLieuTrav;

    /**
     * Get the bureau distributeur lieu trav.
     *
     * @return string Returns the bureau distributeur lieu trav.
     */
    public function getBureauDistributeurLieuTrav() {
        return $this->bureauDistributeurLieuTrav;
    }

    /**
     * Set the bureau distributeur lieu trav.
     *
     * @param string $bureauDistributeurLieuTrav The bureau distributeur lieu trav.
     */
    public function setBureauDistributeurLieuTrav($bureauDistributeurLieuTrav) {
        $this->bureauDistributeurLieuTrav = $bureauDistributeurLieuTrav;
        return $this;
    }
}
