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
 * Date ducs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDucsTrait {

    /**
     * Date ducs.
     *
     * @var DateTime|null
     */
    private $dateDucs;

    /**
     * Get the date ducs.
     *
     * @return DateTime|null Returns the date ducs.
     */
    public function getDateDucs() {
        return $this->dateDucs;
    }

    /**
     * Set the date ducs.
     *
     * @param DateTime|null $dateDucs The date ducs.
     */
    public function setDateDucs(DateTime $dateDucs = null) {
        $this->dateDucs = $dateDucs;
        return $this;
    }
}
