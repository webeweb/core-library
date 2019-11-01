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
 * Autre contrat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAutreContratTrait {

    /**
     * Autre contrat.
     *
     * @var string
     */
    private $autreContrat;

    /**
     * Get the autre contrat.
     *
     * @return string Returns the autre contrat.
     */
    public function getAutreContrat() {
        return $this->autreContrat;
    }

    /**
     * Set the autre contrat.
     *
     * @param string $autreContrat The autre contrat.
     */
    public function setAutreContrat($autreContrat) {
        $this->autreContrat = $autreContrat;
        return $this;
    }
}
