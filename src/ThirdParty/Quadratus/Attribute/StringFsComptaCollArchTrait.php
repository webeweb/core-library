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
 * Fs compta coll arch trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFsComptaCollArchTrait {

    /**
     * Fs compta coll arch.
     *
     * @var string
     */
    private $fsComptaCollArch;

    /**
     * Get the fs compta coll arch.
     *
     * @return string Returns the fs compta coll arch.
     */
    public function getFsComptaCollArch() {
        return $this->fsComptaCollArch;
    }

    /**
     * Set the fs compta coll arch.
     *
     * @param string $fsComptaCollArch The fs compta coll arch.
     */
    public function setFsComptaCollArch($fsComptaCollArch) {
        $this->fsComptaCollArch = $fsComptaCollArch;
        return $this;
    }
}
