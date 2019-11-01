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
 * Date fin maint trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateFinMaintTrait {

    /**
     * Date fin maint.
     *
     * @var DateTime|null
     */
    private $dateFinMaint;

    /**
     * Get the date fin maint.
     *
     * @return DateTime|null Returns the date fin maint.
     */
    public function getDateFinMaint() {
        return $this->dateFinMaint;
    }

    /**
     * Set the date fin maint.
     *
     * @param DateTime|null $dateFinMaint The date fin maint.
     */
    public function setDateFinMaint(DateTime $dateFinMaint = null) {
        $this->dateFinMaint = $dateFinMaint;
        return $this;
    }
}
