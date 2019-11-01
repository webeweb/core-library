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

/**
 * Tds annee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTdsAnneeTrait {

    /**
     * Tds annee.
     *
     * @var int
     */
    private $tdsAnnee;

    /**
     * Get the tds annee.
     *
     * @return int Returns the tds annee.
     */
    public function getTdsAnnee() {
        return $this->tdsAnnee;
    }

    /**
     * Set the tds annee.
     *
     * @param int $tdsAnnee The tds annee.
     */
    public function setTdsAnnee($tdsAnnee) {
        $this->tdsAnnee = $tdsAnnee;
        return $this;
    }
}
