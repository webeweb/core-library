<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * String hash "SHA1" trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringHashSha1Trait {

    /**
     * Hash "SHA1".
     *
     * @var string
     */
    protected $hashSha1;

    /**
     * Get the hash "SHA1".
     *
     * @return string Returns the hash "SHA1".
     */
    public function getHashSha1() {
        return $this->hashSha1;
    }

    /**
     * Set the hash "SHA1".
     *
     * @param string $hashSha1 The hash "SHA1".
     */
    public function setHashSha1($hashSha1) {
        $this->hashSha1 = $hashSha1;
        return $this;
    }
}
