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
 * Visiblei paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringVisibleiPaieTrait {

    /**
     * Visiblei paie.
     *
     * @var string
     */
    private $visibleiPaie;

    /**
     * Get the visiblei paie.
     *
     * @return string Returns the visiblei paie.
     */
    public function getVisibleiPaie() {
        return $this->visibleiPaie;
    }

    /**
     * Set the visiblei paie.
     *
     * @param string $visibleiPaie The visiblei paie.
     */
    public function setVisibleiPaie($visibleiPaie) {
        $this->visibleiPaie = $visibleiPaie;
        return $this;
    }
}
