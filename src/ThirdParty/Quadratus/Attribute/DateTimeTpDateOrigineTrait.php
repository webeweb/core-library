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
 * Tp date origine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeTpDateOrigineTrait {

    /**
     * Tp date origine.
     *
     * @var DateTime|null
     */
    private $tpDateOrigine;

    /**
     * Get the tp date origine.
     *
     * @return DateTime|null Returns the tp date origine.
     */
    public function getTpDateOrigine() {
        return $this->tpDateOrigine;
    }

    /**
     * Set the tp date origine.
     *
     * @param DateTime|null $tpDateOrigine The tp date origine.
     */
    public function setTpDateOrigine(DateTime $tpDateOrigine = null) {
        $this->tpDateOrigine = $tpDateOrigine;
        return $this;
    }
}
