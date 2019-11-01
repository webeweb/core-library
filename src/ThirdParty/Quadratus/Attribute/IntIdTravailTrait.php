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
 * Id travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntIdTravailTrait {

    /**
     * Id travail.
     *
     * @var int
     */
    private $idTravail;

    /**
     * Get the id travail.
     *
     * @return int Returns the id travail.
     */
    public function getIdTravail() {
        return $this->idTravail;
    }

    /**
     * Set the id travail.
     *
     * @param int $idTravail The id travail.
     */
    public function setIdTravail($idTravail) {
        $this->idTravail = $idTravail;
        return $this;
    }
}
