<?php

declare(strict_types=1);

namespace In2code\PowermailSitepackage\Finisher;

use In2code\Powermail\Domain\Model\Mail;
use In2code\Powermail\Finisher\AbstractFinisher;

class DoSomethingFinisher extends AbstractFinisher
{
    protected array $configuration;

    protected array $settings;

    public function initializeFinisher(): void
    {
    }

    /**
     * Will be called before myFinisher()
     *
     * @return void
     */
    public function initializeMyFinisher(): void
    {
    }

    /**
     * MyFinisher
     *
     * @return void
     */
    public function doSomethingFinisher(): void
    {
        // get value from configuration
        $foo = $this->configuration['foo'] ?? '';

        // get subject
        $subject = $this->getMail()->getSubject();

        $testmail = $this->getMail();
    }
}
