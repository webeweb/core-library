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
 * Fortement impose trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFortementImposeTrait {

    /**
     * Fortement impose.
     *
     * @var string
     */
    private $fortementImpose;

    /**
     * Get the fortement impose.
     *
     * @return string Returns the fortement impose.
     */
    public function getFortementImpose() {
        return $this->fortementImpose;
    }

    /**
     * Set the fortement impose.
     *
     * @param string $fortementImpose The fortement impose.
     */
    public function setFortementImpose($fortementImpose) {
        $this->fortementImpose = $fortementImpose;
        return $this;
    }
}
