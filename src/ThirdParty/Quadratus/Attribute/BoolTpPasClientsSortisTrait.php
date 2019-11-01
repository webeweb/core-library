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
 * Tp pas clients sortis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpPasClientsSortisTrait {

    /**
     * Tp pas clients sortis.
     *
     * @var bool
     */
    private $tpPasClientsSortis;

    /**
     * Get the tp pas clients sortis.
     *
     * @return bool Returns the tp pas clients sortis.
     */
    public function getTpPasClientsSortis() {
        return $this->tpPasClientsSortis;
    }

    /**
     * Set the tp pas clients sortis.
     *
     * @param bool $tpPasClientsSortis The tp pas clients sortis.
     */
    public function setTpPasClientsSortis($tpPasClientsSortis) {
        $this->tpPasClientsSortis = $tpPasClientsSortis;
        return $this;
    }
}
