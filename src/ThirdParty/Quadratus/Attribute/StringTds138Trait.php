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
 * Tds138 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTds138Trait {

    /**
     * Tds138.
     *
     * @var string
     */
    private $tds138;

    /**
     * Get the tds138.
     *
     * @return string Returns the tds138.
     */
    public function getTds138() {
        return $this->tds138;
    }

    /**
     * Set the tds138.
     *
     * @param string $tds138 The tds138.
     */
    public function setTds138($tds138) {
        $this->tds138 = $tds138;
        return $this;
    }
}
