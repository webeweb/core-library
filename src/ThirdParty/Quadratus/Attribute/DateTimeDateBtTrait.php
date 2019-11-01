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
 * Date bt trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateBtTrait {

    /**
     * Date bt.
     *
     * @var DateTime|null
     */
    private $dateBt;

    /**
     * Get the date bt.
     *
     * @return DateTime|null Returns the date bt.
     */
    public function getDateBt() {
        return $this->dateBt;
    }

    /**
     * Set the date bt.
     *
     * @param DateTime|null $dateBt The date bt.
     */
    public function setDateBt(DateTime $dateBt = null) {
        $this->dateBt = $dateBt;
        return $this;
    }
}
