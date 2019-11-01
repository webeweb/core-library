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
 * Lieu travail conjoint trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuTravailConjointTrait {

    /**
     * Lieu travail conjoint.
     *
     * @var string
     */
    private $lieuTravailConjoint;

    /**
     * Get the lieu travail conjoint.
     *
     * @return string Returns the lieu travail conjoint.
     */
    public function getLieuTravailConjoint() {
        return $this->lieuTravailConjoint;
    }

    /**
     * Set the lieu travail conjoint.
     *
     * @param string $lieuTravailConjoint The lieu travail conjoint.
     */
    public function setLieuTravailConjoint($lieuTravailConjoint) {
        $this->lieuTravailConjoint = $lieuTravailConjoint;
        return $this;
    }
}
