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
 * Date controle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateControleTrait {

    /**
     * Date controle.
     *
     * @var DateTime|null
     */
    private $dateControle;

    /**
     * Get the date controle.
     *
     * @return DateTime|null Returns the date controle.
     */
    public function getDateControle() {
        return $this->dateControle;
    }

    /**
     * Set the date controle.
     *
     * @param DateTime|null $dateControle The date controle.
     */
    public function setDateControle(DateTime $dateControle = null) {
        $this->dateControle = $dateControle;
        return $this;
    }
}
