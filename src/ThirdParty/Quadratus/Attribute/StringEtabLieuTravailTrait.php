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
 * Etab lieu travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtabLieuTravailTrait {

    /**
     * Etab lieu travail.
     *
     * @var string
     */
    private $etabLieuTravail;

    /**
     * Get the etab lieu travail.
     *
     * @return string Returns the etab lieu travail.
     */
    public function getEtabLieuTravail() {
        return $this->etabLieuTravail;
    }

    /**
     * Set the etab lieu travail.
     *
     * @param string $etabLieuTravail The etab lieu travail.
     */
    public function setEtabLieuTravail($etabLieuTravail) {
        $this->etabLieuTravail = $etabLieuTravail;
        return $this;
    }
}
