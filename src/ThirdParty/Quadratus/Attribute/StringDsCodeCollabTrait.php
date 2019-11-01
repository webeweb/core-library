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
 * Ds code collab trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDsCodeCollabTrait {

    /**
     * Ds code collab.
     *
     * @var string
     */
    private $dsCodeCollab;

    /**
     * Get the ds code collab.
     *
     * @return string Returns the ds code collab.
     */
    public function getDsCodeCollab() {
        return $this->dsCodeCollab;
    }

    /**
     * Set the ds code collab.
     *
     * @param string $dsCodeCollab The ds code collab.
     */
    public function setDsCodeCollab($dsCodeCollab) {
        $this->dsCodeCollab = $dsCodeCollab;
        return $this;
    }
}
