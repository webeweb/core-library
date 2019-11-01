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
 * Annees trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAnneesTrait {

    /**
     * Annees.
     *
     * @var int
     */
    private $annees;

    /**
     * Get the annees.
     *
     * @return int Returns the annees.
     */
    public function getAnnees() {
        return $this->annees;
    }

    /**
     * Set the annees.
     *
     * @param int $annees The annees.
     */
    public function setAnnees($annees) {
        $this->annees = $annees;
        return $this;
    }
}
