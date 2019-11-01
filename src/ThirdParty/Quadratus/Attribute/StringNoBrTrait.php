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
 * No br trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoBrTrait {

    /**
     * No br.
     *
     * @var string
     */
    private $noBr;

    /**
     * Get the no br.
     *
     * @return string Returns the no br.
     */
    public function getNoBr() {
        return $this->noBr;
    }

    /**
     * Set the no br.
     *
     * @param string $noBr The no br.
     */
    public function setNoBr($noBr) {
        $this->noBr = $noBr;
        return $this;
    }
}
