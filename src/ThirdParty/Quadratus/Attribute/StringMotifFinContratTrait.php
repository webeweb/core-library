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
 * Motif fin contrat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotifFinContratTrait {

    /**
     * Motif fin contrat.
     *
     * @var string
     */
    private $motifFinContrat;

    /**
     * Get the motif fin contrat.
     *
     * @return string Returns the motif fin contrat.
     */
    public function getMotifFinContrat() {
        return $this->motifFinContrat;
    }

    /**
     * Set the motif fin contrat.
     *
     * @param string $motifFinContrat The motif fin contrat.
     */
    public function setMotifFinContrat($motifFinContrat) {
        $this->motifFinContrat = $motifFinContrat;
        return $this;
    }
}
