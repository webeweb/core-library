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
 * Lib fin contrat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibFinContratTrait {

    /**
     * Lib fin contrat.
     *
     * @var string
     */
    private $libFinContrat;

    /**
     * Get the lib fin contrat.
     *
     * @return string Returns the lib fin contrat.
     */
    public function getLibFinContrat() {
        return $this->libFinContrat;
    }

    /**
     * Set the lib fin contrat.
     *
     * @param string $libFinContrat The lib fin contrat.
     */
    public function setLibFinContrat($libFinContrat) {
        $this->libFinContrat = $libFinContrat;
        return $this;
    }
}
