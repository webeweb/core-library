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
 * e ws coll id trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringeWsCollIdTrait {

    /**
     * e ws coll id.
     *
     * @var string
     */
    private $eWsCollId;

    /**
     * Get the e ws coll id.
     *
     * @return string Returns the e ws coll id.
     */
    public function geteWsCollId() {
        return $this->eWsCollId;
    }

    /**
     * Set the e ws coll id.
     *
     * @param string $eWsCollId The e ws coll id.
     */
    public function seteWsCollId($eWsCollId) {
        $this->eWsCollId = $eWsCollId;
        return $this;
    }
}
