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
 * Compte comm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCompteCommTrait {

    /**
     * Compte comm.
     *
     * @var string
     */
    private $compteComm;

    /**
     * Get the compte comm.
     *
     * @return string Returns the compte comm.
     */
    public function getCompteComm() {
        return $this->compteComm;
    }

    /**
     * Set the compte comm.
     *
     * @param string $compteComm The compte comm.
     */
    public function setCompteComm($compteComm) {
        $this->compteComm = $compteComm;
        return $this;
    }
}
