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
 * Mention trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMentionTrait {

    /**
     * Mention.
     *
     * @var string
     */
    private $mention;

    /**
     * Get the mention.
     *
     * @return string Returns the mention.
     */
    public function getMention() {
        return $this->mention;
    }

    /**
     * Set the mention.
     *
     * @param string $mention The mention.
     */
    public function setMention($mention) {
        $this->mention = $mention;
        return $this;
    }
}
