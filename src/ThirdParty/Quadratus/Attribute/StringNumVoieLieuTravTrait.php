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
 * Num voie lieu trav trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumVoieLieuTravTrait {

    /**
     * Num voie lieu trav.
     *
     * @var string
     */
    private $numVoieLieuTrav;

    /**
     * Get the num voie lieu trav.
     *
     * @return string Returns the num voie lieu trav.
     */
    public function getNumVoieLieuTrav() {
        return $this->numVoieLieuTrav;
    }

    /**
     * Set the num voie lieu trav.
     *
     * @param string $numVoieLieuTrav The num voie lieu trav.
     */
    public function setNumVoieLieuTrav($numVoieLieuTrav) {
        $this->numVoieLieuTrav = $numVoieLieuTrav;
        return $this;
    }
}
