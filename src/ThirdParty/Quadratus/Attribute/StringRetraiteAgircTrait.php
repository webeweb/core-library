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
 * Retraite agirc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRetraiteAgircTrait {

    /**
     * Retraite agirc.
     *
     * @var string
     */
    private $retraiteAgirc;

    /**
     * Get the retraite agirc.
     *
     * @return string Returns the retraite agirc.
     */
    public function getRetraiteAgirc() {
        return $this->retraiteAgirc;
    }

    /**
     * Set the retraite agirc.
     *
     * @param string $retraiteAgirc The retraite agirc.
     */
    public function setRetraiteAgirc($retraiteAgirc) {
        $this->retraiteAgirc = $retraiteAgirc;
        return $this;
    }
}
