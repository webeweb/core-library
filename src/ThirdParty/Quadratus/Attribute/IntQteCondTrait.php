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
 * Qte cond trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntQteCondTrait {

    /**
     * Qte cond.
     *
     * @var int
     */
    private $qteCond;

    /**
     * Get the qte cond.
     *
     * @return int Returns the qte cond.
     */
    public function getQteCond() {
        return $this->qteCond;
    }

    /**
     * Set the qte cond.
     *
     * @param int $qteCond The qte cond.
     */
    public function setQteCond($qteCond) {
        $this->qteCond = $qteCond;
        return $this;
    }
}
