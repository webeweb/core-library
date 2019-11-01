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
trait StringEcheanceLeTrait {

    /**
     * Echeance le.
     *
     * @var string
     */
    private $echeanceLe;

    /**
     * Get the echeance le.
     *
     * @return string Returns the echeance le.
     */
    public function getEcheanceLe() {
        return $this->echeanceLe;
    }

    /**
     * Set the echeance le.
     *
     * @param string $echeanceLe The echeance le.
     */
    public function setEcheanceLe($echeanceLe) {
        $this->echeanceLe = $echeanceLe;
        return $this;
    }
}
