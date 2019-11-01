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
 * No cotisant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNoCotisantTrait {

    /**
     * No cotisant.
     *
     * @var string
     */
    private $noCotisant;

    /**
     * Get the no cotisant.
     *
     * @return string Returns the no cotisant.
     */
    public function getNoCotisant() {
        return $this->noCotisant;
    }

    /**
     * Set the no cotisant.
     *
     * @param string $noCotisant The no cotisant.
     */
    public function setNoCotisant($noCotisant) {
        $this->noCotisant = $noCotisant;
        return $this;
    }
}
