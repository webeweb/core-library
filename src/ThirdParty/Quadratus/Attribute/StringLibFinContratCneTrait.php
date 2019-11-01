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
 * Lib fin contrat cne trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibFinContratCneTrait {

    /**
     * Lib fin contrat cne.
     *
     * @var string
     */
    private $libFinContratCne;

    /**
     * Get the lib fin contrat cne.
     *
     * @return string Returns the lib fin contrat cne.
     */
    public function getLibFinContratCne() {
        return $this->libFinContratCne;
    }

    /**
     * Set the lib fin contrat cne.
     *
     * @param string $libFinContratCne The lib fin contrat cne.
     */
    public function setLibFinContratCne($libFinContratCne) {
        $this->libFinContratCne = $libFinContratCne;
        return $this;
    }
}
