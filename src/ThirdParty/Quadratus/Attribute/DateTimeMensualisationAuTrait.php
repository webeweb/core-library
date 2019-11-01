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

use DateTime;

/**
 * Mensualisation au trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMensualisationAuTrait {

    /**
     * Mensualisation au.
     *
     * @var DateTime|null
     */
    private $mensualisationAu;

    /**
     * Get the mensualisation au.
     *
     * @return DateTime|null Returns the mensualisation au.
     */
    public function getMensualisationAu() {
        return $this->mensualisationAu;
    }

    /**
     * Set the mensualisation au.
     *
     * @param DateTime|null $mensualisationAu The mensualisation au.
     */
    public function setMensualisationAu(DateTime $mensualisationAu = null) {
        $this->mensualisationAu = $mensualisationAu;
        return $this;
    }
}
