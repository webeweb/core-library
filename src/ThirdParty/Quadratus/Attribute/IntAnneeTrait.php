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
 * Annee trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAnneeTrait {

    /**
     * Annee.
     *
     * @var int
     */
    private $annee;

    /**
     * Get the annee.
     *
     * @return int Returns the annee.
     */
    public function getAnnee() {
        return $this->annee;
    }

    /**
     * Set the annee.
     *
     * @param int $annee The annee.
     */
    public function setAnnee($annee) {
        $this->annee = $annee;
        return $this;
    }
}
