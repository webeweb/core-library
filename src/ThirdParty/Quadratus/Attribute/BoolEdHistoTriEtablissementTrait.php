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
 * Ed histo tri etablissement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEdHistoTriEtablissementTrait {

    /**
     * Ed histo tri etablissement.
     *
     * @var bool
     */
    private $edHistoTriEtablissement;

    /**
     * Get the ed histo tri etablissement.
     *
     * @return bool Returns the ed histo tri etablissement.
     */
    public function getEdHistoTriEtablissement() {
        return $this->edHistoTriEtablissement;
    }

    /**
     * Set the ed histo tri etablissement.
     *
     * @param bool $edHistoTriEtablissement The ed histo tri etablissement.
     */
    public function setEdHistoTriEtablissement($edHistoTriEtablissement) {
        $this->edHistoTriEtablissement = $edHistoTriEtablissement;
        return $this;
    }
}
