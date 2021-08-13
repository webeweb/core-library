<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Provider;

use Psr\Log\LoggerInterface;
use WBW\Library\Traits\Booleans\BooleanDebugTrait;

/**
 * Abstract provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Provider\Provider
 * @abstract
 */
abstract class AbstractProvider {

    use BooleanDebugTrait;

    /**
     * Logger.
     *
     * @var LoggerInterface|null
     */
    private $logger;

    /**
     * Constructor.
     *
     * @param LoggerInterface|null $logger The logger.
     */
    protected function __construct(LoggerInterface $logger = null) {
        $this->setDebug(false);
        $this->setLogger($logger);
    }

    /**
     * Get the logger.
     *
     * @return LoggerInterface|null Returns the logger.
     */
    public function getLogger(): ?LoggerInterface {
        return $this->logger;
    }

    /**
     * Log an info.
     *
     * @param string $message The message.
     * @param array $context The context.
     * @return AbstractProvider Returns this provider.
     */
    protected function logInfo(string $message, array $context): AbstractProvider {
        if (null !== $this->getLogger()) {
            $this->getLogger()->info($message, $context);
        }
        return $this;
    }

    /**
     * Set the logger.
     *
     * @param LoggerInterface|null $logger The logger.
     * @return AbstractProvider Returns this provider.
     */
    protected function setLogger(LoggerInterface $logger = null): AbstractProvider {
        $this->logger = $logger;
        return $this;
    }

}