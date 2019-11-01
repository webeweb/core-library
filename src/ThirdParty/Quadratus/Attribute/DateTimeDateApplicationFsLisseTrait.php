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
 * Date application fs lisse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateApplicationFsLisseTrait {

    /**
     * Date application fs lisse.
     *
     * @var DateTime|null
     */
    private $dateApplicationFsLisse;

    /**
     * Get the date application fs lisse.
     *
     * @return DateTime|null Returns the date application fs lisse.
     */
    public function getDateApplicationFsLisse() {
        return $this->dateApplicationFsLisse;
    }

    /**
     * Set the date application fs lisse.
     *
     * @param DateTime|null $dateApplicationFsLisse The date application fs lisse.
     */
    public function setDateApplicationFsLisse(DateTime $dateApplicationFsLisse = null) {
        $this->dateApplicationFsLisse = $dateApplicationFsLisse;
        return $this;
    }
}
