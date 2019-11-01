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
 * Nbh etab btp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbhEtabBtpTrait {

    /**
     * Nbh etab btp.
     *
     * @var float
     */
    private $nbhEtabBtp;

    /**
     * Get the nbh etab btp.
     *
     * @return float Returns the nbh etab btp.
     */
    public function getNbhEtabBtp() {
        return $this->nbhEtabBtp;
    }

    /**
     * Set the nbh etab btp.
     *
     * @param float $nbhEtabBtp The nbh etab btp.
     */
    public function setNbhEtabBtp($nbhEtabBtp) {
        $this->nbhEtabBtp = $nbhEtabBtp;
        return $this;
    }
}
