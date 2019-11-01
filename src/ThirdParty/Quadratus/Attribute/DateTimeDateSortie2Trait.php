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
 * Date sortie2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateSortie2Trait {

    /**
     * Date sortie2.
     *
     * @var DateTime|null
     */
    private $dateSortie2;

    /**
     * Get the date sortie2.
     *
     * @return DateTime|null Returns the date sortie2.
     */
    public function getDateSortie2() {
        return $this->dateSortie2;
    }

    /**
     * Set the date sortie2.
     *
     * @param DateTime|null $dateSortie2 The date sortie2.
     */
    public function setDateSortie2(DateTime $dateSortie2 = null) {
        $this->dateSortie2 = $dateSortie2;
        return $this;
    }
}
