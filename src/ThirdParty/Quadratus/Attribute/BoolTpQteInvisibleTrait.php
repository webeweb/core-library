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
 * Tp qte invisible trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpQteInvisibleTrait {

    /**
     * Tp qte invisible.
     *
     * @var bool
     */
    private $tpQteInvisible;

    /**
     * Get the tp qte invisible.
     *
     * @return bool Returns the tp qte invisible.
     */
    public function getTpQteInvisible() {
        return $this->tpQteInvisible;
    }

    /**
     * Set the tp qte invisible.
     *
     * @param bool $tpQteInvisible The tp qte invisible.
     */
    public function setTpQteInvisible($tpQteInvisible) {
        $this->tpQteInvisible = $tpQteInvisible;
        return $this;
    }
}
