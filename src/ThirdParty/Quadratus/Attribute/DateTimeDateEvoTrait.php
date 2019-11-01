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
 * Date evo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateEvoTrait {

    /**
     * Date evo.
     *
     * @var DateTime|null
     */
    private $dateEvo;

    /**
     * Get the date evo.
     *
     * @return DateTime|null Returns the date evo.
     */
    public function getDateEvo() {
        return $this->dateEvo;
    }

    /**
     * Set the date evo.
     *
     * @param DateTime|null $dateEvo The date evo.
     */
    public function setDateEvo(DateTime $dateEvo = null) {
        $this->dateEvo = $dateEvo;
        return $this;
    }
}
