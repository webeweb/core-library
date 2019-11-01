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
 * e ws cabinet trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringeWsCabinetTrait {

    /**
     * e ws cabinet.
     *
     * @var string
     */
    private $eWsCabinet;

    /**
     * Get the e ws cabinet.
     *
     * @return string Returns the e ws cabinet.
     */
    public function geteWsCabinet() {
        return $this->eWsCabinet;
    }

    /**
     * Set the e ws cabinet.
     *
     * @param string $eWsCabinet The e ws cabinet.
     */
    public function seteWsCabinet($eWsCabinet) {
        $this->eWsCabinet = $eWsCabinet;
        return $this;
    }
}
