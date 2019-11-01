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
 * Date divorce trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDivorceTrait {

    /**
     * Date divorce.
     *
     * @var DateTime|null
     */
    private $dateDivorce;

    /**
     * Get the date divorce.
     *
     * @return DateTime|null Returns the date divorce.
     */
    public function getDateDivorce() {
        return $this->dateDivorce;
    }

    /**
     * Set the date divorce.
     *
     * @param DateTime|null $dateDivorce The date divorce.
     */
    public function setDateDivorce(DateTime $dateDivorce = null) {
        $this->dateDivorce = $dateDivorce;
        return $this;
    }
}
