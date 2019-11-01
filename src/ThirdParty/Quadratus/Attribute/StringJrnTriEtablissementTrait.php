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
 * Jrn tri etablissement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringJrnTriEtablissementTrait {

    /**
     * Jrn tri etablissement.
     *
     * @var string
     */
    private $jrnTriEtablissement;

    /**
     * Get the jrn tri etablissement.
     *
     * @return string Returns the jrn tri etablissement.
     */
    public function getJrnTriEtablissement() {
        return $this->jrnTriEtablissement;
    }

    /**
     * Set the jrn tri etablissement.
     *
     * @param string $jrnTriEtablissement The jrn tri etablissement.
     */
    public function setJrnTriEtablissement($jrnTriEtablissement) {
        $this->jrnTriEtablissement = $jrnTriEtablissement;
        return $this;
    }
}
