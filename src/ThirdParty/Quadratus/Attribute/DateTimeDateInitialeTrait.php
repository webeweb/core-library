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
 * Date initiale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateInitialeTrait {

    /**
     * Date initiale.
     *
     * @var DateTime|null
     */
    private $dateInitiale;

    /**
     * Get the date initiale.
     *
     * @return DateTime|null Returns the date initiale.
     */
    public function getDateInitiale() {
        return $this->dateInitiale;
    }

    /**
     * Set the date initiale.
     *
     * @param DateTime|null $dateInitiale The date initiale.
     */
    public function setDateInitiale(DateTime $dateInitiale = null) {
        $this->dateInitiale = $dateInitiale;
        return $this;
    }
}
