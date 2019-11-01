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
 * Type date anc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntTypeDateAncTrait {

    /**
     * Type date anc.
     *
     * @var int
     */
    private $typeDateAnc;

    /**
     * Get the type date anc.
     *
     * @return int Returns the type date anc.
     */
    public function getTypeDateAnc() {
        return $this->typeDateAnc;
    }

    /**
     * Set the type date anc.
     *
     * @param int $typeDateAnc The type date anc.
     */
    public function setTypeDateAnc($typeDateAnc) {
        $this->typeDateAnc = $typeDateAnc;
        return $this;
    }
}
