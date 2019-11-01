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
 * Trans tri etablissement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTransTriEtablissementTrait {

    /**
     * Trans tri etablissement.
     *
     * @var string
     */
    private $transTriEtablissement;

    /**
     * Get the trans tri etablissement.
     *
     * @return string Returns the trans tri etablissement.
     */
    public function getTransTriEtablissement() {
        return $this->transTriEtablissement;
    }

    /**
     * Set the trans tri etablissement.
     *
     * @param string $transTriEtablissement The trans tri etablissement.
     */
    public function setTransTriEtablissement($transTriEtablissement) {
        $this->transTriEtablissement = $transTriEtablissement;
        return $this;
    }
}
