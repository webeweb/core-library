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
 * Passage35 h fait trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPassage35HFaitTrait {

    /**
     * Passage35 h fait.
     *
     * @var bool
     */
    private $passage35HFait;

    /**
     * Get the passage35 h fait.
     *
     * @return bool Returns the passage35 h fait.
     */
    public function getPassage35HFait() {
        return $this->passage35HFait;
    }

    /**
     * Set the passage35 h fait.
     *
     * @param bool $passage35HFait The passage35 h fait.
     */
    public function setPassage35HFait($passage35HFait) {
        $this->passage35HFait = $passage35HFait;
        return $this;
    }
}
