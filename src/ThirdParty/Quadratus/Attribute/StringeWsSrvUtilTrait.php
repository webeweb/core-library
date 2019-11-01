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
 * e ws srv util trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringeWsSrvUtilTrait {

    /**
     * e ws srv util.
     *
     * @var string
     */
    private $eWsSrvUtil;

    /**
     * Get the e ws srv util.
     *
     * @return string Returns the e ws srv util.
     */
    public function geteWsSrvUtil() {
        return $this->eWsSrvUtil;
    }

    /**
     * Set the e ws srv util.
     *
     * @param string $eWsSrvUtil The e ws srv util.
     */
    public function seteWsSrvUtil($eWsSrvUtil) {
        $this->eWsSrvUtil = $eWsSrvUtil;
        return $this;
    }
}
