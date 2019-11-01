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
 * Nature1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNature1Trait {

    /**
     * Nature1.
     *
     * @var string
     */
    private $nature1;

    /**
     * Get the nature1.
     *
     * @return string Returns the nature1.
     */
    public function getNature1() {
        return $this->nature1;
    }

    /**
     * Set the nature1.
     *
     * @param string $nature1 The nature1.
     */
    public function setNature1($nature1) {
        $this->nature1 = $nature1;
        return $this;
    }
}
