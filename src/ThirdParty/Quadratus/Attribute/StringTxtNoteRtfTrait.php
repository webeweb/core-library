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
 * Txt note rtf trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTxtNoteRtfTrait {

    /**
     * Txt note rtf.
     *
     * @var string
     */
    private $txtNoteRtf;

    /**
     * Get the txt note rtf.
     *
     * @return string Returns the txt note rtf.
     */
    public function getTxtNoteRtf() {
        return $this->txtNoteRtf;
    }

    /**
     * Set the txt note rtf.
     *
     * @param string $txtNoteRtf The txt note rtf.
     */
    public function setTxtNoteRtf($txtNoteRtf) {
        $this->txtNoteRtf = $txtNoteRtf;
        return $this;
    }
}
