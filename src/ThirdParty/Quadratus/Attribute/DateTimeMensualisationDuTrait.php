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
 * Mensualisation du trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeMensualisationDuTrait {

    /**
     * Mensualisation du.
     *
     * @var DateTime|null
     */
    private $mensualisationDu;

    /**
     * Get the mensualisation du.
     *
     * @return DateTime|null Returns the mensualisation du.
     */
    public function getMensualisationDu() {
        return $this->mensualisationDu;
    }

    /**
     * Set the mensualisation du.
     *
     * @param DateTime|null $mensualisationDu The mensualisation du.
     */
    public function setMensualisationDu(DateTime $mensualisationDu = null) {
        $this->mensualisationDu = $mensualisationDu;
        return $this;
    }
}
