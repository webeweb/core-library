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
 * Sans contrat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntSansContratTrait {

    /**
     * Sans contrat.
     *
     * @var int
     */
    private $sansContrat;

    /**
     * Get the sans contrat.
     *
     * @return int Returns the sans contrat.
     */
    public function getSansContrat() {
        return $this->sansContrat;
    }

    /**
     * Set the sans contrat.
     *
     * @param int $sansContrat The sans contrat.
     */
    public function setSansContrat($sansContrat) {
        $this->sansContrat = $sansContrat;
        return $this;
    }
}
