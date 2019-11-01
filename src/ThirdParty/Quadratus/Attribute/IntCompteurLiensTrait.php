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
 * Compteur liens trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCompteurLiensTrait {

    /**
     * Compteur liens.
     *
     * @var int
     */
    private $compteurLiens;

    /**
     * Get the compteur liens.
     *
     * @return int Returns the compteur liens.
     */
    public function getCompteurLiens() {
        return $this->compteurLiens;
    }

    /**
     * Set the compteur liens.
     *
     * @param int $compteurLiens The compteur liens.
     */
    public function setCompteurLiens($compteurLiens) {
        $this->compteurLiens = $compteurLiens;
        return $this;
    }
}
