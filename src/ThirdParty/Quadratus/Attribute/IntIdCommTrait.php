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
 * Id comm trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIdCommTrait {

    /**
     * Id comm.
     *
     * @var int
     */
    private $idComm;

    /**
     * Get the id comm.
     *
     * @return int Returns the id comm.
     */
    public function getIdComm() {
        return $this->idComm;
    }

    /**
     * Set the id comm.
     *
     * @param int $idComm The id comm.
     */
    public function setIdComm($idComm) {
        $this->idComm = $idComm;
        return $this;
    }
}
