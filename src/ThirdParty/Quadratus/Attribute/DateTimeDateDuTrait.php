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
 * Date du trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDuTrait {

    /**
     * Date du.
     *
     * @var DateTime|null
     */
    private $dateDu;

    /**
     * Get the date du.
     *
     * @return DateTime|null Returns the date du.
     */
    public function getDateDu() {
        return $this->dateDu;
    }

    /**
     * Set the date du.
     *
     * @param DateTime|null $dateDu The date du.
     */
    public function setDateDu(DateTime $dateDu = null) {
        $this->dateDu = $dateDu;
        return $this;
    }
}
