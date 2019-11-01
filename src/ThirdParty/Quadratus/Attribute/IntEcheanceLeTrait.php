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
 * Echeance le trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEcheanceLeTrait {

    /**
     * Echeance le.
     *
     * @var int
     */
    private $echeanceLe;

    /**
     * Get the echeance le.
     *
     * @return int Returns the echeance le.
     */
    public function getEcheanceLe() {
        return $this->echeanceLe;
    }

    /**
     * Set the echeance le.
     *
     * @param int $echeanceLe The echeance le.
     */
    public function setEcheanceLe($echeanceLe) {
        $this->echeanceLe = $echeanceLe;
        return $this;
    }
}
