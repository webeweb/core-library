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
 * Date transf prov cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateTransfProvCpTrait {

    /**
     * Date transf prov cp.
     *
     * @var DateTime|null
     */
    private $dateTransfProvCp;

    /**
     * Get the date transf prov cp.
     *
     * @return DateTime|null Returns the date transf prov cp.
     */
    public function getDateTransfProvCp() {
        return $this->dateTransfProvCp;
    }

    /**
     * Set the date transf prov cp.
     *
     * @param DateTime|null $dateTransfProvCp The date transf prov cp.
     */
    public function setDateTransfProvCp(DateTime $dateTransfProvCp = null) {
        $this->dateTransfProvCp = $dateTransfProvCp;
        return $this;
    }
}
