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
 * Cdd mensu total heures trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCddMensuTotalHeuresTrait {

    /**
     * Cdd mensu total heures.
     *
     * @var bool
     */
    private $cddMensuTotalHeures;

    /**
     * Get the cdd mensu total heures.
     *
     * @return bool Returns the cdd mensu total heures.
     */
    public function getCddMensuTotalHeures() {
        return $this->cddMensuTotalHeures;
    }

    /**
     * Set the cdd mensu total heures.
     *
     * @param bool $cddMensuTotalHeures The cdd mensu total heures.
     */
    public function setCddMensuTotalHeures($cddMensuTotalHeures) {
        $this->cddMensuTotalHeures = $cddMensuTotalHeures;
        return $this;
    }
}
