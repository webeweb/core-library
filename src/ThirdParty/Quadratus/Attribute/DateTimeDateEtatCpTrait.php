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
 * Date etat cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateEtatCpTrait {

    /**
     * Date etat cp.
     *
     * @var DateTime|null
     */
    private $dateEtatCp;

    /**
     * Get the date etat cp.
     *
     * @return DateTime|null Returns the date etat cp.
     */
    public function getDateEtatCp() {
        return $this->dateEtatCp;
    }

    /**
     * Set the date etat cp.
     *
     * @param DateTime|null $dateEtatCp The date etat cp.
     */
    public function setDateEtatCp(DateTime $dateEtatCp = null) {
        $this->dateEtatCp = $dateEtatCp;
        return $this;
    }
}
