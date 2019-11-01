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
 * Id lieu travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdLieuTravailTrait {

    /**
     * Id lieu travail.
     *
     * @var string
     */
    private $idLieuTravail;

    /**
     * Get the id lieu travail.
     *
     * @return string Returns the id lieu travail.
     */
    public function getIdLieuTravail() {
        return $this->idLieuTravail;
    }

    /**
     * Set the id lieu travail.
     *
     * @param string $idLieuTravail The id lieu travail.
     */
    public function setIdLieuTravail($idLieuTravail) {
        $this->idLieuTravail = $idLieuTravail;
        return $this;
    }
}
