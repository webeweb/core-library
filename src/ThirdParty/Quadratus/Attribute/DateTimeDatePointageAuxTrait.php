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
 * Date pointage aux trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDatePointageAuxTrait {

    /**
     * Date pointage aux.
     *
     * @var DateTime|null
     */
    private $datePointageAux;

    /**
     * Get the date pointage aux.
     *
     * @return DateTime|null Returns the date pointage aux.
     */
    public function getDatePointageAux() {
        return $this->datePointageAux;
    }

    /**
     * Set the date pointage aux.
     *
     * @param DateTime|null $datePointageAux The date pointage aux.
     */
    public function setDatePointageAux(DateTime $datePointageAux = null) {
        $this->datePointageAux = $datePointageAux;
        return $this;
    }
}
