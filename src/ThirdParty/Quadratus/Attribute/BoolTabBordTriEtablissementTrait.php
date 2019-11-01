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
 * Tab bord tri etablissement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTabBordTriEtablissementTrait {

    /**
     * Tab bord tri etablissement.
     *
     * @var bool
     */
    private $tabBordTriEtablissement;

    /**
     * Get the tab bord tri etablissement.
     *
     * @return bool Returns the tab bord tri etablissement.
     */
    public function getTabBordTriEtablissement() {
        return $this->tabBordTriEtablissement;
    }

    /**
     * Set the tab bord tri etablissement.
     *
     * @param bool $tabBordTriEtablissement The tab bord tri etablissement.
     */
    public function setTabBordTriEtablissement($tabBordTriEtablissement) {
        $this->tabBordTriEtablissement = $tabBordTriEtablissement;
        return $this;
    }
}
