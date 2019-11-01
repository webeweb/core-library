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
 * Edition trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntEditionTrait {

    /**
     * Edition.
     *
     * @var int
     */
    private $edition;

    /**
     * Get the edition.
     *
     * @return int Returns the edition.
     */
    public function getEdition() {
        return $this->edition;
    }

    /**
     * Set the edition.
     *
     * @param int $edition The edition.
     */
    public function setEdition($edition) {
        $this->edition = $edition;
        return $this;
    }
}
