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
 * e ws srv name trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringeWsSrvNameTrait {

    /**
     * e ws srv name.
     *
     * @var string
     */
    private $eWsSrvName;

    /**
     * Get the e ws srv name.
     *
     * @return string Returns the e ws srv name.
     */
    public function geteWsSrvName() {
        return $this->eWsSrvName;
    }

    /**
     * Set the e ws srv name.
     *
     * @param string $eWsSrvName The e ws srv name.
     */
    public function seteWsSrvName($eWsSrvName) {
        $this->eWsSrvName = $eWsSrvName;
        return $this;
    }
}
