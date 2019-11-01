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
 * Dlu trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDluTrait {

    /**
     * Dlu.
     *
     * @var string
     */
    private $dlu;

    /**
     * Get the dlu.
     *
     * @return string Returns the dlu.
     */
    public function getDlu() {
        return $this->dlu;
    }

    /**
     * Set the dlu.
     *
     * @param string $dlu The dlu.
     */
    public function setDlu($dlu) {
        $this->dlu = $dlu;
        return $this;
    }
}
