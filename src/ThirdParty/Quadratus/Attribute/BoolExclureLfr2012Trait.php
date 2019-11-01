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
 * Exclure lfr2012 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolExclureLfr2012Trait {

    /**
     * Exclure lfr2012.
     *
     * @var bool
     */
    private $exclureLfr2012;

    /**
     * Get the exclure lfr2012.
     *
     * @return bool Returns the exclure lfr2012.
     */
    public function getExclureLfr2012() {
        return $this->exclureLfr2012;
    }

    /**
     * Set the exclure lfr2012.
     *
     * @param bool $exclureLfr2012 The exclure lfr2012.
     */
    public function setExclureLfr2012($exclureLfr2012) {
        $this->exclureLfr2012 = $exclureLfr2012;
        return $this;
    }
}
