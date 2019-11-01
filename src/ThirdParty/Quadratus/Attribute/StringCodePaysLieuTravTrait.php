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
 * Code pays lieu trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePaysLieuTravTrait {

    /**
     * Code pays lieu trav.
     *
     * @var string
     */
    private $codePaysLieuTrav;

    /**
     * Get the code pays lieu trav.
     *
     * @return string Returns the code pays lieu trav.
     */
    public function getCodePaysLieuTrav() {
        return $this->codePaysLieuTrav;
    }

    /**
     * Set the code pays lieu trav.
     *
     * @param string $codePaysLieuTrav The code pays lieu trav.
     */
    public function setCodePaysLieuTrav($codePaysLieuTrav) {
        $this->codePaysLieuTrav = $codePaysLieuTrav;
        return $this;
    }
}
