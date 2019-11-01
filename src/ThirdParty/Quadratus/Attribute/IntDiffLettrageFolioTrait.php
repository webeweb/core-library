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
 * Diff lettrage folio trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntDiffLettrageFolioTrait {

    /**
     * Diff lettrage folio.
     *
     * @var int
     */
    private $diffLettrageFolio;

    /**
     * Get the diff lettrage folio.
     *
     * @return int Returns the diff lettrage folio.
     */
    public function getDiffLettrageFolio() {
        return $this->diffLettrageFolio;
    }

    /**
     * Set the diff lettrage folio.
     *
     * @param int $diffLettrageFolio The diff lettrage folio.
     */
    public function setDiffLettrageFolio($diffLettrageFolio) {
        $this->diffLettrageFolio = $diffLettrageFolio;
        return $this;
    }
}
