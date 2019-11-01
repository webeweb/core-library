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
 * Annees plus trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAnneesPlusTrait {

    /**
     * Annees plus.
     *
     * @var int
     */
    private $anneesPlus;

    /**
     * Get the annees plus.
     *
     * @return int Returns the annees plus.
     */
    public function getAnneesPlus() {
        return $this->anneesPlus;
    }

    /**
     * Set the annees plus.
     *
     * @param int $anneesPlus The annees plus.
     */
    public function setAnneesPlus($anneesPlus) {
        $this->anneesPlus = $anneesPlus;
        return $this;
    }
}
