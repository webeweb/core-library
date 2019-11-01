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
 * Nb bul valides fact trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNbBulValidesFactTrait {

    /**
     * Nb bul valides fact.
     *
     * @var int
     */
    private $nbBulValidesFact;

    /**
     * Get the nb bul valides fact.
     *
     * @return int Returns the nb bul valides fact.
     */
    public function getNbBulValidesFact() {
        return $this->nbBulValidesFact;
    }

    /**
     * Set the nb bul valides fact.
     *
     * @param int $nbBulValidesFact The nb bul valides fact.
     */
    public function setNbBulValidesFact($nbBulValidesFact) {
        $this->nbBulValidesFact = $nbBulValidesFact;
        return $this;
    }
}
