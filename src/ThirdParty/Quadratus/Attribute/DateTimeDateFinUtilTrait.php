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
 * Date fin util trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinUtilTrait {

    /**
     * Date fin util.
     *
     * @var DateTime|null
     */
    private $dateFinUtil;

    /**
     * Get the date fin util.
     *
     * @return DateTime|null Returns the date fin util.
     */
    public function getDateFinUtil() {
        return $this->dateFinUtil;
    }

    /**
     * Set the date fin util.
     *
     * @param DateTime|null $dateFinUtil The date fin util.
     */
    public function setDateFinUtil(DateTime $dateFinUtil = null) {
        $this->dateFinUtil = $dateFinUtil;
        return $this;
    }
}
