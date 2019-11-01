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
 * Remarques rtf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRemarquesRtfTrait {

    /**
     * Remarques rtf.
     *
     * @var string
     */
    private $remarquesRtf;

    /**
     * Get the remarques rtf.
     *
     * @return string Returns the remarques rtf.
     */
    public function getRemarquesRtf() {
        return $this->remarquesRtf;
    }

    /**
     * Set the remarques rtf.
     *
     * @param string $remarquesRtf The remarques rtf.
     */
    public function setRemarquesRtf($remarquesRtf) {
        $this->remarquesRtf = $remarquesRtf;
        return $this;
    }
}
