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
 * Mention speciale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMentionSpecialeTrait {

    /**
     * Mention speciale.
     *
     * @var string
     */
    private $mentionSpeciale;

    /**
     * Get the mention speciale.
     *
     * @return string Returns the mention speciale.
     */
    public function getMentionSpeciale() {
        return $this->mentionSpeciale;
    }

    /**
     * Set the mention speciale.
     *
     * @param string $mentionSpeciale The mention speciale.
     */
    public function setMentionSpeciale($mentionSpeciale) {
        $this->mentionSpeciale = $mentionSpeciale;
        return $this;
    }
}
