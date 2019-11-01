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
 * Compteur sur ex trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCompteurSurExTrait {

    /**
     * Compteur sur ex.
     *
     * @var int
     */
    private $compteurSurEx;

    /**
     * Get the compteur sur ex.
     *
     * @return int Returns the compteur sur ex.
     */
    public function getCompteurSurEx() {
        return $this->compteurSurEx;
    }

    /**
     * Set the compteur sur ex.
     *
     * @param int $compteurSurEx The compteur sur ex.
     */
    public function setCompteurSurEx($compteurSurEx) {
        $this->compteurSurEx = $compteurSurEx;
        return $this;
    }
}
