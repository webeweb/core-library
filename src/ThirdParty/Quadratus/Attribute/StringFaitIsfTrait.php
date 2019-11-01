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
 * Fait isf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFaitIsfTrait {

    /**
     * Fait isf.
     *
     * @var string
     */
    private $faitIsf;

    /**
     * Get the fait isf.
     *
     * @return string Returns the fait isf.
     */
    public function getFaitIsf() {
        return $this->faitIsf;
    }

    /**
     * Set the fait isf.
     *
     * @param string $faitIsf The fait isf.
     */
    public function setFaitIsf($faitIsf) {
        $this->faitIsf = $faitIsf;
        return $this;
    }
}
