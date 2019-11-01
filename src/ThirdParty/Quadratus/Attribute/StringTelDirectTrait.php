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
 * Tel direct trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTelDirectTrait {

    /**
     * Tel direct.
     *
     * @var string
     */
    private $telDirect;

    /**
     * Get the tel direct.
     *
     * @return string Returns the tel direct.
     */
    public function getTelDirect() {
        return $this->telDirect;
    }

    /**
     * Set the tel direct.
     *
     * @param string $telDirect The tel direct.
     */
    public function setTelDirect($telDirect) {
        $this->telDirect = $telDirect;
        return $this;
    }
}
