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
 * Niveau reclam trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNiveauReclamTrait {

    /**
     * Niveau reclam.
     *
     * @var string
     */
    private $niveauReclam;

    /**
     * Get the niveau reclam.
     *
     * @return string Returns the niveau reclam.
     */
    public function getNiveauReclam() {
        return $this->niveauReclam;
    }

    /**
     * Set the niveau reclam.
     *
     * @param string $niveauReclam The niveau reclam.
     */
    public function setNiveauReclam($niveauReclam) {
        $this->niveauReclam = $niveauReclam;
        return $this;
    }
}
