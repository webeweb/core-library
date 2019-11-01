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
 * Date calcul prov cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateCalculProvCpTrait {

    /**
     * Date calcul prov cp.
     *
     * @var DateTime|null
     */
    private $dateCalculProvCp;

    /**
     * Get the date calcul prov cp.
     *
     * @return DateTime|null Returns the date calcul prov cp.
     */
    public function getDateCalculProvCp() {
        return $this->dateCalculProvCp;
    }

    /**
     * Set the date calcul prov cp.
     *
     * @param DateTime|null $dateCalculProvCp The date calcul prov cp.
     */
    public function setDateCalculProvCp(DateTime $dateCalculProvCp = null) {
        $this->dateCalculProvCp = $dateCalculProvCp;
        return $this;
    }
}
