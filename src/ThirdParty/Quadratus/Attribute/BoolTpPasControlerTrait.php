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
 * Tp pas controler trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpPasControlerTrait {

    /**
     * Tp pas controler.
     *
     * @var bool
     */
    private $tpPasControler;

    /**
     * Get the tp pas controler.
     *
     * @return bool Returns the tp pas controler.
     */
    public function getTpPasControler() {
        return $this->tpPasControler;
    }

    /**
     * Set the tp pas controler.
     *
     * @param bool $tpPasControler The tp pas controler.
     */
    public function setTpPasControler($tpPasControler) {
        $this->tpPasControler = $tpPasControler;
        return $this;
    }
}
