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
 * Mention cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMentionCpTrait {

    /**
     * Mention cp.
     *
     * @var bool
     */
    private $mentionCp;

    /**
     * Get the mention cp.
     *
     * @return bool Returns the mention cp.
     */
    public function getMentionCp() {
        return $this->mentionCp;
    }

    /**
     * Set the mention cp.
     *
     * @param bool $mentionCp The mention cp.
     */
    public function setMentionCp($mentionCp) {
        $this->mentionCp = $mentionCp;
        return $this;
    }
}
