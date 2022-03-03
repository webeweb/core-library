<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Model;

use WBW\Library\Traits\Strings\StringContentTrait;

/**
 * Abstract progress bar.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Model
 * @abstract
 */
abstract class AbstractProgressBar implements ProgressBarInterface {

    use StringContentTrait;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

    /**
     * Constructor.
     *
     * @param string $type The type.
     * @param string|null $content The content.
     */
    protected function __construct(string $type, ?string $content = null) {
        $this->setContent($content);
        $this->setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): string {
        return $this->type;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return ProgressBarInterface Returns this progress bar.
     */
    protected function setType(string $type): ProgressBarInterface {
        $this->type = $type;
        return $this;
    }
}
