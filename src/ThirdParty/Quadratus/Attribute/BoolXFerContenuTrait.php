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
 * X fer contenu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerContenuTrait {

    /**
     * X fer contenu.
     *
     * @var bool
     */
    private $xFerContenu;

    /**
     * Get the x fer contenu.
     *
     * @return bool Returns the x fer contenu.
     */
    public function getXFerContenu() {
        return $this->xFerContenu;
    }

    /**
     * Set the x fer contenu.
     *
     * @param bool $xFerContenu The x fer contenu.
     */
    public function setXFerContenu($xFerContenu) {
        $this->xFerContenu = $xFerContenu;
        return $this;
    }
}
