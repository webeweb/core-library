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
 * Fait iss trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitIssTrait {

    /**
     * Fait iss.
     *
     * @var string
     */
    private $faitIss;

    /**
     * Get the fait iss.
     *
     * @return string Returns the fait iss.
     */
    public function getFaitIss() {
        return $this->faitIss;
    }

    /**
     * Set the fait iss.
     *
     * @param string $faitIss The fait iss.
     */
    public function setFaitIss($faitIss) {
        $this->faitIss = $faitIss;
        return $this;
    }
}
