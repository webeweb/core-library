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
 * Borne per modifie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolBornePerModifieTrait {

    /**
     * Borne per modifie.
     *
     * @var bool
     */
    private $bornePerModifie;

    /**
     * Get the borne per modifie.
     *
     * @return bool Returns the borne per modifie.
     */
    public function getBornePerModifie() {
        return $this->bornePerModifie;
    }

    /**
     * Set the borne per modifie.
     *
     * @param bool $bornePerModifie The borne per modifie.
     */
    public function setBornePerModifie($bornePerModifie) {
        $this->bornePerModifie = $bornePerModifie;
        return $this;
    }
}
