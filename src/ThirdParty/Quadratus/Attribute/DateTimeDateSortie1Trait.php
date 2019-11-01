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
 * Date sortie1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateSortie1Trait {

    /**
     * Date sortie1.
     *
     * @var DateTime|null
     */
    private $dateSortie1;

    /**
     * Get the date sortie1.
     *
     * @return DateTime|null Returns the date sortie1.
     */
    public function getDateSortie1() {
        return $this->dateSortie1;
    }

    /**
     * Set the date sortie1.
     *
     * @param DateTime|null $dateSortie1 The date sortie1.
     */
    public function setDateSortie1(DateTime $dateSortie1 = null) {
        $this->dateSortie1 = $dateSortie1;
        return $this;
    }
}
