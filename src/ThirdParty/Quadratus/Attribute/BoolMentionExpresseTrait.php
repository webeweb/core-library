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
 * Mention expresse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMentionExpresseTrait {

    /**
     * Mention expresse.
     *
     * @var bool
     */
    private $mentionExpresse;

    /**
     * Get the mention expresse.
     *
     * @return bool Returns the mention expresse.
     */
    public function getMentionExpresse() {
        return $this->mentionExpresse;
    }

    /**
     * Set the mention expresse.
     *
     * @param bool $mentionExpresse The mention expresse.
     */
    public function setMentionExpresse($mentionExpresse) {
        $this->mentionExpresse = $mentionExpresse;
        return $this;
    }
}
