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
 * Dossier client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDossierClientTrait {

    /**
     * Dossier client.
     *
     * @var string
     */
    private $dossierClient;

    /**
     * Get the dossier client.
     *
     * @return string Returns the dossier client.
     */
    public function getDossierClient() {
        return $this->dossierClient;
    }

    /**
     * Set the dossier client.
     *
     * @param string $dossierClient The dossier client.
     */
    public function setDossierClient($dossierClient) {
        $this->dossierClient = $dossierClient;
        return $this;
    }
}
