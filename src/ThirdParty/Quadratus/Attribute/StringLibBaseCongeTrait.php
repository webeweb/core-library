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
 * Lib base conge trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLibBaseCongeTrait {

    /**
     * Lib base conge.
     *
     * @var string
     */
    private $libBaseConge;

    /**
     * Get the lib base conge.
     *
     * @return string Returns the lib base conge.
     */
    public function getLibBaseConge() {
        return $this->libBaseConge;
    }

    /**
     * Set the lib base conge.
     *
     * @param string $libBaseConge The lib base conge.
     */
    public function setLibBaseConge($libBaseConge) {
        $this->libBaseConge = $libBaseConge;
        return $this;
    }
}
