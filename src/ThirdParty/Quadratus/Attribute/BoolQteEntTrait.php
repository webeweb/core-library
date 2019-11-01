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
 * Qte ent trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolQteEntTrait {

    /**
     * Qte ent.
     *
     * @var bool
     */
    private $qteEnt;

    /**
     * Get the qte ent.
     *
     * @return bool Returns the qte ent.
     */
    public function getQteEnt() {
        return $this->qteEnt;
    }

    /**
     * Set the qte ent.
     *
     * @param bool $qteEnt The qte ent.
     */
    public function setQteEnt($qteEnt) {
        $this->qteEnt = $qteEnt;
        return $this;
    }
}
