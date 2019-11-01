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
 * Periode bul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePeriodeBulTrait {

    /**
     * Periode bul.
     *
     * @var DateTime|null
     */
    private $periodeBul;

    /**
     * Get the periode bul.
     *
     * @return DateTime|null Returns the periode bul.
     */
    public function getPeriodeBul() {
        return $this->periodeBul;
    }

    /**
     * Set the periode bul.
     *
     * @param DateTime|null $periodeBul The periode bul.
     */
    public function setPeriodeBul(DateTime $periodeBul = null) {
        $this->periodeBul = $periodeBul;
        return $this;
    }
}
