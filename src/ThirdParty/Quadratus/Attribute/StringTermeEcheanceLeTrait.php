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
 * Terme echeance le trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTermeEcheanceLeTrait {

    /**
     * Terme echeance le.
     *
     * @var string
     */
    private $termeEcheanceLe;

    /**
     * Get the terme echeance le.
     *
     * @return string Returns the terme echeance le.
     */
    public function getTermeEcheanceLe() {
        return $this->termeEcheanceLe;
    }

    /**
     * Set the terme echeance le.
     *
     * @param string $termeEcheanceLe The terme echeance le.
     */
    public function setTermeEcheanceLe($termeEcheanceLe) {
        $this->termeEcheanceLe = $termeEcheanceLe;
        return $this;
    }
}
