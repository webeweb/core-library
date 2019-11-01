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
 * Raison soc lieu trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRaisonSocLieuTravTrait {

    /**
     * Raison soc lieu trav.
     *
     * @var string
     */
    private $raisonSocLieuTrav;

    /**
     * Get the raison soc lieu trav.
     *
     * @return string Returns the raison soc lieu trav.
     */
    public function getRaisonSocLieuTrav() {
        return $this->raisonSocLieuTrav;
    }

    /**
     * Set the raison soc lieu trav.
     *
     * @param string $raisonSocLieuTrav The raison soc lieu trav.
     */
    public function setRaisonSocLieuTrav($raisonSocLieuTrav) {
        $this->raisonSocLieuTrav = $raisonSocLieuTrav;
        return $this;
    }
}
