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
 * Mention libre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMentionLibreTrait {

    /**
     * Mention libre.
     *
     * @var string
     */
    private $mentionLibre;

    /**
     * Get the mention libre.
     *
     * @return string Returns the mention libre.
     */
    public function getMentionLibre() {
        return $this->mentionLibre;
    }

    /**
     * Set the mention libre.
     *
     * @param string $mentionLibre The mention libre.
     */
    public function setMentionLibre($mentionLibre) {
        $this->mentionLibre = $mentionLibre;
        return $this;
    }
}
