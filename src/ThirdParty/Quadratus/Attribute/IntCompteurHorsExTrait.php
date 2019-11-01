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
 * Compteur hors ex trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntCompteurHorsExTrait {

    /**
     * Compteur hors ex.
     *
     * @var int
     */
    private $compteurHorsEx;

    /**
     * Get the compteur hors ex.
     *
     * @return int Returns the compteur hors ex.
     */
    public function getCompteurHorsEx() {
        return $this->compteurHorsEx;
    }

    /**
     * Set the compteur hors ex.
     *
     * @param int $compteurHorsEx The compteur hors ex.
     */
    public function setCompteurHorsEx($compteurHorsEx) {
        $this->compteurHorsEx = $compteurHorsEx;
        return $this;
    }
}
