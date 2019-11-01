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
 * Prud lieu vote trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrudLieuVoteTrait {

    /**
     * Prud lieu vote.
     *
     * @var string
     */
    private $prudLieuVote;

    /**
     * Get the prud lieu vote.
     *
     * @return string Returns the prud lieu vote.
     */
    public function getPrudLieuVote() {
        return $this->prudLieuVote;
    }

    /**
     * Set the prud lieu vote.
     *
     * @param string $prudLieuVote The prud lieu vote.
     */
    public function setPrudLieuVote($prudLieuVote) {
        $this->prudLieuVote = $prudLieuVote;
        return $this;
    }
}
