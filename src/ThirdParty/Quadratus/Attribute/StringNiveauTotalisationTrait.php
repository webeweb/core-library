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
 * Niveau totalisation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauTotalisationTrait {

    /**
     * Niveau totalisation.
     *
     * @var string
     */
    private $niveauTotalisation;

    /**
     * Get the niveau totalisation.
     *
     * @return string Returns the niveau totalisation.
     */
    public function getNiveauTotalisation() {
        return $this->niveauTotalisation;
    }

    /**
     * Set the niveau totalisation.
     *
     * @param string $niveauTotalisation The niveau totalisation.
     */
    public function setNiveauTotalisation($niveauTotalisation) {
        $this->niveauTotalisation = $niveauTotalisation;
        return $this;
    }
}
