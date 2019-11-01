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
 * Date butoir trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateButoirTrait {

    /**
     * Date butoir.
     *
     * @var DateTime|null
     */
    private $dateButoir;

    /**
     * Get the date butoir.
     *
     * @return DateTime|null Returns the date butoir.
     */
    public function getDateButoir() {
        return $this->dateButoir;
    }

    /**
     * Set the date butoir.
     *
     * @param DateTime|null $dateButoir The date butoir.
     */
    public function setDateButoir(DateTime $dateButoir = null) {
        $this->dateButoir = $dateButoir;
        return $this;
    }
}
