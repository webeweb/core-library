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
 * Etbl siret trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtblSiretTrait {

    /**
     * Etbl siret.
     *
     * @var string
     */
    private $etblSiret;

    /**
     * Get the etbl siret.
     *
     * @return string Returns the etbl siret.
     */
    public function getEtblSiret() {
        return $this->etblSiret;
    }

    /**
     * Set the etbl siret.
     *
     * @param string $etblSiret The etbl siret.
     */
    public function setEtblSiret($etblSiret) {
        $this->etblSiret = $etblSiret;
        return $this;
    }
}
