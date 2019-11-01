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
 * Nbh sal btp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbhSalBtpTrait {

    /**
     * Nbh sal btp.
     *
     * @var float
     */
    private $nbhSalBtp;

    /**
     * Get the nbh sal btp.
     *
     * @return float Returns the nbh sal btp.
     */
    public function getNbhSalBtp() {
        return $this->nbhSalBtp;
    }

    /**
     * Set the nbh sal btp.
     *
     * @param float $nbhSalBtp The nbh sal btp.
     */
    public function setNbhSalBtp($nbhSalBtp) {
        $this->nbhSalBtp = $nbhSalBtp;
        return $this;
    }
}
