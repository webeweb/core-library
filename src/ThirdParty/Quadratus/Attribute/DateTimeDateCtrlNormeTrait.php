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
 * Date ctrl norme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateCtrlNormeTrait {

    /**
     * Date ctrl norme.
     *
     * @var DateTime|null
     */
    private $dateCtrlNorme;

    /**
     * Get the date ctrl norme.
     *
     * @return DateTime|null Returns the date ctrl norme.
     */
    public function getDateCtrlNorme() {
        return $this->dateCtrlNorme;
    }

    /**
     * Set the date ctrl norme.
     *
     * @param DateTime|null $dateCtrlNorme The date ctrl norme.
     */
    public function setDateCtrlNorme(DateTime $dateCtrlNorme = null) {
        $this->dateCtrlNorme = $dateCtrlNorme;
        return $this;
    }
}
