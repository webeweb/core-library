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
 * Ajouter en h compl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAjouterEnHComplTrait {

    /**
     * Ajouter en h compl.
     *
     * @var bool
     */
    private $ajouterEnHCompl;

    /**
     * Get the ajouter en h compl.
     *
     * @return bool Returns the ajouter en h compl.
     */
    public function getAjouterEnHCompl() {
        return $this->ajouterEnHCompl;
    }

    /**
     * Set the ajouter en h compl.
     *
     * @param bool $ajouterEnHCompl The ajouter en h compl.
     */
    public function setAjouterEnHCompl($ajouterEnHCompl) {
        $this->ajouterEnHCompl = $ajouterEnHCompl;
        return $this;
    }
}
