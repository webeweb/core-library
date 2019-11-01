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
 * Droit trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDroitTrait {

    /**
     * Droit.
     *
     * @var string
     */
    private $droit;

    /**
     * Get the droit.
     *
     * @return string Returns the droit.
     */
    public function getDroit() {
        return $this->droit;
    }

    /**
     * Set the droit.
     *
     * @param string $droit The droit.
     */
    public function setDroit($droit) {
        $this->droit = $droit;
        return $this;
    }
}
