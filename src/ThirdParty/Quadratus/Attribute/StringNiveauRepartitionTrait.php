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
 * Niveau repartition trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauRepartitionTrait {

    /**
     * Niveau repartition.
     *
     * @var string
     */
    private $niveauRepartition;

    /**
     * Get the niveau repartition.
     *
     * @return string Returns the niveau repartition.
     */
    public function getNiveauRepartition() {
        return $this->niveauRepartition;
    }

    /**
     * Set the niveau repartition.
     *
     * @param string $niveauRepartition The niveau repartition.
     */
    public function setNiveauRepartition($niveauRepartition) {
        $this->niveauRepartition = $niveauRepartition;
        return $this;
    }
}
