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
 * Fs juridique coll arch trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFsJuridiqueCollArchTrait {

    /**
     * Fs juridique coll arch.
     *
     * @var string
     */
    private $fsJuridiqueCollArch;

    /**
     * Get the fs juridique coll arch.
     *
     * @return string Returns the fs juridique coll arch.
     */
    public function getFsJuridiqueCollArch() {
        return $this->fsJuridiqueCollArch;
    }

    /**
     * Set the fs juridique coll arch.
     *
     * @param string $fsJuridiqueCollArch The fs juridique coll arch.
     */
    public function setFsJuridiqueCollArch($fsJuridiqueCollArch) {
        $this->fsJuridiqueCollArch = $fsJuridiqueCollArch;
        return $this;
    }
}
